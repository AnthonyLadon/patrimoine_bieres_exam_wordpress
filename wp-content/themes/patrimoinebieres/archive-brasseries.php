<?php get_header(); ?>
<h1>archive-brasseries.php</h1>
        <?php
            if(have_posts()){
                echo "<div class='inner-container'>";
                echo "<h1>Brasseries</h1>";
                echo "<p>L’événement Patrimoine Bières regroupe quinze brasseries artisanales spécialement sélectionnées pour leur qualité et leur diversité. Découvrez ci-dessous les brasseries nous ayant rejoint :</p>";
                echo "<div class='listing'>";
                while(have_posts()) {
                        the_post();
                        if(has_post_thumbnail()) {
                            echo '<article><a href="'.get_the_permalink().'">';
                            the_post_thumbnail(array(150,150));
                            echo '</a></article>';
                        }
                }}?>
                </div>
                </div>

            <?php get_footer(); ?> 
    </body>
</html>