<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Page</title>
  </head>
  
  <style>

     .mainDiv
     {
        /* background-image: url(); */
        /* background-color: green; */
        /* background: rgb(2,0,36); */
        background-image: linear-gradient(to right bottom, #2b7237, #007464, #0071b3, #0065f4, #1227eb);
        padding: 100px;
  
     }
    level
    {
      display: inline-block;
      width: 200px;
    }
    .formDiv
    {
       width: 600px;
       font-weight: bold;
       border-radius: 100% 37% 16% 30% / 0% 20% 0% 10% ; 
       background-color: #0554f2;
       
    }

  </style>

  <body>

  <div class="container  mainDiv">
    <center>
      <div class="formDiv">
         <h1 class="py-3">Student  Registration</h1>

            @if(session()->has('msg'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">X</button>
               {{session()->get('msg')}}
            </div>
            @endif
            
            <form action="{{url('add_student')}}" method="POST" enctype="multipart/form-data">
            @csrf
               <div class="py-3 font-italic">
                  <level for="id">ID</level>
                  <input class="inp" type="text" name="id" placeholder="Student ID">
               </div>

               <div class="py-3 font-italic">
                  <level for="name">Name</level>
                  <input class="inp" type="text" name="name" placeholder="Student Name">
               </div>

               <div class="py-3 font-italic">
                  <level for="email">Email</level>
                  <input class="inp" type="email" name="email" placeholder="Student Email">
               </div>

               <div class="py-3 font-italic">
                  <level for="id">Phone</level>
                  <input class="inp" type="text" name="phone" placeholder="Student Phone">
               </div>

               <div class="py-3 font-italic">
                  <level for="department">Department</level>
                  <select name="dept" style="width: 200px;">
                     <option value="">---Select---</option>
                     <option value="CSE">CSE</option>
                     <option value="EEE">EEE</option>
                     <option value="TEXT">TEXT</option>
                     <option value="English">English</option>
                  </select>
               </div>

               <div class="py-3 font-italic">
                  <level for="image">Image</level>
                  <input class="inp" type="file" name="image" placeholder="Student Image">
               </div>

               <div class="py-3 font-italic">
                  <input type="submit" value="Add Student" class="btn btn-success">
               </div>

            </form>
      </div>
    </center>
  
  </div>
    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>