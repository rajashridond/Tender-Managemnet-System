<?php
include"dbconfig.php";

	 $query="SELECT * FROM `bidding` INNER JOIN tender on bidding.tenderid=tender.id WHERE bidding.userid='".$_SESSION['id']."' and bidding.status='1' ";
	$result=select($query);


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tender BRD</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Tender Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--top nav start here-->
<div class="mother-grid">
	<div class="container">
	  <div class="temp-padd">
		<div class="top-strip">
			<div class="address">
				<ul>
					<li><a href="https://BipinRajashriDnyaneshwar.com/"><span class="link"> </span>www.BipinRajashriDnyaneshwar.com</a></li>
					<li><a href="mailto:example@email.com"><span class="mes"> </span>BipinRajashriDnyaneshwar@gmail.com</a></li>
					<li><span class="ph"> </span>9373986141</li>
				</ul>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="https://www.facebook.com/BipinRajashriDnyaneshwar/"> <span class="w-f"> </span></a></li>
                   <li><a href="https://twitter.com/BipinRajashriDnyaneshwar1"> <span class="w-tw"> </span></a></li>
                   <li><a href="https://www.linkedin.com/in/project-tunnel-75479a164/"> <span class="w-in"> </span></a></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
   </div>
<!--top nav end here-->	
<!--title start here-->
<div class="title-main">
			<a href="index.php"><h1>Tender</h1></a>
		
</div>
<!--title end here-->
<!--header start here-->
<div class="header">
			<div class="navg">
				<span class="menu" > </span>
			<?php include"nav.php";?>
					<script>
                  $( "span.menu").click(function() {
                    $(  "ul.res" ).slideToggle("slow", function() {
                     // Animation complete.
                     });
                     });
		       </script>
			</div>
				<form method="post" action="search.php">
		
			<div class="search">
				<input type="text"  name="tender" placeholder="Tender search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Site search';}"/>
			<input type="submit" name="search" value=""/>
			
      	</div></form>
			<div class="clearfix"> </div>
  </div></br>
<!--header end here-->

<h2 style="text-align:center;background-color:#6855d1;color:white;font-weight:bold">Confirm Biddings</h2></br></br>
<div class="container">
<div class="row">


<div class="col-lg-11">
<div class="chart-area">
       
	   
	   <?php
		   $n=1;
		   while($r=mysqli_fetch_array($result))
		   {extract($r);
		   ?>
            <div class="card-footer small text-muted" style="background-color:#F5F5F5;">
	      
			<div class="row">
			<div class="col-lg-1">
<?=$n?></br>		
 	
			</div>
			<div class="col-lg-2" style="color:blue">
			
			Bidding ID-<?=$r[0]?></br>
			Tender ID-<?=$r[11]?></br>
			Item Name-<?=$r[12]?></br>
			City-<?=$r[16]?></br>
			Budget Price -  <?=$r[17]?>/-</br>		
			Qty -  <?=$r[19]?>
			</div>
			<div class="col-lg-3">
			<img src="admin/<?=$r[14]?>" style="height:100px" alt=""/>
			
			
			</div>
			
			<div class="col-lg-3">
			
 <?=ucwords($r[13])?>		<a href="admin/<?=$r[15]?>" class="btn btn-danger"> | Download File</a>		
			</div>
				<div class="col-lg-3" style="color:blue">
 Due Date-<?=$r[18]?></br>		
 Bidding Price -  <?=$r[4]?><br>		
 Bidding Qty -  <?=$r[5]?>	
			</div>
			
			
			</div>
			
			
			
			</div></br>
           <?php
		   $n++;
		   }
		   ?>
	   
	   
	   
	   
                  </div>

</div>
<div class="col-lg-1"></div>

</div>
</div>
<div class="card-body">
                  
                </div>









<!-- Slideshow 4 -->
			   
	<div class="clearfix"> </div>
<!--molli end here-->
<!--information-grid start here-->
 
</div>
<!--information grid end here-->
<!--footer start here-->
 <div class="footer">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 footer-grid">
					<a href="https://www.facebook.com/BipinRajashriDnyaneshwar/"><img src="images/ftr-fa.png" alt=""/></a>
				</div>
				<div class="col-md-4 footer-grid">
					<a href="https://twitter.com/BipinRajashriDnyaneshwar1"><img src="images/tw.png" alt=""/></a>
					
				</div>
				<div class="col-md-4 footer-grid">
					<a href="http://BipinRajashriDnyaneshwar.com/"><img src="images/drib.png" alt=""/></a>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>Developed By  <a href="http://BipinRajashriDnyaneshwar.com/">BipinRajashriDnyaneshwar </a></p>
			</div>
		</div>
	   </div>
	</div>
  </div>
<!--footer end here-->
</body>
</html>

