
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style>
   
    </style>
</head>
<body>
<script>
    
</script>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">NIBM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profiles</a>
          <a class="dropdown-item" href="#">Register Admin</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="student">Student Register</a>
          <a class="dropdown-item" href="filter">Student Filter</a>
          <a class="dropdown-item" href="midviva">MID Viva</a>
          <a class="dropdown-item" href="finalviva">Final Evaluation</a>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Company
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="company">Register Company</a>
          <a class="dropdown-item" href="#">Send Mails</a>
      </li>

       </li>



<li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Company
 </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
   <a class="dropdown-item" href="company">Register Company</a>
   <a class="dropdown-item" href="#">Send Mails</a>
 </li>

 <li class="nav-item dropdown-right">

<a class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
    onclick="event.preventDefault();
                  document.
                  getElementById('logout-form').submit();">
  {{ __('Logout') }}
 </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                
</li>
    </ul>
  </div>
</nav>

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">{{$error}}
@endforeach
  </div>
@if($dep==1)
<div class="alert alert-danger">exist record!
@endif
</div>
    <div class="container border border-primary" style=" height:500px;  margin-top:15px; " >
      <div class = "row" style=" background-color:#2980B9; color:white; padding:5px; " >
      DASHBOARD
      </div><br><br>

   <div class="row">
  
    <div class="col-sm-4 border border-primary" style=" padding: 5px;">
    <h5>Enter Department</h5>
       <form method="post" action="/savedep" >
       {{ csrf_field() }}
    <div class="form-group " >
      <label for="no">Department NO:</label>
      <input type="text" class="form-control" id="dep" name="depno" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="pwd">Department</label>
      <input type="text" class="form-control" name="depname" id="pwd" placeholder="Enter password" >
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
       
    </div>
    <div class="col-sm-4 border border-primary" style="padding: 5px;"> 
    <form method="post" action="/savebatch">
    {{ csrf_field() }}
    <h5>Enter Batch</h5>
    <div class="form-group">
      <label for="email">Batch NO:</label>
      <input type="text" class="form-control" id="email" name="batchno" placeholder="Enter Batch no:" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" name="batch" placeholder="Enter Batch" >
    </div>
    
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
  </div>
    
    <div class="col-sm-4 border border-primary" style="padding: 5px;"> 
    <form method="post" action="/savebranch">
    {{ csrf_field() }}
    <h5>Enter Branch</h5>
    <div class="form-group">
      <label for="email">Branch NO:</label>
      <input type="text" class="form-control" name="branch_no" id="email" placeholder="Enter Number" >
    </div>
    <div class="form-group">
      <label for="pwd">Branch</label>
      <input type="text" class="form-control" name="branch" id="pwd"   placeholder="Enter Branch">
    </div>
    
    <button type="submit" class="btn btn-success">Submit</button>
  </form></div>
  </div>
      

    </div>
</body>
</html>

