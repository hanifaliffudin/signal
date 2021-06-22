<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$code = get_web_page("https://kurs.dollar.web.id/bank.php/?/@bca");
  $pecah = explode("<table cellspacing='0'>", $code);
 $final_table = explode("</table>", $pecah[1]);
   $data = $final_table[0];
   echo $data;
?>
</table>
</body>
</html>