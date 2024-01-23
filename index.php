<?php
get_header(); 
?>

<div class="content-section">
    <div class="cards">

        <?php 
while(have_posts()){
    the_post();
?>
        <a href="<?php the_permalink(); ?>" class="card-link">
            <div class="card">
                <?php the_post_thumbnail(); ?>
                <p class="card-title"><?php the_title(); ?></p>
                <p class="card-author">எழுதியவர்: <b><?php the_author();?></b></p>
            </div>
        </a>

        <?php
}
?>
    </div>
</div>
<?php
get_footer();
?>