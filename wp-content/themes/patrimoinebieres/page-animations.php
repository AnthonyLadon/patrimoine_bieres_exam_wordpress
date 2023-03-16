<?php get_header(); ?>
<div class="banniere" style="background-image:url(<?php bloginfo('url')?>/wp-content/themes/patrimoinebieres/illustrations/banners/bg-3.jpg);background-position:50% 0%;min-height:600px">

	<div class="banniere-contenus">
		<h2 class="has-jaune-color centered">Animations</h2>
		<p class="centered">Cette année encore, Patrimoine Bières sera l&rsquo;occasion de (re)découvrir des talents exceptionnels.</p>
		<p class="centered">L&rsquo;animation sera assurée pendant tout le week-end.</p>
	</div>
</div>
<div class="conteneur">
        <?php
            if(have_posts()){
                while(have_posts()) {
                        the_post(); 
                        the_content();
                }}?>
                </div>
            <?php get_footer(); ?> 
    </body>
</html>
