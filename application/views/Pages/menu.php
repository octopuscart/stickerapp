<?php
$this->load->view('layout/header');
?>



<section id="content">

    <div class="content-wrap" style="padding: 0px; background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) ; ">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/bookblock.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/component.css" />
        <script src="<?php echo base_url(); ?>assets/book/modernizr.custom.js"></script>


        <div id="scroll-wrap" class="container">

            <div class="main">
                <div id="bookshelf" class="bookshelf">
                    <figure>
                        <div class="book" data-book="book-1"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Food <span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li>Soups<br/>
                                    Salads</br> 
                                    Appetisers And Snacks<br/>
                                    Curries<br/>
                                    Seafood<br/>
                                    Stir-Fried Dishes<br/>
                                    Noodels & Rice<br/>
                                    Vegetarian<br/>
                                    Desserts<br/>
                                </li>
                            </ul>
                        </div>
                    </figure>
                    <figure>
                        <div class="book" data-book="book-2"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Snacks <span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li>Potato Wedges<br/>
                                    Fried Fish Snacks</br> 
                                    Pandan Chicken<br/>
                                    Spicy Shrimp<br/>
                              
                                </li>
                            </ul>
                        </div>
                    </figure>
                    
                    <figure>
                        <div class="book" data-book="book-3"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Drinks <span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li>Scotch & Malts<br/>
                                    Rum</br> 
                                    Bourbon<br/>
                                    Vodka<br/>
                                    Gin<br/>
                                    Tequila<br/>
                              
                                </li>
                            </ul>
                        </div>
                    </figure>

                </div>
            </div><!-- /main -->

        </div><!-- /container -->

        <!-- Fullscreen BookBlock -->
        <!-- for demo purpose we repeat each bookblock -->
        <div class="bb-custom-wrapper" id="book-1">
            <div class="bb-bookblock">
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/food/1.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/food/2.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/food/3.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/food/4.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/food/5.jpg"/>
                    </div>
                </div>


            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->

         <div class="bb-custom-wrapper" id="book-2">
            <div class="bb-bookblock">
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/snacks/1.jpg"/>
                    </div>
                </div>
                


            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->
        
        
        
        <div class="bb-custom-wrapper" id="book-3">
            <div class="bb-bookblock">
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/drink/1.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/drink/2.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/drink/3.jpg"/>
                    </div>
                </div>
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/drink/4.jpg"/>
                    </div>
                </div>
            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->
        

        <script src="<?php echo base_url(); ?>assets/book/bookblock.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/book/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/book/bookshelf.js"></script>


    </div>
</section>





<?php
$this->load->view('layout/footer');
?>