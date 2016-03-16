
	
<div id="contact-page" class="container">
    	<div class="bg">
	    	   	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<?php echo $this->Form->create('User'); ?> 

				            <div class="form-group col-md-6">
				               
				                <?php echo $this->Form->input('name',array('type' => 'text' , 'class' => 'form-control' , 'required' => 'true' , 'placeholder' => 'Name')); ?>
				            </div>
				            <div class="form-group col-md-6">

				                 <?php echo $this->Form->input('email',array('type' => 'email' , 'class' => 'form-control' , 'required' => 'true' , 'placeholder' => 'Email')); ?>

				            </div>
				            <div class="form-group col-md-12">
				                 <?php echo $this->Form->input('subject',array('type' => 'text' , 'class' => 'form-control' , 'required' => 'true' , 'placeholder' => 'Subject')); ?>
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				               <?php echo $this->Form->end('Submit'); ?>
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>visit me @ vanshkhanna.com</p>
							<p>A-10,Sector 62,Noida</p>
							<p>Jaypee Institute Of Information Technology</p>
							<p>Mobile: 8130262129</p>
							<p>Email: vanshkhanna27@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	