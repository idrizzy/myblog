<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
    <div id="app">
        <div class="wrapper">
    @include('include.nav')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Add Category</li>
              </ul>
              <h2>Add categories</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h4></h4>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{route('categories.store')}}" method="post" role="form" class="contactForm">
                @csrf
                <div class="row">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Category Name</label>
                        <div class="col-md-12">
                            <input id="email" type="text" class="form-control @error('catname') is-invalid @enderror" name="catname" value="{{ old('catname') }}" required autocomplete="catname" autofocus>
                            @error('catname')
                                <div class="validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">About Category</label>
                        <div class="col-md-12">
                        <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us" required
                            placeholder="Message"></textarea>

                            @error('about')
                                <div class="validation" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta selatan - Indonesia</li>
                  <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
                  <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                  <li><label>Email : </label> info@yourdomain.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    @include('include.footer')
  </div>
  </body>
</html>