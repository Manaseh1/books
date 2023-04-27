<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <style>
        .centered {
        width:50%;
        height: 10%;
        border: 1px solid black; /* adds a border */
        margin: 80px auto; /* centers the div horizontally */
    
        }
        .contained{
            justify-content: center;
        }
        
    </style>
    <form class=" centered d-flex flex-column justify-content-center align-items-center  border  border-primary rounded p-3"action="add" method="post">
        @csrf
        <div class="contained">
            <h2><u>Enter book details</u></h2>
            <div class="form-group">
                <label for="name">book name </label>       
                <input type="text" class="form-control"name="book_name"><br>
                </div>
                <div class="form-group">
                <label for="isbn">Isbn </label>
                <input type="text" class="form-control"name="isbn"><br>
                </div>
                <div class="form-group">
                    <label for="author_name">author_name:</label>
                    <input type="text" class="form-control"name="author_name"><br>
                </div>
        
                <button class="btn btn-primary" name="submit">Submit</button>
        </div>
        
    </form>
    
</body>
</html>