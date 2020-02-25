<?php
/*
Template Name: worker
Template Post Type: post, page, event
*/
?>



<?php get_header(); ?> 

<div class="features">
    <div class="features_img-wrap">
      <img src="<?php echo get_template_directory_uri();?>/img/banner_hospital.jpg" alt="" class="features_img">
    </div>
     <?php if (have_posts()) {while (have_posts()) { the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="features_name">
          <h2> <?php the_title(); ?></h2>
        </div>
      </div>
    </div>

    <div class="hospital">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- <div class="news_title"><?php single_term_title(); ?></div> -->

           
                <article class='new_wrap'>
                  <div class="new_img"><?php the_post_thumbnail('post-thumb') ?></div>
                  


                  <div class="new_content">

                    <h1 class="new_name">
                      <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                  </h1>
                 <?php the_content(); ?>

                </div>
                   
                </article>
              <?php } //end while
            } //end if 
            else {
              echo wpautop( 'Постов для вывода не найдено.' );
            }
            ?>


            

          </div>
        </div>
      </div>
    </div>

<?php get_footer() ?>