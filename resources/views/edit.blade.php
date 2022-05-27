<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Page</title>
    
      <style>
        .mainDiv
        {
         background-image: linear-gradient(to right bottom, #4fe071, #00dd9b, #00d6bd, #00ced3, #0fc4dd);
          padding: 20px;
        }

        level
        {
        display: inline-block;
        width: 200px;
        }

        .formDiv
        {
          width: 650px;
          font-weight: bold;
          border-radius: 100% 37% 16% 30% / 0% 20% 0% 10%; 
        }
      
      </style>

  </head>
  
  <body>

      <div class="container  mainDiv">
         <center>
            <div class="bg-info py-3 formDiv">
               <h1 class="py-3">Update Student Information</h1>
                  
                  <form action="{{url('update_student',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                     <div class="py-2 font-italic">
                        <level for="name">Name</level>
                        <input class="inp" type="text" name="name" value="{{$data->name}}">
                     </div>

                     <div class="py-2 font-italic">
                        <level for="email">Email</level>
                        <input class="inp" type="email" name="email" value="{{$data->email}}" >
                     </div>

                     <div class="py-2 font-italic">
                        <level for="id">Phone</level>
                        <input class="inp" type="text" name="phone" value="{{$data->phone}}">
                     </div>

                     <div class="py-2 font-italic">
                        <level for="id">Department</level>
                        <input class="inp" type="text" name="department" value="{{$data->department}}" >
                     </div>

                     <div class="py-1 font-italic">
                        <level for="image">Old Image</level>
                        <img width="200px" height="190px" src="../studentImage/{{$data->image}}">
                     </div>
                     <div class="py-3 font-italic">
                        <level for="image">Image</level>
                        <input class="inp" type="file" name="image" >
                     </div>

                     <div class="py-3 font-italic">
                        <input type="submit" value="Update Student" class="btn btn-success">
                     </div>
                  </form>
            </div>
         </center>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>