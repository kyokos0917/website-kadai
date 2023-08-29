<?php get_header();?>

  <section id="mainvisual" class="mainvisual">
    <div class="mainvisual__txt">
      <div class="mainvisual__txt__wrap">
        <p>根本的な症状改善を</p>
        <p>サポートします</p>
      </div>
    </div>
    <div class="mainvisual__carousel pcview">
      <ul class="mainvisual__carousel__wrap">
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/TOP-Carouselgroup1.png" alt="院内風景" width="980" height="584"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/TOP-Carouselgroup4.png" alt="院内風景" width="980" height="584"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/TOP_CarouselGroup3.png" alt="院内風景" width="980" height="584"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/TOP_CarouselGroup2.png" alt="院内風景" width="980" height="584"></li>
      </ul>
    </div>
    <div class="mainvisual__carousel spview">
      <ul class="mainvisual__carousel__wrap">
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-TOP-Carouselgroup1.png" alt="院内風景" width="560" height="464"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-TOP-Carouselgroup4.png" alt="院内風景" width="560" height="464"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-TOP-Carouselgroup3.png" alt="院内風景" width="560" height="464"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-TOP-Carouselgroup2.png" alt="院内風景" width="560" height="464"></li>
      </ul>
    </div>
  </section>

  <section id="news" class="news">
    <div class="news__wrap">
      <div class="news__wrap__detail">
        <div class="news__wrap__headline head1">
          <h2>News</h2>
          <p>お知らせ</p>
        </div>
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => CUSTOM_POSTS_PER_PAGE_HOME,
        );

          $the_query = new WP_Query($args);
          if($the_query->have_posts()) : 
              while($the_query->have_posts()) : $the_query->the_post();

              $cat = get_the_category();
              $cat = $cat[0];
        ?>
        <div class="news__wrap__detail__wrap">
          <div class="news__wrap__detail__info">
            <p class="news__wrap__detail__info__date"><?php echo get_the_date(); ?></p>
            <p class="news__wrap__detail__info__category tag_date"><?php echo $cat->cat_name; ?></p>
          </div>
          <p class="news__wrap__detail__title"><?php the_title(); ?></p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      <div class="news__wrap__tolist">
        <a href="<?php echo home_url();?>/news/">→ お知らせ一覧へ</a>
      </div>
    </div>
  </section>

  <section id="concept" class="concept">
    <div class="concept__wrap">
      <div class="concept__wrap__img">
        <img class="pcview" src="<?php echo get_template_directory_uri(); ?>/image/Concept-Imagegroup.png" alt="当院の特長イメージPC">
        <img class="spview" src="<?php echo get_template_directory_uri(); ?>/image/SP-Concept-Imagegroup.png" alt="当院の特長イメージSP">
      </div>
      <div class="concept__wrap__content">
        <div class="concept__wrap__content__headline head1 symbol">
          <h2>Concept</h2>
          <p>特長</p>
          </h2>
        </div>
        <div class="concept__wrap__content__subtitle">
          <h3>日々変化する<br class="pcview">カラダと心を癒す<br class="pcview">パーソナル<br class="pcview">トレーナーとして</h3>
        </div>
        <div class="concept__wrap__content__des">
          <p>当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
          <p>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
          <p>ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
        </div>
        <div class="concept__wrap__content__btn">
          <a class="btn_arrow" href="<?php echo home_url(); ?>/about/">→ 当院について</a>
        </div>
      </div>
    </div>
  </section>

  <section id="course" class="course">
    <div class="course__headline head2">
      <h2>コース・料金</h2>
      <p>当院では保険診療、自費診療ともにご対応しております</p>
    </div>
    <div class="course__wrap">
      <div class="course__wrap__contents">
        <div class="course__wrap__contents__block">
          <div class="course__wrap__contents__block__img">
            <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-insurance1.png" alt="保険診療">
          </div>
          <div class="course__wrap__contents__block__subtitle">
            <h3>保険診療</h3>
          </div>
          <div class="course__wrap__contents__block__list">
            <ul>
              <li>・骨折・打撲・捻挫・脱臼</li>
              <li>・スポーツ診療</li>
              <li>・交通事故</li>
            </ul>
          </div>
        </div>

        <div class="course__wrap__contents__block">
          <div class="course__wrap__contents__block__img">
            <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-self1.png" alt="自費診療">
          </div>
          <div class="course__wrap__contents__block__subtitle">
            <h3>自費診療</h3>
          </div>
          <div class="course__wrap__contents__block__list">
            <ul>
              <li>・腰痛・肩こり</li>
              <li>・冷え性・だるさ</li>
              <li>・骨盤・背骨矯正</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="course__wrap__btn">
        <a class="btn_arrow" href="<?php echo home_url();?>/course/">→ コース・料金詳細へ</a>
      </div>
    </div>
  </section>

  <section id="voice" class="voice">
    <div class="voice__wrap">
      <div class="voice__wrap__headslide">
        <ul class="pcview">
          <li><img src="<?php echo get_template_directory_uri(); ?>/image/Bottom-Carouselgroup1.png"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/image/Bottom-Carouselgroup2.png"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/image/Bottom-Carouselgroup3.png"></li>
        </ul>
        <ul class="spview">
          <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-Bottom-Carouselgroup1.png"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-Bottom-Carouselgroup2.png"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/image/SP-Bottom-Carouselgroup3.png"></li>
        </ul>
      </div>
      <div class="voice__wrap__headline">
        <div class="head2">
          <h2>お客様の声</h2>
          <p>痛みの改善に加えて自分で予防もできるようになりました</p>
        </div>
      </div>
      <div class="voice__wrap__contents">
        <ul>
          <li>
            <div class="voice__wrap__contents__img">
              <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-user1.png" alt="お客様の声1">
            </div>
            <h3>S・K様 30代女性</h3>
            <p>1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
          </li>
          <li>
            <div class="voice__wrap__contents__img">
              <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-user2.png" alt="お客様の声2">
            </div>
            <h3>T・M様 40代男性</h3>
            <p>マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</p>
          </li>
          <li>
            <div class="voice__wrap__contents__img">
              <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-user3.png" alt="お客様の声3">
            </div>
            <h3>S・T様 60代女性</h3>
            <p>転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</p>
          </li>
        </ul>
      </div>
      <div class="voice__wrap__contents__btn">
        <a class="btn_arrow" href="<?php echo home_url(); ?>/voice/">→ お客様の声一覧へ</a>
      </div>

    </div>
  </section>

  <?php get_footer(); ?>