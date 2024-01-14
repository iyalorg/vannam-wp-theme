<?php
get_header();

while(have_posts()){
    the_post();
?>
<div class="content-section">
    <h1 class="single-title">
        <?php the_title(); ?>
    </h1>
    <p class="single-meta">எழுதியவர்: <?php the_author_link();?> &emsp; பதிப்பிக்கப்பட்ட நேரம்: <?php the_time(); ?></p>
    <br>
    <p>
        <?php the_content()?>
    </p>
</div>
<?php
}

get_footer();
?>