<?php
require_once("klase/classBaza.php");
$db=new Baza();
if(mysqli_connect_error())
{
	echo "Baza nije dostupna!!!!";
	exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prodaja</title>
	
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="jquery-3.3.1.js"></script>
<script>
	$(document).ready(function (){
		$("img").click(function(){
			var src=$(this).attr("src");
			$("#glavna"). hide().stop().attr("src",src).css("opacity","0").show().animate({opacity:"1"}, 1000);
		});
	});
</script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

<link href="fa/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="lightbox2-master/src/css/lightbox.css" rel="stylesheet">
<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>

</head>
<body class="not-front">

<div id="wrapper">
	
	<header id="header" class="cf">
	
		<div id="logo">
			<a href="index.php">
				<img src="images/logo.jpg" alt=""style="width:80px">
			</a>
		</div><!-- end #logo -->
		<nav id="nav">
			<ul>
				<li><a href="index.php">početna</a></li>
				<li><a href="onama.html">o nama</a></li>
				<li><a href="kontakt.html">kontakt</a></li>
				<li><a href="novosti.html">novosti</a></li>
				<li><a href="katalog.php">Galerije</a></li>
			</ul>
			<a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigation</a>
		</nav><!-- end #nav -->
	</header><!-- end #header -->
	
	
	
	<div id="main2">
	
	<?php
	$upit="SELECT * FROM galerije order by vreme desc";
	$rez=$db->izvrsiUpit($upit);
	if($db->brojRedova($rez)>0)
	{
		echo "<ul>";
		while($red=$db->procitajRed($rez))
			echo "<li><a href='katalog.php?idGalerije=$red->id'>$red->nazivGalerije</a></li>";
		echo "</ul>";
	}else
		echo "Nema ni jedna galerija u bazi!!!!<br>";
	?>
	<hr>
	<center>
	<?php
	if(isset($_GET['idSlike']))
	{
		$idSlike=$_GET['idSlike'];
		$upit="SELECT * FROM galerijeslike WHERE id=$idSlike";
		$rez=$db->izvrsiUpit($upit);
		$red=$db->procitajRed($rez);
		echo "<img src='galerije/$red->slika' alt='Nema slike' height='200px' class='galerija' /><br>$red->komentar";
	}
	?>
	
	
	<?php
	if(isset($_GET['idGalerije']))
	{
		$idGalerije=$_GET['idGalerije'];
		$upit="SELECT * FROM galerijeslike WHERE idGalerije=$idGalerije";
		$rez=$db->izvrsiUpit($upit);
		if($db->brojRedova($rez)>0)
		{
			while($red=$db->procitajRed($rez))
				echo "<a href='galerije/$red->slika' data-lightbox='roadtrip' data-title='$red->komentar'><img  src='galerije/$red->slika' alt='Nema slike' height='100px' class='galerija' /></a>";
				//echo "<img  src='galerije/$red->slika' alt='Nema slike' height='100px' class='galerija' />";
		}else
			echo "Nema nijedna slika za izabranu galeriju!!!!<br>";
	}
	?>
	</center>        
		
	</div><!-- end #main -->
	
	<div id="sidebar">
		
		<i class="fa fa-trophy sideIco" aria-hidden="true"></i>
		<h3>Lorem ipsum dolor sit.</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam corrupti, magnam odio ea fuga quia dolores sed autem eaque, ducimus, dolorem. Voluptates perspiciatis, deleniti at, neque facilis minus mollitia laboriosam.</p>
		
		<i class="fa fa-cogs sideIco" aria-hidden="true"></i>
		<h3>Lorem ipsum dolor sit.</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam corrupti, magnam odio ea fuga quia dolores sed autem eaque, ducimus, dolorem. Voluptates perspiciatis, deleniti at, neque facilis minus mollitia laboriosam.</p>
		
	</div><!-- end #sidebar -->
	
	<div id="footer">
		
		
		
		
		
		<div id="footerCopyright">
			<p>Copyright @ prodaja</p>
			<a href="#top" class="button">back to top</a>
		</div>
		
	</div><!-- end #footer -->
	
</div><!-- end #wrapper -->


</body>
</html>
