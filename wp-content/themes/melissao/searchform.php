<form method="get" action="<?php bloginfo('url'); ?>/">
    <label class="isVisuallyHidden" for="s">Search</label>
    <input class="field field_sizeMd" type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="" />
    <button class="btn" type="submit">Search</button>
</form>