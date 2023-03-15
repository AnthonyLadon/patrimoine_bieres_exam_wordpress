<?php get_header(); ?> 
<main>

<?php

while(have_posts()) {
        the_post(); 
        echo’<h2>’; 
        the_title(); 
        echo’</h2>’; 
        the_content();
        if (has_post_thumbnail()){
        the_post_thumbnail(array(150,150)); 
        }
    } 
?>
</main>
<?php get_footer();