<?php
get_header();

$post_id = get_the_ID();
?>
<section class="main-blog-section" style="background-image: url{<?php echo
get_the_post_thumbnail_url(); ?>}">
    <div>
        
    </div>

</section>

<?php
get_footer();
?>