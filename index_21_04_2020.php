<?php
include './db.php';
include  './pages/communes/communefonction.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>mesDenrées</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="mesDenrée sest votre site de repère en question alimentaire">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="icon" 
      type="image/png" 
      href="images/mesDenreesImg/logo_1_orange.png">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="#"><div>mes<span>denrées</span></div></a>
			</div>

			<!-- Navigation en inspectant -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li class="bg-light border border-0"><a href="index.php"><i class='fa fa-home' style='font-size:24px'></i>Accueil</a></li>
                                        <li><a href="pages/covid/infocovidindex.php">Info COVID19</a></li>
					
					<li>
                                
                                        <div class="info_languages has_children">
					<div class="dropdown_text">Localites</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					      
					<!-- Language Dropdown Menu -->
					<?php if($localites){
                                                                
                                            
                                            ?>
                                        <ul>
                                             <?php foreach ($localites as $localite):?>
                                            <li><a href="pages/communes/communeindex.php?id=<?=$localite['LO_ID']?>">
							<div class="dropdown_text"><?=$localite['LO_LIBELLE']?></div>
					 	</a></li>
                                                 <?php endforeach; ?>
					 </ul>
<?php  } ?>
                                        </div>
                                        </li>
                                        <li><i class="fa fa-address-book"></i><a href="pages/contact/contactindex.php">Contact</a></li>
                                </ul>
                           
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">
   <!-- search -->
<!--		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>-->
   
   <div style="background-image: url(images/mesDenreesImg/logo_1_orange.png)"></div>
				<!-- Language -->
				<div class="">
					<div class=""><img src="images/mesDenreesImg/logo_1_orange.png" alt="https://www.orangemali.com"></div>
<!--					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					 Language Dropdown Menu 
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>-->

				</div>

				<!-- Currency -->
<!--				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					 Currencies Dropdown Menu 


				</div>-->

				<!-- Cart -->
			</div>

		</div>
	</header>
<!-- fin header-->
	<!-- Menu  en responsive-->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">
	
		</div>
                <!-- search -->
		<div class="menu_search">
                    <form action="pages/recherche/rechercheindex.php" method="get" name="formproduit" class="header_search_form menu_mm">
                        <input id="motcle" type="search" name="motcle" class="search_input menu_mm" placeholder="Rercherche Produit" required="required">
                        <button name="btsubmit" type="submit" value="recherche" class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="sidebar_nav">
			<ul class="menu_nav">
				<li class="dropdown_text"><a href="index.php"><i class='fa fa-home' style='font-size:24px'></i>Accueil</a></li>
				<!--<li class="menu_mm"><a href="#">Localites</a></li>-->
                                <li><a href="pages/covid/infocovidindex.php">Info COVID-19</a></li>
                       </ul>
                                <div class="info_languages has_children">
					<div class="dropdown_text">Localites</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <?php if($localites){
                                                                
                                            
                                            ?>
                                        <ul>
                                             <?php foreach ($localites as $localite):?>
                                            <li><a href="pages/communes/communeindex.php?id=<?=$localite['LO_ID']?>">
							<div class="dropdown_text"><?=$localite['LO_LIBELLE']?></div>
					 	</a></li>
                                                 <?php endforeach; ?>

					 </ul>
                                        <?php  } ?>

				</div>            
                                <ul class="menu_nav">
                                    <li class="menu_mm"><a href="pages/contact/contactindex.php">contact</a></li>
			</ul>
		</nav>

	</div>
	
	
        <!-- Sidebar -->
        <div class="sidebar">
		<div class="">
		<div class=""><img src="images/mesDenreesImg/logo_1_orange.png" alt="https://www.orangemali.com"></div>
                </div>
		<!-- Info -->
<!--		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
				 Language 
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					 Language Dropdown Menu 
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				 Currency 
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					 Currencies Dropdown Menu 
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

			</div>
		</div>-->

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>mes<span>denrées</span></div></a>
		</div>

		<!-- Sidebar Navigation le menu a gauche-->
		<nav class="sidebar_nav">
                           
                    <ul class="menu_nav">
                        
                        <li class="bg-light border-0"><a href="index.php"><i class='fa fa-home' style='font-size:24px'></i>Accueil<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li class="bg-light border-0"><a style="padding: 9px;" href="pages/covid/infocovidindex.php">Info COVID-19<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                    </ul>
                                <div class="info_languages has_children" style="padding-right:29px;background-color: red;position: var;">
                                    <div class="dropdown_text_2" >Localites</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <?php if($localites){
                                                                
                                            
                                            ?>
                                        <ul>
                                             <?php foreach ($localites as $localite):?>
                                            <li><a href="pages/communes/communeindex.php?id=<?=$localite['LO_ID']?>">
							<div class="dropdown_text"><?=$localite['LO_LIBELLE']?></div>
					 	</a></li>
                                                 <?php endforeach; ?>
					 </ul>
<?php  } ?>
				</div>            
                                <ul class="menu_nav">
<!--				<li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->
                                    <li class="bg-light border-0"><a style="padding: 27px;" href="pages/contact/contactindex.php">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
<!--<i class='fa fa-book' style='font-size:24px;padding-right: -px;'></i>-->
                       
		</nav>

		<!-- Search -->
		<div class="search">
                    <form action="pages/recherche/rechercheindex.php" method="get" class="search_form" id="sidebar_search_form">
                        <input type="search" name="motcle" class="search_input" placeholder="Rercherche Produit" required="required">
                        <button type="submit" name="btsubmit" value="recherche" class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>
                
              		
	</div>
<!-- fin menu extra -->
	
<!-- Home -->
	<div class="home">
	<!-- Home Slider -->
		<div class="home_slider_container" data-c>
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/mesDenreesImg/CEREALEslide.jpg)"></div>
			                <div class="home_content_container">
						<div class="home_content">
<!--							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>-->
							<div class="home_title">CEREALES</div>
							<div class="button button_1 home_button trans_200"><a href="#">De bonne qualite!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/mesDenreesImg/cereal_grain2.jpg)"></div>
					<div class="home_content_container">
<!--						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>-->
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_3.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
<!--							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>-->
						</div>
					</div>
				</div>
                                <!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/AIL.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
<!--							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>-->
						</div>
					</div>
				</div>
                                <!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/mesDenreesImg/cereale_feculent.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
<!--							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>-->
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200">
                            <div class=" d-flex flex-column align-items-center justify-content-center">
                                <img src="images/prev.png" alt="">
                            </div>
                        </div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

		</div>
	</div>
<!-- fin home -->
	<!-- Boxes -->
	
<!--	<div class="boxes">
		<div class="section_container">
			<div class="container">
				<div class="row">-->
					
					<!-- Box -->
<!--					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_1.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">summer collection</a></div>
						</div>
					</div>-->

					<!-- Box -->
<!--					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_2.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">eyewear collection</a></div>
						</div>
					</div>

					 Box 
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_3.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">basic pieces</a></div>
						</div>
					</div>-->
<!--
				</div>
			</div>
		</div>
	</div>-->

	<!-- Categories -->

<!--	<div class="categories">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="categories_list_container">
							<ul class="categories_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="categories.html">new arrivals</a></li>
								<li><a href="categories.html">recommended</a></li>
								<li><a href="categories.html">best sellers</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<!-- Products AFFICHER-->
<?php
include './produitinclude.php';
?>
	<!-- Newsletter -->

	<!-- Footer -->
<?php
include './footer.php';
?>
	