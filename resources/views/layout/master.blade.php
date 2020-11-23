<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body>

  <!-- Navigation -->
@include('layout.nav')

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Blog Home One
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog Home 1</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
      @yield('content')

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->

        @section('sidebar')
          @include('layout.sidebar')

 
        @show
            
        
       

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
@include('layout.footer')

  <!-- Bootstrap core JavaScript -->

@include('layout.scripts')
</body>

</html>
