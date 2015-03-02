<?php get_header(); ?>
<div class='row'>
      <h2>Lenguajes</h2>
      <!-- Loop -->
      <div class='post-group default row'>
      	<div class='nine columns post-group-content'>
        	<?php
        	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Visualización del resumen de la entrada -->
            <article <?php post_class( 'leftaside' ); ?>>
            	<header class="post-header">
            		<h1 class="post-title entry-title">
            			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            		</h1>
            	</header>
            	<div class="row">

            		<section class="post-content">
            			<p class="hatom-meta meta date updated"> <time datetime="<?php echo the_time('Y-m-d'); ?>" ><?php the_time('m/d/Y'); ?></time>
            			<?php the_post_thumbnail( 'medium-thumbnail' ); ?>
            			<?php the_excerpt( __( 'Read On…', 'frank_theme' ) ); ?>
            		</section>
            	</div>              
              <div class='lenguajes'>
                <?php echo get_the_term_list( $post->ID, 'lenguaje', '', ', ', '' ); ?>
              </div>
            </article>        		
            <!-- Visualización del resumen de la entrada -->
        	<?php endwhile; ?>
        	<?php endif; ?>
      	</div>
      </div>
      <!-- Loop -->      
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>