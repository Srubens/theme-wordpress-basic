<?php

if( post_password_required() ){
    return;
}

if( have_comments() ){
    foreach( $comments as $comment ){
        ?>
        <div class="comentario">
            <div class="commentario_foto">
                <?php echo get_avatar($comment, 60); ?>
            </div>
            <div class="comentario_area">
                <strong><?php comment_author(); ?></strong> <br>
                <strong><?php comment_date(); ?></strong> <br>
                <strong><?php comment_text(); ?></strong> <br>
            </div>
        </div>
        <?php
    }
}

the_comments_pagination();


comment_form(array(
    'comment_field' => '<textarea name="comment"></textarea>',
    'fields' => array(
        'author' => '<input type="text" name="author">',
        'email' => '<input type="email" name="email">'
    ),
    'class_submit' => 'nome da classe',
    'label_submit' => 'Cadastrar comentario',
    'title_reply' => 'Deixe um Comentario'
));