<?php get_header();?>
    <div id="banner">
            <h1>/ShineLin Website/</h1>
            <h2>A place to live happy</h2>
    </div>

    <main>
        <a href="<?php echo site_url('/blog');?>">
            <h2 class="section-heading">All Blogs</h2>
        </a>

        <section>
            <?php 
                $args = array(
                    'post_type'=> 'post',
                    'posts_per_page' => 2,
                );
                $blogposts = new WP_Query($args);

                while($blogposts->have_posts(  )){
                    $blogposts-> the_post(  );

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
                    <p><?php echo wp_trim_words( get_the_excerpt( ),30 );?></p>
                </div>
                <a href="<?php the_permalink( );?>" class="btn-readmore">Read More</a>
            </div>

                <?php }
                wp_reset_query(  );
                ?>
           
        </section>
        
        <a href="<?php echo site_url('projects');?>">
            <h2 class="section-heading">Projects</h2>
        </a>
    

        <section>
            <?php 
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 2,
            );

            $projectposts = new WP_Query($args);
            while($projectposts->have_posts(  )){
                $projectposts-> the_post();
            ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink( )?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(  ));?>" alt="Card Img">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title( );?></h3>
                    </a>
                <p><?php echo wp_trim_words( get_the_excerpt(),30);?></p>
                </div>
                <a href="<?php the_permalink();?>" class="btn-readmore">Read More</a>
            </div>

            <?php
            }
            wp_reset_query(  );
            ?>

        </section>

        <h2 class="section-heading">Source Code</h2>
        <section id="section-source">
            <a href="#">Github Profile</a>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi ab, voluptatibus ex possimus perspiciatis libero porro, tempore voluptas eius suscipit ea reprehenderit nostrum dolorum? Necessitatibus provident nihil accusamus voluptatem.
            </p>
        </section>

   
<?php get_footer() ?>
