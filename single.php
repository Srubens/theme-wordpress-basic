<?php get_header(); ?>

<!-- CONTEUDO -->
    <section>
        <div>meu conteudo do index</div>

        
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ):  ?>
            <?php the_post(); ?>
        <article>
              <!-- TITULO DA POSTAGEM -->
              <h1><?php the_title(); ?></h1>
              <!-- VERIFICANDO SE EXISTE IMAGEM NA POSTAGEM -->
              <?php if( !has_post_thumbnail() ): ?>
                 <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              <p><?php the_date('d/m/Y h:i:s'); ?></p>
              
              
              
              <p><?php the_content(); ?></p>
              <!-- BREVE DESCRIÇÃO DA POSTAGEM -->
              <p><?php the_author(); ?></p>
              <!-- QUEM ESCREVEU A POSTAGEM -->
              <!-- <p>Comentarios: <?php //comments_number('0 comentários', 'um comentário', '% comentários'); ?></p> -->
              <!-- COMENTARIOS -->

        </article>
           <?php endwhile; ?>
        <?php endif; ?>

        <?php
           if( comments_open() ){
               comments_template();
           }
        ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_post_link(); ?></div>
            <div class="proxima_pagina"><?php next_post_link(); ?></div>
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