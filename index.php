<?php

/**
 * Main Template file
 *  
 * @package Pinaka
 * 
 */

        get_header();
    ?>

    <div class="content">
        <?php the_content(null, false )?>
    </div> 

    <?php 
        get_footer();

       