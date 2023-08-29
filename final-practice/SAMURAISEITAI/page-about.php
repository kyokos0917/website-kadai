<?php get_header();?>

  <section id="keyvisual" class="keyvisual-about">
    <div class="keyvisual-about__txt">
      <div class="keyvisual-about__txt__wrap">
        <h2>About</h2>
        <p>当院について</p>
      </div>
    </div>
    <div class="keyvisual-about__wrap">
    <div class="keyvisual-about__img">
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

  <section id="concept" class="concept page">
    <div class="concept__wrap">
      <div class="concept__wrap__img">
        <img class="pcview" src="<?php echo get_template_directory_uri(); ?>/image/Concept-Imagegroup.png" width="448" height="554" alt="当院の特長イメージPC">
        <img class="spview" src="<?php echo get_template_directory_uri(); ?>/image/SP-Concept-Imagegroup.png" width="313" height="351" alt="当院の特長イメージSP">
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
      </div>
    </div>
  </section>

  <section id="flow" class="flow">
    <div class="concept__wrap">
      <div class="concept__wrap__img">
        <img class="pcview" src="<?php echo get_template_directory_uri(); ?>/image/about_flow.png" width="448" height="554" alt="施術の流れイメージPC">
        <img class="spview" src="<?php echo get_template_directory_uri(); ?>/image/about_flow_sp.png" width="313" height="351" alt="施術の流れイメージSP">
      </div>
      <div class="concept__wrap__content">
        <div class="concept__wrap__content__headline head1 symbol">
          <h2>Flow</h2>
          <p>施術の流れ</p>
          </h2>
          <div class="concept__wrap__content__subtitle">
          </div>
        </div>
        <div class="concept__wrap__content__des">
         <ol>
          <li>１.  受付</li>
          <li>２.  問診票のご記入</li>
          <li>３.  カウンセリング</li>
          <li>４.  施術</li>
          <li>５.  アフターカウンセリング</li>
         </ol>
        </div>
      </div>
    </div>
  </section>

  <section id="point" class="point">
    <div class="head2">
      <h2>根本改善のポイント</h2>
      <p>お体の状態や生活習慣、ご要望を丁寧にお伺いします。</p>
      <p>ご自身でできるケアなども含めて施術方針をお作りします。</p>
    </div>
    <div class="point__wrap">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/image/about_Point1.png" alt="丁寧なカウンセリング" width="320" height="320">
          <p>丁寧なカウンセリング</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/image/about_Point2.png" alt="徹底的分析" width="320" height="320">
          <p>徹底的分析</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/image/about_Point3.png" alt="施術計画のご提案" width="320" height="320">
          <p>施術計画のご提案</p>
        </li>
      </ul>
    </div>
  </section>

  <?php get_footer(); ?>