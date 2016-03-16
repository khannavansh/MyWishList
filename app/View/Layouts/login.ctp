<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<?php echo $this->Html->charset(); ?>
 <?php 	$title_for_layout = "Project-Vansh"; ?>
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
	?>
    <link rel="shortcut icon" href="/Project/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Project/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Project/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Project/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Project/img/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>


<div id="fb-root"></div>
 <script>
(function(d, s, id) 
{
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>


	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li>
								<div class="fb-like" data-href="https://www.facebook.com/Mywishlistu87ujhg87/?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
								</li>
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
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->






<?php echo $this->fetch('content'); ?>


</body>
</html>