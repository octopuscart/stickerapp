<app-footer _ngcontent-c1="" _nghost-c4="">
    <section _ngcontent-c4="" class="footerTopCnt"></section>
    <footer _ngcontent-c4="">
        <div _ngcontent-c4="" class="container">
            <div _ngcontent-c4="" class="row">
                <div _ngcontent-c4="" class="col-lg-8 col-md-8">
                    <div _ngcontent-c4="" class="ftrMenuCnt">
                        <h3 _ngcontent-c4="">Hair <span _ngcontent-c4="" class="mblDrpDwnBtn right mbl_icon"><i _ngcontent-c4="" class="fas fa-chevron-down"></i></span></h3>
                        <>
                        <ul _ngcontent-c4="">
                            <?php
                            $servicehire = ['Hair Spa',
                                'Hair Colour',
                                'Keratine',
                                'Smoothening',
                                'Rebonding',
                                'Hair Cut',
                                'Hair Styling',];
                            foreach ($servicehire as $key => $value) {
                                ?>
                                <li _ngcontent-c4=""><a _ngcontent-c4="" title="<?php echo $value; ?>"><?php echo $value; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div _ngcontent-c4="" class="ftrMenuCnt">
                        <h3 _ngcontent-c4="">Skin<span _ngcontent-c4="" class="mblDrpDwnBtn right mbl_icon"><i _ngcontent-c4="" class="fas fa-chevron-down"></i></span></h3>
                        <ul _ngcontent-c4="">
                            <?php
                            $servicehire = [
                                'Skin Treatment',
                                'Body Polish',
                                'Waxing',
                                'Facial(s)',
                                'Face Treatment'
                            ];
                            foreach ($servicehire as $key => $value) {
                                ?>
                                <li _ngcontent-c4=""><a _ngcontent-c4="" title="<?php echo $value; ?>"><?php echo $value; ?></a></li>
                                <?php
                            }
                            ?></ul>
                    </div>
                    <div _ngcontent-c4="" class="ftrMenuCnt">
                        <h3 _ngcontent-c4="">Beauty<span _ngcontent-c4="" class="mblDrpDwnBtn right mbl_icon"><i _ngcontent-c4="" class="fas fa-chevron-down"></i></span></h3>
                        <ul _ngcontent-c4="">
                            <?php
                            $servicehire = [
                                'Clean Up',
                                'Manicure/Hand spa',
                                'Pedicure/Foot Spa',
                                'Nail Designing',
                                'Eyelash Extensions',
                                'Make up & Hair Do',
                                'Bridal Packages',
                                'Thread work'
                            ];
                            foreach ($servicehire as $key => $value) {
                                ?>
                                <li _ngcontent-c4=""><a _ngcontent-c4="" title="<?php echo $value; ?>"><?php echo $value; ?></a></li>
                                <?php
                            }
                            ?>                        </ul>
                    </div>
                </div>
                <div _ngcontent-c4="" class="col-lg-4 col-md-4">
                    <div _ngcontent-c4="" class="ftrMenuCnt paymentMode hidden_mobile">

                    </div>
                    <div _ngcontent-c4="" class="ftrMenuCnt subscribeCnt">
                        <h3 _ngcontent-c4="">Download The App</h3>
                        <ul _ngcontent-c12="" class="appLink footerapplink">

                            <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/google-play.png"></a>


                            <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/apple-icon.png"></a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div _ngcontent-c4="" class="copyright">
            <div _ngcontent-c4="" class="container">
                <div _ngcontent-c4="" class="left">
                    <p _ngcontent-c4="">Copyright <?php echo date("Y"); ?> @ Style Treat Studios &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Powered by: &nbsp;&nbsp; <a _ngcontent-c4="" href="https://www.styletreatstudio.com/">www.styletreatstudio.com</a></p>
                </div>
                <div _ngcontent-c4="" class="right scialMedia">
                    <p _ngcontent-c4="">Follow Us:</p>
                    <ul _ngcontent-c4="" class="scialAccnts">
                        <li _ngcontent-c4="" class="fb"><a _ngcontent-c4="" href="#"><i _ngcontent-c4="" class="fab fa-facebook-f"></i></a></li>
                        <li _ngcontent-c4="" class="tw"><a _ngcontent-c4="" href="#"><i _ngcontent-c4="" class="fab fa-twitter"></i></a></li>
                        <li _ngcontent-c4="" class="inst"><a _ngcontent-c4="" href="#"><i _ngcontent-c4="" class="fab fa-instagram"></i></a></li>
                        <li _ngcontent-c4="" class="pint"><a _ngcontent-c4="" href="#"><i _ngcontent-c4="" class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><span _ngcontent-c4="" class="top_scroll_btn" style="bottom: -100px;"><a _ngcontent-c4=""><i _ngcontent-c4="" class="fas fa-arrow-up"></i></a></span></app-footer>
<app-alert _ngcontent-c1="" _nghost-c5="">
    <!---->
</app-alert>
</div>
</app-pages>
</section>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="<?php echo base_url(); ?>assets/assets/js/theme.js"></script>

<script src="<?php echo base_url(); ?>assets/angular/shopController.js"></script>



</html>