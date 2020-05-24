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
 <h5>Company Submition<h5>
</div>
<section class="row justify-content-center">

<form class="form-container" method="post" action="/savecomp">

{{ csrf_field() }}

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="compid" placeholder="Company ID">
    </div>
   
    <div class="col">
      <input type="text" class="form-control" name="comname" placeholder="Name">
    </div>

     <div class="col">
      <input type="text" class="form-control" name="compdes" placeholder="Description">
    </div>

     <div class="col">
      <input type="text" class="form-control" name="comptel" placeholder="Tel">
    </div>

     <div class="col">
      <input type="text" class="form-control" name="compmail" placeholder="Email">
    </div>

  </div>
  <br>
  <div class="text-right">
  <button type="submit" class="btn btn-primary" id="btn">Submit</button>
  </div>
<br>
 <table class="table table-dark">
 <th>ID</th>
 <th>Company ID</th>
 <th>Name</th>
 <th>Description</th>
 <th>Tel</th>
 <th>Email</th>
 <th>Action</th>

@foreach($comps as $comps) 
 <tr>
 <td>{{$comps->id}}</td>
 <td>{{$comps->compid}}</td>
 <td>{{$comps->compname}}</td>
 <td>{{$comps->des}}</td>
 <td>{{$comps->tel}}</td>
 <td>{{$comps->email}}</td>
 <td>
 <a href="/updatetask/{{$comps->id}}" class="btn btn-success">Update</a>
 <a href="/deletetask/{{$comps->id}}" class="btn btn-danger">Delete</a>
 </td>

 </tr>
@endforeach
 </table>


</form>





</section>


    
</body>
</html>