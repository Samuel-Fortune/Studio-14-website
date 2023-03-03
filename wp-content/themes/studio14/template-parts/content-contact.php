<?php

$page_id = get_the_ID();
?>
    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="site-wrapper">
            <div class="contact-title-wrapper">
                <span>
                    <h2>Want to know more?</h2>
                    <p>Want to find out more about Studio 14 and how we can help, then get in touch using the contact from or the details below and we will get back to you as soon as possible.</p>
                </span>

            </div>

        </div>
    </section>

    <section class="contact-form-section">
        <div class="site-wrapper">
            <div class="form-wrapper">
                <div class="contact-text">
                    <span>
                        <h1>Lets <br> make something happen.</h1>
                    </span>
                </div>
                <div class="contact-form">
                    <span class="form-wrapper">
                        <form action="">
                            <input type="name" name="full-name" id="" placeholder="Full Name">
                            <input type="email" name="email" id="" placeholder="Email">
                            <input type="number" name="number" id="" placeholder="Phone No.">
                            <input type="text" name="text" id="" placeholder="Message">

                            
                            <button>Submit</button>
                            
                        </form>
    
                    </span>
                </div>
                
            </div>

        </div>
        
    </section>

    <section class="address-section">
        <div class="site-wrapper">
            <div class="address-wrapper">
                <div>
                    <span>
                        <h2>Office Address</h2>
                        <p>Studio 14, Unit 202B, The Big Peg 120 Vyse Street, Hockley, Birmingham B18 6ND, United Kingdom</p>
                        <p>Email: daniel@studio14online.co.uk Tel: +44 (0) 121 439 3031</p>
                    </span>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas map">
                    
                    <iframe
                        width="600"
                        height="213"
                        id="gmap_canvas"
                        src="<?php echo the_field('address_map', $post_id); ?>"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                    ></iframe
                    ><a href="https://123movies-to.org"></a><br ><style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 213px;
                        width: 100%;
                    }</style
                    ><a href="https://www.embedgooglemap.net"
                    >google maps for my website</a
                    ><style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 208px;
                        width: 100%;
                    }
                    </style>
                    </div>
                </div>

            </div>

        </div>

    </section>


<!-- #post-<?php the_ID(); ?> -->