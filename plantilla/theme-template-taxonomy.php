<?php get_header(); ?>
<h2>{Taxonomía}</h2>
<!-- Loop -->
<div class='loop-container'>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Visualización del resumen de la entrada -->
    <article class='post-excerpt'>
    	<header class="post-header">
    		<h1 class="post-title entry-title">
    			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    		</h1>
    	</header>
  		<section class="post-content">
  			<p> <time datetime="<?php echo the_time('Y-m-d'); ?>" ><?php the_time('m/d/Y'); ?></time>
  			<?php the_post_thumbnail( 'medium-thumbnail' ); ?>
  			<?php the_excerpt('Leer Más…'); ?>
  		</section>   
      <footer class='post-footer'>
        <?php echo get_the_term_list( $post->ID, '{taxonomia}', '', ', ', '' ); ?>
      </footer>
    </article>        		
    <!-- Visualización del resumen de la entrada -->
  <?php endwhile; ?>
  <?php endif; ?>
</div>
<!-- Loop -->      
<?php get_sidebar(); ?>
<?php get_footer(); ?>