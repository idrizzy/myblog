<!-- @extends('include.layout') -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
    <div id="app">
        <div class="wrapper">
            <!-- start header -->
            @include('include.nav')
           <!-- end header -->
            <section id="inner-headline">
              <div class="container">
                <div class="row">
                  <div class="span12">
                    <div class="inner-heading">
                      <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                        <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
                        <li class="active">About</li>
                      </ul>
                      <h2>About us</h2>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section id="content">
              <div class="container">
                <div class="row">

                  <div class="span12">
                    <h4>About our company</h4>
                    <p>
                      Ei mel semper vocent persequeris, nominavi patrioque vituperata id vim, cu eam gloriatur philosophia deterruisset. Meliore perfecto repudiare ea nam, ne mea duis temporibus. Id quo accusam consequuntur, eum ea debitis urbanitas. Nibh reformidans vim ne.
                    </p>
                    <blockquote>
                      Iudico definiebas eos ea, dicat inermis hendrerit vel ei, legimus copiosae quo at. Per utinam corrumpit prodesset te, liber praesent eos an. An prodesset neglegentur qui, usu ancillae posidonium in, mea ex eros animal scribentur. Et simul fabellas sit.
                      Populo inimicus ne est.
                    </blockquote>

                  </div>

                </div>

                <!-- divider -->
                <div class="row">
                  <div class="span12">
                    <div class="solidline"></div>
                  </div>
                </div>
                <!-- end divider -->

                <div class="row team">
                  <div class="span12">
                    <h4 class="title">Nice persons in <strong>Eterna</strong></h4>
                  </div>

                  <div class="span3">
                    <div class="team-box">
                      <a href="#" class="thumbnail"><img src="img/dummies/team/1.jpg" alt="" /></a>
                      <div class="roles aligncenter">
                        <p class="lead"><strong>Vincent Austin Jr</strong></p>
                        <p>
                          CEO - Founder
                        </p>
                        <p>
                          <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="team-box">
                      <a href="#" class="thumbnail"><img src="img/dummies/team/2.jpg" alt="" /></a>
                      <div class="roles aligncenter">
                        <p class="lead"><strong>Tommy Laugher</strong></p>
                        <p>
                          Lead designer
                        </p>
                        <p>
                          <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="team-box">
                      <a href="#" class="thumbnail"><img src="img/dummies/team/3.jpg" alt="" /></a>
                      <div class="roles aligncenter">
                        <p class="lead"><strong>Gabirelle Borowski</strong></p>
                        <p>
                          Customer support
                        </p>
                        <p>
                          <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="team-box">
                      <a href="#" class="thumbnail"><img src="img/dummies/team/4.jpg" alt="" /></a>
                      <div class="roles aligncenter">
                        <p class="lead"><strong>Benny Strongton</strong></p>
                        <p>
                          Coffee maker
                        </p>
                        <p>
                          <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                          <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blankline30"></div>

              </div>
            </section>

            <!-- frequently asked Question -->
            <section id="content">
              <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="row">

                  <div class="span12">
                    <h4 class="title"><strong>General</strong> questions</h4>
                    <!-- start: Accordion -->
                    <div class="accordion" id="accordion2">
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        <i class="icon-minus"></i> Lorem ipsum dolor sit amet? </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        <i class="icon-plus"></i> Nec at congue invidunt, simul urbanitas at eam? </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                        <i class="icon-plus"></i> Qui quot ponderum efficiendi eu, voluptua laboramus consequat? </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end: Accordion -->

                    <div class="blankline30"></div>
                    <div class="solidline"></div>
                    <div class="blankline20"></div>

                    <h4 class="title"><strong>Billing</strong> questions</h4>
                    <!-- start: Accordion -->
                    <div class="accordion" id="accordion3">
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseOne">
                        <i class="icon-minus"></i> Lorem ipsum dolor sit amet? </a>
                        </div>
                        <div id="billing-collapseOne" class="accordion-body collapse in">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseTwo">
                        <i class="icon-plus"></i> Nec at congue invidunt, simul urbanitas at eam? </a>
                        </div>
                        <div id="billing-collapseTwo" class="accordion-body collapse">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseThree">
                        <i class="icon-plus"></i> Qui quot ponderum efficiendi eu, voluptua laboramus consequat? </a>
                        </div>
                        <div id="billing-collapseThree" class="accordion-body collapse">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end: Accordion -->

                  </div>

                </div>
              </div>
            </section>

            <!-- Our Team -->
            <section id="content">
              <div class="container">
                <h2>Our Team</h2>
                <div class="row">
                  <div class="span12">
                    <ul class="team-categ filter">
                      <li class="all active"><a href="#">All Divisions</a></li>
                      <li class="design"><a href="#" title="">Design</a></li>
                      <li class="marketing"><a href="#" title="">Marketing</a></li>
                      <li class="dev"><a href="#" title="">Development</a></li>
                    </ul>

                    <div class="clearfix"></div>
                    <div class="row">
                      <section id="team">
                        <ul id="thumbs" class="team">

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/1.jpg" alt="" />
                              <div class="caption">
                                <h5>Stephen Long</h5>
                                <p>
                                  Web designer
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 dev" data-id="id-1" data-type="dev">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/2.jpg" alt="" />
                              <div class="caption">
                                <h5>David Clark</h5>
                                <p>
                                  Web programmer
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 marketing" data-id="id-2" data-type="marketing">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/3.jpg" alt="" />
                              <div class="caption">
                                <h5>Sarah Hughes</h5>
                                <p>
                                  Marketing Head
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/4.jpg" alt="" />
                              <div class="caption">
                                <h5>Maria Renata</h5>
                                <p>
                                  Web designer
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 dev" data-id="id-4" data-type="dev">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/5.jpg" alt="" />
                              <div class="caption">
                                <h5>Tim Dochovic</h5>
                                <p>
                                  Senior developer
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 design" data-id="id-5" data-type="design">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/6.jpg" alt="" />
                              <div class="caption">
                                <h5>Evan Zurog</h5>
                                <p>
                                  Web designer
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <li class="item-thumbs span3 marketing" data-id="id-0" data-type="marketing">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/7.jpg" alt="" />
                              <div class="caption">
                                <h5>Vanessa Millan</h5>
                                <p>
                                  Marketing development
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <!-- End Item Project -->

                          <!-- Item Project and Filter Name -->
                          <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                            <div class="team-box thumbnail">
                              <img src="img/dummies/team/8.jpg" alt="" />
                              <div class="caption">
                                <h5>Patricia Knobb</h5>
                                <p>
                                  Web designer
                                </p>
                                <ul class="social-network">
                                  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>
                                  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>
                                  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>
                                </ul>
                              </div>
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

            <!-- Our Services -->
            <section id="content">
              <div class="container">
              <h2>Our Services</h2>
                <div class="row">

                  <div class="span12">
                    <h4 class="title">What we do</h4>
                    <p>
                      Ei mel semper vocent persequeris, nominavi patrioque vituperata id vim, cu eam gloriatur philosophia deterruisset. Meliore perfecto repudiare ea nam, ne mea duis temporibus. Id quo accusam consequuntur, eum ea debitis urbanitas. Nibh reformidans vim ne.
                    </p>


                  </div>

                </div>


                <div class="row">

                  <div class="span3">
                    <div class="service-box aligncenter flyLeft">
                      <div class="icon">
                        <i class="icon-circled icon-bgprimary icon-code icon-4x"></i>
                      </div>
                      <h5>Custom <span class="colored">CMS</span></h5>
                      <p>
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                      </p>

                    </div>
                  </div>
                  <div class="span3">
                    <div class="service-box aligncenter flyIn">
                      <div class="icon">
                        <i class="icon-circled icon-bgsuccess icon-cloud icon-4x"></i>
                      </div>
                      <h5>Cloud <span class="colored">Hosting</span></h5>
                      <p>
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                      </p>

                    </div>
                  </div>
                  <div class="span3">
                    <div class="service-box aligncenter flyIn">
                      <div class="icon">
                        <i class="icon-circled icon-bgdanger icon-mobile-phone icon-4x"></i>
                      </div>
                      <h5>Mobile <span class="colored">Application</span></h5>
                      <p>
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                      </p>

                    </div>
                  </div>
                  <div class="span3">
                    <div class="service-box aligncenter flyRight">
                      <div class="icon">
                        <i class="icon-circled icon-bgwarning icon-envelope-alt icon-4x"></i>
                      </div>
                      <h5>Viral <span class="colored">Marketing</span></h5>
                      <p>
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                      </p>

                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="span12">
                    <div class="cta-box">
                      <div class="row">
                        <div class="span8">
                          <div class="cta-text">
                            <h2>Special price in very <span>limited</span> times</h2>
                          </div>
                        </div>
                        <div class="span4">
                          <div class="cta-btn">
                            <a href="#" class="btn btn-theme">Get a quote <i class="icon-angle-right"></i></a>
                          </div>
                        </div>

                      </div>


                    </div>
                  </div>
                </div>

              </div>
            </section>

            <!-- Our Pricing -->
            <section id="content">
              <div class="container">
              <h2>Our Pricing</h2>
                <div class="row">
                  <div class="span12">
                    <h4>Styled pricing box</h4>
                  </div>
                  <div class="span4">
                    <div class="pricing-box-wrap">
                      <div class="pricing-heading">
                        <h3>Very <strong>Basic</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;15.00 / Month</h6>
                      </div>
                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
                    </div>
                  </div>
                  <div class="span4">
                    <div class="pricing-box-wrap special">
                      <div class="pricing-heading">
                        <h3>Good <strong>Choice</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;25.00 / Month</h6>
                      </div>

                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
                    </div>
                  </div>
                  <div class="span4">
                    <div class="pricing-box-wrap">
                      <div class="pricing-heading">
                        <h3>Just <strong>Happy</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;35.00 / Month</h6>
                      </div>

                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- divider -->
                <div class="row">
                  <div class="span12">
                    <div class="solidline"></div>
                  </div>
                </div>
                <!-- end divider -->

                <div class="row">
                  <div class="span12">
                    <h4>Styled pricing box example on 4 columns</h4>
                  </div>
                  <div class="span3">
                    <div class="pricing-box-wrap">
                      <div class="pricing-heading">
                        <h3>Very <strong>Basic</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;15.00 / Month</h6>
                      </div>
                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="pricing-box-wrap">
                      <div class="pricing-heading">
                        <h3>Simple <strong>Choice</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;20.00 / Month</h6>
                      </div>
                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="pricing-box-wrap special">
                      <div class="pricing-heading">
                        <h3>Special <strong>Choice</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;15.00 / Month</h6>
                      </div>
                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="pricing-box-wrap">
                      <div class="pricing-heading">
                        <h3>Just <strong>Happy</strong></h3>
                      </div>
                      <div class="pricing-terms">
                        <h6>&#36;15.00 / Month</h6>
                      </div>
                      <div class="pricing-content">
                        <ul>
                          <li><i class="icon-ok"></i> 100 applications</li>
                          <li><i class="icon-ok"></i> 24x7 support available</li>
                          <li><i class="icon-ok"></i> No hidden fees</li>
                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                        </ul>
                      </div>
                      <div class="pricing-action">
                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Sign Up</a>
                      </div>
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

    



  