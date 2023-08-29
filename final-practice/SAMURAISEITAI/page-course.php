<?php get_header();?>

  <section id="keyvisual" class="keyvisual-price">
    <div class="keyvisual-price__txt">
      <div class="keyvisual-price__txt__wrap">
        <h2>Price</h2>
        <p>コース・料金</p>
      </div>
    </div>
    <div class="keyvisual-price__wrap">
    <div class="keyvisual-price__img">
    </div>
    </div>
  </section>

  <section id="breadcrumb" class="breadcrumb">
    <div class="breadcrumb__wrap">
      <p>
        <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </p>
  </div>
  </section>

  <section id="courseprise" class="courseprise">
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
    </div>
  </section>

  <section id="insurance" class="insurance">
    <div class="insurance__wrap">
      <div class="insurance__wrap__img">
        <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-insurance2.png" alt="保険診療" width="520" height="320">
      </div>
      <div class="insurance__wrap__content">
        <div class="insurance__wrap__content__headline head1 symbol">
          <h2>Insurance</h2>
          <p>保険診療</p>
        </div>
        <div class="insurance__wrap__content__text">
          <p class="pcview">健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br />
            「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。</p>
          <ul>
            <li>・骨折・打撲・捻挫・脱臼</li>
            <li>・スポーツ診療</li>
            <li>・交通事故</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="selfpay" class="selfpay">
    <div class="insurance__wrap">
      <div class="insurance__wrap__img">
        <img src="<?php echo get_template_directory_uri(); ?>/image/TOP-self2.png" alt="自費診療" width="520" height="320">
      </div>
      <div class="insurance__wrap__content">
        <div class="insurance__wrap__content__headline head1 symbol">
          <h2>Selt-pay</h2>
          <p>自費診療</p>
        </div>
        <div class="insurance__wrap__content__text">
          <p class="pcview">慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。</p>
          <ul>
            <li>・腰痛・肩こり</li>
            <li>・冷え性・だるさ</li>
            <li>・骨盤・背骨矯正</li>
          </ul>
          <div class="insurance__wrap__content__text__price">
          <p>初回　<br class="spview">8,800円（税込） / 50分</p>
          <p>2回目以降　<br class="spview">6,600円（税込） / 30分</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>