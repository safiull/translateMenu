<?php

$englishMenus = ["Home", "Contact", "About", "FAQ"];
$banglaMenus = ["হোম", "যোগাযোগ","আমাদের সম্পর্কে", "জিজ্ঞাসা"];

function translate($english,$bangla){
	return $bangla;
}

$manus=array_map("translate",$englishMenus,$banglaMenus);

?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
	  font-size: 20px;
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 70px 60px;
	  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
.translate{
	float: right;
	background: green;

}


</style>
</head>
<body>

<ul>
	
<?php
	foreach ($englishMenus as $menu) {
		
?>
	<li><a href="#"> <?= $menu; ?> </a></li>
<?php

}

?>

<li class="translate"><a href="translate_to_bangla.php">বাংলা</a></li>
</ul>

</body>
</html>
