<?php
/* Template Name: home  */
$infos = array(
    'post_type' => 'infos',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$infos2 = array(
    'post_type' => 'infos2',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$faits = array(
    'post_type' => 'faits',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$skills = array(
    'post_type' => 'skills',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$skills2 = array(
    'post_type' => 'skills2',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$experience = array(
    'post_type' => 'experience',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$formation = array(
    'post_type' => 'formation',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$card = array(
    'post_type' => 'cards',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$app = array(
    'post_type' => 'apps',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$web = array(
    'post_type' => 'webs',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$service = array(
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$avis = array(
    'post_type' => 'avis',
    'post_status' => 'publish',
    'posts_per_page' =>-1,
    'orderby' => 'date',
    'order' => 'ASC'
);
$coordonnee = array(
    'post_type' => 'coordonnees',
    'post_status' => 'publish',
    'posts_per_page' =>3,
    'orderby' => 'date',
    'order' => 'ASC'
);
$maps = array(
    'post_type' => 'coordonnees',
    'post_status' => 'publish',
    'posts_per_page' =>1,
    'orderby' => 'date',
    'order' => 'DESC'
);
get_header();
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Kévin Bigoni</h1>
      <p><span class="typed" data-typed-items="Développeur, Front et back"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Profil</h2>
          <p>Développeur Web : Full-stack.</p>
          <p>Activités : site e-commerce, page vitrine et application mobile.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3> Développeur Web </h3>
            <p class="P_bottom"></p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <?php
                  $the_query = new WP_Query($infos);
                  if ($the_query->have_posts()) { ?>
                      <?php while ($the_query->have_posts()) {
                          $the_query->the_post(); ?>
                           <li><i class="bi bi-chevron-right"></i> <strong><?= get_the_title() ?></strong> <span><?= get_the_content() ?></span></li>   
                      <?php  } ?>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <?php
                  $the_query = new WP_Query($infos2);
                  if ($the_query->have_posts()) { ?>
                      <?php while ($the_query->have_posts()) {
                          $the_query->the_post(); ?>
                           <li><i class="bi bi-chevron-right"></i> <strong><?= get_the_title() ?></strong> <span><?= get_the_content() ?></span></li>   
                      <?php  } ?>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <p class="cuisinier">Passionné, très organisé, dynamique. Je suis prêt à relever tous les challenges.</p>
            <p class="cuisinier">Cuisinier pendant 12ans (France, Angleterre, Japon), j'ai décidé dans le cadre d'une reconversion de retourner à ma première passion : le Web. </p>
          </div>
        </div>

      </div>
      
    </section><!-- End About Section -->

 

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Compétences</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <?php
              $the_query = new WP_Query($skills);
              if ($the_query->have_posts()) { ?>
                  <?php while ($the_query->have_posts()) {
                      $the_query->the_post(); ?>
                      <div class="progress">
                        <span class="skill"><?= get_the_title() ?> <i class="val"><?= get_the_content() ?></i></span>
                        <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="<?= get_the_excerpt() ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>                  
                  <?php  } 
              } ?>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

             <?php
              $the_query = new WP_Query($skills2);
              if ($the_query->have_posts()) { ?>
                  <?php while ($the_query->have_posts()) {
                      $the_query->the_post(); ?>
                      <div class="progress">
                        <span class="skill"><?= get_the_title() ?> <i class="val"><?= get_the_content() ?></i></span>
                        <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="<?= get_the_excerpt() ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>                  
                  <?php  } 
              } ?>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->
    
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Mon diplôme</h3>
            <?php
              $the_query = new WP_Query($formation);
              if ($the_query->have_posts()) { ?>
                  <?php while ($the_query->have_posts()) {
                      $the_query->the_post(); ?>
                      <div class="resume-item">
                        <h4><?= get_the_title() ?></h4>
                        <?= get_the_content() ?>   
                      </div>
                  <?php  } 
              } ?>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="resume-title">Mon expérience</h3>
            <?php
              $the_query = new WP_Query($experience);
              if ($the_query->have_posts()) { ?>
                  <?php while ($the_query->have_posts()) {
                      $the_query->the_post(); ?>
                      <div class="resume-item">
                        <h4><?= get_the_title() ?></h4>
                        <?= get_the_content() ?>   
                      </div>
                  <?php  } 
              } ?>
        </div>

      </div>
    </section><!-- End Resume Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <?php
            $the_query = new WP_Query($service);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                     <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                      <div class="icon"><i class="<?= get_the_excerpt() ?>"></i></div>
                      <h4 class="title"><a href=""><?= get_the_title() ?></a></h4>
                      <p class="description"><?= get_the_content() ?></p>
                    </div>
                <?php  } ?>
            <?php } ?>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Mes projets aboutis.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <!--<li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">Application</li>
              <li data-filter=".filter-card">Carte</li>-->
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <!-- <?php
            $the_query = new WP_Query($app);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                          <div class="portfolio-wrap">
                            <img src="<?= $featured_img_url ?>" class="img-fluid" alt="">
                            <div class="portfolio-links">
                              <a href="<?= $featured_img_url ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= get_the_title() ?>"><i class="bx bx-plus"></i></a>
                              <a href="<?= get_the_excerpt() ?>" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                        </div>
                <?php  } ?>
            <?php } ?>

            <?php
            $the_query = new WP_Query($card);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                          <div class="portfolio-wrap">
                            <img src="<?= $featured_img_url ?>" class="img-fluid" alt="">
                            <div class="portfolio-links">
                              <a href="<?= $featured_img_url ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= get_the_title() ?>"><i class="bx bx-plus"></i></a>
                              <a href="<?= get_the_excerpt() ?>" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                        </div>
                <?php  } ?>
            <?php } ?> -->

            <?php
            $the_query = new WP_Query($web);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                          <div class="portfolio-wrap">
                            <img src="<?= $featured_img_url ?>" class="img-fluid" alt="">
                            <div class="portfolio-links">
                              <a href="<?= $featured_img_url ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= get_the_title() ?>"><i class="bx bx-plus"></i></a>
                              <a href="<?= get_the_excerpt() ?>" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                        </div>
                <?php  } ?>
            <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
       <!-- ======= Facts Section ======= -->
       <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Bilan</h2>
        </div>

        <div class="row no-gutters">
          
          <?php
            $the_query = new WP_Query($faits);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                      <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?= get_the_content() ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong><?= get_the_title() ?></strong></p>
                      </div>
                    </div> 
                <?php  } 
            } ?>
            <!-- <div class="section-title">
              <p>*données fictives qui seront enrichies dès mes premiers projets.</p>
            </div>-->
        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Testimonials Section ======= -->
   <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Témoignages</h2>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            
            <?php
            $the_query = new WP_Query($avis);
            if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); 
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'slider-img'); ?>
                     <div class="swiper-slide">
                      <div class="testimonial-item" data-aos="fade-up">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          <?= get_the_content() ?>
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="<?= $featured_img_url ?>" class="testimonial-img" alt="">
                        <h3><?= get_the_title() ?></h3>
                        <h4><?= get_the_excerpt() ?></h4>
                      </div>
                    </div>
                <?php  } ?>
            <?php } ?>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
      
    </section>-->
    <!-- End Testimonials Section -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Vous souhaitez me contacter, voici mes coordonnées :</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="">
            
            <div class="info">
              <?php
              $the_query = new WP_Query($coordonnee);
              if ($the_query->have_posts()) { ?>
                  <?php while ($the_query->have_posts()) {
                      $the_query->the_post(); ?>
                      <div class="address">
                        <i class="<?= get_the_excerpt() ?>"></i>
                        <h4><?= get_the_title() ?> :</h4>
                        <p><?= get_the_content() ?></p>
                      </div>
                  <?php  } ?>
              <?php } ?>
              <?php
              $the_query = new WP_Query($maps);
              if ($the_query->have_posts()) { ?>
                  <?php while ($the_query->have_posts()) {
                      $the_query->the_post(); ?>
                      <iframe src="<?= get_the_content() ?>" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

                  <?php  } ?>
              <?php } ?>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

<?php
get_footer();