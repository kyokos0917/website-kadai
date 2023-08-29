<section id="access" class="access">
    <div class="access__wrap">
      <div class="access__wrap__headline head2">
        <h2>お気軽にご来院ください</h2>
      </div>
      <div class="access__wrap__contents">
        <div class="access__wrap__contents__text">
          <h3>JR「秋葉原駅」より徒歩1分</h3>
          <p>〒101-0022<br class="pcview">
            東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
          <div class="access__wrap__contents__text-green">
            <p><span>tel: </span>03-1234-5678</p>
          </div>
          <table class="access__wrap__contents__text__table">
            <tbody>
              <tr>
                <th class="time">営業時間</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th class="right_top">日</th>
              </tr>

              <tr>
                <td>9:00〜12:30</td>
                <td>●</td>
                <td>●</td>
                <td>−</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
              </tr>
              <tr class="second">
                <td class="left_bottom">15:30〜20:00</td>
                <td>●</td>
                <td>●</td>
                <td>−</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
                <td class="right_bottom">●</td>
              </tr>

            </tbody>
          </table>
          <a class="btn_green" href="<?php echo home_url();?>/contact/">ご予約・お問い合わせはこちらから</a>
        </div>

        <div class="access__wrap__contents__image">
          <img src="<?php echo get_template_directory_uri(); ?>/image/access_map.png" alt="地図">
        </div>

      </div>
    </div>
  </section>

<footer id="footer" class="footer">
    <div class="footer__link">
      <a href="#header"><img src="<?php echo get_template_directory_uri(); ?>/image/btn_Back.png" alt="TOPヘ戻る"></a>
    </div>
    <div class="footer__wrap">
      <div class="footer__wrap__logo">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="SAMURAI整体院PCロゴ"></h1>
      </div>
      <div class="footer__wrap__menu">
        <nav class="footer__wrap__menu__nav">
          <ul>
            <li><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li><a href="<?php echo home_url(); ?>/about/">当院について</a></li>
            <li><a href="<?php echo home_url(); ?>/course/">コース・料金</a></li>
            <li><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
            <li><a href="<?php echo home_url(); ?>/voice/">お客様の声</a></li>
            <li><a href="<?php echo home_url(); ?>/contact/">ご予約・お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="footer__copyright">
      <p>&copy;2023 SAMURAI整体院</p>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>