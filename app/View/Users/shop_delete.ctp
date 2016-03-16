   <section id="advertisement">
		<div class="container">
			<img src="/Minor/img/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
							<div class="price-range"><!--price-range-->
							<h2>Greetings</h2>
							<div class="well">
								 <?php echo "AccessID ".$id ?>
								<?php echo "Items Feched: " .$n ?>
							</div>
						    </div><!--/price-range-->
						
						    <div class="shipping text-center"><!--shipping-->
							<img src="/Minor/img/home/shipping.jpg" alt="" />
						    </div><!--/shipping-->
						
					</div>
				
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

<?php foreach( $itemlist as $item ) { ?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src= <?php echo $item['Item']['source'] ?> alt="" />
										<h2><?php  if($item['Item']['type'] == 1){echo "Women-Ethnic";}
										else echo "Women-Traditional";  ?></h2>
										
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Delete</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php if($item['Item']['type'] == 1){echo "Women-Ethnic";}
										else echo "Women-Traditional";  ?> </h2>
											
											<a href= <?php echo "/Test/users/delete/". $item['Item']['id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Delete</a>
										</div>
									</div>
								</div>
							</div>
						</div>

<?php } ?>
						
						
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
