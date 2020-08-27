<?php
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
					<li><a href="index.php">Accueil</a></li>
                                        <li><a href="pages/infoconvid.php">Info COVID19</a></li>
					
					<li>
                                
                                        <div class="info_languages has_children">
					<div class="dropdown_text">Localites</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					      
					<!-- Language Dropdown Menu -->
					<?php if($localites){
                                                                
                                            
                                            ?>
                                        <ul>
                                             <?php foreach ($localites as $localite):?>
                                            <li><a href="pages/communes/<?= str_replace('+','',trim(urlencode($localite['LO_LIBELLE'])))?>.php">
							<div class="dropdown_text"><?=$localite['LO_LIBELLE']?></div>
					 	</a></li>
                                                 <?php endforeach; ?>
<!--					 	<li><a href="#">
							<div class="dropdown_text">Commune II</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune III</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune IV</div>
					 	</a></li>-->
					 </ul>
<?php  } ?>
                                        </div>
                                        </li>
                                        <li><a href="#">Contact</a></li>
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
				<!-- Language -->
<!--				<div class="info_languages has_children">
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

				</div>-->

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
			<form action="recherche.php#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Rercherche Produit" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="sidebar_nav">
			<ul class="menu_nav">
				<li class="dropdown_text"><a href="index.php">Accueil</a></li>
				<!--<li class="menu_mm"><a href="#">Localites</a></li>-->
                                <li><a href="pages/infoconvid.php">Info COVID19</a></li>
                       </ul>
                                <div class="info_languages has_children">
					<div class="dropdown_text">Localites</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <?php if($localites){
                                                                
                                            
                                            ?>
                                        <ul>
                                             <?php foreach ($localites as $localite):?>
                                            <li><a href="pages/communes/<?= str_replace('+','',trim(urlencode($localite['LO_LIBELLE'])))?>.php">
							<div class="dropdown_text"><?=$localite['LO_LIBELLE']?></div>
					 	</a></li>
                                                 <?php endforeach; ?>
<!--                                             <li><a href="pages/communes/communeI.php">
							<div class="dropdown_text">Commune I</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune II</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune III</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune IV</div>
					 	</a></li>-->
					 </ul>
                                        <?php  } ?>

				</div>            
                                <ul class="menu_nav">
                             	<li class="menu_mm"><a href="contact.php">contact</a></li>
			</ul>
		</nav>

	</div>
	
	
        <!-- Sidebar -->
	<div class="sidebar">
		
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
                        
				<li><a href="index.php">Acceuil<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="pages/infoconvid.php">Info COVID19<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                    </ul>
                                <div class="info_languages has_children">
					<div class="dropdown_text_2">Localites</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <?php if($localites){
                                                                
                                            
                                            ?>
                                        <ul>
                                             <?php foreach ($localites as $localite):?>
                                            <li><a href="pages/communes/<?= str_replace('+','',trim(urlencode($localite['LO_LIBELLE'])))?>.php?id=<?=$localite['LO_ID']?>">
							<div class="dropdown_text"><?=$localite['LO_LIBELLE']?></div>
					 	</a></li>
                                                 <?php endforeach; ?>
<!--                                             <li><a href="pages/communes/communeI.php">
							<div class="dropdown_text_2">Commune I</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune II</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune III</div>
					 	</a></li>
					 	<li><a href="#">
							<div class="dropdown_text">Commune IV</div>
					 	</a></li>-->
					 </ul>
<?php  } ?>
				</div>            
                                <ul class="menu_nav">
<!--				<li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->
				<li><a href="index.php">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
                       
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="recherche.php#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Rercherche Produit" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
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
<!--							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>-->
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
					<div class="background_image" style="background-image:url(images/home_slider_4.jpg)"></div>
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

<!--	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							 Product 
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/RIZ.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Riz</a></div>
										<div class="product_price">500fcfa/kg</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item">
								<div class="product_inner">
                                                                    <div class="product_image"><img src="images/mesDenreesImg/FONIO.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Fonio</a></div>
										<div class="product_price">1000fcfa</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/mil2.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Mil</a></div>
										<div class="product_price">400fcfa/kg</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/FARINE2.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Farine</a></div>
										<div class="product_price">500fcfa</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/SUCREbLANC.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Sucre Blanc</a></div>
										<div class="product_price">1500fcfa/sac</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/SUCRE ROUX.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Sucre Roux</a></div>
										<div class="product_price">1000fcfa/sac</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/LAIT1.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Lait </a></div>
										<div class="product_price">15000fcfa/sac</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

                                                        						 Product 
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/MAIS2.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Mais </a></div>
										<div class="product_price">15000fcfa/sac</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>
						 Product 
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/HARICOT.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Haricot </a></div>
										<div class="product_price">15000fcfa/sac</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>
						 Product 
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/SPAGETTI_accueil.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Spaghetti </a></div>
										<div class="product_price">15000fcfa/sac</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
                                                                            <img src="images/mesDenreesImg/HUILLE DINOR.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Huile Dinor</a></div>
										<div class="product_price">15000fcfa</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
<?php
include './produitinclude.php';
?>
	<!-- Newsletter -->



	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="section_container">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_about">
								<!-- Logo -->
								<div class="footer_logo">
									<a href="#"><div>mes<span>Denrées</span></div></a>
								</div>
								<div class="footer_about_text">
									<p>Est un site de repère,où les aliments de première necessite sont recherchés et mis à votre disposition.
                                                                            En fonction des prix et leurs localites.</p>
								</div>

							</div>
						</div>

						

						<!-- Contact -->
<!--						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_contact">
								<div class="footer_title">contact</div>
								<div class="footer_contact_list">
									<ul>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Your Company Ltd</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+53 345 7953 32453</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>office@youremail.com</div></li>
									</ul>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="footer_social">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">								
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Credits -->
		<div class="credits">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="credits_content d-flex flex-row align-items-center justify-content-end">
								<div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/custom.js"></script>
</body>
</html>