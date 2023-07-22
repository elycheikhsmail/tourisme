<?php require('header.php') ?>

<body>


    <nav>
        <div class="iteme">
            <ul>
                <li class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-compact.svg' ?>" alt="logo">
                </li>
                <Li>
                    Book Now
                    <ul class="dropdwon">
                        <li class="dropdwon-iteme">iteme one</li>
                        <li class="dropdwon-iteme">iteme two</li>
                        <li class="dropdwon-iteme">iteme three</li>
                    </ul>
                </Li>
                <Li>
                    Tours
                    <ul class="dropdwon">
                        <li class="dropdwon-iteme">iteme one</li>
                        <li class="dropdwon-iteme">iteme two</li>
                        <li class="dropdwon-iteme">iteme three</li>
                    </ul>
                </Li>
                <Li>Attractions</Li>
                <Li>Services</Li>
                <Li>Planning</Li>
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

    <div>

        <h1> okkkkkkkkkkk</h1>

    </div>
  <?php require('menu.php') ?>


    <div>
        <?php the_content() ?>
    </div>

</body>