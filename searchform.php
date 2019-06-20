<?php
/**
 * Template for displaying search forms in accvent theme
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <label class="sr-only" for="<?php echo $unique_id; ?>">Búsqueda</label>
        <div class="input-group">
            <input type="search" class="form-control" id="input-search <?php echo $unique_id; ?>" value="<?php echo get_search_query(); ?>" name="s" required />
        </div>
    </div>
    <input class="btn" type="submit" id="search-submit" value="Buscar" />
</form>
