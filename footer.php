	<footer class="footer">
		<div class="container">
			<div class="row">
			<div class="col-md-3"><?php if ( dynamic_sidebar('footer1') ) : else : endif; ?></div>
			<div class="col-md-3"><?php if ( dynamic_sidebar('footer2') ) : else : endif; ?></div>
			<div class="col-md-3"><?php if ( dynamic_sidebar('footer3') ) : else : endif; ?></div>
			<div class="col-md-3"><?php if ( dynamic_sidebar('footer4') ) : else : endif; ?></div>
			</div>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
  </body>
</html>