<?php
get_header();

while(have_posts()){
    the_post();
?>
<div class="content-section">
    <h1 class="single-title">
        <?php the_title(); ?>
    </h1>
    <p>
        <?php the_content()?>
    </p>
</div>
<?php
}

get_footer();
?>