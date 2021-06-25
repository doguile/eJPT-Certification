## SQL

It's a **backend database** to store the data they process

## SQL Injections

SQL Injection(SQLi) attacks allow an unathorized user to **take control over SQL statements** used by a web application

To find SQL injections, we need to check any user input (every input must be tested to conduct a professional pentest):

+ GET parameters
+ POST parameters
+ HTTP Headers
  + User-Agent
  + Cookie
  + Accept

Tests can be:

+ String terminators:` ' and ''`
+ SQL commands: `SELECT, UNION and others`
+ SQL comments: `# or --`


## SQL STATEMENTS

```SQL

SELECT columns1,columns2 FROM table1 WHERE file;
 
SELECT name,description FROM products WHERE ID=9;

```

# Union example

> **SELECT** Name, Description **FROM** Products **WHERE** ID='9' **UNION SELECT** Username,Passwword **FROM** Accounts;

Can also perform a UNION with some *chosen data*

> **SELECT** Name, Description **FROM** Products **WHERE** ID='9' **UNION SELECT** 'Example','Data';

## VULNERABLE DYNAMIC QUERIES

```SQL
-- This dynamic query expects $id values as a string:
SELECT Name, Description FROM Products WHERE ID='$id'

-- But what if an attacker crafts a $id value which can change the query to something like ` OR 'a'='a` 
-- then the query becomes:
SELECT Name, Description FORM Products WHERE UD='' OR 'a'='a';
-- ...which tells the database to select the items by checking two conditions which is always true.

-- An attacker could also exploit the UNION command by supplying the following:
-- ' UNION SELECT Username, Password FROM Accounts WHERE 'a'='a
-- Thus it changes the original query to:

SELECT Name, Description FROM Products WHERE ID='' UNION SELECT Username, Password FROM Accounts WHERE 'a'='a';
```
