<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html>

<head>
    <title>Travel Symphony | Best Prices. Best Holidays.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Khushi Chandak, Shrushti Gada, Mahek Raigagla">
    <meta name="keywords" content="Travel Symphony, Travel_symphony.com, online tickets booking, flight tickets, bus tickets, train tickets">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="images/Logos/logo.ico" type="image">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Raleway:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body class="bg">

    <header>
        <div class="logo">
            <h1 class="Travel Symphony"></h1>
            <h3>Best Prices <span class="dot">.</span> Best Holidays <span class="dot">.</span></h3>
            <ul class="sociallist">
                <a href="index.html">
                    <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                </a>
                <a href="index.html">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                </a>
            </ul>
        </div>

        <div class="navbar">
            <ul>
                <a href="index.html">
                    <li>HOME</li>
                </a>
                <a href="https://goo.gl/cTGR46" target="_blank">
                    <li>NEWS</li>
                </a>
                <a href="blogger.html">
                    <li>BLOG</li>
                </a>
                <a href="#contact">
                    <li>Contact Us</li>
                </a>

                <?php if (isset($_SESSION['user_name'])): ?>
                <!-- If the user is logged in, display the username -->
                <li style="font-size: 22px; font-family: 'Varela Round', sans-serif;">
                Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                </li>
                <a href="logout.php">
                <li>Log Out</li>
                </a>
<?php else: ?>
    <!-- If the user is not logged in, display the Login link -->
    <a class="login" href="Login.php">
        <li>Log In</li>
    </a>
