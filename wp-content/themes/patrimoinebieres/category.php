
<?php get_header(); ?>
<h1>category.php</h1>
        <?php
            if(have_posts()){
                echo "<p>L’événement Patrimoine Bières regroupe quinze brasseries artisanales spécialement sélectionnées pour leur qualité et leur diversité. Découvrez ci-dessous les brasseries nous ayant rejoint :</p>";
                while(have_posts()) {
                        the_post();

                        if(has_post_thumbnail()) {
                            echo '<div><a href=”'.get_the_permalink().'”>';
                            the_post_thumbnail(array(150,150));
                            echo '</a></div>';
                        }

                }}?>
            <?php get_footer(); ?> 
    </body>
</html>