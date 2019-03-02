
<?php get_header(); ?>

  <div class="page-header">

    <h1 class="page-title"><?php single_cat_title(); ?></h1>


  </div><!-- .page-header -->

  <div class="container">
            <header>
              <h1><?php 
                  foreach ((get_the_category()) as $category) {
                    echo $category->name . "<br>";
                    echo category_description($category);
                  }
                  ?>
              </h1>
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
                                  <span class="img-photo" style="background-image: url('img/thumb/conference-01@2x.jpg')">
                                  </span>
                              </a>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="info d-none d-md-block">
                            <header>
                              <p class="cat"><span class="text-uppercase">CONFERENCE</span></p>
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
        </div>

<?php get_footer(); ?>