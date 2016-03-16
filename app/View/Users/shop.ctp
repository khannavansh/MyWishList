
   <section id="advertisement">
		<div class="container">
			<img src="/Minor/img/shop/advertisement.jpg" alt="" />
		</div>
	</section>

	<script>
function cart_ajax(event , value){
    
    event.preventDefault();


      	$.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'users' , 'action' => 'cart_add')); ?>",
        data: "data[item]=" + value,
        processData: false,
        error : function(data)   {
        alert("Failure");
                                 },
        success : function(data){
        	alert(value);
        }
    });

}
	</script>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
							<div class="price-range"><!--price-range-->
							<h2>Panel</h2>
							<div class="well">
								<?php echo "AccessID ".$id; ?>
								<?php echo "Items Feched: " .$n; ?>
								<?php echo "Currently Added Item's Id: " . $item_tray; ?>
								 
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
										<h2><?php echo 'Price Rs ' . $item['Item']['price'] ?></h2>
										<p><?php if($item['Item']['type'] == 1){echo "Women-Ethnic";} else {echo "Women-Western";}?> </p>
										<a href= "" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo 'Price Rs ' . $item['Item']['price'] ?>  </h2>
											<p><?php if($item['Item']['type'] == 1){echo "Women-Ethnic";} else {echo "Women-Western";}?></p>
											<a href= <?php echo "/Test/users/cart/".$item['Item']['id']; ?> class="btn btn-default add-to-cart" id= <?php echo $item['Item']['id'];?>  onclick="cart_ajax(event , <?php echo $item['Item']['id'];?>);" ?>><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
