<script>
function forgot_password(event)
{
	event.preventDefault();
	var username = document.getElementById("username").value;

	if(username == "")
	{
    alert("please enter the username!");
	}


	else
	{
	document.getElementById("pass_mail").style.display="block";
    }




	$.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'items' , 'action' => 'reset_password')); ?>",
        data: "data[name]=" + username, 
        processData: false,
        error : function(data) 
         {
        alert("failure");
         },
        success : function(data)
        {
         alert("success"); 
        }                       
    });

}


</script>

<div class="container">

		<div class="col-sm-6">
		<?php echo $this->Html->media('demo.mp4', array(
     'fullBase' => true,
     'autoplay' => true,
     'height' => '800px',
     'width' => '600px'
        ));
        ?>

		</div>

<div class="col-sm-1"></div>



<section id="form"><!--form-->
		
					<div class="row">
				<div class="col-sm-7 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>

						<?php echo $this->Form->create('User') ?> 


                            <?php echo $this->Form->input('password',array( 'type'=>'password' , 'placeholder'=>'Password' ,'required' => 'true','label' => 'Password'  )); ?>
							<?php echo $this->Form->input('username' ,array( 'type'=>'text' , 'placeholder'=>'Username' ,'required' => 'true','label' => 'Username' , 'id' => 'username')); ?>
							<?php echo $this->Html->link('Signup' , array('controller' => 'Users' , 'action' => 'signup')) ?>
							<br />
							<?php echo $this->Html->link('Forgot Password?' , array('controller' => 'items' , 'action' => 'send_email'),array('id'=> 'forgot' , 'onclick' => 'forgot_password(event)')) ?>

							
						

                            <p id="pass_mail" style="display:none">Your password has been mailed!</p>
														

						    <button type="submit" class="btn btn-default" ><p style="color:black">Login</p></button>
						    
						</form>

					</div><!--/login form-->
				</div>

				
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
