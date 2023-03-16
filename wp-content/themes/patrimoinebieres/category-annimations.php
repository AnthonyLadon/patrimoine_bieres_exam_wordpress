<?php get_header(); ?>
        <?php
            if(have_posts()){
                echo "<p>L’événement Patrimoine Bières regroupe quinze brasseries artisanales spécialement sélectionnées pour leur qualité et leur diversité. Découvrez ci-dessous les brasseries nous ayant rejoint :</p>";
                while(have_posts()) {
                        the_post();
                        the_content();
                }}?>
            <?php get_footer(); ?> 
    </body>
</html>