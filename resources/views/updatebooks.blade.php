<!doctype html>
<html lang="en">
  <head>
    <title>dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
.card
{
    box-shadow: blue;
    box-sizing: border-box;
    padding-top: 10px;
    padding: 10%;
    opacity: 85%;   
    color:#A52A2A; 
    
}
body
{
    background-image:url('https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGlicmFyeXxlbnwwfHwwfHw%3D&w=1000&q=80');
}
  </style>
  <body>
    <form action="{{$url}}" method="POST">
        @csrf      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">
  <br>
  <br>
<div class="card">
  <h3 class="text-center text-danger">
    {{$title}}
  </h3>
    <div class="form-group">
        <label for="exampleInputEmail1"><b>ISBN NO:</b></label>
        <input type="text" class="form-control" name="isbn" placeholder="Enter ISBN number" style="background-color:#FFF8DC; opacity:100%;" value="{{$books->isbn_no}}" />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"><b>Book Name:</b></label>
        <input type="text" class="form-control" name="bname" placeholder="Enter Book Name" style="background-color:#FFF8DC; opacity:100%;" value="{{$books->book_name}}"/>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"><b>Author Name:</b></label>
        <input type="text" class="form-control" name="aname" placeholder="Enter Author Name" style="background-color:#FFF8DC; opacity:100%;" value="{{$books->auth_name}}"/>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"><b>Publication:</b></label>
        <input type="text" class="form-control" name="publication" placeholder="Enter Publication" style="background-color:#FFF8DC; opacity:100%;" value="{{$books->pub_name}}"/>
      </div>
     <div class="form-group">
        <label for="exampleInputEmail1"><b>No of Books:</b></label>
        <input type="number" class="form-control" name="bookcount" placeholder="No. of Books" style="background-color:#FFF8DC; opacity:100%;" value="{{$books->bookcount}}"/>
     </div>
      <div class="text-center">
        <button type="submit" class="btn btn-warning">Submit</button>
       </div>
</form> 
</div>
</div>
</body>
</html>