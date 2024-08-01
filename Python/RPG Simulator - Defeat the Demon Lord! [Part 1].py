# from preloaded import only_show_wrong
# only_show_wrong()

def rpg(field: List[List[str]], actions: List[str]) -> Tuple[List[List[str]], int, int, int, List[str]]:
    p=character_stats(3, 1, 1, [])
    E=[]
    DL=[]
    characters=[p,E,DL]
    for x in field:
        print(x)
    print(actions)
    
    for key, value in enumerate(field):
        for key_2, element in enumerate(value):
            if(element=="E"):
                E.append([key, key_2, character_stats(1, 2, "null", "null")])
            if(element=="D"):
                E.append([key, key_2, character_stats(10, 3, "null", "null")])
        
    movement=Movement(field)
    
    for x in actions: 
        if(movement.Input(x, field, characters)==None):
            return None
        
    
    result=(field, p.health, p.attack, p.defense, sorted(p.bag))
    return (result)


class character_stats:
    def __init__(self, health, attack, defense, bag):
        self.health = health
        self.attack = attack
        self.defense = defense
        self.bag = bag
        
class Movement:
    def __init__(self, field):
        self.field=field
        self.updatePosition()
        self.killed_enemies=0
        self.merchant_coins=0
        
    def Input(self, command, field, characters):
        self.player=characters[0]
        self.enemies=characters[1]
        self.field=field
        self.command=command
        
        if(self.player.health<=0):
            return None
                
        return ( getattr(self, str(command), lambda: self.rotate())())
          
    def F(self):
        self.check_surrounding()
        self.updatePosition()
        for x in self.field:  
            if self.orientation in x:
                self.i1=self.field.index(x)
                self.i2=x.index(self.orientation)
                
                obj_pn=self.get_front()
                #if(obj_pn[0]>len(self.field)-1 or obj_pn[0]<0 or obj_pn[1]>len(self.field[0])-1 or obj_pn[1]<0):
                    #return None
                if(self.validate_move(obj_pn[0], obj_pn[1])=="validated"): 
                    self.field[obj_pn[0]][obj_pn[1]]=self.orientation
                else: return None
                self.field[self.i1][self.i2]=" "
                return "Forward"
    def A (self):
        self.updatePosition()
        obj_pn=self.get_front()
        if(self.field[obj_pn[0]][obj_pn[1]]!="E" and self.field[obj_pn[0]][obj_pn[1]]!="D"): return None
        for x in self.enemies:
            if(x[0]==obj_pn[0] and x[1]==obj_pn[1]):
                x[2].health=x[2].health-self.player.attack
                if(x[2].health<=0):
                    self.enemies.remove(x)
                    self.field[obj_pn[0]][obj_pn[1]]=" "
                    self.killed_enemies=self.killed_enemies+1 #update number of enemies killed
                    if(self.killed_enemies%3==0): #every 3 enemies killed add 1 attack (lvl up)
                        self.player.attack=self.player.attack+1
        self.check_surrounding()
        return "attack"
    def C (self):
        self.updatePosition()
        obj_pn=self.get_front()
        
        if(self.field[obj_pn[0]][obj_pn[1]]=="M" and self.player.bag.count("C")>0):
            self.merchant_coins=self.merchant_coins+1
            try:
                self.player.bag.remove("C")
            except:
                return None
            if(self.merchant_coins>=3):
                self.field[obj_pn[0]][obj_pn[1]]=" "
        else:
            return None
        return "Coin"
    def K (self):
        self.updatePosition()
        try:
            self.player.bag.remove("K")
        except:
            return None
        obj_position=self.get_front()
        if(self.field[obj_position[0]][obj_position[1]]=="|" or self.field[obj_position[0]][obj_position[1]]=="-"): 
            self.field[obj_position[0]][obj_position[1]]=" "
        else:
            return None
        
        return "key"
    
    def H (self):
        self.updatePosition()
        if(self.player.health<3):
            self.player.health = 3
            try:
                self.player.bag.remove("H")
            except:
                return None
            self.check_surrounding()
        else: return None
        return "used health potion"
        
    def rotate(self):
        self.updatePosition()
        self.check_surrounding()
        for x in self.field:
            if self.orientation in x:
                self.field[self.field.index(x)][x.index(self.orientation)]=self.command                
                self.orientation=self.command
                return self.command
    
    
    def validate_move(self, i1, i2):
        if(i1<0 or i1>len(self.field) or i2<0 or i2>len(self.field[0])):
            return None
        invalid=["#","-","|","M","E","D"]
        items=["C","K","H"]
        power_up=["H","S","X"]
        for x in invalid:
            if self.field[i1][i2] in x:
                return None
        for x in items:
            if self.field[i1][i2] in x:
                self.player.bag.append(x)
                return "validated"
        for x in power_up:
            if self.field[i1][i2] in x:
                if(self.field[i1][i2]=="X"):    
                    self.player.attack = self.player.attack+1
                elif(self.field[i1][i2]=="S"):
                    self.player.defense = self.player.defense+1
                else: return None
                return "validated"
        return "validated"
    
    def get_front(self):
        if(self.orientation=="^"): 
            return (self.i1-1, self.i2)
        elif(self.orientation=="v" ): 
            return (self.i1+1, self.i2)                      
        elif(self.orientation=="<"): 
             return (self.i1,self.i2-1)
        elif(self.orientation==">"): 
             return (self.i1,self.i2+1)
        else: return (10, 10)
    
    def updatePosition(self):
        for x in self.field:
            if "^" in x:
                self.orientation="^"
                self.i1=self.field.index(x)
                self.i2=x.index(self.orientation)
            elif ">" in x:
                self.orientation=">"
                self.i1=self.field.index(x)
                self.i2=x.index(self.orientation)
            elif "<" in x:
                self.orientation="<"
                self.i1=self.field.index(x)
                self.i2=x.index(self.orientation)
            elif "v" in x:
                self.orientation="v"
                self.i1=self.field.index(x)
                self.i2=x.index(self.orientation)
    
    def check_surrounding(self):
        obj_pn=[self.i1,self.i2]
        for x in self.enemies:
            if((obj_pn[0]+1,obj_pn[1])==(x[0],x[1])): 
                self.player.health=self.player.health-max(0, x[2].attack - self.player.defense)
            elif((obj_pn[0]-1,obj_pn[1])==(x[0],x[1])): 
                self.player.health=self.player.health-max(0, x[2].attack - self.player.defense)
            elif((obj_pn[0],obj_pn[1]+1)==(x[0],x[1])): 
                self.player.health=self.player.health-max(0, x[2].attack - self.player.defense)
            elif((obj_pn[0],obj_pn[1]-1)==(x[0],x[1])): 
                self.player.health=self.player.health-max(0, x[2].attack - self.player.defense)
            else: pass
