@extends('cms.parent')
@section('title','Home Page')

@section('styles')
<style>
    a{
        color: black;
        font-weight: bold
    }

    a:hover{
        text-decoration: none;
    }
</style>

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        @php
        use App\Models\Admin;
        $count = Admin::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('admins.index')}}" class="info-box-icon bg-purple elevation-1"><i class="fas fa-user-shield"></i></a>

              <div class="info-box-content">
                <a href="{{route('admins.index')}}" class="info-box-text"> ADMINS</a>
                <a href="{{route('admins.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Author;
        $count = Author::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('authors.index')}}" class="info-box-icon bg-success elevation-1"><i class="fas fa-feather-alt"></i></a>

              <div class="info-box-content">
                <a href="{{route('authors.index')}}" class="info-box-text">AUTHORS </a>
                <a href="{{route('authors.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Category;
        $serCount = Category::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('categories.index')}}" class="info-box-icon bg-info elevation-1"><i class="fab fa-slideshare"></i></a>

              <div class="info-box-content">
                <a href="{{route('categories.index')}}" class="info-box-text">CATEGORIES    </a>
                <a href="{{route('categories.index')}}" class="info-box-number">{{$serCount}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Article;
        $sparCount = Article::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('articles.index')}}" class="info-box-icon bg-pink elevation-1"><i class="fas fa-newspaper"></i></a>

              <div class="info-box-content">
                <a href="{{route('articles.index')}}" class="info-box-text">ARTICLES</a>
                <a href="{{route('articles.index')}}" class="info-box-number">{{$sparCount}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          @php
          use App\Models\Country;
          $serCount = Country::count('id');
          @endphp

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <a href="{{route('countries.index')}}" class="info-box-icon bg-warning elevation-1"><i class="fas fa-globe-asia"></i></a>

                <div class="info-box-content">
                  <a href="{{route('countries.index')}}" class="info-box-text"> COUNTRIES</a>
                  <a href="{{route('countries.index')}}" class="info-box-number">{{$serCount}}</a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->




     @php
     use App\Models\City;
     $count = City::count('id');
     @endphp

       <div class="col-12 col-sm-6 col-md-4">
         <div class="info-box mb-3">
           <a href="{{route('cities.index')}}" class="info-box-icon bg-success elevation-1"><i class="fas fa-city"></i></a>

           <div class="info-box-content">
             <a href="{{route('cities.index')}}" class="info-box-text">CITIES</a>
             <a href="{{route('cities.index')}}" class="info-box-number">{{$count}}</a>
           </div>
           <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
       </div>
     @php
     use App\Models\Comment;
     $countcomment = Comment::count('id');
     @endphp

       <div class="col-12 col-sm-6 col-md-4">
         <div class="info-box mb-3">
           <a href="{{route('comments.index')}}" class="info-box-icon bg-blue elevation-1"><i class="fas fa-comment"></i></a>

           <div class="info-box-content">
             <a href="{{route('comments.index')}}" class="info-box-text">Comments</a>
             <a href="{{route('comments.index')}}" class="info-box-number">{{$countcomment}}</a>
           </div>
           <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
       </div>


       @php
       use App\Models\Contact;
       $countc = Contact::count('id');
       @endphp

         <div class="col-12 col-sm-6 col-md-4">
           <div class="info-box mb-3">
             <a href="{{route('contacts.index')}}" class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-signature"></i></a>

             <div class="info-box-content">
               <a href="{{route('contacts.index')}}" class="info-box-text">Contacts</a>
               <a href="{{route('contacts.index')}}" class="info-box-number">{{$countc}}</a>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>



         @php
       use App\Models\Slider;
       $counts = Slider::count('id');
       @endphp

         <div class="col-12 col-sm-6 col-md-4">
           <div class="info-box mb-3">
             <a href="{{route('sliders.index')}}" class="info-box-icon bg-purple elevation-1"><i class=" fas fa-sliders-h"></i></a>

             <div class="info-box-content">
               <a href="{{route('sliders.index')}}" class="info-box-text">Sliders</a>
               <a href="{{route('sliders.index')}}" class="info-box-number">{{$counts}}</a>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>






       <!-- /.col -->
    </div>
</div>

@endsection

@section('scripts')

@endsection
