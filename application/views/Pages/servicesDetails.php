<?php
$this->load->view('layout/header');
?>



<!--contannt section-->
<app-about-us _nghost-c14="" class="ng-star-inserted">
    <div _ngcontent-c14="">
        <section _ngcontent-c14="" class="sbPageTopSec servicesPgSec">
            <div _ngcontent-c14="" class="container">
                <h2 _ngcontent-c14="">Our Services</h2>
            </div>
        </section>


        <section _ngcontent-c17="" class="othrPgsSec">
            <div _ngcontent-c17="" class="container">
                <div _ngcontent-c17="" class="othrPgsCnt faqsCnt">
                    <div _ngcontent-c17="" class="txtCnt" style="text-align: center;">
                        <h3 _ngcontent-c17=""><?php echo $service->service_name; ?></h3>
                        
                        <img src="<?php echo base_url(); ?>assets/serviceimage/<?php echo $service->image; ?>" class="img-fluid" alt="Responsive image"  style="height: 400px;width: auto;">

                        <span _ngcontent-c17="" class="" >
                            <p _ngcontent-c17="" style="padding: 20px 100px;white-space: pre-line;"><?php echo $service->description; ?> </p>
                        </span>

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