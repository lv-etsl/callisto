<?php get_header(); ?>
<div class="container container--sm">
    <!-- index -->
      <?php if(have_posts()); ?>
        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class(''); ?>>
            <header class="entry-title">
              <h1>
                <a href="<?php the_permalink(); ?>" >
                  <?php the_title(); ?>
                </a>
              </h1>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>
            <footer class="entry-meta">
              <span>
                Date de publication: <?php the_date(); ?>
              </span>
            </footer>
          </article>

      <?php endwhile; ?>
</div>
      <?php get_sidebar(); ?>

<?php get_footer(); ?>
