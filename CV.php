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
                <div class="ui card full-width">
                        <div class="ui items">
                            <div class="item">
                                <div class="ui small image middle centered grid">
                                    <img class="tiny image sixteen wide column" src="images/DCU_logo.jpg"/>
                                </div>
                                <hr/>
                                <div class="content" style="padding: 1rem;">
                                    <b>Dublin City University</b>
                                    <i> - Study abroad program</i>
                                    <br/>
                                    <i>Dublin - Irlande</i>
                                    <br/>
                                    2017 - 2018
                                </div>
                            </div>
                        </div>
                </div>
                <div class="ui card full-width">
                        <div class="ui items">
                            <div class="item">
                                <div class="ui small image middle centered grid">
                                    <img class="tiny image sixteen wide column" src="images/Epitech_logo.jpg"/>
                                </div>
                                <hr/>
                                <div class="content" style="padding: 1rem;">
                                    <b>Epitech</b>
                                    <i> - École supérieure d'informatique</i>
                                    <br/>
                                    <i>Paris - France</i>
                                    <br/>
                                    2014 - 2019
                                    <br/>
                                    <b>Diplôme d'Expert en technologie de l'information - Niveau 1</b>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="ui card full-width">
                        <div class="ui items">
                            <div class="item">
                                <div class="ui small image middle centered grid">
                                    <img class="tiny image sixteen wide column" src="images/assomption_logo.png"/>
                                </div>
                                <hr/>
                                <div class="content" style="padding: 1rem;">
                                    <b>Lycée Jean-Marie de la Mennais</b>
                                    <br/>
                                    <i>Retiers - France</i>
                                    <br/>
                                    2010 - 2014
                                    <br/>
                                    <b>Baccalauréat scientifique spécialité mathématiques</b>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <hr/>

        <div class="ui container">
            <div id="skills"></div>
            <p class="ui header center aligned">
                Compétences
            </p>
            <div class="content">
                <table class="ui table">
                    <thead>
                        <tr>
                            <th colspan="3">
                                Dévelopement
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="two wide">
                                <img class="ui tiny image" src="images/cpp.png"/>
                            </td>
                            <td class="two wide">
                                <b>C/C++</b>
                            </td>
                            <td class="twelve wide">
                                <div class="ui indicating progress my-bar" data-value="4" data-total="5">
                                    <div class="bar"></div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="two wide">
                                <img class="ui tiny image" src="images/py.png"/>
                            </td>
                            <td class="two wide">
                                <b>Python</b>
                            </td>
                            <td class="twelve wide">
                                <div class="ui indicating progress my-bar" data-value="4" data-total="5">
                                    <div class="bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="two wide">
                                <img class="ui tiny image" src="images/webStack.png"/>
                            </td>
                            <td class="two wide">
                                <b>FrontEnd</b>
                            </td>
                            <td class="twelve wide">
                                <div class="ui indicating progress my-bar" data-value="3" data-total="5">
                                    <div class="bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="two wide">
                                <img class="ui tiny image" src="images/react_logo.svg"/>
                            </td>
                            <td class="two wide">
                                <b>React Native</b>
                            </td>
                            <td class="twelve wide">
                                <div class="ui indicating progress my-bar" data-value="4" data-total="5">
                                    <div class="bar"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="ui table">
                    <thead>
                    <tr>
                        <th colspan="3">
                            Langues
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img class="ui tiny image" src="images/flag-round-fr.png"/>
                        </td>
                        <td>
                            <b>Français</b>
                        </td>
                        <td class="twelve wide">
                            <div class="ui indicating progress my-bar" data-value="5" data-total="5">
                                <div class="bar"></div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="two wide">
                            <img class="ui tiny image" src="images/uk.jpg"/>
                        </td>
                        <td class="two wide">
                            <b>Anglais</b>
                        </td>
                        <td class="twelve wide">
                            <div class="ui indicating progress my-bar" data-value="4" data-total="5">
                                <div class="bar"></div>

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <hr/>

        <div class="ui container">
            <div id="professional-experience"></div>
            <p class="ui center aligned header">
                Expérience professionnelle
            </p>
            <div class="ui container">
                <div class="ui card full-width">
                    <div class="ui items">
                        <div class="item">
                            <div class="ui small image middle centered grid">
                                <img class="tiny image sixteen wide column" src="images/smardtv_logo.png"/>
                            </div>
                            <hr/>
                            <div class="content" style="padding: 1rem;">
                                <b>SmarDTV</b>
                                <br/>
                                <b>Développement d'un driver HDMI-CEC</b>
                                <br/>
                                <i>Cesson-Sévigné - France</i>
                                <br/>
                                Avril - Août 2017
                                <br/>
                                C - Méthode Agile
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui card full-width">
                    <div class="ui items">
                        <div class="item">
                            <div class="ui small image middle centered grid">
                                <img class="tiny image sixteen wide column" src="images/sfr_logo.jpg"/>
                            </div>
                            <hr/>
                            <div class="content" style="padding: 1rem;">
                                <b>SFR</b>
                                <br/>
                                <b>Développement d'un site web de gestion de données</b>
                                <br/>
                                <i>Rennes - France</i>
                                <br/>
                                Août - Décembre 2015
                                <br/>
                                Java - HTML / CSS / JavaScript - MySQL
                            </div>
                        </div>
                    </div>
                </div>
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