<?php get_header(); ?>
    
    <!-- header -->
    <header>
        <hgroup>
            <h1>Odmor u Srbiji</h1>
            <h5>Najveća ponuda smeštaja i izleta u Srbiji</h5>
            <a href="" class="btn btn-danger">Kontakt</a>
        </hgroup>
    </header>

    <!-- main -->
    <section class="main container py-5">
        <div class="row">
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-8">
               
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text">
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">
                            <?php the_author(); ?> | <?php echo get_the_date('F j,Y'); ?>
                        </p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-danger">
                            <?php _e('Ceo tekst'); ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <?php _e('Nema napisanih blog postova'); ?>
                <?php endif; ?>
                
            </div>
        </div>
    </section>
   
<?php get_footer(); ?>