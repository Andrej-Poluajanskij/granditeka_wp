<?php
/* Template name: Warranty */
get_header();
?>
<?php include('includes/page_title.php'); ?>
<section class="warranty container container-2">
    <div class="warranty-text">
        <p><?php the_field('warranty_content'); ?></p>
    </div>
</section>

<?php get_footer(); ?>
