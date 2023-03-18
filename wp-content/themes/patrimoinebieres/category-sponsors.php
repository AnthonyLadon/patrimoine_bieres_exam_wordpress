<?php get_header(); ?>
    <div class="inner-container">
        <h1>category-sponsors.php</h1>
        <?php

            if(have_posts()){
                echo "<p>L’événement Patrimoine Bières ne serait rien sans le soutien indéfectible de nos sponsors qui, chaque année, nous aident afin que nous puissions vous proposer un weekend extraordinaire. Ces sponsors méritent votre attention, tant par la qualité de leurs services ou produits que par leur implication dans la réussite de notre événement.</p>";
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