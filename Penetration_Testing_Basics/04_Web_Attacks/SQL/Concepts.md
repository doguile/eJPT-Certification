## SQL

It's a **backend database** to store the data they process

## SQL Injections

SQL Injection(SQLi) attacks allow an unathorized user to **take control over SQL statements** used by a web application

## SQL STATEMENTS

> **SELECT** columns1,columns2 **FROM** table1 **WHERE** file;
> 
> **SELECT** name, description **FROM** products **WHERE** ID='9';

# Union example

> **SELECT** Name, Description **FROM** Products **WHERE** ID='9' **UNION SELECT** Username,Passwword **FROM** Accounts;

Can also perform a UNION with some *chosen data*

> **SELECT** Name, Description **FROM** Products **WHERE** ID='9' **UNION SELECT** 'Example','Data';

## VULNERABLE DYNAMIC QUERIES

> ' **OR** 'a'='a (en una pagina web)

> **SELECT** name, description **FROM** products **WHERE** ID=' ' **OR** 'a'='a';

This tells the database to select all the items in the *Products* table


