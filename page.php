<?php get_header(); ?>

<!-- CONTEUDO -->
    <section>
        <div>meu conteudo da pagina</div>

            <?php while( have_posts() ):  ?>
            <?php the_post(); ?>
        <article>
              <!-- TITULO DA POSTAGEM -->
              <h1><?php the_title(); ?></h1>
              <!-- VERIFICANDO SE EXISTE IMAGEM NA POSTAGEM -->
              <?php if( !has_post_thumbnail() ): ?>
                 <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              
              
              
              <p><?php the_content(); ?></p>
              <!-- BREVE DESCRIÇÃO DA POSTAGEM -->
              

        </article>
           <?php endwhile; ?>

    </section>

<?php get_footer(); ?>

<!-- TAMANHO DAS IMG
PEQUENO - thumbnail
MEDIUN - medium
GRANDE - large
ORIGINAL - full 
the_post_thumbnail('', array('class' => 'nome da class')); -->