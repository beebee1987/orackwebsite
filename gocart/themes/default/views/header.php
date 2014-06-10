<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>


<?php if(isset($meta)):?>
	<?php echo $meta;?>
<?php else:?>
<meta name="Keywords" content="Shopping Cart, eCommerce, Orack">
<meta name="Description" content="Orack is an Software Solution">
<?php endif;?>

<?php echo theme_css('bootstrap.min.css', true);?>
<?php echo theme_css('styles.css', true);?>
<?php echo theme_css('jumbotron.css', true);?>


<!--[if (lt IE 9)&(!IEMobile)]>
<?php echo theme_css('enhanced.css', true);?>
<![endif]-->

<?php echo theme_js('jquery.js', true);?>
<?php echo theme_js('bootstrap.js', true);?>
<?php echo theme_js('squard.js', true);?>
<?php echo theme_js('equal_heights.js', true);?>

<?php
//with this I can put header data in the header instead of in the body.
if(isset($additional_header_info))
{
	echo $additional_header_info;
}

?>
</head>

<body>
		
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="company-logo navbar-brand" href="<?php echo site_url();?>"><?php echo $this->config->item('company_name');?></a>	
				
			</div>
	
			<div class="navbar-collapse collapse navHeaderCollapse">
				<ul class="nav navbar-nav">						
					<li class="<?php echo (!isset($base_url) || $base_url == 'homepage') ? 'active': '-'?>"><a href="<?php echo base_url()?>">HOME</a></li>
					<li class="<?php echo ($base_url == 'about') ? 'active': '-'?>"><a href="<?php echo base_url('about') ?>">ABOUT</a></li>
					<li class="<?php echo ($base_url == 'services') ? 'active': '-'?>"><a href="<?php echo base_url('services') ?>">SERVICES</a></li>
					<!--li><a href="#">CAREER</a></li-->
					<li class="<?php echo ($base_url == 'contact') ? 'active': '-'?>"><a href="<?php echo base_url('contact') ?>">CONTACT</a></li>					
				</ul>	
			</div>
		</div>
</div>
	
		

<?php
/*
End header.php file
*/