
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php bloginfo('name') ?></title>  
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="page">
      <div class="header">
        <div class="container header__inner">
          <div class="row header__top">
            <div class="header-top">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12">
                    <div class="header-top__button"><a href="http://localhost/work/wordpress/контакты" class="button"> Контакты				</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-6">
                  <form  method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                
                      <div class="input">
                          
                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="input__search"/>
                        <input type="submit" id="searchsubmit" class="input__button" />
                       
                      </div>
                     
                    </form>
                  </div>
                  <div class="col-md-6">
                    <div class="header-top__link">
                      <div class="language-link">
                        <ul>
                          <li class="language-link__item"><a href="">FR</a></li>
                          <li class="language-link__item"><a href="">KK</a></li>
                          <li class="language-link__item"><a href="">RU</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row header__mid">
            <div class="header-mid">
              <div class="col-md-2"><?php the_custom_logo() ?> </div>
              <div class="col-md-6">
                <div class="header-mid__title">
                  <div class="title">
                    <h1 class="title__top">culturefrance.kz</h1>
                    <div class="title__bottom">Французский Альянс и сеть французской культуры в Казахстане</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row header__bottom">

          <?php wp_nav_menu(array('theme_location'  => 'menu', 'menu_class' => 'nav', )) ?>          
           
          </div>
        </div>
      </div>

      <?php  ?>