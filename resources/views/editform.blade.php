<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="App/Resources/Views/style.css" rel="stylesheet" >
    <title>CRUD - ELOQUENT ORM</title>
    <style>
      label{
        margin:10px 0px!important;
      }

    </style>
    
  </head>
  <body>
  <div class="container mt-10">
  <div class="row">
  <div class="col-sm-6 col-md-6 ">
  <form action="" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $student->name }}">
  </div>
  <div class="form-group">
    <label for="exampleInputcity">Task</label>
    <input type="text" class="form-control" id="city"  placeholder="Enter Task" name="city" value="{{$student->city}}">   
  </div>
  <div class="form-group">
    <label for="exampleInputmarks">Days Required</label>
    <input type="text" class="form-control" id="marks"  placeholder="Days Required" name="marks" value="{{$student->marks}}">  
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>


</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>