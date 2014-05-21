<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>a</h4>
					<p><?php echo site_meta('address'); ?></p>
				</div><!-- /col-md-4 -->
				
				<div class="col-md-4">
					<h4>b</h4>
					<p>
                    <?php if(site_meta('acc_dribbble') !=''): ?>   
						<a href="<?php echo dribbble_url(); ?>">Dribbble</a><br/>
                    <?php endif; ?>
                    <?php if(site_meta('acc_twitter') !=''): ?> 
						<a href="<?php echo twitter_url(); ?>">Twitter</a><br/>
                    <?php endif; ?>
                    <?php if(site_meta('acc_facebook') !=''): ?>
						<a href="<?php echo facebook_url(); ?>">Facebook</a>
                    <?php endif; ?>
					</p>
				</div><!-- /col-md-4 -->
				
				<div class="col-md-4">
					<h4>c</h4>
					<p><?php echo site_meta('about'); ?></p>
				</div><!-- /col-md-4 -->
			
			</div><!-- /row -->
		
		</div><!-- /container -->
	</div><!-- /#footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo theme_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
	<script>
	    paypal.minicart.render();
	</script>

</body>
</html>