<?php
/*
Template Name: Main 
Template Post Type: post, page, event
*/
?>

<?php get_header(); ?> 



  <!-- ----------------------------------------------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --------------------------------------------  -->


  <div class="features">
    <div class="features_img-wrap">
      <img src="<?php echo get_template_directory_uri();?>/img/banner_hospital.jpg" alt="" class="features_img">
    </div>
    
    <div class="container">
      <div class="row">
        <div class="features_name">
          <h2><?php  the_field('main_title')?></h2>
        </div>
      </div>
    </div>

    <div class="hospital">
      <div class="container">
        <div class="row">
          <div class="hidden-sm col-md-3 ">
            <div class="sidebar_title">
              меню раздела
            </div>
            <ul class="sidebar">

 
  <?php dynamic_sidebar('side1'); ?>


              <!-- <li> <a href="#">Терапевтическое отделение</a></li>
              <li> <a href="#">Хирургическое отделение</a></li>
              <li> <a href="#">Реанимационное отделение</a></li>
              <li> <a href="#">Детское отделение</a></li>
              <li> <a href="#">Приемное отделение</a></li>
              <li> <a href="#">Отделение функциональной диагностики</a></li>
              <li> <a href="#">Эндоскопическое отделение</a></li>
              <li> <a href="#">Лучевая диагностика</a></li>
              <li> <a href="#">Отделение скорой помощи</a></li> -->
            </ul>

          </div>
          <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="hospital_title"><?php  the_field('main_title')?></div>
            <div class="hospital_subtitle">Госпитализация проводится круглосуточно, планово и экстренно, 365 дней в
              году.</div>
            <ul class="hospital_description">
              <li>Посещение больного только с 16.00 до 19.00 <br>
                В выходные и праздничные с 11.00 до 13.00 и с 16.00 до 19.00</li>
              <li>К тяжелобольным - вход по пропускам, выданным лечащим врачом до 19.00</li>
              <li>К больным, находящимся на платном режиме - вход в отделение в часы посещний, сменная обувь
                обязательна; вход в верхней
                одежде категорически воспрещен.</li>
              <li>Больных, находящихся на общем режиме, вызывают в холл вахтеры стационара.</li>
            </ul>

          </div>
        </div>
      </div>
    </div>



<?php get_footer() ?>