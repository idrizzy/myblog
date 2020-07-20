<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
    <div id="app">
        <div class="wrapper">
            <!-- start header -->
            @include('include.nav')
           <!-- end header -->
           <div class="container">
            <h2 class="title"><strong>Available</strong> <span>Categories</span></h2>
            <div class="span2">
            </div>
           <div class="span12">
                <a class="btn btn-primary pull-right" href="categories/create">Add Category</a>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category Name</th>
                      <th>About Category</th>
                      <th width="20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($category as $index =>$cat)
                        
                      <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$cat->catname}}</td>
                        <td>{{$cat->about}}</td>
                        <td>
                        <a class="btn btn-primary " href="categories/{{$cat->id}}/edit">Edit</a>
                        <a class="btn btn-danger " href="deletecat">Delete</a>
                        </td>
                    </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            @include('include.footer')
        </div>
    </div>
    @include('include.script')
    </body>
</html>