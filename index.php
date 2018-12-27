<?php get_header(); ?>

<!-- CONTEUDO -->
    <section>
        <div>meu conteudo do index</div>

        
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

<!-- TAMANHO DAS IMG
PEQUENO - thumbnail
MEDIUN - medium
GRANDE - large
ORIGINAL - full 
the_post_thumbnail('', array('class' => 'nome da class')); -->