<div class="container-fluid main_bg">
      <div class="row">
           <div class="text-center">
                <!--<ul class="top-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#community">Photoapp</a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="logo"></a></li>
                    <li><a href="#design">Design</a></li>
                    <li><a href="#download">Download</a></li>-->
                    <?php wp_nav_menu( array( 'theme_location' => 'Menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                <!--</ul>-->
            </div>

            <div class="description text-center">
                <h1><?php the_field('slogan_big'); ?></h1>
                <p><?php the_field('slogan_small'); ?></p>
                <button type="submit" >get started</button>
            </div>

            <div class="social-icons text-center">
                <img src="<?php bloginfo('template_url'); ?>/img/fa-twitter.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/img/fa-flickr.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/img/fa-dribbble.png" alt="">
            </div>
        
        </div>
    </div>