<?php 
get_header();

while(have_posts()){
    the_post();
?>
<br>
<div class="container">
    <h2><?php the_title(); ?></h2>
    <h2><?php the_content(); ?></h2>
</div>
<?php } ?>

<?php get_footer(); ?>