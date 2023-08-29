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

  <section id="contact" class="contact">
    <div class="contact__wrap">
      <div class="contact__wrap__head">
        <h3>お電話でのご予約・お問い合わせ</h3>
        <p>〒101-0022 東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
        <p class="contact__wrap__head-green"><span>tel:</span> 03-1234-5678</p>
      </div>

      <div class="contact__wrap__content">
        <h3>ご予約・お問い合わせフォーム</h3>
        <p>※ 2営業日以内にご返信いたします。</p>
        
        <?php echo do_shortcode('[wpforms id="72" title="false"]'); ?>

          <!-- <form class="contact__wrap__content__form">
            <div class="contact__wrap__content__form__list">
              <label for="name">氏名（必須）</label>
              <input id="name" type="text" placeholder="侍　太郎">
            </div>

            <div class="contact__wrap__content__form__list">
              <label for="furigana">フリガナ（必須）</label>
              <input id="furigana" type="text" placeholder="サムライ　タロウ">
            </div>

            <div class="contact__wrap__content__form__list">
              <label for="telnum">電話番号（必須）<span>半角</span></label>
              <input id="telnum" type="tel" placeholder="0312345678">
            </div>

            <div class="contact__wrap__content__form__list">
              <label for="mail">メールアドレス（必須）<span>半角英数字</span></label>
              <input id="mail" type="email" placeholder="samurai-chiropractic@example.com">
            </div>

            <div class="contact__wrap__content__form__list">
              <label for="date">ご予約希望日</label>
              <input id="date" type="text" placeholder="例) 2023年3月1日">
            </div>

            <div class="contact__wrap__content__form__list">
              <label for="symptoms">お悩み</label>
              <div class="contact__wrap__content__form__list-arrow">
              <select name="symptoms" required>
                <option value="">お悩みを選択してください</option>
                <option value="1">腰痛・肩こり</option>
                <option value="2">冷え性・だるさ</option>
                <option value="3">骨盤・背骨矯正</option>
                <option value="4">骨折・打撲・捻挫・脱臼</option>
                <option value="5">スポーツ診療</option>
                <option value="6">交通事故</option>
                <option value="7">その他</option>
              </select>
            </div>
            </div>

            <div class="contact__wrap__content__form__list">
              <label for="content">お問い合わせ内容</label>
              <textarea name="content" rows="5" placeholder="できるだけ詳しいお問い合わせ内容を記入してください"></textarea>
            </div>

            <div class="btn_green">
            <button type="submit" value="送信">送信</button>
          </div>

          </form> -->
      </div>
    </div>
  </section>

  <?php get_footer(); ?>