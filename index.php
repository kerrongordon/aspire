<?php get_header(); ?>
  <div class="container">
  	<div class="row">
  		<div class="col-md-9">
  <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
    
                
                	
                <article id="<?php the_ID(); ?>" class="post-s">
                	<header>
                		<div class="">
						<?php if ( has_post_thumbnail()) : ?>
   							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail( 'featurette-image img-responsive' ); ?></a>
   						<?php else : ?>
   							<img class="img-responsive" src="http://placehold.it/826x516/E8117F/ffffff">
 						<?php endif; ?>
                		</div>
                	</header>
                	<body class="post-infor">
                		<div class="">
                		<?php the_title( '<h2 class="entry-title featurette-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
                		<div>By <a><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></a> <span><i class="fa fa-clock-o"></i> <time><?php the_time('F jS, Y');?></time></span></div>
                		<p><i class="fa fa-inbox"></i> Categories: <?php the_category(' &gt; '); ?></p> 
                		<p class="lead"><?php the_excerpt(); ?></p>	 
                		</div>
                	</body>
                </article>
                	
                
                
            <?php endwhile; ?>
            </div>
            <div class="col-md-3">
            		<?php if ( dynamic_sidebar('Home right sidebar') ) : else : endif; ?>
            	</div>
            	<nav class="wp-prev-next col-md-12">
							<ul class="pager">
								<li><?php previous_posts_link() ?></li>
								<li><?php next_posts_link() ?></li>
							</ul>
						</nav>
            <?php else : ?>
                <?php // No Posts Found ?>
  <?php endif; ?> 
  </div>
    </div><!-- container -->
<?php get_footer(); ?>
