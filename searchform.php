<form role="search" method="get" class="d-flex order-sm-1" action="<?php echo esc_url(home_url('/')); ?>">
    <input autocomplete="off" class="form-control" name="s" placeholder="অনুসন্ধান" type="search" value="<?php echo esc_attr(get_search_query()); ?>" aria-label="SearchInput">
    <button class="input-group-text btn btn-primary" aria-label="SearchButton" type="submit"><i class="bi-search"></i></button>
</form>
