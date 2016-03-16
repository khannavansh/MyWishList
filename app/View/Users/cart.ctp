
<script>
 
$(document).ready(function () {
$("#mail_bill").click(function(event){  
	    event.preventDefault();
      	$.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'items' , 'action' => 'pdf' , 1)); ?>",
        processData: false,
        error : function(data)   {
        alert("Failure");
                                 }
    });

});

});

 </script>

 


<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				 <li class="active">Shopping Cart</li>
				 </ol>
				 </div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Description</td>
							<td class="price">Price</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<?php $total = 0; ?>
<?php foreach($itemlist as $item){ ?> 
					<tbody>
						<tr>
						<td class="cart_product">
						<a href= <?php echo $item['Cart']['source']; ?> >View Item</a>
						</td>

						<td class="cart_description">
						<h4><?php if($item['Cart']['type'] == 1){echo "Women Traditional";} else {echo "Women Western";} ?></h4>
					     </td>
						<td class="cart_price">
						<p><?php echo 'Rs. ' . $item['Cart']['price'];?></p>
						</td>
						
						<td class="cart_total">
						<p class="cart_total_price">
						<?php $total = $total + intval($item['Cart']['price']);
						echo "Rs. " .$total; ?>
						</p>
						</td>
						<td class="cart_delete">
<a class="cart_quantity_delete"  href = <?php echo '/Test/users/cart/' . $item['Cart']['item_id']; ?>  id = <?php $item['Cart']['item_id']; ?> ><i class="fa fa-times"></i></a>
						</td>
						</tr>

			<?php	} ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>

			              
			<?php echo $this->Html->link('Download Bill' , array('controller' => 'items' , 'action' => 'pdf_d' , 2)); ?> 
			
			
			
			<?php echo $this->Form->button('Mail Bill' , array('class' => 'btn btn-primary' , 'type' => 'button' , 'id' => 'mail_bill')); ?> 

				
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
