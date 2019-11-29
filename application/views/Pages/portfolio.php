<?php
$this->load->view('layout/header');
?>

<style>
    .galleryimage{
        margin-bottom: 30px;
    }
</style>

<!--contannt section-->
<app-about-us _nghost-c14="" class="ng-star-inserted">
    <div _ngcontent-c14="">
        <section _ngcontent-c14="" class="sbPageTopSec servicesPgSec">
            <div _ngcontent-c14="" class="container">
                <h2 _ngcontent-c14="">My Portfolio</h2>
            </div>
        </section>

        <section _ngcontent-c14="" class="aboutSec">
            <div _ngcontent-c14="" class="container">
                <div _ngcontent-c14="" class="abtTxt" >
                    <p _ngcontent-c14="" > 
                    </p>

                    <p _ngcontent-c14="" >  
                        The brand is headed by Tripti Garg who started as novice in the beauty field yet her passion drew her to the crux of it. It began as a dream and practice of make-up on herself which then dragged her to engender the branch and follow the passion. She then decided to pursue it professionally and enrolled herself into the Star Make-up Academy by "Ashmeen Munjaal".
                    </p>
                    <p _ngcontent-c14="" > 
                        Being certified as a professional, She avidly follows make-up procedures and processes. She had been keen to learn new techniques and had hands on experience on prolific skin types.
                        She has been on the panel for make-up artist for models, judge at various contests and events furthermore also recently organised her very own live make-up session. 
                    </p>
                    <p _ngcontent-c14="" > 
                        The brand has its presence on both Facebook and Instagram, and is also a registered vendor with ShaadiSaga, WedMeGood, Nearbuy and Justdial. 
                        The brand currently stands a pillar to utmost covenience for all age groups,servicing personnel at a place of their ease with "Venue Make Ups" , "Home Visits" or through "Pick & Drop Facility" which they can easily avail through the brand's personalised App.
                    </p> 
                    <p _ngcontent-c14="" > 
                        Special Arrangements Made for 
                    <ul>
                        <li> - School Functions </li>
                        <li>- Teenage Farewells  </li>
                        <li> - Kitty Parties</li>
                        <li> - Theme Parties</li>
                        <li>  - Cultural Gatherings (Dandiya Night, Karwa Chauth etc) </li>
                        <li> - Special Occasions (Anniversary & Birthday Celebration Make up)</li>
                        <li>  - Grace Make ups</li>
                        <li>  - Destination weddings</li>
                        <li> - Make up for bloggers / Ramp walkers </li>
                    </ul>
                    </p>       

                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            foreach ($gallery_images as $key => $value) {
                                if ($key % 2 == 0)
                                    echo "<img src='" . base_url() . 'assets/gallary/' . $value->image . "' class='galleryimage'/>";
                            }
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            foreach ($gallery_images as $key => $value) {
                                if ($key % 2 != 0)
                                    echo "<img src='" . base_url() . 'assets/gallary/' . $value->image . "' class='galleryimage'/>";
                            }
                            ?>
                        </div>
                    </div>

                </div>

            </div>


        </section>


    </div>
</app-about-us>
<!--end of contant section-->



<?php
$this->load->view('layout/footer');
?>