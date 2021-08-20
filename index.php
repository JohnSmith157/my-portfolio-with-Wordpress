<?php 
/**
 * Function to load the header 
 */
get_header(); 
?>


<?php 
/**
 * To load the template part content-about.php
 */
get_template_part( 'template-parts/content', 'about' ); 

/**
 * To load the template part content-skills.php
 */
get_template_part( 'template-parts/content', 'skills' ); 

?>
    <div class="container pt-5">
        <div class="row">
            <?php
            /**
             * To load the template part content-education.php
             */
            get_template_part( 'template-parts/content', 'education' ); 

            /**
             * To load the template part content-experience.php
             */
            get_template_part( 'template-parts/content', 'experience' ); 
            ?>
        </div>
    </div>
    
</div> <!-- End of About Page -->

<?php
/**
 * To load the template part content-portfolio.php
 */
get_template_part( 'template-parts/content', 'portfolio' ); 

/**
 * To load the template part content-blog.php
 */
get_template_part( 'template-parts/content', 'blog' ); 


/**
 * To load the template part content-contact.php
 */
get_template_part( 'template-parts/content', 'contact' ); 

?>
    
    
<?php 
/**
 * Function to load the footer
 */

get_footer(); 
?>