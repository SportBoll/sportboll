
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php

$sql = "SELECT * FROM relatorio" or die(mysql_error());
$query = mysql_query($sql);
$row = mysql_num_rows($query);

if ($row > 0) {

     while ($linha = mysql_fetch_array($query)){
             
              $idrelatorio = $linha['idrelatorio'];
              $data = $linha['data'];
              $hora = $linha['hora'];
              echo "<strong>idrelatorio:</strong> $idrelatorio";
              echo "</br>";
              echo  "<strong>data:</strong> $data";
              echo "</br>";
              echo  "<strong>hora:</strong> $hora";
              echo "<hr /><br /><br />";
              }
              }
              else 
              {
              echo "Ainda nao houve registro.";
              }
  
?>

</body>

</html>
