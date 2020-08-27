<?php
/* LA LISTE DE TOUS LES PRODUITS DANS UN TABLEAUX AVEC 
 * PRIX EN GROS ET DETAIL?STOCK?LISTE DES LIVREURS,VENDEUR
 */

$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 100;
// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page

 $stmt = $pdo->prepare('SELECT * FROM boutique_produits bp,produits pr,boutique bo, localite lo WHERE bo.BO_ID=bp.BO_ID AND bo.LO_ID=lo.LO_ID and bp.PR_ID=pr.PR_ID AND'
             . ' pr.PR_ETAT="Y" ORDER BY bp.BP_ID LIMIT :current_page,:record_per_page');

$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT); 
 $stmt->execute();
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $num_produits=0;
 if($produits){
// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_produits = count($produits);
//echo $num_produits;
 }


?>	


<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							<?php foreach ($produits as $produit):?>
							<!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
                                                                    
                                                            <figure class="snip1487">
                                                         <div class="img" style="background-image:url('images/mesDenreesImg/<?=$produit['PR_PHOTO']?>');"><a href="pages/boutique_marche/descriptionproduitindex.php?id=<?=$produit['BP_ID']?>?idpr=<?=$produit['PR_ID']?>">  </a></div>                                                                      <!--<img src="images/mesDenreesImg/RIZ.jpg" alt="sample104" />-->
                                                                <figcaption style="color: rgb(255,220,0);background-color: rgb(143, 143, 143);">
                                                                            <h3><strong><?=$produit['PR_LIBELLE']?></strong> <span><?=$produit['PR_PRIX']?>fcfa/ <?=$produit['PR_UNITE']?></span><br><?=$produit['BO_LIBELLE']?></h3>
                                                                            
                                                                        </figcaption>
                                                                


                                                            </figure>
                                                                    <h4 style="color: rgb(0,0,0);"><?=$produit['PR_LIBELLE']?></h4>  
                                                                    <a style="color: rgb(255, 102, 0);font-style: unset;font-family: cursive;text-transform: uppercase;" 
                                                                    href="pages/boutique_marche/descriptionproduitindex.php?id=<?=$produit['BP_ID']?>?idpr=<?=$produit['PR_ID']?>"><?=$produit['PR_PRIX']?>fcfa/ 
                                                                <?=$produit['PR_UNITE']?></a>
<!--									<div class="img" style="background-image:url('images/mesDenreesImg/RIZ.jpg');"></div>
                                                                            <img src="images/mesDenreesImg/RIZ.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content_2 text-center">
										<div class="product_title"><a href="#">Riz</a></div>
										<div class="product_price">500fcfa/kg</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>-->
								</div>	
							</div>
<?php endforeach;?>
						
						</div>
					</div>
				</div>
			</div>
		</div>
    
	</div>
