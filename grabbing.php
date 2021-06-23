
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
$tanggal = $list->find('span[class="otherl-date"]',0)->find('time');
// for($i=0;$i<sizeof($artikel);$i++){
for($i=0;$i<3;$i++){
  echo $artikel[$i];
  echo "<br>";
  // echo $tanggal[$i];
}
?>
  <img class="tes" src="tes" alt="">
  <img class="tes" src="tes" alt="">
  <img class="tes" src="tes" alt="">
  <div class="gambar"></div>
<script>
    // in all browsers
    // .getAttribute("data-src")
    var images = document.querySelectorAll(".penci-image-holder");
    var gambar = document.querySelectorAll(".tes");
    var tanggal = document.querySelectorAll(".otherl-date .entry-date");
    for(let i=0;i<images.length;i++){
      let imageURL = images[i].getAttribute("data-src");
      console.log(tanggal);
      // console.log(gambar[i]);
      gambar[i].src = imageURL;
    }




    // console.log(imageUrls);
    // document.querySelector(".tes").src = imageUrl;

    // or in modern browsers
    // var imageUrl = document.querySelector(".penci-image-holder penci-lazy").dataset.src;
</script>
</body>
</html>