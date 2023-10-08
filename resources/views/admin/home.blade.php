<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head> 
  <body>
  <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.slider')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
       @include('admin.body')
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
  </body>
</html>
</body>
</html>