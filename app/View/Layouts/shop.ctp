<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<?php echo $this->Html->charset(); ?>
 <?php 	$title_for_layout = "MyWishList"; ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>

	
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		//echo $this->fetch('img'); 
		echo $this->Html->css('bootstrap.min.css');
	 	echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('prettyPhoto.css');
		echo $this->Html->css('animate.css');
        echo $this->Html->css('main.css');
        echo $this->Html->css('responsive.css');
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('jquery.js');
        echo $this->Html->script('jquery.scrollUp.min.js.js');
        echo $this->Html->script('price-range.js');
        echo $this->Html->script('jquery.prettyPhoto.js');
        echo $this->Html->script('main.js');
        echo $this->Html->script('jquery.min.js');
        echo $this->Html->css('input.css');
	?>

    
    <link rel="shortcut icon" href="/Minor/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Minor/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Minor/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Minor/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Minor/img/ico/apple-touch-icon-57-precomposed.png">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 

  <script>
 $(document).ready(function () {

        // e.preventDefault();
        //var fileSelect = document.getElementById("input1").value;
        
      $("#form1").ajaxForm(function(data){
      	success: alert(result);
        

        });
        });


 </script>


 <script>
 
$(document).ready(function () {
$("#mail").click(function(e){  
	    e.preventDefault();
      	$.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'items' , 'action' => 'send_email')); ?>",
        processData: false,
        error : function(data)   {
        alert("Failure");
                                 }
    });

});

});

 </script>
 <script>
 
$(document).ready(function ()
 {
$("#change_pwd").click(function(e){  
	    e.preventDefault();
	    document.getElementById("password_input").style.display='block';
        document.getElementById("input_pass").style.display='block';
	});

$("#input_pass").click(function(e){
	e.preventDefault();
	var password = document.getElementById('password_input').value;

if(password == '')
{
	alert("Input field cannot be left empty");
}

$.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'items' , 'action' => 'change_password')); ?>",
        data: "data[password]=" + password,
        processData: false,
        error : function(data)
           {
        document.getElementById("password_input").style.display='none';
        document.getElementById("input_pass").style.display='none';
        alert("Your password has been changed");
           },
        success : function(data)
        {
       	alert(data);
        }
    });

});

});


 </script>




 <script>
/*
 $(document).ready(function () {

 	$(document).on('click',"#btn",function(e){
 		alert("clicked");

$.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'items' , 'action' => 'pdf')); ?>",
        processData: false,
        success : function(data) {
          alert("Success")
        
                                 },
        error : function(data)   {
           alert("ddddd");
                                 }
    });
 	});
   

/*
        $.ajax({   
        type: "POST",
        url: "<?php echo $this->Html->url(array('controller' => 'items' , 'action' => 'upload')); ?>",
        processData: false,
        success : function(data) {
          document.getElementById("1").innerHTML = "Hello";
        
                                 },
        error : function(data)   {
           alert(data);
                                 }
    });


    });
*/
</script>


	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +918130262129</a></li>
								<li><a href="#" id="mail"><i class="fa fa-envelope"></i> mywishlist@gmail.com</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a>
								</li>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">

					<div class="col-sm-7 ">
					</div>

					<div class="col-sm-5">
						<div class="shop-menu pull-right">

							<ul class="nav navbar-nav">
								<li><i class="fa fa-crosshairs"><?php echo $this->Html->link(' Checkout',array('controller'=>'Users','action'=>'logout')); ?></i></li>
							    <li><i class="fa fa-shopping-cart"><?php echo $this->Html->link(' Cart',array('controller'=>'Users','action'=>'cart')); ?></i></li>
							    	   					    
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
        

 	<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							    
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                         <li><?php echo $this->Html->link('Women-Ethnic',array('controller'=>'users','action'=>'shop',1,0)); ?></li>

                                        <li><?php echo $this->Html->link('Women-Western',array('controller'=>'users','action'=>'shop',2,0)); ?></li>

                                        <li>
                                        <?php echo $this->Html->link('Delete',array('controller'=>'users','action'=>'shop',3,0)); ?></li>

                <li>
                <form  action ="/Test/items/upload" method='post'    id ='form1'>

                <label class="custom-file-upload">Upload
                <input   type='file' hint="Upload" name ='input1'   id ='input1'/></label>                        
                </li>
                <li>
                <input   id='btn1'  type ='submit' class="btn btn-primary"/>     </form>
                </li>
                <li>
                <i class="fa fa-wrench"><?php echo $this->Html->link('Change Password' , array('controller' => 'items' , 'action' => 'change_password'),array('id' => 'change_pwd')); ?></i>
                </li> 
                <li>
                <?php echo $this->Form->input('',array('type' => 'password' , 'style' => 'display:none' , 'class' => 'form-control input-sm' ,  'placeholder' => 'Enter new password here' , 'id' => 'password_input')); ?>
                </li>  

                <li>
                <input   type='submit' class="btn btn-primary" style='display:none' id ='input_pass'/>
                </li>                  
                </ul>
                </li> 



								
								<li><?php echo $this->Html->link('Contact',array('controller'=>'Users','action'=>'contactus')); ?></li>
							</ul>
						</div>
					</div>




					<div class="col-sm-3">

                         
					<?php echo $this->Form->create('User',array('type' => 'text' , 'action' => 'search')); ?>
						<div class="search_box pull-right">
						<?php echo $this->Form->input('city', array('type' => 'text', 'placeholder' => 'City' , 'label'=> false)); ?>
						</div>
					 
					</div>


				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
    <?php echo $this->fetch('content'); ?>
	
</body>
</html>
