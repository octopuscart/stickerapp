<?php
$this->load->view('layout/header');
?>
<style>
    .galleryimage{margin: 5px;}
</style>
<!--contannt section-->
<app-about-us _nghost-c14="" class="ng-star-inserted">
    <div _ngcontent-c14="">
        <section _ngcontent-c14="" class="sbPageTopSec servicesPgSec">
            <div _ngcontent-c14="" class="container">
                <h2 _ngcontent-c14="">STS League</h2>
            </div>
        </section>

        <section _ngcontent-c14="" class="aboutSec">
            <div _ngcontent-c14="" class="container">
                <div _ngcontent-c14="" class="abtTxt" >
                    <p _ngcontent-c14="" > 
                        STS League is a place where we give out the best services packages at the best price to our customers,<br/> So keep exploring the page for latest updates.
                    </p>

                    <div class="row">
                       
                            <?php
                            for($i=0;$i<=5;$i++) {
                               
                                    echo " <div class='col-md-6'><img src='" . base_url() . 'assets/images/sts/image' . $i . ".jpeg' class='galleryimage'/></div>";
                            }
                            ?>
                        
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