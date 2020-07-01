<?php get_header(); ?>
<div class="about-us" id="about_us" >
    <div class="container">
        <h2 class="title">О нас</h2>
        <div class="about-us-wrap">            
            <?php
            $about_posts = get_field('about-us-item');
            if( $about_posts ): ?>
                <?php foreach( $about_posts as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <div class="about-us-item">
                        <div class="about-us-title"><?php the_title(); ?></div>
                        <?php the_content(); ?>
                    </div>
                <?php endforeach; ?>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="our-skills bg-navy" id="our_skills">
    <div class="container">
        <h2 class="title">Мы умеем</h2>
        <p class="our-skills-descr">Наша команда имеет большой опыт работы со следующими  технологиями:</p>
        <div class="our-skills-wrap">
            <?php
            $skills_posts = get_field('skills');
            if( $skills_posts ): ?>
                <?php foreach( $skills_posts as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post);

                    $tag_ids = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) ); ?>
                    
                <div class="our-skills-item">
                    <?php 
                        
                        if (get_the_tag_list()) { // есть ли вообще тэги
                            $tags = get_the_terms( $post->ID, 'post_tag'); // получаем все тэги
                            foreach ($tags as $tag) {
                                //echo $tag->name; // рисуем как нужно
                                ?>
                                    <p><?php echo $tag->name; ?></p>
                                <?php 
                            }
                        }
                    ?>
                    
                    </div>

                <?php endforeach; ?>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>            
        </div>
    </div>
</div>
<div class="our-works" id="our_works">
    <div class="container works-container">
        <h2 class="title">Наши работы</h2>
        <div class="our-works-wrap">
            <?php
                echo do_shortcode('[smartslider3 slider="2"]');
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>