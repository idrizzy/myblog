<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
    <div id="app">
        <div class="wrapper">
            <!-- start header -->
            @include('include.nav')
           
            @include('include.footer')
        </div>
    </div>
    @include('include.script')
    </body>
</html>