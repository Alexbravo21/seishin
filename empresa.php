<?php include 'header.php'; ?>

<?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
    ?>
    <?php
        the_content(); 
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
?>


<?php include 'footer.php'; ?>