<?php
//© Olha Birieva
//©Andrii Biriev
use Brilliant\HTML\BHTML;
use Brilliant\CMS\BLang;

$bhtml=BHTML::getInstance();
$bhtml->add_meta('viewport','width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');

$bhtml->add_meta('','text/html; charset=utf-8','Content-Type');
$bhtml->add_meta('','IE=edge','X-UA-Compatible');

?><!DOCTYPE html>
<html class="no-js"  lang="en">
<head>
	<?php $bhtml->out_head();?>
</head>
<body lang="<?php echo(BLang::$langcode_web) ?>" itemscope itemtype="http://schema.org/WebPage">
	<!-- footer -->
	<footer class="footer">
		<h3>Stay connected with me</h3>
	<div class="container footer-bot">
		<div class="row">
			<!-- logo -->
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    		<img src="/images/footer-logo.png" alt="Olha Birieva" title="Olha Birieva"/>
                    		<p class="copy-right">&copy; Olha Birieva 2018.</p>
			</div>
			<!-- logo -->

			<!-- address -->
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 padding-top">
				<address>
					<p>56 Mercers Road</p>
					<p>N19 4PR</p>
					<p>London, United Kingdom</p>
				</address>
	                    </div>
	                    <!-- address -->

			<!-- email -->
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 padding-top">
                            <p><a href="mailto:olha.birieva@gmail.com">olha.birieva@gmail.com</a></p>
                            <p><a href="tel:+447517638490">07517&nbsp;638490</a></p>
			</div>
			<!-- email -->

			<!-- social -->
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 padding-top">
				<ul class="social">
					<li><a href="https://www.flickr.com/photos/154653340@N07/" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/o.konserva" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/olha.birieva" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<!-- social -->
		</div>
	</div>
</footer>
<!-- footer -->
<?php
//© Olha Birieva
?>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/assets/jquery.min.js"><\/script>')</script>
	<script src="js/assets/plugins.js" type="text/javascript"></script>
	<script src="js/assets/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>	
</body>
</html>
