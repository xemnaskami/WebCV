<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/cv.css">

    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
        <div class="ui fixed pointing red menu">
            <div class="ui container">
                <a class="menuitem active item" href="#presentation">
                    Antoine Pyré
                </a>
                <a class="item" href="#about">
                    À propos
                </a>
                <a class="item" href="#formation">
                    Formation
                </a>
                <a class="item" href="#skills">
                    Compétences
                </a>
                <a class="item" href="#professional-experience">
                    Expérience professionnelle
                </a>
            </div>
        </div>
    <div class="ui main container">
        <div class="ui center aligned container ">
            <div id="presentation"></div>
            <div class="ui content middle aligned">
                <h1 >
                    Antoine Pyré
                </h1>
                <img src="images/square_antoine_pyre.png" class="ui middle aligned medium circular image">
                <h2>
                    Développeur
                </h2>
            </div>
        </div>

        <hr/>

        <div class="ui container">
            <div id="about" ></div>
            <p class="ui header center aligned">
                À propos
            </p>
            <p class="justified-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis tempus quam, quis laoreet diam faucibus at. Duis eu neque at nibh ultricies rutrum ut sit amet lectus. Aenean quis nisl consectetur, sodales metus ut, tincidunt lectus. Nullam molestie quam fermentum leo hendrerit feugiat. Aenean non leo enim. Etiam neque purus, mollis id elit et, auctor posuere nunc. Morbi maximus gravida pharetra. Vestibulum sed faucibus nunc
            </p>
        </div>

        <hr/>

        <div class="ui container">
            <div id="formation"></div>
            <p class="ui header center aligned">
                Formation
            </p>
            <div class="ui container">
                <?php include("formation.php")?>
            </div>
        </div>

        <hr/>

        <div class="ui container">
            <div id="skills"></div>
            <p class="ui header center aligned">
                Compétences
            </p>
            <div class="content">
                <?php include("skills.php")?>
            </div>
        </div>

        <hr/>

        <div class="ui container">
            <div id="professional-experience"></div>
            <p class="ui center aligned header">
                Expérience professionnelle
            </p>
            <div class="ui container">
                <?php include("professional_experiences.php")?>
            </div>
        </div>
        <div class="ui container center aligned">
            <hr/>
            <p class="ui header">Contact</p>
            <p>pyre.antoine@gmail.com</p>
            <p>+33647211647</p>
            <p>38B rue Paul Feval 35000 Rennes</p>
        </div>
        <div style="height: 100px;">
        </div>
    </div>
</body>
</html>

<script>
    $('.menuitem').on('click', function() {
        $('.menuitem').removeClass('active');
        $(this).addClass('active');
    });
    $('.my-bar').progress({
        showActivity: false
    });

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });


</script>