<?php endif; ?>

            </ul>
        </div>
    </header>

    <div class="wtv">
        <div class="welcome" style="text-align: center"> <span class="initial">Welcome to </span> <span class="last">Travel Symphony!</span> </div>
    </div>

    <div class="container">
        <!--Blockquote-->
        <blockquote id="first">
            “Let's explore the world together!”
        </blockquote>
    </div>
    <!--Buttons-->

    <div id="buttons">
        <ul>
            <a href="chatbot.html" target="_blank">
                <li>Plan Your Trip</li>
            </a>
            <a href="#flight">
                <li>Flights</li>
            </a>
            <a href="#hotels">
                <li>Hotels</li>
            </a>
            <a href="#buses">
                <li>Bus</li>
            </a>
            <a href="#trains">
                <li>Trains</li>
            </a>
            <a href="Recommendations.html">
                <li>Recommendations</li>
            </a>
        </ul>

    </div>


    <!--Buttons-->
    <!--Cards-->
    <div class="container">
        <a name="flight"></a><br>
        <h4 id="category" class="flight">Flights</h4>

        <div class="row" style="margin-top: 50px;" id="flights">


            <!--Delhi - Jaipur-->
            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/jaipur.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">New Delhi - Jaipur</span>
                        <p>Trending destination | Great prices! <br> <br> <span><p class="makebold">&#8377 1,346 - 3,673<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/ozwmP2" class="white-text ">Indigo</a>
                    </div>
                </div>
            </div>
            <!--Delhi - Jaipur-->

            <!--Delhi - Chandigarh-->
            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/chandigarh.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">New Delhi - Chandigarh</span>
                        <p>Weekend breaks | Affordable prices <br> <br> <span><p class="makebold">&#8377 3,216 - 9,580<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/u6joz4" class="white-text ">Air India</a>
                    </div>
                </div>
            </div>
            <!--Delhi - Chandigarh-->

            <!--Delhi - Mumbai-->
            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/mumbai.PNG">
                    </div>
                    <div class="card-content">
                        <span class="card-title">New Delhi - Mumbai</span>
                        <p>Trending destination | Great prices! <br> <br> <span><p class="makebold">&#8377 4,282 - 7,026<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/Sb8we7" class="white-text ">Vistara</a>
                    </div>
                </div>
            </div>
            <!--Delhi - Mumbai-->

            <!--Delhi - Lucknow-->
            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/lucknow.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">New Delhi - Lucknow</span>
                        <p>Weekend breaks | Affordable prices <br> <br> <span><p class="makebold">&#8377 2,147 - 4,408<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/K9Ziw3" class="white-text ">Indigo</a>
                    </div>
                </div>
            </div>
            <!--Delhi - Lucknow-->

            <!--Delhi - Hyderabad-->
            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/hyderabad.PNG">
                    </div>
                    <div class="card-content">
                        <span class="card-title">New Delhi - Hyderabad</span>
                        <p>Popular Deals. Fly now! <br> <br> <span><p class="makebold">&#8377 3,343 - 5,227<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/8emyWQ" class="white-text ">Vistara</a>
                    </div>
                </div>
            </div>
            <!--Delhi - Hyderabad-->

            <!--Delhi - Bangalore-->
            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/bangalore.PNG">
                    </div>
                    <div class="card-content">
                        <span class="card-title">New Delhi - Bangalore</span>
                        <p>Weekend breaks | Affordable prices <br> <br> <span><p class="makebold">&#8377 5,545 - 14,945<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/5zthn1" class="white-text">Air India</a>
                    </div>
                </div>
            </div>
            <!--Delhi - Bangalore-->

            <div class="col s12 small" style="margin-bottom: -45px;">
                <div class="card teal hoverable">
                    
                </div>
            </div>
        </div>
        <!--End of flights-->

        <!--Hotels-->
        <a name="hotels"></a><br>
        <h4 id="category" class="hotels">Hotels</h4>
        <div class="row" style="margin-top: 50px;" id="flights">

            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/TajMahalPalace.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">The Taj Mahal, Mumbai</span>
                        <p>Luxury hotel with dining, a spa & a pool<br> <br> <span><p class="makebold">&#8377 15,500 - 87,000<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="TajMahalPalace.html" class="white-text"></a>
                        <a href="https://www.tajhotels.com/en-in/hotels/taj-mahal-palace-mumbai/offers-and-promotions/celebrating-the-joy?gad_source=1&gclid=CjwKCAjw0t63BhAUEiwA5xP54WSLYZopjXtYIrjV3GGIncZJdUw1XgRLFpLmtQOe001Si6hHks9DdhoCh6oQAvD_BwE&gclsrc=aw.ds" class="white-text">VIEW</a>
                    </div>
                </div>
            </div>

            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/TheOberoiMumbai.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">The Oberoi, Mumbai</span>
                        <p>Premium choice offering high-end rooms, a poolside bar, spa & a gym.<br> <br> <span><p class="makebold">&#8377 12,500 - 7,50,000<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="TheOberoi.html" class="white-text"></a> 
                        <a href="https://www.oberoihotels.com/" class="white-text">VIEW</a>
                    </div>
                </div>
            </div>

            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/ITCWindsor.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">ITC Windsor, Bangalore</span>
                        <p>Luxury suites in a venue featuring 5 restaurants & a spa.<br> <br> <span><p class="makebold">&#8377 11,500 - 17,000<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="ITCWindsor.html" class="white-text"></a>
                        <a href="https://www.itchotels.com/in/en/itcwindsor-bengaluru" class="white-text">VIEW</a>
                    </div>
                </div>
            </div>

            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/TheGrand.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">The Grand, New Delhi</span>
                        <p>Sophisticated hotel offering multiple bars & restaurants & a fitness centre.<br> <br> <span><p class="makebold">&#8377 11,500 - 13,000<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/5BS8o9" class="white-text">
                        <a href="https://www.thegrandnewdelhi.com/" class="white-text">VIEW</a>
                    </div>
                </div>
            </div>

            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/JW.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">JW Marriott, Pune</span>
                        <p>High-end hotel, with Mexican & Italian cuisine, a spa & a gym.<br> <br> <span><p class="makebold">&#8377 7,999 - 14,700<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/AJE2qG" class="white-text">
                        <a href="https://www.marriott.com/en-us/hotels/pnqmc-jw-marriott-hotel-pune/overview/" class="white-text">VIEW</a>
                    </div>
                </div>
            </div>

            <div class="col s4 hoverable">
                <div class="card medium">
                    <div class="card-image">
                        <img src="images/others/TajExotica.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Taj Exotica, Goa</span>
                        <p>High-end hotel offering refined dining, a 9-hole golf course & a pool.<br> <br> <span><p class="makebold">&#8377 13,500 - 92,800<sup>*</sup></p></span></p>
                    </div>
                    <div class="card-action red darken-4">
                        <a href="https://goo.gl/hKgnFe" class="white-text">
                        <a href="https://www.tajhotels.com/en-in/hotels/taj-exotica-goa" class="white-text">VIEW</a>
                    </div>
                </div>
            </div>
        
        <!--End of hotels-->

        <!--Bus-->

        <a name="buses"></a><br>
        <h4 id="category" class="hotels">Buses</h4>
        <div class="row" style="margin-top: 50px;" id="flights">

            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Delhi - Manali</span>
                        <p>Volvo | Mercedes | Ordinary</p><br>
                        <p class="makebold">&#8377 657 - 1,360<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/3Yg38N">BOOK</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Delhi - Chandigarh</span>
                        <p>Volvo | Mercedes | Ordinary</p><br>
                        <p class="makebold">&#8377 240 - 1,499<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/tt3uYC">BOOK</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Mumbai - Pune</span>
                        <p>Volvo | Mercedes | Ordinary</p><br>
                        <p class="makebold">&#8377 137 - 2,800<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/V6fCy8">BOOK</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Amritsar - Delhi</span>
                        <p>Volvo | Mercedes | Ordinary</p><br>
                        <p class="makebold">&#8377 469 - 1,299<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/bHpY4h">BOOK</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Mumbai - Goa</span>
                        <p>Volvo | Mercedes | Scania | Ordinary</p><br>
                        <p class="makebold">&#8377 665 - 2,550<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/RGMrL7">BOOK</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Bangalore - Chennai</span>
                        <p>Volvo | Mercedes | Scania | Ordinary</p><br>
                        <p class="makebold">&#8377 261 - 3,849<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/4Dxsgd">BOOK</a>
                    </div>
                </div>
            </div>


            <div class="col s12 small" style="margin-bottom: -45px;">
                <div class="card teal hoverable">
    
                </div>
            </div>


        </div>

        <!--End of bus-->


        <!--Trains-->

        <a name="trains"></a><br>
        <h4 id="category" class="trains">Trains</h4>
        <div class="row" style="margin-top: 50px;" id="flights">

            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Amritsar - New Delhi</span>
                        <p></p><br>
                        <p class="makebold">&#8377 280 - 1,550<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/iDj9xc">View all</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Delhi - Hyderabad</span>
                        <p></p><br>
                        <p class="makebold">&#8377 685 - 5,005<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/KwRfHK">View all</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Delhi - Mumbai</span>
                        <p></p><br>
                            <p class="makebold">&#8377 575 - 4,455<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/bUJNwZ">View all</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Lucknow - Delhi</span>
                        <p></p><br>
                        <p class="makebold">&#8377 295 - 2,085<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/Y8H4F5">View all</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Mumbai - Ahmedabad</span>
                        <p></p><br>
                        <p class="makebold">&#8377 205 - 2,240<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/ardpqq">View all</a>
                    </div>
                </div>
            </div>


            <div class="col s3 m4">
                <div class="card grey lighten-3 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title">Chennai - Pune</span>
                        <p></p><br>
                        <p class="makebold">&#8377 505 - 3,385<sup>*</sup></p>
                    </div>
                    <div class="card-action">
                        <a href="https://goo.gl/3h5Vfs">View all</a>
                    </div>
                </div>
            </div>


            <div class="col s12 small" style="margin-bottom: 1em;">
                <div class="card teal hoverable">
                    
                </div>
            </div>


        </div>

        <!--End of trains-->
        <!--Ratings-->

        <h4 style="margin-bottom: -40px;">What our users say ?</h4>

        <div class="row" style="margin-top: 50px;" id="flights">

            <div class="col s4 " style="margin-bottom: .5em">
                <div class="card grey lighten-4 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title" style="font-size: 25px; font-weight: 400;">Shrushti Gada</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>Excellent service, awesome prices. All u need is now at one place.</p>
                    </div>
                </div>
            </div>

            <div class="col s4 " style="margin-bottom: .5em">
                <div class="card grey lighten-4 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title" style="font-size: 25px; font-weight: 400;">Khushi Chandak</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>A site for all ur needs. Have to say it is better than others.</p>
                    </div>
                </div>
            </div>

            <div class="col s4 " style="margin-bottom: .5em">
                <div class="card grey lighten-4 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title" style="font-size: 25px; font-weight: 400;">Mahek Raigagla</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>Awesome site with awesome services.</p>
                    </div>
                </div>
            </div>


            <div class="col s4 " style="margin-bottom: .5em">
                <div class="card grey lighten-4 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title" style="font-size: 25px; font-weight: 400;">Pooja Shah</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>One of my favourite site till now.</p>
                    </div>
                </div>
            </div>

            <div class="col s4 " style="margin-bottom: .5em">
                <div class="card grey lighten-4 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title" style="font-size: 25px; font-weight: 400;">Purv Patel</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>Best interface ever seen.</p>
                    </div>
                </div>
            </div>

            <div class="col s4 " style="margin-bottom: .5em">
                <div class="card grey lighten-4 hoverable ">
                    <div class="card-content black-text">
                        <span class="card-title" style="font-size: 25px; font-weight: 400;">Nikhil Singh</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>Best Prices. Best holidays.</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <a name="contact"></a>
    <div id="contact" class="hoverable">

        <h2 style="margin-top: 40px;">Contact Us</h2>
        <p>Contact us and we'll get back to you within 24 hours</p>
        <ul>
            <li>Location: Mumbai, Maharashtra</li>
            <li>Contact Details: +91 8104147690, +91 9131674222</li>
            <li>Email ID: Travel_symphony.support@gmail.com</li>
        </ul>

    </div>


    <footer class="section teal darken-3">
        <p class="flow-text white-text center" style="font-family: Montserrat; font-size: 35px;">Travel Symphony &copy; 2024</p>
        <p class="flow-text white-text center" style="font-family: Montserrat; font-size: 18px;">
            Developed by: Khushi Chandak, Shrushti Gada, Mahek Raigagla
        </p>
        <p class="flow-text white-text center" style="font-family: Montserrat; font-size: 18px;">
            Faculty Mentor: Prof. Priyanka Deshmukh
        </p>
    </footer>
    


    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

</html>

