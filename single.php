<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>

<section class="so-noticias">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="news-single">
      <header class="single-header">
        <h1 class="title-page">
          <i class="icon-comments"></i>
          <span><?php the_title(); ?></span>
        </h1>
        <time class="news-time"><?php the_time('d/m/y') ?></time>
      </header>
      <main class="single-main">
        <?php the_content(); ?>
      </main>
    </article>

  <?php endwhile; else: ?>
    <article class="news-thumb">
      <header class="nt-header">
        <h1 class="title-page">
          <i class="icon-comments"></i>
          <span>Error 404</span>
        </h1>
      </header>
      <main class="nt-main">
        artigo não encontrado =(
      </main>
    </article>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
