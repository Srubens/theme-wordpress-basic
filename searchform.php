<form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="search-form" method="GET">
    <input type="search" name="s" value="<?php the_search_query(); ?>" required />
    <input type="submit" value="Pesquisar">
</form>