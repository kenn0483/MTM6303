<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/page.jpg";?>">
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <?php echo get_the_title();?>
                     </div>   
                        <p class="section-container-spacer">
                        <?php the_content(); ?>  
                    </p>
               </div>
            </div>
        </div>
    </div>
</div>