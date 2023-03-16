<?php get_header(); ?>
        <?php

            if(have_posts()){
                while(have_posts()) {
                        the_post();
                        if(has_post_thumbnail()) {
                            echo '<article><a href="'.get_the_permalink().'">';
                            the_post_thumbnail(array(150,150));
                            echo '</a></article>';
                        }
                }}else{
                    echo '<p>Aucun contenu n\'est disponible</p>';
                }?>

            <?php get_footer(); ?> 
    </body>
</html>