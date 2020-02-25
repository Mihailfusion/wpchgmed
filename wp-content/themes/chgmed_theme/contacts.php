<?php
/*
Template Name: contacts 
*/
?>

<?php get_header(); ?> 


  <div class="features">
    <div class="features_img-wrap">
      <img src="<?php echo get_template_directory_uri();?>/img/banner_hospital.jpg" alt="" class="features_img">
    </div>
  
    <div class="container">
      <div class="row">
        <div class="features_name">
          <h2>контакты </h2>
        </div>
      </div>
    </div>
  </div>

<div class="contacts">
  <div class="container">
    <div class="row">
      <div class="contactsPage tabs">
        <div class="contactsPage-Tabs ">
          <div class="contactsPage-polyclinic_tab tab">Поликлинника</div>
          <div class="contactsPage-hospital_tab tab">Стационар</div>
        </div>
        <div class="map">



          <div id="polyclinic-map" class="tabs__content  active">
            <h2>Поликлинника</h2>
            <div class="polyclinic-map_wrap">
              <div class="polyclinic-map_map col-12 col-sm-12 col-md-7 col-lg-8 col-xl-9">
                <script type="text/javascript" charset="utf-8" async
                  src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aee6a7dea42d0e48b7960eace476b49c038c9fa9434973ff6e3a24911488f39d1&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
              </div>
  
              <div class="map-description">
                <h3>Адрес:</h3>
                <p>Черноголовка, Институтский проспект, 7А.</p>
                <h3>время:</h3>
                <p>Пн-Пт с 7:30 до 19:00</p>
                <p> Сб с 8:00 до 14:00</p>
                <p> Вс выходной</p>
  
              </div>
            </div>
          </div>


          
          <div id="hospital-map" class="tabs__content">
            <h2>Стационар</h2>
            <div class="polyclinic-map_wrap">
              <div class="polyclinic-map_map col-12 col-sm-12 col-md-7 col-lg-8 col-xl-9">
                <script type="text/javascript" charset="utf-8" async
                  src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5e42a317fb744986f21bfc598b2de2db5ed047b9ae8317566379aff63fd9894f&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
              </div>
  
              <div class="map-description">
                <h3>Адрес:</h3>
                <p>Черноголовка, Институтский проспект, 7А.</p>
                <h3>время:</h3>
                <p>Пн-Пт с 7:30 до 19:00</p>
                <p> Сб с 8:00 до 14:00</p>
                <p> Вс выходной</p>
  
              </div>
            </div>
          </div>
  
        </div>
      </div>
  
  
    </div>
  </div>
  </div>
</div>

 <script>

      $(".tabs__content").not(":first").hide();
      $(".tabs .tab").click(function() {
        $(".tabs .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".tabs__content").hide().eq($(this).index()).fadeIn()
      }).eq(0).addClass("active");


   </script>



<?php get_footer() ?>