<?php
/*
 * Template Name: Forside test
 */
  
 get_header();  ?>

 <div id="container" > <!-- Here should be fluida custom class -->
	<main id="main" role="main" class="main" >
        
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

                <script type="text/javascript">
                //<![CDATA[
                if (typeof newsletter_check !== "function") {
                window.newsletter_check = function (f) {
                    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                    if (!re.test(f.elements["ne"].value)) {
                        alert("Denne eposten er det noe galt med.");
                        return false;
                    }
                    for (var i=1; i<20; i++) {
                    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
                        alert("");
                        return false;
                    }
                    }
                    if (f.elements["ny"] && !f.elements["ny"].checked) {
                        alert("Du må akseptere personvernserklæringen");
                        return false;
                    }
                    return true;
                }
                }
                //]]>
                </script>

                <div class="nyhetsbrev">
                    <form method="post" action="http://www.norahelmer.no/?na=s" onsubmit="return newsletter_check(this)">
                        <div>
                            <input class="nyhetsbrev-email" type="text" placeholder="yummy@mummy.bliss" name="email" required>   
                        </div>
                        <div> 
                            <input type="checkbox" name="ny" required>&nbsp;Jeg ønsker å motta nyhetbrev fra norahelmer.no. <a style="text-decoration:underline;" target="_blank" href="www.norahelmer.no/gdpr">Link personvern</a>
                        </div>
                        <div>
                            <input class="tnp-submit nyhetsbrev-submit" type="submit" value="Få de nyeste Norastripene rett i mailboksen"/>
                        </div>
                    </form>
                </div>

                <nav id="nav-below" class="navigation" role="navigation">
                    <div class="nav-previous"><?php previous_post_link( '%link', '<i class="icon-angle-left"></i> <span>Forrige innlegg</span>' ); ?></div>
                    <div class="nav-next"><?php next_post_link( '%link', '<span>Neste innlegg</span> <i class="icon-angle-right"></i>' ); ?></div>
                </nav><!-- #nav-below -->

                
                
            </article>

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
