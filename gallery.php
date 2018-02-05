<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/gallery.css">

<?php

function display_title(){
  echo "Gallery";
}

function display_content(){
?>

<div class="container container-thumbs">
  <ul class="gallery" id='gallery-ul'>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/1.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/2.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/3.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/4.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/5.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/6.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/7.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/8.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/9.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/10.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/12.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/13.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/14.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/15.jpg" alt="" class="thumbnail" /></a></li>
    <li class="gallery_item"><a href="#0" class="gallery_link"><img src="img/gallery/16.jpg" alt="" class="thumbnail" /></a></li>
  </ul>
</div>

<?php
}
require "template.php";

?>