<?php /** Block Name: Hero Block */  ?>

<section class="main-hero">
    <div class="context">
        <h1><?php the_field('title'); ?></h1>
        <p><?php the_field('subtitle'); ?></p>
    </div>
    <div class="image">
        <img alt="Hero image" src="<?php the_field('image'); ?>" />
    </div>
</section>