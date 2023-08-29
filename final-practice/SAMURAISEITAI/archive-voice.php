<?php get_header();?>

  <section id="keyvisual" class="keyvisual-voice">
    <div class="keyvisual-voice__txt">
      <div class="keyvisual-voice__txt__wrap">
        <h2>Voice</h2>
        <p>お客様の声</p>
      </div>
    </div>
    <div class="keyvisual-voice__wrap">
      <div class="keyvisual-voice__img">
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

  <section id="voicelist" class="voicelist">
      <ul class="voicelist__wrap">
        <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'post_type' => 'voice',
            'posts_per_page' => CUSTOM_POSTS_PER_PAGE,
            'paged' => $paged,
          );
          $the_query = new WP_Query($args);
          $max_num_pages = $the_query->max_num_pages;
          if($the_query->have_posts()) : 
              while($the_query->have_posts()) : $the_query->the_post();
          ?>
        <li>
          <div class="voicelist__wrap__img">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          </div>
          <div class="voicelist__wrap__content">
            <h3><?php echo get_the_title(); ?></h3>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </li>
        <?php endwhile; ?>
<?php endif; ?>
      </ul>
    <div class="information__wrap__pagenation">
      
    <?php
    if ($the_query->max_num_pages > 1) {    //max_num_pagesの設定　my_queryを使う
     echo paginate_links(array(
     'base' => get_pagenum_link(1) . '%_%',
     'format' => '/page/%#%/',
     'current' => max(1, $paged),
     'total' => $the_query->max_num_pages,  //max_num_pagesの設定
     'prev_next' => false,
     'type' => 'list',
     'mid-size' => 2,
     'end_size' => 1
                                ));
                            }
                            ?>
    </div>
    <?php wp_reset_postdata(); ?>
  </section>



  <?php get_footer(); ?>