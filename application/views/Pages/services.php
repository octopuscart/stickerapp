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
                            <span _ngcontent-c14="" class="crr_crd_icon"></span>
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
                            <span _ngcontent-c14="" class="crr_crd_icon"><img _ngcontent-c14="" alt="" src=""></span>
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
                    <div _ngcontent-c14="" class="crr_crd_cnt six right">
                        <div _ngcontent-c14="" class="crr_crd">
                            <span _ngcontent-c14="" class="crr_crd_icon"></span>
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
        <section style="background: white;text-align: center;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- STS Display ad 1 horizontal -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-2246837719135984"
                 data-ad-slot="8024107323"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </section>

    </div>
</app-about-us>
<!--end of contant section-->





<?php
$this->load->view('layout/footer');
?>