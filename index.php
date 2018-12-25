<?php get_header(); ?>

<!-- CONTEUDO -->
    <section>
        <div>meu conteudo do index</div>

        
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ):  ?>
            <?php the_post(); ?>
        <article>
              <!-- VERIFICANDO SE EXISTE IMAGEM NA POSTAGEM -->
              <?php if( has_post_thumbnail() ): ?>
                 <a href="<?php the_permalink(); ?>"></a>
                 <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              <p><?php get_the_date(); ?></p>
              
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <!-- TITULO DA POSTAGEM -->
              <p><?php the_excerpt(); ?></p>
              <!-- BREVE DESCRIÇÃO DA POSTAGEM -->
              <p><?php the_author(); ?></p>
              <!-- QUEM ESCREVEU A POSTAGEM -->
              <!-- <p>Comentarios: <?php //comments_number('0 comentários', 'um comentário', '% comentários'); ?></p> -->
              <!-- COMENTARIOS -->
              <a href="<?php the_permalink(); ?>">LEIA MAIS</a>

        </article>
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