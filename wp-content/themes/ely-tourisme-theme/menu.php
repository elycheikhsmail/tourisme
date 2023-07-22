  
    <nav>
        <div class="iteme">
            <ul>
                <li class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-compact.svg' ?>" alt="logo">
                </li>


                <?php

                // Récupère le menu par son emplacement
                $menu_locations = get_nav_menu_locations();
                $menu_id = $menu_locations['tours'];
                $iteration_index = 0;
                // Vérifie si le menu a été attribué à un emplacement
                if ($menu_id) {
                    $menu_items = wp_get_nav_menu_items($menu_id);
                    // Supposons que $monObjet est votre objet dont vous voulez afficher les attributs
                    //print_r($menu_items[4]->menu_item_parent);
                    $init_menu_item_parent = $menu_items[0]->menu_item_parent;
                    $has_no_parent_count = 0;


                    // Vérifie s'il y a des items dans le menu
                    if ($menu_items) {
                        // echo '<ul>';
                        foreach ($menu_items as $menu_item) {

                            if (!$menu_item->menu_item_parent) {

                                if ($has_no_parent_count > 1) {

                                    echo '
                                    </ul>
                                    </Li>';
                                    $has_no_parent_count = 0;
                                    echo '<Li>' . $menu_item->title . '<ul class="dropdwon">';
                                } else {
                                    echo '<Li>' . $menu_item->title . '<ul class="dropdwon">';
                                }
                            } else {
                                echo '<li class="dropdwon-iteme">' . $menu_item->title . '</li> ';
                                $has_no_parent_count++;
                            }
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contact">
            <p class="location">
                <i class="fa-solid fa-location-dot"></i>
                nouacchott, mouritania
            </p>
            <div class="icons">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
            <p class="telephone">
                <i class="fa-solid fa-phone"></i>
                +222 34532523
            </p>
        </div>
    </nav>

