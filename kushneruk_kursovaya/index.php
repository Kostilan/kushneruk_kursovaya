<?php
// Шапка
include("header.php");
?>
<div class="container-carousel">
    <div class="carousel">
      <div class="slides">
      <div class="slide" style="background-image: url('img/1.jpg');"></div>
    <div class="slide" style="background-image: url('img/2.jpg');"></div>
    <div class="slide" style="background-image: url('img/3.jpg');"></div>
      </div>
      <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
      <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
</div>
<!-- подвал -->
<?php
include("footer.php");
?>