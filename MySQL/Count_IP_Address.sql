/* Given a database of first and last IPv4 addresses, calculate the number of addresses between them (including the first one, excluding the last one).
Input

---------------------------------
|     Table    | Column | Type  |
|--------------+--------+-------|
| ip_addresses | id     | int   |
|              | first  | text  |
|              | last   | text  |
---------------------------------

Output

----------------------
|   Column    | Type |
|-------------+------|
| id          | int  |
| ips_between | int  |
----------------------

All inputs will be valid IPv4 addresses in the form of strings. The last address will always be greater than the first one.
 */

 SELECT id, last::inet-first::inet AS ips_between  FROM ip_addresses;

 /* SELECT
DISTINCT id,
(d4+d3*256+d2*256*256+d1*256*256*256) as ips_between
FROM
(SELECT *,
cast(split_part(last,'.',1) as bigint) - cast(split_part(first,'.',1) as bigint) as d1,
cast(split_part(last,'.',2) as bigint) - cast(split_part(first,'.',2) as bigint) as d2,
cast(split_part(last,'.',3) as bigint) - cast(split_part(first,'.',3) as bigint) as d3,
cast(split_part(last,'.',4) as bigint) - cast(split_part(first,'.',4) as bigint) as d4
FROM ip_addresses) as ip; */