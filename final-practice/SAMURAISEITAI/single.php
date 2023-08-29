<?php get_header();?>

  <section id="keyvisual" class="keyvisual-news">
    <div class="keyvisual-news__txt">
      <div class="keyvisual-news__txt__wrap">
        <h2>Information</h2>
        <p>お知らせ</p>
      </div>
    </div>
    <div class="keyvisual-news__wrap">
      <div class="keyvisual-news__img">
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

  <div class="page_wrapper">
    <?php if(have_posts()) :?>
      <?php while (have_posts()) : the_post() ;?>

      <?php 
          $cats = get_the_category();
          $catname = $cats[0]->name; 
          $format = ('Y年n月j日');?>

    <section id="singlepage" class="singlepage">
      <div class="singlepage__wrap">
        <div class="singlepage__wrap__ttlarea">
          <div class="singlepage__wrap__ttlarea__ttl">
            <h3><?php echo get_the_title(); ?></h3>
          </div>
          <div class="singlepage__wrap__ttlarea__info news__wrap__detail__info">
            <p class="news__wrap__detail__info__date"><?php echo get_the_date($format); ?></p>
            <p class="news__wrap__detail__info__category tag_date"><?php echo $catname ;?></p>
          </div>
        </div>
        <div class="singlepage__wrap__content">
          <div class="singlepage__wrap__content__thumbnail">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          </div>
          <div class="singlepage__wrap__content__text">
            <?php echo the_content() ;?>
          </div>
        </div>

        <?php endwhile; ?>
      <?php else: ?>
        <?php endif; ?>

        <div class="singlepage__wrap__pagenation">
          <ul>
            <li><?php previous_post_link('%link', '前の記事へ');?></li>
            <li><a href="/news/"><span class="pcview">お知らせ</span>一覧</a></li>
            <li><?php next_post_link('%link', '次の記事へ');?></li>
          </ul>
        </div>

      </div>
    </section>



    <aside id="sidebar" class="sidebar">
      <h3>カテゴリ</h3>
      <ul>
        <li>営業日時</li>
        <li>キャンペーン</li>
        <li>その他</li>
      </ul>
    </aside>
  </div>

  <?php get_footer(); ?>