m = [
        ['K', ' ', ' ', ' ', 'E', ' ', ' ', ' ', ' ', ' ', '|', ' ', ' ', ' ', ' ', 'X', '#', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'C', ' ', ' ', ' ', ' ', ' ', ' ', 'E', ' ', ' ', ' ', 'S', '#', ' ', ' ', 'D', ' ', ' ']
        [' ', ' ', ' ', ' ', 'E', ' ', ' ', ' ', ' ', ' ', '#', '#', '#', '#', '#', '#', '#', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '#', '#', '#', '#', '#', '#', ' ', 'E', ' ', 'E', ' ']
        ['#', '#', '#', '#', '#', ' ', '#', '#', '#', '#', '#', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '#', '#', '#', '-', '#', '#']
        [' ', ' ', ' ', ' ', ' ', 'M', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'E', 'E', 'E', ' ']
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '#', '#', '#', ' ', ' ', ' ', '#', '#', '#', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ']
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '#', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '#', '#', 'E', '#', '#', 'E', '#', '#', ' ', ' ', ' ', ' ', ' ', ' ']
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '#', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'C', ' ', ' ', 'K', '#', ' ', ' ', ' ', ' ', ' ', ' ']
        [' ', ' ', ' ', ' ', ' ', ' ', 'v', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'C', ' ', ' ', ' ', ' ', ' ', ' ', '#', ' ', ' ', ' ', 'H', ' ', ' ', ' ', '#', '#', 'E', '#', '#', 'E', '#', '#', ' ', ' ', ' ', ' ', ' ', ' ']
    ]
    
rpg(m, ['v', 'F', 'F', 'F', 'F'])