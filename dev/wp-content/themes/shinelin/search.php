

<?php get_header();?>
   

   <h2 class="page-heading">Search Results for <?php echo get_search_query()?></h2>

<?php if(have_posts()){?>
<section>
<?php 
       while(have_posts(  )){
           the_post(  );
   ?>
   <div class="card">
       <div class="card-image">
           <a href="<?php the_permalink( );?>">
               <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>" alt="Card Img">
           </a>
       </div>
       <div class="card-description">
           <a href="<?php the_permalink( );?>">
               <h3><?php the_title();?></h3>
           </a>
           <div class="card-meta">
               Posted by <?php the_author();?> on <?php the_time('F j, Y');?>
               <?php if(get_post_type()=='post'){?>
                in <a href="<?php echo get_the_category_list();?>"></a>
            <?php } ?>
               <a href="#"><?php get_the_category_list();?></a>
           </div>
           <p><?php echo wp_trim_words( get_the_excerpt( ),30 );?></p>
       </div>
       <a href="<?php the_permalink( );?>" class="btn-readmore">Read More</a>
   </div>

       <?php }
       wp_reset_query(  );
       ?>
  
</section>
       <?php }else{?>
           <div class="no-result">
               <h2>Couldn't find the result you want.</h2>
               <h3>Check the following links:</h3>
               <ul>
                    <li><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li><a href="<?php echo site_url('blog') ?>">Blogs</a></li>
                    <li><a href="<?php echo site_url('projects') ?>">Projects</a></li>
                    <li><a href="<?php echo site_url('about') ?>">About</a></li>
               </ul>
           </div>
       <?php }?>

<div class="pagination">
  <?php echo paginate_links( );?>
</div>

<?php get_footer() ?>
