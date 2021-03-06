<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
    <div id="app">
        <div class="wrapper">
            <!-- start header -->
            @include('include.nav')
           <!-- end Header -->
           <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="inner-heading">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                            <li><a href="#">Portfolio</a> <i class="icon-angle-right"></i></li>
                            <li class="active">Portfolio</li>
                        </ul>
                        <h2>Our PortFolio</h2>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section id="content">
                <div class="container">
                    <div class="row">
                    <div class="span12">
                        <ul class="portfolio-categ filter">
                        <li class="all active"><a href="#">All</a></li>
                        <li class="web"><a href="#" title="">Web design</a></li>
                        <li class="icon"><a href="#" title="">Icons</a></li>
                        <li class="graphic"><a href="#" title="">Graphic design</a></li>
                        </ul>

                        <div class="clearfix"></div>
                        <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="grid cs-style-4 portfolio">

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/1.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/2.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography" data-id="id-2" data-type="graphic">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/3.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/4.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/5.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/6.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/7.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design" data-id="id-0" data-type="graphic">
                                <div class="item">
                                <figure>
                                    <div><img src="img/dummies/works/8.jpg" alt="" /></div>
                                    <figcaption>
                                    <div>
                                        <span>
                                                        <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                        <span>
                                                        <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                                        </span>
                                    </div>
                                    </figcaption>
                                </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->

                            </ul>
                        </section>

                        </div>
                    </div>
                    </div>
                </div>
                </section>
            @include('include.footer')
        </div>
    </div>
    @include('include.script')
    </body>
</html>