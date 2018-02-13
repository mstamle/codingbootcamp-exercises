<?php 

    // ----------------------------------------------------------
    // 1. PREPARE ALL INFORMATION WE WILL NEED TO RENDER THE PAGE
    // (no echo or HTML including in this phase)
    // ----------------------------------------------------------

    define('IN_PRODUCTION', true);

    // setup everything we need for the project
    $site_url = 'http://www.cbp-exercises.test/eshop';

    // set the content
    $content = 'homepage/layout.php';

    // ---------------------------------
    // 2. RENDER THE PAGE!
    // echoing and including HTML begins
    // ---------------------------------

    // when we are ready with setup, include the wrapper
    include 'views/html-wrapper.php'; 
    
?>