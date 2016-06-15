
<?php get_header(); ?>
<section class="so-home">
  <div class="banner">
    <div class="card-triple">
      <?php
        $args = array( 'post_type' => 'banner', 'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      <div class="card">
        <article class="banner-item">
          <header>
            <h1 class="title-banner">
              <?php the_title() ?>
            </h1>
          </header>
          <main>
            <?php the_content() ?>
          </main>
          <footer>
            <?php the_excerpt() ?>
          </footer>
        </article>
      </div>
      <?php
        endwhile;
      ?>

    </div>
  </div>

  <div class="home-info">
    <div class="card-double">
      <div class="card">
          <h2 class="title">Insitucional</h2>
          <p>
            <i class="icon-build"></i>
            <strong>Supermercado Oeste desde 1994</strong> <br>
            Tradição e respeito ao cliente, sempre buscando dar qualidade de
            atendimento e produtos para nossos clientes e suas famílias
          </p>
          <a href="#">
            <button class="btn-link">
              ler mais
            </button>
          </a>
      </div>

      <div class="card">
          <h2 class="title">Cartão Oeste</h2>
          <p>
            <i class="icon-card"></i>
            <strong>
              Mais Crédito, Prazo e Benefícios
            </strong> <br>
            Adquira seu cartão em qualquer uma de nossas lojas, dirigindo-se ao balcão de atendimento.
          </p>
          <a href="#">
            <button class="btn-link">
              peça o seu
            </button>
          </a>
      </div>

    </div>
  </div>

  <div class="home-news">
    <h2 class="title">Notícias</h2>
    <div class="card-four">

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
          <div class="card">
            <article class="news-thumb">
              <header class="nt-header">
                <h3 class="title-news"><?php the_title(); ?></h3>
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
          </div>
      <?php endwhile?>
      <?php else: ?>
          <div class="box-center">
              sem artigos =(
          </div>
      <?php endif; ?>
    </div>
  </div>

</section>
<?php get_footer(); ?>
