<?php
/*
 * Template Name: Forside
 */
  
 get_header();  ?>

 <div id="container" > <!-- Here should be fluida custom class -->
	<main id="main" role="main" class="main" >
        <!--<a href="https://www.tanum.no/_dokumentar-og-fakta/helse-og-samliv/familie-og-helse/balladen-med-fasaden-lene-hval-9788202561208?utm_source=Balladen-med-fasaden&utm_medium=referral">
            <div class="bokannonse">
                <div class"bokannonse-img">
                    <img src="http://www.norahelmer.no/wp-content/uploads/2017/09/Skjermbilde-2017-09-03-kl.-09.20.45.png"/ alt="" >
                </div>
                <div class"bokannonse-text">
                    <p class="title" >BALLADEN MED FASADEN</p>
                    <p class="description" >Håndbok for yummimummies og partallsfedre.</p>
                     <p class="description" >Lurer du på hvordan du skal bli 10 - 15 % lykkeligere i hverdagen? Kjøp Noras håndbok for yummimummies og partallsfedre <a href="https://www.tanum.no/_dokumentar-og-fakta/helse-og-samliv/familie-og-helse/balladen-med-fasaden-lene-hval-9788202561208?utm_source=Balladen-med-fasaden&utm_medium=referral">her</a>.</p>  
                </div>
            </div>
        </a>-->
        
        <a href="http://norahelmer.no/ccount212/click.php?id=bookclick">
            <div class="bokannonse-only-img bokannonse-only-img-header">
                <img src="http://www.norahelmer.no/wp-content/uploads/2017/09/Balladen-med-fasaden-Mailsignatur.jpg" alt="">
            </div>
        </a>
        ​
        <?php 
            // the query
            $the_query = new WP_Query( array('posts_per_page' => 10,)); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>            
            <!--<a href="<?php echo get_permalink(); ?>">
                <div class="entry-header-image">
                    <img id="blogpost-header-image" class="aligncenter wp-image-305 size-large" src=" <?php echo catch_that_image(); ?>">
                    <div class="title-text-box">
                        <?php the_title( '<h2 id="image-title" class="entry-title" ' . cryout_schema_microdata( 'entry-title', 0 ) . '>', '</h2>' ); ?>
                    </div>
                </div>
            </a>-->
            <article id="post-<?php the_ID(); ?>" <?php post_class( array('pad-container')); ?>>
                <header>
				<a href="<?php echo get_permalink(); ?>"><?php the_title( '<h1 class="entry-title" ' . cryout_schema_microdata( 'entry-title', 0 ) . '>', '</h1>' ); ?></a>
				<span class="entry-meta" >
					<?php edit_post_link( __( 'Edit', 'fluida' ), '<span class="edit-link"><i class="icon-edit"></i> ', '</span>' ); ?>
				</span>

                <div class="entry-post-date">
                    <h6><?php the_date(); ?></h6>
                </div><!-- .entry-meta -->
			</header>

                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'fluida' ), 'after' => '</div>' ) ); ?>
                </div>
                <div class="tnp tnp-subscription">
                    <br>
                    <form method="post" action="http://www.norahelmer.no/?na=s" onsubmit="return newsletter_check(this)">
                        <div class="tnp-field tnp-field-email"><label style="display:none; color:#A6A6A6;">Email</label><input class="tnp-email" type="email" placeholder="yummy@mummy.com" name="ne" required></div>
                        <div class="tnp-field tnp-field-button"><input style="background-color:#D74389 !important;" class="tnp-submit" type="submit" value="Registrer deg for å få de nyeste norastripene">
                        </div>
                    </form>
                </div>

                <nav id="nav-below" class="navigation" role="navigation">
                    <div class="nav-previous"><?php previous_post_link( '%link', '<i class="icon-angle-left"></i> <span>Forrige innlegg</span>' ); ?></div>
                    <div class="nav-next"><?php next_post_link( '%link', '<span>Neste innlegg</span> <i class="icon-angle-right"></i>' ); ?></div>
                </nav><!-- #nav-below -->

                
                
            </article>
            <!--<div class="annonse">
                <a href="https://www.tanum.no/_dokumentar-og-fakta/helse-og-samliv/familie-og-helse/balladen-med-fasaden-lene-hval-9788202561208?utm_source=Balladen-med-fasaden&utm_medium=referral">
                    <div class="bokannonse">
                        <div class"bokannonse-img">
                            <img src="http://www.norahelmer.no/wp-content/uploads/2017/09/Skjermbilde-2017-09-03-kl.-09.20.45.png"/ alt="" >
                        </div>
                        <div class"bokannonse-text">
                            <p class="title" >BALLADEN MED FASADEN</p>
                            <p class="description" >Håndbok for yummimummies og partallsfedre.</p>
                            <p class="description" >Lurer du på hvordan du skal bli 10 - 15 % lykkeligere i hverdagen? Kjøp Noras håndbok for yummimummies og partallsfedre <a href="https://www.tanum.no/_dokumentar-og-fakta/helse-og-samliv/familie-og-helse/balladen-med-fasaden-lene-hval-9788202561208?utm_source=Balladen-med-fasaden&utm_medium=referral">her</a>.</p>  
                        </div>
                    </div>
                </a>
            </div>-->
            <a href="http://norahelmer.no/ccount212/click.php?id=bookclick">
                <div class="bokannonse-only-img bokannonse-only-img-between-post">
                    <img src="http://www.norahelmer.no/wp-content/uploads/2017/09/Balladen-med-fasaden-Mailsignatur.jpg" alt="">
                </div>
            </a>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php __('No News'); ?></p>
        <?php endif; ?>
	</main><!-- #main -->	
</div><!-- #container -->

<?php get_footer();
