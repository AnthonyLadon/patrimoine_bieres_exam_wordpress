<?php get_header(); ?>
<div class="inner-container">
        <?php
            if(have_posts()){

                while(have_posts()) {
                    the_post();
                    echo "<div class='brewery_backlink'>";

                    echo "<a href='".get_category_link(get_the_category()[0]->term_id)."'>retour catégorie</a>";
                    echo "</div>";

                    echo "<article>";

                    echo "<div class='brewery_logo'>";
                    echo "<img src='".get_the_post_thumbnail_url()."' alt='logo de la brasserie'>";
                    echo "</div>";

                    echo "<h2>";
                    the_title();
                    echo "</h2>";

                    echo "<div class='brewery_desc'>";
                    echo "<p>".the_content()."</p>";

                    echo "</article>";
                    echo "</div>";
                }}?>
            <?php get_footer(); ?> 
    </body>
</html>