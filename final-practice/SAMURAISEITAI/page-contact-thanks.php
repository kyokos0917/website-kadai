<?php get_header();?>

  <section id="keyvisual" class="keyvisual-contact">
    <div class="keyvisual-contact__txt">
      <div class="keyvisual-contact__txt__wrap">
        <h2>Contact</h2>
        <p>ご予約・お問い合わせ</p>
      </div>
    </div>
    <div class="keyvisual-contact__wrap">
      <div class="keyvisual-contact__img">
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

  <section id="thanks" class="thanks">
    <div class="thanks__wrap">
      <div class="thanks__wrap__message">
        <h3>お問い合わせ内容を<br class="spview">送信しました</h3>
        <p>ありがとうございます。２営業日以内にご返信いたします。</p>
          <a class="btn_green" href="<?php echo home_url();?>">戻る</a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>