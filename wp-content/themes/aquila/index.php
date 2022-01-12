<?php

/**
 * Index Page of the site
 * 
 * 
 */
    get_header()
?>

    <?php while(have_posts()) : 
        
        the_post();
        
        ?>

        <h1><?php the_title() ?></h1>

        <img src="<?php the_field('property_photos') ?>" alt="">

        <b><?php the_field('property_type') ?></b>

        <b><?php the_content() ?></b>

        <p><?php the_field('property_contact_information') ?></p>

        <p><?php the_field('property_price') ?></p>

        <hr>

    <?php endwhile; ?>

<?php

    get_footer()

?>