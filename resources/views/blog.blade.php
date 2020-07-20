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
                            <li class="active">Post left sidebar</li>
                        </ul>
                        <h2>Posts</h2>
                        <a href="addpost" class="btn btn-primary pull-right">Add Post</a>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section id="content">
                <div class="container">
                    <div class="row">

                    <div class="span8">

                        <article class="single">
                        <div class="row">

                            <div class="span8">
                            <div class="post-image">
                                <div class="post-heading">
                                <h3><a href="#">Example single post title here</a></h3>
                                </div>
                                <img src="img/dummies/blog/img1.jpg" alt="" />
                            </div>
                            <div class="meta-post">
                                <ul>
                                <li><i class="icon-file"></i></li>
                                <li>By <a href="#" class="author">Admin</a></li>
                                <li>On <a href="#" class="date">10 Jun, 2013</a></li>
                                <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                                </ul>
                            </div>
                            <p>
                                Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                                ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri at eius erat accusamus. Eos id
                                hinc fierent indoctum, ad accusam consetetur voluptatibus sit. His at quod impedit. Eu zril quando perfecto mel, sed eu eros debet.
                            </p>
                            <blockquote>
                                Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
                            </blockquote>
                            <p>
                                Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri
                                at eius erat accusamus.
                            </p>



                            </div>
                        </div>
                        </article>

                        <!-- author info -->
                        <div class="about-author">
                        <a href="#" class="thumbnail align-left"><img src="img/avatar.png" alt="" /></a>
                        <h5><strong><a href="#">John doe</a></strong></h5>
                        <p>
                            Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper ad qui, est rebum nulla argumentum ei.
                        </p>
                        </div>

                        <div class="comment-area">

                        <h4>4 Comments</h4>
                        <div class="media">
                            <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
                            <div class="media-body">
                            <div class="media-content">
                                <h6><span>March 12, 2013</span> Michael Simpson</h6>
                                <p>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>

                                <a href="#" class="align-right">Reply</a>
                            </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
                            <div class="media-body">
                            <div class="media-content">
                                <h6><span>March 12, 2013</span> Smith karlsen</h6>
                                <p>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>

                                <a href="#" class="align-right">Reply</a>
                            </div>
                            <div class="media">
                                <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
                                <div class="media-body">
                                <div class="media-content">
                                    <h6><span>June 22, 2013</span> Jay Moeller</h6>
                                    <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>

                                    <a href="#" class="align-right">Reply</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle" /></a>
                            <div class="media-body">
                            <div class="media-content">
                                <h6><span>June 24, 2013</span> Dean Zaloza</h6>
                                <p>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>

                                <a href="#" class="align-right">Reply</a>
                            </div>
                            </div>
                        </div>

                        <div class="marginbot30"></div>
                        <h4>Leave your comment</h4>

                        <form id="commentform" action="#" method="post" name="comment-form">
                            <div class="row">
                            <div class="span4">
                                <input type="text" placeholder="* Enter your full name" />
                            </div>
                            <div class="span4">
                                <input type="text" placeholder="* Enter your email address" />
                            </div>
                            <div class="span8 margintop10">
                                <input type="text" placeholder="Enter your website" />
                            </div>
                            <div class="span8 margintop10">
                                <p>
                                <textarea rows="12" class="input-block-level" placeholder="*Your comment here"></textarea>
                                </p>
                                <p>
                                <button class="btn btn-theme btn-medium margintop10" type="submit">Submit comment</button>
                                </p>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="span4">

                        <aside class="right-sidebar">

                        <div class="widget">
                            <form>
                            <div class="input-append">
                                <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                                <button class="btn btn-theme" type="submit">Search</button>
                            </div>
                            </form>
                        </div>

                        <div class="widget">

                            <h5 class="widgetheading">Categories</h5>
                            <ul class="cat">
                            @foreach($category as $cat)
                            <li><i class="icon-angle-right"></i> <a href="#">{{$cat->catname}}</a><span> (20)</span></li>
                            @endforeach
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#one" data-toggle="tab"><i class="icon-star"></i> Popular</a></li>
                                <li><a href="#two" data-toggle="tab">Recent</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="one">
                                <ul class="popular">
                                    <li>
                                    <img src="img/dummies/blog/small/1.jpg" alt="" class="thumbnail pull-left" />
                                    <p><a href="#">Dorlorem ipsum et mea dolor sit amet</a></p>
                                    <span>20 June, 2013</span>
                                    </li>
                                    <li>
                                    <img src="img/dummies/blog/small/2.jpg" alt="" class="thumbnail pull-left" />
                                    <p><a href="#">Fierent adipisci iracundia est ei, usu timeam persius ea</a></p>
                                    <span>20 June, 2013</span>
                                    </li>
                                    <li>
                                    <img src="img/dummies/blog/small/3.jpg" alt="" class="thumbnail pull-left" />
                                    <p><a href="#">Usu ea justo malis, pri quando everti electram ei</a></p>
                                    <span>20 June, 2013</span>
                                    </li>
                                </ul>
                                </div>
                                <div class="tab-pane" id="two">
                                <ul class="recent">
                                    <li>
                                    <p><a href="#">Dorlorem ipsum et mea dolor sit amet</a></p>
                                    </li>
                                    <li>
                                    <p><a href="#">Fierent adipisci iracundia est ei, usu timeam persius ea</a></p>
                                    </li>
                                    <li>
                                    <p><a href="#">Usu ea justo malis, pri quando everti electram ei</a></p>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="widget">

                            <h5 class="widgetheading">Video widget</h5>
                            <div class="video-container">
                            <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">			</iframe>
                            </div>
                        </div>

                        <div class="widget">
                            <h5 class="widgetheading">Flickr photostream</h5>
                            <div class="flickr_badge">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="widget">

                            <h5 class="widgetheading">Text widget</h5>
                            <p>
                            Lorem ipsum dolor sit amet, quo everti torquatos rationibus an, graeci splendide mel cu. Sed ad vidisse eruditi maluisset, et duo mazim placerat adipiscing.
                            </p>

                        </div>
                        </aside>
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