<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<?php get_sidebar('left');?>

<div id="blogcontainer">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        
        <div class="postcontainer">
        
                <div class="postinfo">
                    <div class="categories author"><?php the_author_posts_link(); ?></div>
                    <div class="categories"><?php the_category('</div> <div class="categories">'); ?></div>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_sharing_toolbox"></div>
                    <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count= "horizontal">Tweet</a> -->
                </div>
                
                
                <div class="blogpost">
                    <div class="photocontainer">
                        <div class="posttitle"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h2></a></div>

			<?php if ( ! has_excerpt() ) {
      echo '';
} else { 
      the_excerpt();
} ?>


                        <div class="postphoto"><?php the_post_thumbnail(array(400,400)); ?>
                        </div>
                    </div>
                        <div class="clear"></div>

		<div class="fullpost"><p>FULL POST</p></div>

		<div class="clear"></div>

	<a href="#post-<?php the_ID(); ?>" class="readmore"><div class="arrow"></div></a>
<div class="clear"></div>

		<div id="post-<?php the_ID(); ?>" class="postcontent"><?php the_content(); ?>
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