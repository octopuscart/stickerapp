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

        <section _ngcontent-c14="" class="wtWeHvSec">

            <div _ngcontent-c14="" class="container">
                <div _ngcontent-c14="" class="crr_5_rsn_hdng">The services that we offer:</div>
                <div _ngcontent-c14="" class="crr_crd_main_cnt">

                    <div _ngcontent-c14="" class="crr_crd_cnt two right">
                        <div _ngcontent-c14="" class="crr_crd">
                            <span _ngcontent-c14="" class="crr_crd_icon" style="background-image: url(<?php echo base_url(); ?>assets/services/hairbg.png);       background-size: 140px;
                                  height: 160px;"></span>
                            <h3 _ngcontent-c14="" class="crr_hdng">Hair</h3>
                            <p _ngcontent-c14=""> 
                            <ul class="servicesubli">
                                <?php
                                $servicehire = $services['1'];
                                foreach ($servicehire['service'] as $key => $value) {
                                    ?>
                                    <li _ngcontent-c4=""><a href="<?php echo site_url("Shop/serviceDetails/" . $value['id']) ?>" title="<?php echo $value['service_name']; ?>"><i class="fa fa-arrow-right"></i>  <?php echo $value['service_name']; ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div _ngcontent-c14="" class="crr_crd_cnt five left">
                        <div _ngcontent-c14="" class="crr_crd">
                            <span _ngcontent-c14="" class="crr_crd_icon" style="background-image: url(<?php echo base_url(); ?>assets/services/skinbg.png);       background-size: 140px;
                                  height: 160px;"></span>
                            <h3 _ngcontent-c14="" class="crr_hdng">Skin</h3>
                            <p _ngcontent-c14=""> 
                            <ul class="servicesubli">
                                <?php
                                $servicehire = $services['2'];
                                foreach ($servicehire['service'] as $key => $value) {
                                    ?>
                                    <li _ngcontent-c4=""><a href="<?php echo site_url("Shop/serviceDetails/" . $value['id']) ?>" title="<?php echo $value['service_name']; ?>"><i class="fa fa-arrow-right"></i>  <?php echo $value['service_name']; ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div _ngcontent-c14="" class="crr_crd_cnt three right">
                        <div _ngcontent-c14="" class="crr_crd">
                            <span _ngcontent-c14="" class="crr_crd_icon" style="background-image: url(<?php echo base_url(); ?>assets/services/beautybg.png);       background-size: 140px;
                                  height: 160px;"></span>
                            <h3 _ngcontent-c14="" class="crr_hdng">Beauty</h3>
                            <p _ngcontent-c14=""> 
                            <ul class="servicesubli">
                                <?php
                                $servicehire = $services['3'];
                                foreach ($servicehire['service'] as $key => $value) {
                                    ?>
                                    <li _ngcontent-c4=""><a href="<?php echo site_url("Shop/serviceDetails/" . $value['id']) ?>" title="<?php echo $value['service_name']; ?>"><i class="fa fa-arrow-right"></i>  <?php echo $value['service_name']; ?></a></li>
                                        <?php
                                    }
                                    ?>                      
                            </ul>
                            </p>
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