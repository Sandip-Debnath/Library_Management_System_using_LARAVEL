<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/')}}" method="POST">
      @csrf

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
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
.btn 
{
    color:#FFF8DC;
    border-color:#FFF8DC;
    background-color:#A52A2A;
}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
}
.sup 
{
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
<div class="container mt-5 ">
<div class="row col-sm offset-3">
<div class="col-sm-5 ">
<div class="card">
<div class="col-md-12" align="center">
<img src="https://t3.ftcdn.net/jpg/04/78/74/22/360_F_478742224_movr8lXS2eyJggCiLYG2RPA4Sp6Qru88.jpg" alt="" width="250" height="250">
</div>

  <div class="form-group">
    <label for="exampleInputEmail1"><b>User-ID:</b></label>
    <input type="text" class="form-control" name="userid" value="{{old('userid')}}" placeholder="Enter Your User-ID" style="background-color:#FFF8DC; opacity:100%;" >
    <span class="text-danger">
      @error('userid')
          {{$message}}
      @enderror
    </span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><b>Password:</b></label>
    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" style="background-color:#FFF8DC;opacity:100%;" >
    <span class="text-danger">
      @error('password')
          {{$message}}
      @enderror
     
      
    </span>
    <span class="text-danger">
      
    </span>
</div>
  <div class="text-center">
   <button type="submit" class="btn">Login</button>
  </div>
    </form>
  </body>
</html>