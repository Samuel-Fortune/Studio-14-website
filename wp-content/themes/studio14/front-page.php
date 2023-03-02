<?php get_header();

$post_id = get_the_ID();
?>
<!--MAIN-->
<main id="primary" class="site-main">
    <div class="banner">
        <div class="site-wrapper">
            <div class="banner1">
                <span>
                    <h2>Together as partners we’ve built <br> better. See what we’re up to.
            
                    <?php echo get_field('title', $post_id); ?>
                    </h2>
                </span>
                <div class="filter-posts">
                    <span>
                        <h4>Filter Posts:</h4>
                    </span>
                    <span>
                        <h4>All Categories</h4>
                        <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-down.png" alt="">
                    </span>
                </div>
            </div>
            <div class="banner2">
                <?php

                    $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    // 'post_not_in' => [$post_id]
                    );
                    $result = new \WP_Query($args);
                    $post = the_post();

                    if($result->have_posts()){
                        $count3 = 0;
                        while ( $result->have_posts() ) {
                            $result->the_post();
                            $post_id = get_the_ID();
                            $the_post = get_post($post_id);
                            $post_content = strip_tags($the_post->$post_content);
                            $count3 ++;?>
                            <!--BLOG1-->
                            <div class="blog1">
                                <span class="blog-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </span>

                                <div class="content-wrapper">
                                    <span class="text-wrapper">
                                        <h3><?php echo get_the_title(); ?></h3>
                                        <p> <?php if($count3 === 1){
                                            echo truncate($post_content, 148);
                                        } else {?> 
                                        <?php echo truncate($post_content, 90); }?></p>
                                    
                                        <span class="read-more">
                                            <h4>Business</h4>
                                            <span>
                                                <h4>Read More</h4>
                                                <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-right.png" alt="">
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        <?php } 
                    } ?>
                <!--BLOG2-->
                <!-- <div class="blog2">
                    <span class="blog-image"><img src="<?php echo get_template_directory_uri() ?>/asset/image/Rectangle2.png" alt=""></span>
                    <div class="content-wrapper">
                        <span class="text-wrapper">
                            <h3>Coindealer launches on NYSE</h3>
                            <p>Very experienced software developers take <br> it upon themselves to oversees programme. </p>
                        
                            <span class="read-more">
                                <h4>Business</h4>
                                <span>
                                    <h4>Read More</h4>
                                    <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-right.png" alt="">
                                </span>
                            </span>
                        </span>
                    </div>
                </div> -->
                <!--Blog3 -->
                <!-- <div class="blog3">
                        <span class="blog-image"><img src="<?php echo get_template_directory_uri() ?>/asset/image/blog3.png" alt=""></span>
                        <div class="content-wrapper">
                            <span class="text-wrapper">
                                <h3>Fibre Optic Network in West Africa</h3>
                                <p>Very experienced software developers take it upon themselves to oversees programme. </p>

                                <span class="read-more">
                                    <h4>Business</h4>
                                    <span>
                                        <p>Read More</p>
                                        <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-right.png" alt="">
                                    </span>
                                </span>
                            </span>
                        </div>
                </div> -->
                <!--BLOG4 -->
                <!-- <div class="blog4">
                        <span class="blog-image"><img src="<?php echo get_template_directory_uri() ?>/asset/image/blog4.png" alt=""></span>
                        <div class="content-wrapper">
                            <span class="text-wrapper">
                                <h3>Coindealer launches on NYSE</h3>
                                <p>Very experienced software developers take it upon themselves to oversees programme. </p>

                                <span class="read-more">
                                    <h4>Business</h4>
                                    <span>
                                        <p>Read More</p>
                                        <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-right.png" alt="">
                                    </span>
                                </span>
                            </span>
                        </div>
                </div> -->
                <!--BLOG5 -->
                <!-- <div class="blog5">
                        <span class="blog-image"><img src="<?php echo get_template_directory_uri() ?>/asset/image/blog5.png" alt=""></span>
                        <div class="content-wrapper">
                            <span class="text-wrapper">
                                <h3>Coindealer launches on NYSE</h3>
                                <p>Very experienced software developers take it upon themselves to oversees programme. </p>

                                <span class="read-more">
                                    <h4>Business</h4>
                                    <span>
                                        <p>Read More</p>
                                        <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-right.png" alt="">
                                    </span>
                                </span>
                            </span>
                        </div>
                </div> -->
                
            </div>

        </div>
    </div>
    
</main>

<?php

get_footer();