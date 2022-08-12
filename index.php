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
<meta name="viewport" content="width=device-width">
<title>Prodaja</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>


<script>

  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<script>
$(document).ready(function() {
		
	var respmenu 		= $('#respmenu');
	var	menu 			= $('#nav>ul');

	$(respmenu).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var sirina = $(window).width();
		if(sirina > 768 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}	
	});
	
});	
	


</script>



</head>

<body>

<div id="wrapper">
	
	<header id="header">
    
    	<div id="headerTop">
        	<div class="wrapper">
            	
            </div>
        </div>
        
        <div id="headerBottom">
        	<div class="wrapper">
            
            	<div id="logo">
                	<a href="index.php">
                    	<img src="images/logo.jpg" alt="logo">
                    </a>
                </div>
                
                <nav id="nav">
                	<ul>
				<li><a href="index.php">početna</a></li>
				<li><a href="onama.html">o nama</a></li>
				<li><a href="kontakt.html">kontakt</a></li>
				<li><a href="novosti.html">novosti</a></li>
				<li><a href="katalog.php">Galerije</a></li>
			</ul>
                    <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigation</a>
                </nav>
            
            </div>
        </div>   
    
    </header><!-- kraj #header -->
	
	<div id="promo" class="cf">
		<div >
		<div class="product">
			<a href="#" title="">
				<img src="images/1.jpg" alt=""style="width:100%;height:100%">
				<span>Predjela</span>
			</a>
		</div>
		
		<div class="product">
			<a href="#" title="">
				<img src="images/13.jpg" alt=""style="width:100%;height:100%">
				<span>Glavna jela</span>
			</a>
		</div>
		
		<div class="product">
			<a href="#" title="">
				<img src="images/23.jpg" alt=""style="width:100%;height:100%">
				<span>Desert </span>
			</a>
		</div>
		
		<div class="product">
			<a href="#" title="">
				<img src="images/26.jpg" alt=""style="width:100%;height:100%">
				<span>Morski plodovi</span>
			</a>
		</div>
		
		<div class="product">
			<a href="#" title="">
				<img src="images/10.jpg" alt=""style="width:100%;height:100%">
				<span>Salate</span>
			</a>
		</div>
		
		<div class="product">
			<a href="#" title="">
				<img src="images/20.jpg" alt="" style="width:100%;height:100%">
				<span>Jela sa rostilja</span>
			</a>
		</div>
	</div>
	</div><!-- end #promo -->
	
	<div id="main">
	
		
	
		
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
















