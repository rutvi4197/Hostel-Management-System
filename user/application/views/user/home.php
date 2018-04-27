<!DOCTYPE HTML>
<html>
<head>
	<title>Women's HOR</title>
	<link href="<?php echo base_url(); ?>css/w3.css" rel="stylesheet" type="text/css" >
  
</head>
<body>
<?php include('header.php');?>

<div class="container" style="width:100%">
	<div class="w3-content w3-display-container" style="margin-top:2%;">
  <img class="mySlides" src="<?php echo base_url(); ?>image/b1.jpg" style="width:100%;height:400px;">
  <img class="mySlides" src="<?php echo base_url(); ?>image/b2.jpg" style="width:100%;height:400px;">
  
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</div>	
<br/>
<?php include('footer.php');?>




