<?php
/**
 * simple.php is a postback application designed to provide a
 * contact form for users to email our clients.
 *
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php
 * @see recaptchalib.php
 * @see util.js
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "migtomace@gmail.com";  //place your/your client's email address here
$toName = "Nina Kuhl"; //place your client's name here
$website = "www.ninakuhl.com";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'includes/config.php'; #site keys go inside your config.php file
include 'includes/contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
{#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
    handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    include "thnx.php";
    ?>
    <!-- START HTML FEEDBACK -->

    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback

    ?>
<?php include "includes/top.php"?>

<main id="home">


    <h1 class="text-center jumbotron">Coming soon!</h1>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/adult-art-artist-255437.jpg" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="images/art-blur-casual-428320.jpg" alt="Chicago">
            </div>

            <div class="item">
                <img src="images/abstract-amplifier-business-327556.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        </a>
    </div>


</main>


<main id="about">


    <div class="container">
        <img src="images/abstract-amplifier-business-327556.jpg" class="col-md-12 img"/>
        <div class="row">
            <div class="col-md-8">
                <h2>About The Studio</h2>
                <p>The Studio is still a work in progress I'll be keeping everyone posted on the progress. Ground is broken, Foundation and framing are done. There will be a main floor with stage, control room, bathroom, vocal room and small storage area. Please contact me if you would like to reserve some time for your project.</p>
            </div>
            <div class="col-md-4">
                <h2>Reserving Time</h2>
                <p>Want to practice, rehearse, need studio time?  <a href="tel:9166880299">Call me: 916-688-0299</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>About Nina</h2>
                <p>Nina has been singing karaoke since 1987 and hosted one karaoke show at the time. She never touched a board until 1997 when she and her husband Jim, decided to invest in equipment so she could  run her own karaoke show. She ran a number of shows for 8 years, but held one Elk Grove show, in particular for the complete 8 years. During this time, Nina, with the help of Jim, owned a mobile dj business, catering to weddings & corporate parties. In 2005, Jim and Nina invested in a local bar & grill and managed and ran it for 10 years. During that time, Nina still DJ'd and ran  a successful Karaoke show  in the bar and also ran shows for private parties, corporate parties,  organized and ran local fundraisers for charities and is <a href="https://elkgrovewesternfestival.org/">The Elk Grove Western Festival</a> Stage Director for The Western Idol Stage and was Stage Director for the Velvet Rope Film Festival. Currently, Nina and Jim are working on The Studio, Nina sings for private shows, provides karaoke and DJ services for private shows and special events, and is now providing sound services for <a href="https://www.bcmfilms.com/">BCMFILMS</a>. </p>
            </div>
            <div class="col-md-4">
                <h2>New & Events</h2>
                <p>Inspirit: May 25-23<p>
                <p>If ​You Only Knew: June 1-3<p>
                <p>Private Reception: Jun 9<p>
                <p>Kumbaya Festival: August 4</p>
                <p>Various private shows, for wineries and The Carleton Senior Citizen Retirement home.</p>
            </div>
        </div>
    </div>

</main>


<main id="movies">

    <div class="container fill">

        <div class="row">
            <div class="col-md-12 jumbotron text-center">
                <h1>Movies</h1>
                <p>I have had the pleasure and honor of being a part of:</p>
            </div>
            <div class="col-md-3">
                <a href="https://www.facebook.com/MYPANDAtheMOVIE/"><img src="images/movies/panda.jpg" alt="My Panda" class="img-responsive" >
                    <p>My Panda</p></a>
            </div>
            <div class="col-md-3">
                <a href="https://www.facebook.com/2018Movie/"><img src="images/movies/inspirit.png" alt="Inspirit" class="img-responsive" >
                <p>Inspirit</p></a>
            </div>
            <div class="col-md-3">
                <a href="https://www.facebook.com/ifyouonlyknewthestory/"><img src="images/movies/ifOnlyYouKnew.jpg" alt="If Only You Knew - The Story" class="img-responsive" ></a>
                    <p>If Only You Knew</p>
            </div>
            <div class="col-md-3">
                <img src="images/movies/ofspirits.png" alt="Spirits" class="img-responsive">
            </div>
        </div>
    </div>

</main>


    <main id="talents">

        <div class="container">
            <div class="row">
                <div class="col-md-8 jumbotron"><h2>Meet the Talent</h2></div>
                <div class="col-md-4">
                    <div id="myCarouselTwo" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="https://www.facebook.com/NinaKuhl"><img src="images/talents/ninaK.jpg" alt="Nina Kuhl"></a>
                            </div>

                            <div class="item">
                                <a href=""><img src="images/talents/katieV.jpg" alt="Katie Vartanian"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/StArsFlY"><img src="images/talents/stephanieS.jpg" alt="Stephanie Shoffner"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/jolene.kooyman"><img src="images/talents/joleneM.png" alt="Jolene Morse"></a>
                            </div>

                            <div class="item">
                                <a href="http://tonyrsmusicpage.yolasite.com/"><img src="images/talents/tonyR.jpg" alt="Tony Rodriguez"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/carly.rhoades.313"><img src="images/talents/carlyR.jpg" alt="Carly Rhoades"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/tanesha.travis.9"><img src="images/talents/taneshaJ.jpg" alt="Tanesha Jackson"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/airmanaustin.kaneshiro"><img src="images/talents/michaelG.jpg" alt="Michael Gaspar"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/starwarsgeekette"><img src="images/talents/maryC.jpg" alt="Mary Chrisman"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/BPEARL7"><img src="images/talents/sandraT.jpg" alt="Sandra Tyler"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/tossa.newcomb"><img src="images/talents/tossaN.jpg" alt="Tossa Newcomb"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.facebook.com/heather.n.camp.1"><img src="images/talents/heatherC.jpg" alt="Heather Camp"></a>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarouselTwo" data-slide="prev">
                        </a>
                        <a class="right carousel-control" href="#myCarouselTwo" data-slide="next">
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </main>



<main id="exchange">



</main>







<main id="events">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="https://www.lowtonofilmfest.com/">
                    <img src="images/events/low2no.png" alt="Low to No" class="img-responsive">
                </a>
            </div>
            <div class="col-md-6">
                <img src="images/events/carlton.jpg" alt="Songs for the ages" class="img-responsive">
            </div>
        </div>
    </div>



</main>


<main id="contact">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Contact Nina Kuhl</h2>
                <form class="form-horizontal" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Full Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="message">Message:</label>
                        <div class="col-sm-10">
                            <input type="textbox" class="form-control" id="message" placeholder="Enter message" name="message">
                        </div>
                    </div>
                    <div><?=$feedback?></div>
                    <div align="center" class="g-recaptcha" data-sitekey="6Lca7UAUAAAAAHUG1AIm7SGUwAuowu97BDaAiKS4"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.7387531917566!2d-121.33347688466354!3d38.42440187964654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac046861e8fe5%3A0xdb7afabcdb819c22!2sElk+Grove%2C+CA+95624!5e0!3m2!1sen!2sus!4v1544703999788" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Booking info</h3>
                        <p>If you want studio time, rehearsal time, practice time, classes</p>
                        <a href="tel:9166880299">please call me at 916-688-0299</a>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-md-12">
                        <h2>Our Info</h2>
                        <p>Elk Grove CA 95624</p>
                        <p><a href="tel:9166880299">+1.9166880299</a></p>
                        <p><a href="mailto:ninamkuhl@gmail.com">ninamkuhl@gmail.com</a></p>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-md-12">
                        <h2>New & Events</h2>
                        <p>Inspirit: May 25-23<p>
                        <p>If ​You Only Knew: June 1-3<p>
                        <p>Private Reception: Jun 9<p>
                        <p>Kumbaya Festival: August 4</p>
                        <p>Various private shows, for wineries and The Carleton Senior Citizen Retirement home.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>




</main>

    <?php
}
?>

<?php include "includes/bottom.php"?>