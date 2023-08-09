<?php require('header.php') ?>

<body>
    <?php require('menu.php') ?>
     


    <div>
    <?php
        // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        }
         the_content() ?>
    </div>

</body>