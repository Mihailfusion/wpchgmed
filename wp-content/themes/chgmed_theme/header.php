<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/fa-viber.css"> 
  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./slick/slick.css">
  <link rel="stylesheet" href="./slick/slick-theme.css">
  <link rel="stylesheet" href="./css/hamburger.css">
  <link rel="stylesheet" href="./css/style.css"> -->
  <?php wp_head(); ?>


  <title> <?php bloginfo('description'); ?>  </title>
</head>

<body>

  <div class="container">
    <div class="row header">
      <div class="header-logo col-xl-4 col-lg-4 col-md-5 col-sm-7 col-12">
        <a class="main-link" href="http://localhost/chgmed/"></a>
        <div class="header-logo_img">
          <?php the_custom_logo( $blog_id ); ?>
          <!-- <img src="/img/logo.png" alt="logo"> -->
        </div>
        <div class="header-logo_name">
          <?php  the_field('name_organization', 2)?>
        </div>
      </div>


      <div class="col-xl-3 col-lg-3 d-none d-lg-block">
        <div class="description">
          <p><?php  the_field('descr_organization', 2)?></p>
        </div>

      </div>
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 offset-md-0 offset-sm-1 col-12">
        <div class="timing">
          <p><?php  the_field('schedule_organization', 2)?></p>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
        <div class="link">
          <span class="link-small">Записатся на прием</span>
          <?php  the_field('phone_organizaton', 2)?>
          

          <input class="button link-button" type="button" onclick="window.location.href = 'https://www.mobimed.ru/';" value="Онлаин запись">

        </div>
      </div>
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-6 social">
        <div class="social-keep">
          <div class="social-brick"><a class="social-brick_link" href="#"><i class="fa fa-vk fa-lg"></i></a></div>
          <div class="social-brick"><a class="social-brick_link" href="#"><i class="fa fa-instagram fa-lg"></i></a>
          </div>
          <div class="social-brick"><a class="social-brick_link" href="#"><i class="fa fa-telegram fa-lg"></i></a></div>
          <div class="social-brick"><a class="social-brick_link" href="#"><i class="fa fa-viber fa-lg"></i>
            </a></div>
        </div>
      </div>
    </div>
    <!-- --------------END ROW HEADER -------------- -->
  </div>
  <!-- ---------- END CONTAINER HEADER --------- -->


  <!-- ---------------- SECTION NAV --------------- -->
 
<div class="nav">
 <?php 

    wp_nav_menu(array(
      'theme_location'  => 'nav',
      // 'menu'            => 'top_menu', 
      'container'       => '', 
      'container_class' => '', 
      'container_id'    => '',
      'menu_class'      => 'container nav-wrap', 
      'menu_id'         => '',
      'echo'            => true,
      // 'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          =>  '',
    ));


  ?>
 

 <div class="mobil-nav" id='show'>
      <div class="burger burger-3">
        <input class="dn" type="checkbox" name="burger3" id="burger3" />
        <label for="burger3"><span class="bar bar-1"></span><span class="bar bar-2"></span><span class="bar bar-3"></span>
        </label>
        <label for="burger3" id="r0">МЕНЮ</label>
      </div>
    </div>



    <div class="overlay">
      
    </div>


 <?php 

    wp_nav_menu(array(
      'theme_location'  => 'footer-nav',
      // 'menu'            => 'top_menu', 
      'container'       => '', 
      'container_class' => '', 
      'container_id'    => '',
      'menu_class'      => 'mobil-nav_menu', 
      'menu_id'         => 'close',
      'echo'            => true,
      // 'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          =>  '',
    ));


  ?>
    <!-- <ul class="mobil-nav_menu" id="close">
      
      <li><a class="a mobil-nav_elem" href="#">поликлинника</a></li>
      <li><a class="a mobil-nav_elem" href="#">Стационар</a></li>
      <li><a class="a mobil-nav_elem" href="#">платное</a></li>
      <li><a class="a mobil-nav_elem" href="#">скорая</a></li>
      <li><a class="a mobil-nav_elem" href="#">контакты</a></li>
    </ul>  -->
  


</div>




 <!-- <div class="nav "> 



  
    <ul class="container nav-wrap">
      <li class="nav-wrap_elem"> <a class="nav-wrap_a" href="#">menu item1</a>
        <ul class="sub-menu">
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
        </ul>
      </li>
      <li class="nav-wrap_elem"> <a class="nav-wrap_a" href="#">menu item2</a>
        <ul class="sub-menu">
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
        </ul>
      </li>
      <li class="nav-wrap_elem"> <a class="nav-wrap_a" href="#">menu item3</a>
        <ul class="sub-menu">
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
        </ul>
      </li>
      <li class="nav-wrap_elem"> <a class="nav-wrap_a" href="#">menu item4</a>
        <ul class="sub-menu">
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
          <li> <a href="#">submenu item</a></li>
        </ul>
      </li>
      <li class="nav-wrap_elem"> <a class="nav-wrap_a" href="#">menu item5</a>
        <ul class="sub-menu">

        </ul>
      </li>

    </ul> 

    <div class="mobil-nav" id='show'>
      <div class="burger burger-3">
        <input class="dn" type="checkbox" name="burger3" id="burger3" />
        <label for="burger3"><span class="bar bar-1"></span><span class="bar bar-2"></span><span class="bar bar-3"></span>
        </label>
        <label for="burger3" id="r0">МЕНЮ</label>
      </div>
    </div>



    <div class="overlay">
      
    </div>

    <ul class="mobil-nav_menu" id="close">
      
      <li><a class="a mobil-nav_elem" href="#">поликлинника</a></li>
      <li><a class="a mobil-nav_elem" href="#">Стационар</a></li>
      <li><a class="a mobil-nav_elem" href="#">платное</a></li>
      <li><a class="a mobil-nav_elem" href="#">скорая</a></li>
      <li><a class="a mobil-nav_elem" href="#">контакты</a></li>
    </ul> 
  


  </div> -->
 
