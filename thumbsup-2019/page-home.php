<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main id="main" class="page_home site-main">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="container-fluid">
          <div class="row">
            <div class="carousel-inner" role="listbox">
              <?php 
                $args = array(
                  // 'post__not_in' => $do_not_duplicate,
                  // 'post_type' => 'post',
                  // 'category_name' => 'suggested',
                  'posts_per_page' => 3
                  );
                $the_query = new WP_Query( $args );
                  
                $i = 0;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                  //$do_not_duplicate[] = get_the_ID();
                  if($i==0):
                    get_template_part( 'template-parts/content', 'slide-active' );
                  else:
                    get_template_part( 'template-parts/content', 'slide' );
                  endif;
                  $i++;
                endwhile; wp_reset_postdata();
              ?>
              <?php /*
              <!-- Slide One - Set the background image for this slide in the line below -->
              <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.png')">
                <div class="carousel-caption d-none d-md-block">
                  <h3>เปลี่ยนคุณให้เป็น
                    <br> Digital PR</h3>
                  <p>กับ PublicRelationSHIFTความรู้ใหม่
                    <br> ที่ไม่ควรมองข้าม
                  </p>
                </div>
              </div>
              <!-- Slide Two - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.png')">
                <div class="carousel-caption d-none d-md-block">
                  <h3>เปลี่ยนคุณให้เป็น
                    <br> Digital PR</h3>
                  <p>กับ PublicRelationSHIFTความรู้ใหม่
                    <br> ที่ไม่ควรมองข้าม
                  </p>
                </div>
              </div>
              <!-- Slide Three - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.png')">
                <div class="carousel-caption d-none d-md-block">
                  <h3>เปลี่ยนคุณให้เป็น
                    <br> Digital PR</h3>
                  <p>กับ PublicRelationSHIFTความรู้ใหม่
                    <br> ที่ไม่ควรมองข้าม
                  </p>
                </div>
              </div>*/ ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>

    <section class="_section section-popular _bg-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xl-9">

            <article class="listing-card" data-mh="group-height-popular">
              <section class="_card _card-column _size-big _landscape-mobile _bg-darkblack">
                  <div class="row">
                      <div class="col-md-6 col-lg-7">
                        <div class="thumb view zoom">
                            <a href="#" class="parent">
                                <span class="title h3 d-block d-md-none">
                                  <span class="group-table">
                                    <span class="group-table-cell">
                                        <span class="header color-white">Samsung ใช้พลัง Twitter</span><br class="d-block d-md-none">
                                        <span class="intro color-brand ">จุดกระแสให้ Note9</span>
                                    </span>
                                  </span>
                                </span>
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/conference-01@2x.jpg')">
                                </span>
                            </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-5">
                        <div class="info d-none d-md-block">
                          <header>
                            <p class="cat text-uppercase">CONFERENCE</p>
                            <h2 class="title h5">
                              <a href="#">Samsung ใช้พลัง Twitter จุดกระแสให้ Note9</a>
                            </h2>
                          </header>
                          <footer>
                            <ul class="list-author-by list-unstyled list-inline">
                              <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                              <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                            </ul>
                          </footer>
                        </div>
                      </div>
                  </div>
              </section>

              <section class="_card _card-column _size-big _landscape-mobile _bg-darkblack">
                  <div class="row">
                      <div class="col-md-6 col-lg-7">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                  <span class="title h3 d-block d-md-none">
                                    <span class="group-table">
                                      <span class="group-table-cell">
                                          <span class="header color-white">มาแล้ว LINE SQUARE</span><br class="d-block d-md-none">
                                          <span class="intro color-brand">เรียลไทม์คอมมิวนิตี้บนแพลตฟอร์ม LINE</span>
                                      </span>
                                    </span>
                                  </span>
                                  <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/conference-02@2x.jpg')">
                                  </span>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-5">
                          <div class="info d-none d-md-block">
                            <header>
                                <p class="cat text-uppercase">CONFERENCE</p>
                                <h2 class="title h5">
                                <a href="#">มาแล้ว LINE SQUARE เรียลไทม์คอมมิวนิตี้บนแพลตฟอร์ม LINE</a>
                                </h2>
                            </header>
                            <footer>
                                <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                                </ul>
                            </footer>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="_card _card-column _size-big _landscape-mobile _bg-darkblack">
                  <div class="row">
                      <div class="col-md-6 col-lg-7">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                  <span class="title h3 d-block d-md-none">
                                    <span class="group-table">
                                      <span class="group-table-cell">
                                          <span class="header color-white">ประวัติโดยละเอียด อีลอนมัสก์</span><br class="d-block d-md-none">
                                          <span class="intro color-brand">(Elon Musk) นักธุรกิจไฮเทค</span>
                                      </span>
                                    </span>
                                  </span>
                                  <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/conference-03@2x.jpg')">
                                  </span>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-5">
                          <div class="info d-none d-md-block">
                            <header>
                                <p class="cat text-uppercase">CONFERENCE</p>
                                <h2 class="title h5">
                                <a href="#">ประวัติโดยละเอียด อีลอนมัสก์ (Elon Musk) นักธุรกิจไฮเทค</a>
                                </h2>
                            </header>
                            <footer>
                                <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                                </ul>
                            </footer>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="_card _card-column _size-big _landscape-mobile _bg-darkblack">
                  <div class="row">
                      <div class="col-md-6 col-lg-7">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                  <span class="title h3 d-block d-md-none">
                                    <span class="group-table">
                                      <span class="group-table-cell">
                                          <span class="header color-white">จะเป็นอย่างไรถ้าชีวิตขาด</span><br class="d-block d-md-none">
                                          <span class="intro color-brand">เทคโนโลยี ?</span>
                                      </span>
                                    </span>
                                  </span>
                                  <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/conference-04@2x.jpg')">
                                  </span>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-5">
                          <div class="info d-none d-md-block">
                            <header>
                                <p class="cat text-uppercase">CONFERENCE</p>
                                <h2 class="title h5">
                                <a href="#">จะเป็นอย่างไรถ้าชีวิตขาดเทคโนโลยี ?</a>
                                </h2>
                            </header>
                            <footer>
                                <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                                </ul>
                            </footer>
                          </div>
                      </div>
                  </div>
              </section>
            </article>

          </div>
          <div class="col-xl-3">
            <section class="section-most-popular _bg-darkblack d-none d-xl-block" data-mh="group-height-popular">
              <header>
                  <h3 class="title _font-size-36 _font-medium text-uppercase color-white"><i class="icon icon-popular"></i>Most Popular</h3>
              </header>

              <section class="listing-card">
                <section class="_card _card-column _card-popular">
                    <div class="thumb view zoom">
                        <a href="#" class="parent">
                            <i class="sign-number">1</i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-popular-01@2x.jpg')">
                            </span>
                        </a>
                    </div>
                    <div class="info">
                      <p class="cat">PR News</p>
                      <h2 class="title">
                        <a href="#">Infographic: call to action แบบไหนใช้อย่างไร</a>
                      </h2>
                    </div>
                </section>

                <section class="_card _card-column _card-popular">
                    <div class="thumb view zoom">
                        <a href="#" class="parent">
                            <i class="sign-number">2</i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-popular-02@2x.jpg')">
                            </span>
                        </a>
                    </div>
                    <div class="info">
                      <p class="cat">Digital</p>
                      <h2 class="title">
                        <a href="#">Infographic: Micro-Influencer นั้นสำคัญไฉน?</a>
                      </h2>
                    </div>
                </section>

                <section class="_card _card-column _card-popular">
                    <div class="thumb view zoom">
                        <a href="#" class="parent">
                            <i class="sign-number">3</i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-popular-03@2x.jpg')">
                            </span>
                        </a>
                    </div>
                    <div class="info">
                      <p class="cat">Digital</p>
                      <h2 class="title">
                        <a href="#">Facebook ปรับระบบซื้อโฆษณาให้โปร่งใสมากขึ้น</a>
                      </h2>
                    </div>
                </section>

                <section class="_card _card-column _card-popular">
                    <div class="thumb view zoom">
                        <a href="#" class="parent">
                            <i class="sign-number">4</i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-popular-04@2x.jpg')">
                            </span>
                        </a>
                    </div>
                    <div class="info">
                      <p class="cat">Digital</p>
                      <h2 class="title">
                        <a href="#">Infographic: Micro-Influencer นั้นสำคัญไฉน?</a>
                      </h2>
                    </div>
                </section>

                <section class="_card _card-column _card-popular">
                    <div class="thumb view zoom">
                        <a href="#" class="parent">
                            <i class="sign-number">5</i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-popular-05@2x.jpg')">
                            </span>
                        </a>
                    </div>
                    <div class="info">
                      <p class="cat">Digital</p>
                      <h2 class="title">
                        <a href="#">Facebook ปรับระบบซื้อโฆษณาให้โปร่งใสมากขึ้น</a>
                      </h2>
                    </div>
                </section>
              </section>
              <!-- /.listing-card -->
            </section>
          </div>

        </div>
      </div>
    </section>

    <!-- Trends -->
    <section class="_section section-trend _bg-gradient">
      <header class="_show-relative">
        <div class="container">
          <h1 class="_section-title h3 text-uppercase"><span class="name">trends</span></h1>
        </div>
      </header>
      <section class="container _show-relative">
        <!-- Slider main container -->
        <div class="swiper-trend swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                    <div class="thumb view zoom">
                        <a href="#" class="parent">
                          <i class="icon icon-play"></i>
                          <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-trend-01@2x.jpg')">
                          </span>
                        </a>
                    </div>
                    <div class="info" data-mh="info-trend">
                      <h2 class="title non-margin">
                        <a href="#">นักการตลาดไทย รู้อะไรจากคลิป “ไปสยาม แต่งตัวร่วมแสน!!”</a>
                      </h2>
                    </div>
                  </section>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <i class="icon icon-play"></i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-trend-02@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-trend">
                        <h2 class="title non-margin">
                          <a href="#">เทียบรายได้ ไอศกรีมไผ่ทอง</a>
                        </h2>
                      </div>
                  </section>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <i class="icon icon-play"></i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-trend-03@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-trend">
                        <h2 class="title non-margin">
                          <a href="#">ฟัง 1 วิธีคิดของ Sheryl Sandberg ทำได้ก็พัฒนาตัวเองสำเร็จ</a>
                        </h2>
                      </div>
                  </section>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <i class="icon icon-play"></i>
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-trend-04@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-trend">
                        <h2 class="title non-margin">
                          <a href="#">เทียบรายได้ ไอศกรีมไผ่ทอง</a>
                        </h2>
                      </div>
                  </section>
                </div>
            </div>
        </div>
        <!-- /.Slider main container -->
      </section>

      <div class="group-swiper-button">
          <div class="swiper-button-prev swiper-trend-prev"><i class="icon icon-arrow-left-lg"></i></div>
          <div class="swiper-button-next swiper-trend-next"><i class="icon icon-arrow-right-lg"></i></div>
      </div>
    </section>

    <!-- News -->
    <section class="_section section-news _bg-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);">
      <header>
        <div class="container">
            <h1 class="_section-title h3 text-uppercase"><span class="name">News</span></h1>
        </div>
      </header>

      <div class="container _container-full-mobile">
        <article class="section-highlight">
            <section class="_card _card-column _size-big _bg-darkblack">
                <div class="row">
                    <div class="col-md-7">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                              <span class="title h3 d-block d-md-none">
                                <span class="group-table">
                                  <span class="group-table-cell">
                                      <span class="color-brand header">Business เงินถึง!!<br class="d-block d-md-none">Minor ยังสนใจซื้อหุ้น NH Group เพิ่ม</span><br class="d-block d-md-none">
                                      <span class="intro color-white">ฟุ้งรายได้บริษัทโต<br class="d-block d-md-none"> อย่างสวยงาม</span>
                                  </span>
                                </span>
                              </span>
                              <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/conference-01@2x.jpg')">
                              </span>
                          </a>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="info d-none d-md-block">
                        <header>
                          <p class="cat text-uppercase">CONFERENCE</p>
                          <h2 class="title h3">
                            <a href="#">Business เงินถึง!!Minor ยังสนใจซื้อหุ้น NH Group เพิ่ม ฟุ้งรายได้</a>
                          </h2>
                        </header>
                        <footer>
                          <ul class="list-author-by list-unstyled list-inline">
                            <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                            <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                          </ul>
                        </footer>
                      </div>
                    </div>
                </div>
            </section>
        </article>

        <article class="listing-card">
            <div class="row">
              <div class="col-md-4">
                <section class="_card _card-row _border-bottom">
                    <div class="row">
                        <div class="col-6 col-md-12">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-news-02@2x.jpg')">
                                </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-6 col-md-12">
                          <div class="info">
                            <header>
                              <p class="cat"><span class="text-uppercase">TIPS</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
                              <h2 class="title h5 insert-dotdotdot">
                                <a href="#">Samsung ใช้พลัง Twitter จุดกระแสให้ Note9</a>
                              </h2>
                            </header>
                            <footer class="d-none d-sm-none d-md-block">
                              <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                    </div>
                </section>
              </div>
              <div class="col-md-4">
                <section class="_card _card-row _border-bottom">
                    <div class="row">
                        <div class="col-6 col-md-12">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-news-03@2x.jpg')">
                                </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-6 col-md-12">
                          <div class="info">
                            <header>
                              <p class="cat"><span class="text-uppercase">TIPS</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
                              <h2 class="title h5 insert-dotdotdot">
                                <a href="#">Samsung ใช้พลัง Twitter จุดกระแสให้ Note9</a>
                              </h2>
                            </header>
                            <footer class="d-none d-sm-none d-md-block">
                              <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                    </div>
                </section>
              </div>
              <div class="col-md-4">
                <section class="_card _card-row _border-bottom">
                    <div class="row">
                        <div class="col-6 col-md-12">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-news-04@2x.jpg')">
                                </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-6 col-md-12">
                          <div class="info">
                            <header>
                              <p class="cat"><span class="text-uppercase">TIPS</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
                              <h2 class="title h5 insert-dotdotdot">
                                <a href="#">Samsung ใช้พลัง Twitter จุดกระแสให้ Note9</a>
                              </h2>
                            </header>
                            <footer class="d-none d-sm-none d-md-block">
                              <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                    </div>
                </section>
              </div>
            </div>
        </article>

        <footer class="footer-button">
            <a href="#" class="button button-outline"><span>ALL NEWS</span> <i class="icon icon-arrow-right"></i></a>
          </footer>
      </div>
    </section>

    <!-- EDITOR -->
    <section class="_section section-editor _bg-gradient">
      <header class="_show-relative">
          <div class="container">
            <h1 class="_section-title h3 text-uppercase"><span class="name">Editor’s Picks</span></h1>
          </div>
      </header>

      <section class="container _show-relative">
        <!-- Slider main container -->
        <div class="swiper-editor swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-01@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-editor">
                        <h2 class="title non-margin insert-dotdotdot">
                          <a href="#">หนังสือน่าอ่าน “มองการทำตลาดแบบวัวสีม่วง” ที่นักการตลาดไม่ควรพลาด</a>
                        </h2>
                      </div>
                  </section>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-02@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-editor">
                        <h2 class="title non-margin insert-dotdotdot">
                          <a href="#">KBTG เดินหน้าปั้น TechJam2018 หวังสร้างความตื่นตัวและสีสันให้วงการเทคโนโลยี</a>
                        </h2>
                      </div>
                  </section>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-03@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-editor">
                        <h2 class="title non-margin insert-dotdotdot">
                          <a href="#">ETDA Big Change to Big Chance ปรับตัวสู่โลกอนาคต..โลกแห่งยุคดิจิทัล</a>
                        </h2>
                      </div>
                  </section>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                  <section class="_card _card-column _card-content">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                            <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-04@2x.jpg')">
                            </span>
                          </a>
                      </div>
                      <div class="info" data-mh="info-editor">
                        <h2 class="title non-margin insert-dotdotdot">
                          <a href="#">5 เทคนิคถ่ายรูปสวยแบบ Influencer จาก Samsung Photo Hub</a>
                        </h2>
                      </div>
                  </section>
                </div>
            </div>
        </div>
        <!-- /.Slider main container -->
      </section>

      <div class="group-swiper-button">
          <div class="swiper-button-prev swiper-editor-prev"><i class="icon icon-arrow-left-lg"></i></div>
          <div class="swiper-button-next swiper-editor-next"><i class="icon icon-arrow-right-lg"></i></div>
      </div>
    </section>

    <!-- Events & Conferences -->
    <section class="_section section-event _bg-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);">
      <div class="container _container-full-mobile">
        <header>
          <h1 class="_section-title h3 text-uppercase"><span class="name">Events & Conferences</span></h1>
        </header>
        <article class="section-highlight">
            <section class="_card _card-column _size-big _bg-darkblack">
                <div class="row">
                    <div class="col-md-7">
                      <div class="thumb view zoom">
                          <a href="#" class="parent">
                              <span class="title h3 d-block d-md-none">
                                <span class="group-table">
                                  <span class="group-table-cell">
                                      <span class="color-brand header">Business เงินถึง!!<br class="d-block d-md-none">Minor ยังสนใจซื้อหุ้น NH Group เพิ่ม</span><br class="d-block d-md-none">
                                      <span class="intro color-white">ฟุ้งรายได้บริษัทโต<br class="d-block d-md-none"> อย่างสวยงาม</span>
                                  </span>
                                </span>
                              </span>
                              <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-event-01@2x.jpg')">
                              </span>
                          </a>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="info d-none d-md-block">
                        <header>
                          <p class="cat text-uppercase">CONFERENCE</p>
                          <h2 class="title h3">
                            <a href="#">Business เงินถึง!! Minor ยังสนใจซื้อหุ้น NH Group เพิ่ม ฟุ้งรายได้</a>
                          </h2>
                        </header>
                        <footer>
                          <ul class="list-author-by list-unstyled list-inline">
                            <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                            <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                          </ul>
                        </footer>
                      </div>
                    </div>
                </div>
            </section>
        </article>

        <article class="listing-card">
            <div class="row">
              <div class="col-md-4">
                <section class="_card _card-row _border-bottom" data-mh="group-height-event">
                    <div class="row">
                        <div class="col-6 col-md-12">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-event-02@2x.jpg')">
                                </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-6 col-md-12">
                          <div class="info">
                            <header>
                              <p class="cat text-nowrap"><span class="text-uppercase">EVENTS</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
                              <h2 class="title h5 insert-dotdotdot">
                                <a href="#">AIS จัดงานสัมมนาใหญ่ ผลักดัน HR ไม่ได้ทำหน้าที่แค่เบื้องหลังอีกต่อไป</a>
                              </h2>
                            </header>
                            <footer class="d-none d-sm-none d-md-block">
                              <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                    </div>
                </section>
              </div>
              <div class="col-md-4">
                <section class="_card _card-row _border-bottom" data-mh="group-height-event">
                    <div class="row">
                        <div class="col-6 col-md-12">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-event-03@2x.jpg')">
                                </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-6 col-md-12">
                          <div class="info">
                            <header>
                              <p class="cat text-nowrap"><span class="text-uppercase">EVENTS</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
                              <h2 class="title h5 insert-dotdotdot">
                                <a href="#">มองอนาคต Influencer ยุคปัจจุบัน “The Future of Influencer Marketing”</a>
                              </h2>
                            </header>
                            <footer class="d-none d-sm-none d-md-block">
                              <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                    </div>
                </section>
              </div>
              <div class="col-md-4">
                <section class="_card _card-row _border-bottom" data-mh="group-height-event">
                    <div class="row">
                        <div class="col-6 col-md-12">
                          <div class="thumb view zoom">
                              <a href="#" class="parent">
                                <span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-event-04@2x.jpg')">
                                </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-6 col-md-12">
                          <div class="info">
                            <header>
                              <p class="cat text-nowrap"><span class="text-uppercase">CONFERENCE</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
                              <h2 class="title h5 insert-dotdotdot">
                                <a href="#">Facebook ปรับระบบซื้อโฆษณาให้โปร่งใสมากขึ้น</a>
                              </h2>
                            </header>
                            <footer class="d-none d-sm-none d-md-block">
                              <ul class="list-author-by list-unstyled list-inline">
                                <li class="list-inline-item">By <span class="name">jakrapong</span></li>
                                <li class="list-inline-item"><span class="day">Sep 27, 2018</span></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                    </div>
                </section>
              </div>
            </div>
        </article>

        <footer class="footer-button">
          <a href="#" class="button button-outline"><span>ALL EVENTS & CONFERENCES</span> <i class="icon icon-arrow-right"></i></a>
        </footer>
      </div>
    </section>
	
	<?php /*
	<div class="container">
		<div id="primary" class="content-area <?php echo '-'.$GLOBALS['s_blog_layout']; ?>">
			<main id="main" class="site-main">
				
				<?php 
				if ((int)$GLOBALS['s_blog_columns'] > 1) {
					echo '<div class="seed-grid-'.$GLOBALS['s_blog_columns'].'">';
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content','card-excerpt');
					endwhile; 
					echo '</div>';
				} else {
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content');
					endwhile; 
				}
				?>
				<?php seed_posts_navigation(); ?>
				
			</main>
		</div><!--primary-->
		<?php 
		switch ($GLOBALS['s_blog_layout']) {
			case 'rightbar':
			get_sidebar('right'); 
			break;
			case 'leftbar':
			get_sidebar('left'); 
			break;
			case 'full-width':
			break;
			default:
			break;
		}
		?>
	</div><!--container--
*/ ?>
</main><!--.site-main-->

<?php get_footer(); ?>