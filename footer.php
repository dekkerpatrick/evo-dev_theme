<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evolution_Developmet
 */

?>



<?php wp_footer(); ?>

<!-- SIGNUP
=============================================================================== -->

<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- signup -->

<!-- FOOTER
=============================================================================== -->

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
			</div><!-- col -->
			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li class="list-inline-item"><a href="http://">Home</a></li>
						<li class="list-inline-item"><a href="http://">About</a></li>
						<li class="list-inline-item"><a href="http://">Resources</a></li>
						<li class="list-inline-item"><a href="http://">Contact</a></li>
						<li class="list-inline-item signup-link"><a href="http://">Sign up now</a></li>
					</ul>
				</nav><!-- nav -->
			</div><!-- col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; 2018 Evolution Development</p>
			</div><!-- col -->
		</div>
	</div><!-- container -->
</footer>

<!-- MODAL
=============================================================================== -->

<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"> Subscribe to our Mailing List</i></h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			</div><!-- modal-header -->

			<div class="modal-body">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
				<form class="form-inline" role="form">
					<div class="form-group">
						<label class="sr-only" for="subscribe-name">Your first name</label>
						<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
					</div><!-- form-group -->
					<div class="form-group">
						<label class="sr-only" for="subscribe-email">and your email</label>
						<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
					</div><!-- form-group -->

					<input type="submit" class="btn btn-danger" value="Subscribe!">
				</form>

				<hr>

				<p><small>By providing your email you consent to receiving occassional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->    
</div><!-- modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT
		Placed at the end of the document so the pages load faster!
=============================================================================== -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>


</body>
</html>
