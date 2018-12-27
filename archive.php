<?php get_header(); ?>

<!-- CONTEUDO -->
    <section>
        <!-- mostra a categoria que esta sendo filtrada -->
        <h1><?php the_archive_title(); ?></h1>

        
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ):  ?>
            <?php the_post(); ?>
               <?php get_template_part('template_partes/post'); ?>
           <?php endwhile; ?>
        <?php endif; ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_posts_link('Pagina Anterior'); ?></div>
            <div class="proxima_pagina"><?php next_posts_link('Proxima Pagina'); ?></div>
        </div>

        <?php get_sidebar(); ?>

    </section>

<?php get_footer(); ?>
