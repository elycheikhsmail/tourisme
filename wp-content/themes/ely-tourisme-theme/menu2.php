<nav>
    <div class="iteme">
        <ul>
            <li class="logo">
                <img src="<?php echo get_template_directory_uri() . '/images/logo-compact.svg' ?>" alt="logo">
            </li>


            <?php
            $iteration_index = 0;
            $index_service_in_menu = 3;
            // Récupère le menu par son emplacement
            $menu_locations = get_nav_menu_locations();
            //print_r($menu_locations) ;
            $menu_id = $menu_locations['tours'];

            // Vérifie si le menu a été attribué à un emplacement
            if ($menu_id) {
                $menu_items = wp_get_nav_menu_items($menu_id);
                // Supposons que $monObjet est votre objet dont vous voulez afficher les attributs
                //print_r($menu_items[4]->menu_item_parent);
                $init_menu_item_parent = $menu_items[0]->menu_item_parent;
                $has_no_parent_count = 0;
                $title = '$menu_item->title';


                // Vérifie s'il y a des items dans le menu
                if ($menu_items) {

                    foreach ($menu_items as $menu_item) {
                        if (!$menu_item->menu_item_parent) {
                            $iteration_index++;
                            //error_log('iteration_index : ' . $iteration_index);
 
                            if ($has_no_parent_count > 1) {
                                ?>
                                <?php $has_no_parent_count = 0; ?>
                                <?php
                                if ($iteration_index < 3) {
                                    ?>
                                </ul>
                                </Li>
                                <Li>
                                    <?php echo $menu_item->title; ?>
                                    <ul class="dropdwon">
                                    <?php } else { // $iteration_index >= 3
                                    ?>
                                    </ul>
                                </Li>

                                <li class="dropdwon-iteme">

                                    <a href="<?php echo $menu_item->url; ?>">
                                        <?php echo $menu_item->title; ?>
                                    </a>
                                </li>


                                <?php

                                } ?>

                        <?php } else {
                                ?>

                            <Li>
                                <?php echo $menu_item->title; ?>
                                <ul class="dropdwon">

                                    <?php
                            }
                        } else {
                            ?>
                <li class="dropdwon-iteme">
                    <?php //echo $menu_item->title; 
                                    ?>

                                    <a href="<?php echo $menu_item->url; ?>">
                        <?php echo $menu_item->title; ?>
                    </a>
                </li>
                <?php
                $has_no_parent_count++;
                        }
                    }
                }
            }
            ?>
            </ul>
    </div>
    <?php require('menu_social.php') ?>
   
</nav>