<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAMURAI整体院</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php wp_head(); ?>
</head>

<body>
  <div class="modal">
  </div>
  <header>
    <?php if(is_front_page()) :?>
    <div id="header" class="header">
      <?php else :?>
        <div id="header" class="header page">
          <?php endif ;?>
      <div class="header__pcview">
        <div class="header__wrap">
          <div class="header__wrap__logo">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="SAMURAI整体院PCロゴ"></h1>
          </div>
          <div class="header__wrap__menu">
            <nav class="header__wrap__menu__nav">
              <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li><a href="<?php echo home_url(); ?>/about/">当院について</a></li>
                <li><a href="<?php echo home_url(); ?>/course/">コース・料金</a></li>
                <li><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
                <li><a href="<?php echo home_url(); ?>/voice/">お客様の声</a></li>
              </ul>
            </nav>
            <a class="header__wrap__menu__btn" href="<?php echo home_url(); ?>/contact/">ご予約・お問い合わせ</a>
          </div>
        </div>
      </div>

      <div class="header__spview">
        <div class="header__wrap__sp">
          <div class="header__wrap__sp__logo">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/image/logo_sp.png" alt="SAMURAI整体院SPロゴ"></h1>
          </div>
          <div class="header__wrap__sp__menu">
            <img class="header__wrap__sp__menu__default" src="<?php echo get_template_directory_uri(); ?>/image/SP_MenuDefault.png" alt="メニューボタン">
            <img class="header__wrap__sp__menu__close" src="<?php echo get_template_directory_uri(); ?>/image/SP_MenuClose.png" alt="メニューボタン">
          </div>
        </div>
        <nav class="header__wrap__sp__nav">
          <h2>メニュー</h2>
          <ul>
          <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
          <li><a href="<?php echo home_url(); ?>/about/">当院について</a></li>
          <li><a href="<?php echo home_url(); ?>/course/">コース・料金</a></li>
          <li><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
          <li><a href="<?php echo home_url(); ?>/voice/">お客様の声</a></li>
          </ul>
          <div class="header__wrap__menu__btn">
            <a href="<?php echo home_url(); ?>/contact/">ご予約・お問い合わせ</a>
          </div>
        </nav>

      </div>
    </div>
  </header>