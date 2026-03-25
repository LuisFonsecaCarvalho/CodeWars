# Python Data Function Types: 
- print("text") is useful for printing text, usually used with variables, and defines a string.
- input( ) is useful for asking questions to the user, leave a space left at the end so the user can place its answer. Save it into the system as a variable to later use in your code.
- int() converts a string into an integral (valor sem vírgulas)
- float() converts a string into a float (valor com vírgulas)
- bool() converts a string into a booliant value (True / False)
- len() serve para ele contar o número de characters numa string 
- type() diz-nos que tipo de variável é, se é string, se é integral, se é float etc.
- list() constroi uma lista.
- clear() elimina o conteúdo de uma lista, mas ela continua lá.
- range() devolve uma sequência de números e só funciona em integrais.
- abs() devolve um valor absoluto.
- enumerate() dá-nos o index de cada item dentro de uma collection.
- '#' writes a comment, useful for writing notes to someone else or to yourself.
- Modifying strings: when a function belongs to something else or is specific to some kind of object. Por exemplo: variable.upper faz com que todos os characters daquela variavel fiquem em maiúscula. 

# Python Collections:
- List is a collection which is ordered and changeable. Allows duplicate members.
- Tuple is a collection which is ordered and unchangeable. Allows duplicate members.
- Set is a collection which is unordered, unchangeable, and unindexed. No duplicate members. They are used to store multiple items in a single variable.
- Dictionary is a collection which is ordered and changeable. No duplicate members.
- Array

# Strings:

Formatted strings: print(f"{variable 1} + {variable 2}, etc )" e serve para facilmente inserir valores de variáveis numa string sem abrir e fechar a string.
é possível meter .xf numa variável dentro de uma formatted string para dar valores decimais a essa string, mas só funciona para variáveis convertidas para integrais. Exemplo: {price: .2f} onde queremos dar dois valores decimais (2f)
Os valores entre {} são chamados placeholders.

String Methods - Alteram listas e o valor que é alterado é o dentro dos parêntesis.
- += - adiciona 
- .upper() - torna os valores todos em letras maiúsculas. Exemplo: fruits.upper() 
- .lower() - torna os valores todos em letras minúsculas. Exemplo: fruits.lower() 
- .strip() - remove whitespaces. 
- .title() - converts the first character of each word to upper case.
- .replace() - substitui um certo valor por outro.
- += - adiciona uma string à já existente
- \"Exception\" creates an exception to a string that already uses the same amount of quotes.

# Lists:
- A list is a data structure in Python that is a mutable, or changeable, ordered sequence of elements. - Each element or value that is inside of a list is called an item. Just as strings are defined as characters between quotes, lists are defined by having values between square brackets [ ] 
- Lists can't be raised to a power

fruits = ["apple", "banana", "cherry"]
x, y, z = fruits
print(x) - vai dar apple
print(y) - vai dar banana
print(z) - vai dar cherry

## List Methods:
- .sort() - sorteia os valores alfabéticamente. Para ordem contrária: escrever reverse = True entre as parêntesis.
- .append() - adds a new item to the end of an existing list.
- .pop() - removes a certain item refering to a certain index. Se não for especificado o index, pop vai remover o último item.
- .remove() - removes a certain item within the list. If there's multiple, it will remove just the first occurence. Exemplo: fruits.remove(1) remove o primeiro item da lista.
- .insert() - insere valores novos e pode ser em qualquer parte da lista. Exemplo: fruits.insert(1,"insert item")
list[::2] dá pop a todos os indexes com ordem multipla de 2 da lista.

# Sets:
Sets are unordered, so you cannot be sure in which order the items will appear.
Once a set is created, you cannot change its items, but you can remove items and add new items.
The values True and 1 are considered the same value in sets, and are treated as duplicates.
The values False and 0 are considered the same value in sets, and are treated as duplicates.
Sets have its values inside { }

# Set Methods:
- .add() - adds a new item to the set.
- .update() - adds items from one set to the other. the Syntax is: thisset.update(thisset2).
- .remove() - removes an item from a set. If the item does not exist, it will raise an error.
- .discard() - removes an item from a set. if the item does not exist, it will not raise an error.
- .pop() - removes a random item from a set, but you can't be sure which it is. 
- .clear() - empties the set.
- .del() - deletes the set completely. 
- .

# Other Methods:
- extend() - The extend method adds the specified list elements (or any iterable) to the end of the current list. 

- def myfunc(n):
    return 

- [] vai buscar o valor que está dentro da string correspondente ao número do index que é posto. Começa em 0 e vai até ao nr de characteres da String. Um valor negativo faz com que ele começe a escolher um character da string do fim para o início. Se escrevermos [0:3] ele vai buscar os characteres de index 0, 1 e 2, excluindo o 3 na string. Se pelo contrário escrevermos [:5] ele vai escrever todos desde o início até ao 4º character, excluindo o 5º. 

# Terms:
- String: series of characters
- Expression: Series of code that produces a value
- Variables: valores que nos permitem criar atalhos para certos valores e são memorizados na memória do computador.

# Notas:
- O código é lido de cima para baixo
- Se uma variável aparecer 2x, a que estiver mais abaixo é a que fica e substitui a(as) de cima.
- Pode-se usar um número variado de apóstrofos para decidir uma string. Se quisermos usar vários tipos de apóstrofos dentro da mesma tring temos de ter em conta que os apostrofos do inicio e fim da string não sejam os mesmos que estão dentro dela.

Tipos de aritmétrica matemática:
Order of operations:
1 - Parenthesis
2 - Exponenciais
3 - Multiplicação ou divisão
4 - Adição e subtração

10/3 - dá um float
10//3 - dá um int
10%3 - dá-nos o resto da divisão
10 ** 3 - dá-nos 10^3
x += 3 soma 3 ao valor da variavel x de forma que Python entenda e funciona para menos também.

Conditions: 
if true / if false
elif = if the previous was wrong but this is true, creates another condition
else - to apply the following string when all of the previous is false.
and / or - to apply conditions for when both are true or one of them is true.

Comparison operators:
< - minor 
> - bigger 
== - equal 
<= - minor or equal
>= - bigger or equal

Loops:
Há dois tipos de loops, for loops e while loops.

for loops:



# while loops:
criar uma condição primeiro, como: 
```
i = 1
while i <= 5:
    print (i)
    i = i + 1
```
Isto cria um while loop e a condição que faz o loop parar é while i <= 5.



