<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>

<section class="so-noticias">

  <h1 class="title-page">
    <i class="icon-comments"></i>
    <span>
      Noticias
    </span>
  </h1>

  <div class="content">
    <div class="news-set">

      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'paged' => $paged,
          'posts_per_page' => 4
        );
        query_posts($args);
        
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="news-thumb">
          <header class="nt-header">
            <h3 class="title-news"> <?php the_title(); ?> </h3>
            <time><?php the_time('d/m/y') ?></time>
          </header>
          <main class="nt-main">
            <?php the_excerpt(); ?>
          </main>
          <footer class="nt-footer">
            <a href="<?php the_permalink() ?>">
              <button class="btn-link"> Ler Mais </button>
            </a>
          </footer>
        </article>
      <?php endwhile?>
      <?php else: ?>
        <div class="box-center">
          sem artigos =(
        </div>
      <?php endif; ?>

    </div>

    <div class="pagination">
      <ul class="menu">
        <li><?php previous_posts_link( '<i class="icon-left"></i>' ); ?></li>
        <li><?php next_posts_link( '<i class="icon-right  "></i>', 0 ); ?></li>
      </ul>
    </div>

  </div>

  <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
