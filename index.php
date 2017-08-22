
<?php get_header(  ) ?>
      <div class="content">
        <div class="content__inner container">
          <div class="content__news">
            <div class="main-news row">
              <div class="col-md-7">
                <div class="news-banner">
                  <div class="news-banner__title">
                    <h1 class="main-title main-title_left">Главные новости</h1>
                  </div>
                  <div class="news-banner__banner">
                    <div class="main-slider">
                      <div class="main-slider__slider"> 
                        <ul class="bxslider">
                          <li>
                            <div class="news-slider"><img src="<?php  bloginfo( 'template_url' )?>/image/content/slider.jpg" alt="" title="perfect title" class="news-slider__image"/></div>
                          </li>
                          <li>
                            <div class="news-slider"><img src="<?php  bloginfo( 'template_url' )?>/image/content/slider2.jpg" alt="" class="news-slider__image"/></div>
                          </li>
                          <li>
                            <div class="news-slider"><img src="<?php  bloginfo( 'template_url' )?>/image/content/slider3.jpg" alt="" class="news-slider__image"/></div>
                          </li>
                          <li>
                            <div class="news-slider"><img src="<?php  bloginfo( 'template_url' )?>/image/content/slider1.jpg" alt="" class="news-slider__image"/></div>
                          </li>
                        </ul>
                      </div>
                      <div class="main-slider__arrow"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="news-contact">
                  <div class="news-contact__link">
                    <div class="link-list">
                      <ul>
                        <li class="link-list__list"><a href="#news" class="link link_left link_blue">Новости</a></li>
                        <li class="link-list__list"><a href="#network" class="link link_left link_blue">Сеть в Казахстане</a></li>
                        <li class="link-list__list"><a href="#event" class="link link_left link_blue">СОбытия</a></li>
                        <li class="link-list__list"><a href="#sponsor" class="link link_left link_blue">Спонсоры</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="news-contact__form">
                    <form action="">
                      <div class="subscribe">
                        <div class="subscribe__title">Подписка на рассылку новостей</div>
                        <div class="subscribe__input">
                          <input type="text" class="subscribe-input"/>
                        </div>
                        <div class="subscribe__button"><a href="" class="link">Зарегистрироваться</a></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="news" class="content__secondary-news">
            <div class="news row">
              <div class="news__title">
                <h1 class="main-title">Новости
                  <div class="main-title__border"></div>
                </h1>
              </div>
              <div class="news__block row">
              <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>    
                <div class="col-md-4">               
                  <div class="news-block">
                    <div class="news-block__inner">
                      <div class="news-block__image"><a href=""><img src="image/content/image1.jpg" alt="" width="300"/></a></div><a href="#" class="news-block__title">
                        <?php  the_title(  )?>
                      </a>
                      <p class="news-block__text">
                        <?php the_content() ?>
                      </p>
                      <div class="news-block__link"> <a href="#" class="link link_blue">читать статью			</a></div>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              <?php endif; ?>               
                
              </div>
            </div>
          </div>
          <div id="network" class="content__culture">
            <div class="culture row">
              <div class="culture__title">
                <div class="main-title">Французский культурный cеть в Казахстане
                  <div class="main-title__border"></div>
                </div>
              </div>
              <div class="culture__block row">
                <div class="culture-row">
                  <div class="culture-row__item">
                    <div class="culture-row__inner">
                      <div class="culture-list">
                        <ul class="row">
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item culture-lsit__item_last">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="culture-row__item">
                    <div class="culture-row__inner">
                      <div class="culture-list">
                        <ul class="row">
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="culture-list__item culture-lsit__item_last">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="culture-row__item">
                    <div class="culture-row__inner">
                      <div class="culture-list">
                        <ul class="row">
                          <li class="culture-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="event" class="content__event">
            <div class="event row">
              <div class="event__title">
                <div class="main-title">Программа культурных мероприятий
                  <div class="main-title__border"></div>
                </div>
              </div>
              <div class="event__block">
                <div class="event-row">
                  <div class="event-row__item">
                    <div class="event-row__inner">
                      <div class="event-list">
                        <ul>
                          <li class="event-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover square-hover_another">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="event-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover square-hover_another">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="event-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover square-hover_another">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="event-list__item">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover square-hover_another">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="event-list__item event-list__item_last">
                            <div class="square js-square">
                              <div class="square__inner"><a href="">
                                  <div class="square__image"><img src="image/content/square.jpg" alt="" width="100"/></div>
                                  <div class="square__text"> Институт Сорбонна-Казахстан</div></a></div>
                              <div class="square__inner-hover"><a href="">
                                  <div class="square-hover square-hover_another">
                                    <div class="square-hover__title">Институт Сорбонна-Казахстан</div>
                                    <div class="square-hover__border"></div>
                                    <div class="square-hover__button">
                                      <div class="register">Представление</div>
                                    </div>
                                  </div></a></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="sponsor" class="content__sponsor">
            <div class="sponsor">
              <div class="sponsor__title">
                <div class="main-title">Спонсоры
                  <div class="main-title__border"></div>
                </div>
              </div>
              <div class="sponsor__list">
                <div class="slider">
                  <ul class="bxslider-sponsor">
                    <li class="slider__list">
                      <div class="sponsor-list">
                        <div class="sponsor-list__inner">
                          <ul class="row">
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item sponsor-list__item_last"><img src="image/content/square.jpg" alt="" width="100"/></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="slider__list">
                      <div class="sponsor-list">
                        <div class="sponsor-list__inner">
                          <ul class="row">
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item"><img src="image/content/square.jpg" alt="" width="100"/></li>
                            <li class="sponsor-list__item sponsor-list__item_last"><img src="image/content/square.jpg" alt="" width="100"/></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_footer( name ) ?>