<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

#btn{

width:400px;

} 

h5{

color:#008CBA;

}

.topic{

height: 30px;
padding:30px;
background-color:rgba(192,192,192,0.3);

}

</style>

</head>
<body>
<div class="topic">
 <h5>Student Submitions<h5>
</div>


@foreach($errors->all() as $error)


<div class="alert alert-danger" role="alert"> 
{{$error}}

</div>

@endforeach

<section class="row justify-content-center">

<form class="form-container" method="post" action="/saveTask">
   {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Index No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="stindex" aria-describedby="emailHelp" placeholder="Enter Index">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="stname" aria-describedby="emailHelp" placeholder="Enter Name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="stemail" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="stmobile" placeholder="Enter mobile number">
  </div>

   <div class="form-group">
    <label for="exampleSelect1">Course</label>
    <select class="form-control" name="stcourse"id="exampleSelect1">
      <option>enter Course</option>
      <option>curs1</option>
      <option>curs2</option>
      <option>curs3</option>
      <option>curs4</option>
      <option>curs5</option>
    </select>
  </div>

   <div class="form-group">
    <label for="exampleSelect1">Department</label>
    <select class="form-control" name="stdep" id="exampleSelect1">
      <option>enter Department</option>
      <option>BUssiness</option>
      <option>IT</option>
    </select>
  </div>

   <div class="form-group">
    <label for="exampleSelect1">Batch</label>
    <select class="form-control" name="stbatch" id="exampleSelect1">
      <option>enter Batch</option>
      <option>dcsd171.1</option>
      <option>dcsd171.2</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Branch</label>
    <select class="form-control" name="stbranch"id="exampleSelect1">
      <option>enter Branch</option>
      <option>Kandy</option>
      <option>Kurunagala</option>
      <option>Colombo</option>
      <option>Matara</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" id="btn">Submit</button>
</form>


</section>




    
</body>
</html>