<main id="contact" style="min-height:70vh">

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
                        <h2>News & Events</h2>
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