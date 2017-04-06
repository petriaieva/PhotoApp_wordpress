<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="script.js"></script>-->
      <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    <?php get_header(); ?>
    <div id="home" class="container-fluid home">
               <div class="row">
                   <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1">
                        <h4><?php the_field('home_title'); ?></h4>
                           <p><?php the_field('home_content'); ?></p>
                        <button type="submit" >get started</button>
                   </div>
                   <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                       <img src="<?php the_field('home_image'); ?>" class="img-responsive">
                   </div>
               </div>
    </div>
    
    <div id="design" class="container-fluid design">         
           <div class="row">
                   <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1">
                       <img src="<?php the_field('design_image'); ?>" class="img-responsive">
                    </div>
                   <div class="col-lg-3 col-lg-offset-4 col-md-3 col-md-offset-4 col-sm-3 col-xs-3 col-xs-offset-4">
                       <h4><?php the_field('design_title'); ?></h4>
                       <p><?php the_field('design_content'); ?></p>
                        <button type="submit" >learn more</button>
                        <p>01/05</p>
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                   </div>
            </div>
    </div>  
   
    <div id="community" class="container-fluid home">
               <div class="row">
                 <div class="col-lg-4 col-lg-offset-7 col-md-4 col-md-offset-7 col-sm-4 col-sm-offset-7 col-xs-4 col-xs-offset-7">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
                   </div>
                  <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1 text-center">
                        <img src="<?php the_field('community_image'); ?>" alt="">
                        <h5><?php the_field('community_title'); ?></h5>
                           <p class="mini"><?php the_field('community_content'); ?></p>

                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <img src="<?php the_field('image_1'); ?>" class="img-responsive">

                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                       <img src="<?php the_field('image_2'); ?>" class="img-responsive">
                   </div>   
               </div>
        </div>
        
         <div class="container-fluid community">
               <div class="row text-center">
                  <div class="description ">
                      <h2>subscribe to us community</h2>
                   </div>
               </div> 
               <div class="row">  
                  <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
                       <div class="input-group">
                          <input type="text" class="form-control" placeholder="YOU EMAL">
                          <span class="input-group-btn">
                            <button id="btn_community" class="btn btn-secondary" type="button">
                               <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> 
                            </button>
                          </span>
                        </div>
                   </div>     
               </div>
    </div>
    
    <div id="download" class="container-fluid design">         
           <div class="row text-center">
               <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <h5><?php the_field('download_title'); ?></h5>
                    <p id="p_download"><?php the_field('download_content'); ?></p>
                   <div class="btn-group">
                       <button type="button" class="btn btn_store">Apple store</button>
                       <button type="button" class="btn btn_stor_icon">
                          <img src="<?php bloginfo('template_url'); ?>/img/fa-apple.png" alt="">
                        </button>
                    </div>
                    <div class="btn-group">     
                       <button type="button" class="btn btn_store" >Play store</button>
                       <button type="button" class="btn btn_stor_icon">
                           <img src="<?php bloginfo('template_url'); ?>/img/fa-android.png" alt="">
                        </button>
                   </div>    
               </div>  
            </div>
            
          <?php get_footer(); ?>       
     </div>
    
<?php wp_footer(); ?>   
</body>
</html>


