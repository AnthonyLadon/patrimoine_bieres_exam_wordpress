<?php get_header(); ?>
<div class="inner-container">
    <h1>single-brasseries.php</h1>
        <?php
            if(have_posts()){

                while(have_posts()) {
                    the_post();
                    echo "<div class='brewery_backlink'>";


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