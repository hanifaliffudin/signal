
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
include('simple_html_dom.php');
$html = file_get_html('https://korlantas.polri.go.id/category/lainnya/');
$list = $html->find('ul[class="penci-wrapper-data penci-grid"]',0);
$artikel = $list->find('article');
// for($i=0;$i<sizeof($artikel);$i++){
for($i=0;$i<3;$i++){
?>
<div style="display:none;"><?php echo $artikel[$i]; ?></div>
<?php } ?>
<img class="tes" src="" alt="">
<div class="tanggal"></div>
<a href="" class="link">Selengkapnya</a>
<img class="tes" src="" alt="">
<div class="tanggal"></div>
<a href="" class="link">Selengkapnya</a>
<img class="tes" src="" alt="">
<div class="tanggal"></div>
<a href="" class="link">Selengkapnya</a>
  
<script>
    var getImages = document.querySelectorAll(".penci-image-holder");
    var htmlImages = document.querySelectorAll(".tes");
    var getTanggal = document.querySelectorAll(".otherl-date");
    var htmlTanggal = document.querySelectorAll(".tanggal");
    var getURL = document.querySelectorAll(".overlay-typography");
    var htmlURL = document.querySelectorAll(".link");

    for(var i=0;i<getImages.length;i++){
      var imageURL = getImages[i].getAttribute("data-src");
      htmlImages[i].src = imageURL;
      htmlTanggal[i].innerHTML = getTanggal[i].textContent;
      htmlURL[i].href = getURL[i].href;
      // console.log(getURL[i].href);
    }
</script>
</body>
</html>