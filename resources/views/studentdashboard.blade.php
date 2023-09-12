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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
      
      <br>
      <br>
      <div class="card">
     <div class="center">
      <br>
      <br>
      <a href="{{url('/studentsearch')}}">
        <button type="submit" class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i> Search Books</button>
        </a>
     </div>
      <br>
      &nbsp;
      <a href="{{url('/')}}">Logout</a>

        <table class="table" border="0">
            <thead>
                <tr>
                    <th>ISBN NO</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Publication</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $b)
                <tr>
                    
                    <td>{{$b->isbn_no}}</td>
                    <td>{{$b->book_name}}</td>
                    <td>{{$b->auth_name}}</td>
                    <td>{{$b->pub_name}}</td>
                    <td>
                      @if($b->bookcount!=0)
                      <a href="{{route('request.item',['id'=>$b->id])}}">
                        <button type="submit" class="btn btn-success">Request Book</button>
                        </a>
                      @else
                      <a href="#">
                        <button type="submit" class="btn btn-danger" disabled>Unavailable</button>
                        </a>
                      @endif

                      
                    
                    </td>
                    <td>
                      
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
  </body>
</html>