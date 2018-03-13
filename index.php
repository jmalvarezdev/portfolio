<!doctype html>

<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <title>Title goes here.</title>
                    <meta name="Content" content="Description">

                        <link rel="stylesheet" href="styles.css">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

                                <!--[if lt IE 9]>
                                    <script
                                    src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
                                    </script>
                                    <![endif]-->

                        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>

    <body>

    <nav class="container-fluid">
        <span class="navbar-brand">
        <img class="img-fluid" src="images/logo.png" width="80" height="80" alt="logo">
        </span>
        <ul class="nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Social</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User/Admin
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Log in</a>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul> <!-- End of my navigation bar -->
    </nav> <!-- End of my navigation bar container -->

<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Boston.jpg" alt="Cute pet">
                <div class="carousel-caption d-none d-md-block">
                    <h1>I love Boston!</h1>
                    <p>I really enjoy exploring this beautiful city.</p>
                </div>
            </div>

             <div class="carousel-item">
                <img class="d-block w-100" src="images/night.jpg" alt="Cute pet">
                <div class="carousel-caption d-none d-md-block">
                    <h1>My View</h1>
                    <p>The view from my balcony is amazing and relaxing.</p>
                </div>
            </div>

             <div class="carousel-item">
                <img class="d-block w-100" src="images/code.jpg" alt="Cute pet">
                <div class="carousel-caption d-none d-md-block">
                    <h1>I love learning!</h1>
                    <p>I am a self taught developer.</p>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- End of my carousel -->
</div> <!-- End of my carousel container -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="flip">
                <p class="lead">I would consider myself</p>
                <div class="tail">
                    <p>a Developer.</p>
                    <p>an Explorer.</p>
                    <p>a Designer.</p>
                    <p>a Learner.</p>
                    <p>a Reader.</p>
                    <p>a Photographer.</p>
                    <p>a Video Editor.</p>
                    <p>a Food lover.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <section class="row">
        <div class="col-lg-6 col-md-6">
            <img class="img-fluid" src="images/me.png" alt="Author">
        </div>

        <div class="col-lg-6 col-md-6">
            <h2>A little about me</h2>
            <p>Hi!, I'm Jose Alvarez, and I am a self taught web developer/designer who likes to keep up in the latest frameworks, languages and standards for mobile friendly websites that runs efficiently both front end and back end wise, I fell in love with hardware and software at an early age and find excitement in every project that  I set myself every day, creating something intuitive and responsive and able to function across platforms and browsers is something I strive for.

I love to work with people on projects that are challenging and creative, both mobile friendly and complaint to web standards. I like to read, watch cool movies, bike and explore the city I might be at the time.

But overall im just a simple person doing what he loves.</p>
        </div>
    </section>
</div>

<div class="container-fluid">
    <h2>Skills</h2>
    
    <div class="row">
        <div class="col-md-4 animated fadeInDown">
            <span class="fa fa-code"></span>
            <h3>Web Desing & Code</h3>
            <p>Simple, usable, attractive, standards compliant & responsive websites you can rely on.
                                        The web development process includes web design, web content development, client-side/server-side
                                        scripting and network security configuration, among other tasks.</p>
        </div>
        <div class="col-md-4">
            <span class="fab fa-css3-alt"></span>
            <h3>CSS3</h3>
            <p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.<p>
        </div>
        <div class="col-md-4">
            <i class="devicon-vim-plain colored"></i>
            <h3>Vim</h3>
            <p>Vim is a clone of Bill Joy's vi text editor program for Unix. It was written by Bram Moolenaar based on source for a port of the Stevie editor to the Amiga and first released publicly in 1991. I love the ability to tweak my tools depending on my environment and Vim does that perfectly.<p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <h2>Want to chat? Get in touch!<h2>
            <p>Feel free to connect via any social network or email me at: 
            <br> 
            <a href="mailto:logan.jma@gmail.com">Email me</a></p>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github-square"></i></a>
            <a href="#"><i class="fab fa-chrome"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Think Big, because we become what we think of</h1>
                <p> &copy; 2018 by Jose Alvarez</p>
            </div>
        </div>
    </div>
</footer>


            <script src="js/scripts.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

