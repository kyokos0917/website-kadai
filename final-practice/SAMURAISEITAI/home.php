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
  <section id="information" class="information">
    <ul class="information__wrap">
      <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>

        <?php 
          $cats = get_the_category();
          $catname = $cats[0]->name; 
          $format = ('Y年n月j日');?>
          
      <li class="information__wrap__content">

        <div class="information__wrap__content__img">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
          <?php endif; ?>
        </div>
        <a href="<?php echo the_permalink(); ?>">
        <div class="information__wrap__content__txt">
          <div class="information__wrap__content__txt__ttl">
            <h3><?php echo get_the_title(); ?></h3>
          </div>
          <div class="information__wrap__content__txt__info news__wrap__detail__info">
            <p class="news__wrap__detail__info__date"><?php echo get_the_date($format); ?></p>
            <p class="news__wrap__detail__info__category tag_date"><?php echo $catname ;?></p>
          </div>
        </div>
          </a>

      </li>
      <?php endwhile; ?>
      <?php else: ?>
        <?php endif; ?>

      </ul>
  </section>

  <div class="information__wrap__pagenation">
    <?php
    $args = array(
      'prev_next' => false,
      'type' => 'list',
      'mid-size' => 2,
      'end_size' => 1
    );
    the_posts_pagination( $args )
    ?>

  </div>

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