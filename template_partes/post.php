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