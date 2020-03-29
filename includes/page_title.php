<div class="page_title-header_bg">
    <div class="page_title-header_bg-color"></div>
    <div class="page_title-header container container-2">
        <div>
            <h1><?php the_title(); ?></h1>
        </div>
         <div class="search-bar">
             <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                <input type="text" name="s" placeholder="Search Products"/>
                <input type="hidden" name="post_type" value="products" /> <!-- // hidden 'products' value -->
                <button type="submit" alt="Search" value="Search"> </button>
            </form>
        </div>
    </div>
</div>