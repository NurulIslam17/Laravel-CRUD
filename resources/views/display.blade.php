<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student CRUD</title>
    <style>
      .image
      {
        width: 50px;
        height: 50px;
      }
    </style>
  </head>

  <body>

  <div class="container">
    <center>
      <h1 class="p-3">Students Information</h1>
      <a class="btn btn-success my-3 " href="{{url('addInfo')}}">ADD STUDENT</a>

        <table class="table table-striped table-bordered">
          <thead class="bg-primary">
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Department</th>
              <th scope="col">Image</th>
              <th class="text-center" scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
          
             @foreach($data as $x)
            
                <tr>
                  <th>{{$loop->iteration}}</th> <!--  For dynamic serial number -->
                  <th>{{$x->id}}</th>
                  <td>{{$x->name}}</td>
                  <td>{{$x->email}}</td>
                  <td>{{$x->department}}</td>
                  <td class="text-center">
                    <img class="image" src="studentImage/{{$x->image}}">
                  </td>
                  <td class="text-center">
                    <a href="{{url('edit',$x->id)}}" class="btn btn-success">EDIT</a>
                    <a href="{{url('delete',$x->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data ?')">DELETE</a>
                  </td>
                </tr>
              @endforeach()
          </tbody>
        </table>
    </center>

  </div>
    
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
  </body>
</html>

