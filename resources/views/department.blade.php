<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


 <style>

 .form-container{

position:absolute;
top:15vh; 
background:#fff;
padding:30px;
border-radius:10px;
box-shadow:0px 0px 10px 0px;

}   
 </style>
</head>
<body>
    
<section class="row justify-content-center">

<form class="form-container" method="post" action="/savedep">
   {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Department NO</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="depno" aria-describedby="emailHelp" placeholder="Enter department no...">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="depname" aria-describedby="emailHelp" placeholder="Enter Department...">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <button type="submit" class="btn btn-primary" id="btn">Submit</button>
</form>
</section>

</body>
</html>