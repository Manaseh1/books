<?php
use Illuminate\Support\Facades\DB;
$data = DB::select('select distinct * from authors');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <style>
         .centered{
        border-radius: 10%;
        width:50%;
        height: 10%;
        /* border: 1px solid black; adds a border */
        margin: 80px auto; /* centers the div horizontally */
        border: 7px solid #ccc;
        }
        .centered table{
          width: 100%;
        }
        .table-bordered th  {
          border: 3px solid #ccc;
        }
        .table-bordered td{
          border: 3px solid #ccc;

        }
  </style>
  <div class="container centered" >
    <div class="row justify-content-center">
      <div class="col-md-8">
        <table class="table centered table-bordered">
        <h2 style="text-align:center; padding-top:20px">Display of author details </h2>
          <thead>
            <tr>
              <th>Author_Name </th>
              <th>Author_id</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data )
            <tr>
              <td>{{$data ->author_name}}</td>
              <td>{{$data ->id}}</td>
            </tr>     
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>
    