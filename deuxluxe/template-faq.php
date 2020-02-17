<!-- Fanny -->
<?php
    /* Template Name: Template-Faq-Page */ 
?>
<?php get_header(); ?>

<main>
    <?php if(have_rows("sections")): ?>
        <?php while(have_rows("sections")): the_row(); ?>
            <?php if(get_row_layout() == "hero_faq"): ?>
                <?php get_template_part('./sections/section-faq-hero'); ?>
            <?php elseif(get_row_layout() == "standard"): ?>
                <?php get_template_part("./sections/section-standard"); ?>
            <?php elseif(get_row_layout() == "slides_faq"): ?>
                <?php get_template_part("./sections/section-slideshow-faq"); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <section>
        <div class="container">
            <div class="row">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <div class="Picture__Right">
                            <h1><?php the_title();?></h1>
                            <?php the_content();?>
                        </div>
                        <div class="Picture__Right">
                            <img src="<?php the_post_thumbnail_url(); ?>" />                        
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>            
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>