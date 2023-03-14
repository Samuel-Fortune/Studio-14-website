<?php
/**
 * 
 * Template name: Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio14
 */
 get_header();
$post_id = get_the_ID();

?>

<?php the_content(); ?>
<!-- Mobile Nav menu
<nav class="menu">
    <ul class="list">
        <li>About Us</li>
        <li>Blog</li>
        <li>Our Work</li>
        <li>Contact</li>
    </ul>
</nav> -->
<!--MAIN-->
<main id="primary" class="site-main">
    <div class="banner">
        <div class="site-wrapper">
            <div class="banner1">
                <span>
                    <h2><?php echo get_field('title', $post_id); ?> <br> <?php echo get_field('title_2', $post_id); ?>
                    </h2>
                </span>
                <div class="filter-posts">
                    <span>
                        <h4><?php echo get_field('filter_post', $post_id); ?></h4>
                    </span>
                    <span>
                        <h4><?php echo get_field('all_categories', $post_id); ?></h4>
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
                        $post_content = strip_tags($the_post->post_content);
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
                                        <?php echo truncate($post_content, 80); }?></p>
                                    
                                        <span class="read-more">
                                            <h4><a href="#">Business</a></h4>
                                            <span>
                                               <p><a href="<?php echo get_permalink(); ?>">Read More</></a></p>
                                                <img src="<?php echo get_template_directory_uri() ?>/asset/icons/arrow-right.png" alt="">
                                            </span>
                                        </span>
                                    </span>
                                </div>
                        </div>
                    <?php } 
                } ?>
                
                <span class="lighting2">
                    <img src="<?php echo get_template_directory_uri() ?>/asset/image/lighting2.png" alt="">
                </span>
            </div>
        </div>
    </div>
    
</main>

<?php

get_footer();