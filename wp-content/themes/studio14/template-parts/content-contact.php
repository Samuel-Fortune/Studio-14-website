<?php

$page_id = get_the_ID();
?>
    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="site-wrapper">
            <div class="contact-title-wrapper">
                <span>
                    <h2><?php echo the_field('contact_title', $page_id); ?></h2>
                    <p><?php echo the_field('contact_paragraph', $page_id); ?></p>
                </span>

            </div>

        </div>
    </section>

    <section class="contact-form-section">
        <div class="site-wrapper">
            <div class="form-wrapper">
                <div class="contact-text">
                    <span>
                        <h1><?php echo the_field('form_title', $page_id); ?> <br> <?php echo the_field('form_title_2', $page_id); ?></h1>
                    </span>
                </div>
                <div class="contact-form">
                    <span class="form-wrapper">
                        <form action="">
                            <?php echo the_field('contact_form', $page_id); ?>
                        </form>
    
                    </span>
                </div>
                <span class="lighting">
                    <img src="<?php echo get_template_directory_uri() ?>/asset/image/lighting.png" alt="">
                </span>
                
            </div>

        </div>
    
    </section>

    <section class="address-section">
        <div class="site-wrapper">
            <div class="address-wrapper">
                <div class="first">
                    <span class="wrap">
                        <h2><?php echo the_field('contact_address_header', $page_id); ?></h2>
                        <span>
                            <p><?php echo the_field('contact_address', $page_id); ?> <br> <?php echo the_field('contact_address_2', $page_id); ?></p>
                            
                            <p><?php echo the_field('email', $page_id); ?></p>
                        </span>
                    </span>

                    <span class="lighting2">
                        <img src="<?php echo get_template_directory_uri() ?>/asset/image/lighting2.png" alt="">
                    </span>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas map">
                    
                    <iframe
                        width="955"
                        height="610"
                        id="gmap_canvas"
                        src="<?php echo the_field('address_map', $page_id); ?>"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                    ></iframe
                    ><a href="https://123movies-to.org"></a><br ><style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 100%;
                        width: 100%;
                    }</style
                    ><a href="https://www.embedgooglemap.net"
                    >google maps for my website</a
                    ><style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 100%;
                        width: 100%;
                    }
                    </style>
                    </div>
                </div>

            </div>

        </div>

    </section>


<!-- #post-<?php the_ID(); ?> -->