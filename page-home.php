<?php get_header(); ?>
  <section>
  	<div class=""><?php if ( dynamic_sidebar('slide') ) : else : endif; ?></div>
  </section>
  <section>
  	
		<div class="container">
			<div class="row">
				<div class=""><?php if ( dynamic_sidebar('home main') ) : else : endif; ?></div>
			</div>
		</div>

  </section>
  <section id="contact" class="contact-header">
  	<div class="container text-center">
  		<div class="head-title">
  			<h1 class="">Get in Touch</h1>
          		<div class="line"></div>
        	<h2 class="">We're currently accepting new client projects.</h2>
        </div>
  	</div>  	
  </section>
  	
  <section class="contact-form-color">
  	<div class="container">
			<div class="row contact">
				<div class=""><?php if ( dynamic_sidebar('contact') ) : else : endif; ?></div>
			</div>
		</div>
  </section>
<?php get_footer(); ?>