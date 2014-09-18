<?php get_header(); ?>


<?php get_sidebar('left'); ?>

<div id="blogcontainer">

		<img src="wp-content/themes/starkerschild/photos/CADBigLogoWhite.png" id="circlelogoresponsive" height="75px" width="75px">
                
                <img src="<?php echo get_stylesheet_directory_uri() ?>/photos/top.png" class="topnew">
        
    <a class="customlink" data-target="prev">
    <span class="glyphicon glyphicon-chevron-left" style="float: left; margin-top: 70px; font-size: 1.5em;"></span>
        </a>
    <a class="customlink" data-target="next">
    <span class="glyphicon glyphicon-chevron-right" style="float: right; font-size: 1.5em; margin-top: 70px;"></span>
        </a>
    <div id="slider">
        
        <section id="sectionone">
            <?php

            // Loop arguments
            $arguments = array(
                'tag' => 'featured',
                'showposts' => 3
                );
            $featured_query = new WP_Query( $arguments );
                while ($featured_query->have_posts() ) : $featured_query->the_post();

            ?> 
    
            <div class="toppost">
                    <div class="toptitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></div>
                    <?php if ( ! has_excerpt() ) {
      echo '';
} else { 
      the_excerpt();
} ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </section>
        
        
        
        <section id="sectiontwo">
        
        <?php
            
            $args = array(
                'tag' =>'featuredtwo',
                'showposts' => 3
            );

        $featured_query_two = new WP_Query ( $args );
            while ($featured_query_two->have_posts() ) : $featured_query_two->the_post();

        ?>
            
            <div class="toppost">
                    <div class="toptitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a></div>
                    <?php if ( ! has_excerpt() ) {
      echo '';
} else { 
      the_excerpt();
} ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        
        </section>
        
        
        
    </div>
<div class="clear"></div>
    
	
        
        <img src="<?php echo get_stylesheet_directory_uri() ?>/photos/new.png" class="topnew">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        
        <div class="postcontainer">
        
                <div class="postinfo">
                    <div class="categories author"><?php the_author_posts_link(); ?></div>
                    <div class="categories"><?php the_category('</div> <div class="categories">'); ?></div>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_sharing_toolbox"></div>
                </div>
                
                
                <div class="blogpost">
                    <div class="photocontainer">
                        <div class="posttitle"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h2></a></div>

			<?php if ( ! has_excerpt() ) {
      echo '';
} else { 
      the_excerpt();
} ?>


                        <?php the_post_thumbnail(array(400,400)); ?>
                        
                    </div>
                        <div class="clear"></div>

		<div class="fullpost"><p>FULL POST</p></div>

		<div class="clear"></div>

	<a href="#post-<?php the_ID(); ?>" class="readmore"><div class="arrow"></div></a>
<div class="clear"></div>

		<div id="post-<?php the_ID(); ?>" class="postcontent"><div class="contentbg"><?php the_content(); ?></div>
		 </div>
		<div class="clear"></div>
	
        </div>
        <!-- END PHOTO/CONTENT CONTAINER -->
            <div class="clear"></div>
        </div>
        <!-- END WHOLE POST CONTAINER -->

<?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>


 <!-- REALLY stop The Loop. -->


 <?php endif; ?>

</div>
    <!-- END MIDDLE BLOG CONTENT CONTAINER -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>