    <?php get_header(); ?> 
  <!-- ---------- END SECTION NAV --------- -->

  <!--  -------------- SECTION MAIN-SLIDER -------------- -->
  <section class="slider">
    <div class="slide">

      <div class="slide-img">
        <img src="<?php echo get_template_directory_uri();?>/img/shutterstock_116623513.jpg">
        <div class="container">
          <div class="slide-title">
            <h5><?php  the_field('main_subtitle')?></h5>
            <h2><?php  the_field('main_title')?></h2><?php  the_field('main_desc')?>
          </div>
        </div>
      </div>

      <div class="slide-img">
        <img src="<?php echo get_template_directory_uri();?>/img/shutterstock_116623513.jpg">
        <div class="container">
          <div class="slide-title">
            <h5>Название чего то</h5>
            <h2>Что-то важное</h2>Описание чего-то важное
          </div>
        </div>
      </div>
      <div class="slide-img">
        <img src="<?php echo get_template_directory_uri();?>/img/shutterstock_116623513.jpg">
        <div class="container">
          <div class="slide-title">
            <h5>Название чего то</h5>
            <h2>Что-то важное</h2>Описание чего-то важное
          </div>
        </div>
      </div>

      <div class="slide-img">
        <img src="<?php echo get_template_directory_uri();?>/img/wp3013299.png">
      </div>
    </div>

    <div class="container">
      <div class="slidenav">
        <div class="slide-arrow_left"><i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i></div>
        <div class="dots"></div>
        <div class="slide-arrow_right"><i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i></div>
      </div>
    </div>

  </section>

  <!--  -------------- END MAIN-SLIDER -------------- -->

  <!--  ------------- SECTION LAST NEWS ------------- -->
  <section class=" container lastnews">
    <div class="lastnews-content">



<?php
  // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 2,
	'category'    => 10,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>
    <article class="lastnews-news">
        <h4 class="lastnews-news_title">
          <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
          </a>
        </h4>
        <a href="<?php the_permalink(); ?>"><?php the_excerpt() ?></a>
      </article>
  <?php
    // формат вывода the_title() ...
}

wp_reset_postdata();


?>

      <!-- <div class="lastnews-news">
        <h4 class="lastnews-news_title">Заголовок новости</h4>
        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat velit libero ad praesentium rerum
          aperiam
          voluptatibus, culpa aut ipsum ipsam.</span>
      </div>

      <div class="lastnews-news">
        <h4 class="lastnews-news_title">Заголовок новости</h4>
        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima ducimus natus perferendis, accusamus
          labore
          saepe nisi assumenda laudantium laborum numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </span>
      </div> -->
    </div>

  </section>

  <!--  ------------- END LAST NEWS ------------- -->


  <!--  ------------- SECTION ABOUT ------------- -->

  <section class="about">
    <div class="container">
      <div class="row">
        <div class="about-description col-xl-6 col-lg-6 col-md-12">
          <div class="about-description_title">
            Lorem ipsum dolor sit amet.
          </div>
          <div class="about-description_text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem illum reiciendis earum eos asperiores laborum
            itaque veniam blanditiis nisi iure explicabo doloribus quibusdam nobis dolorem, rerum, amet voluptates
            voluptatum? Voluptas?
          </div>
        </div>
        <div class="about-report col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <h5>Lorem, ipsum dolor.</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum numquam magni beatae autem tenetur,
            maiores natus libero nam quibusdam ipsum, veniam in mollitia, a totam quasi iste commodi perferendis
            accusamus!</p>

        </div>


        <div class=" about-photo col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <img class="about-photo_img" src="<?php echo get_template_directory_uri();?>/img/2.jpg" alt=""
            class="about-photo_img">
          <div class="about-photo_description">
            Lorem ipsum dolor sit amet.
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--  ------------- END SECTION ABOUT ------------- -->



  <!--  ---------------- NEWS SECTION --------------- -->
  <section class="news">
    <div class="container">
      <div class="row">
        
      <?php
  // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 4,
	'category'    => 10,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>
     <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news_card">
          <div class="news_title">
            <h4><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
          </a></h4>
          </div>
          <div class="news_note"><a href="<?php the_permalink(); ?>"><?php echo wpautop( the_excerpt() ); ?></a></div>
        </article>

    <!-- <article class="lastnews-news">
        <h4 class="lastnews-news_title">
          
        </h4>
        
      </article> -->
  <?php
    // формат вывода the_title() ...
}

wp_reset_postdata();


?>

       
      <!-- </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news_card">
          <div class="news_title">
            <h4>Lorem, ipsum dolor.</h4>
          </div>
          <div class="news_note"></div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news_card">
          <div class="news_title">
            <h4>Lorem, ipsum dolor.</h4>
          </div>
          <div class="news_note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, repellendus
            necessitatibus. Maiores quasi magni modi quibusdam, rerum magnam quod libero facere aperiam quam ullam odit
            ab consectetur obcaecati ad voluptate.</div>
        </div> -->
      </div>
    </div>
  </section>
  <!--  --------------END NEWS SECTION --------------- -->


  <!--  -------------- WORKERS SECTION -------------- -->
  <section class="workers">
    <div class="container workers_pos">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <div class="row workers-slick">

              <?php
  // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 0,
  'category'    => 11,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>
     <!-- <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news_card">
          <div class="news_title">
            <h4><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
          </a></h4>
          </div>
          <div class="news_note"><a href="<?php the_permalink(); ?>"><?php echo wpautop( the_excerpt() ); ?></a></div>
        </article>
 -->

 <!-- ________ -->


    <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="<?php the_permalink(); ?>"> <div class="workers-slick_img_link_pod">подробнее</div> </a>
              <?php the_post_thumbnail('post-thumb') ?>
          </div>
          <div class="workers-slick_post">
            <h3> <?php the_title(); ?></h3>
            <?php echo wpautop( the_excerpt() ); ?>
          </div>


          <a class="workers-slick_link" href="<?php the_permalink(); ?>"><span>10.10.10 </span> подробнее</a>
        </div>

  <?php
    // формат вывода the_title() ...
}

wp_reset_postdata();


?>





        





        <!-- <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/2.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem,<br> ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div>


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
        </div>

        <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/3.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem,<br> ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div>


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
        </div>
        <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/2.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem, <br>ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div>


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
          </div>
        <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/3.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem,<br> ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div>


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
        </div>
        <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/2.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem,<br> ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div>


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
        </div>

        <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/3.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem,<br> ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div>


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
        </div>
        <div class="workers-slick_slide col-xl-3 col-lg-4 col-md-6">
          <div class="workers-slick_img">
            <a class="workers-slick_img_link" href="#"></a>
            <img src="<?php echo get_template_directory_uri();?>/img/1.jpg" alt="">
          </div>
          <div class="workers-slick_post">
            <h3>Lorem, <br> ipsum dolor.</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla
            aliquam recusandae incidunt molestias
            sunt tenetur voluptate. Libero, nesciunt nam.
          </div> 


          <a class="workers-slick_link" href="#"><span>10.10.10 </span> подробнее</a>
        </div>-->


      </div>
      <div class="workers-slick_left"><i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i></div>
      <div class="workers-slick_right"><i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i></div>
    </div>
  </section>
  <!--  ------------ END WORKERS SECTION ------------ -->
  <!--  --------------- FOOTER --------------- -->
<?php get_footer() ?>