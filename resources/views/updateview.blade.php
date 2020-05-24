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
top:5vh; 
background:#fff;
padding:30px;
border-radius:10px;
box-shadow:0px 0px 10px 0px;

}
</style>
</head>
<body>


<section class="row justify-content-center">

<form class="form-container" method="post" action="/updatetasks">
{{ csrf_field() }}
  <div class="row">
    <div class="col">
    <label for="email">Comp ID:</label>
      <input type="text" class="form-control" name="compid" value="{{$updatedata->compid}}">
    </div>
   
    <div class="col">
    <label for="email">Comp Name:</label>
      <input type="text" class="form-control" name="comname"  value="{{$updatedata->compname}}" >
    </div>

     <div class="col">
     <label for="email">Description:</label>
      <input type="text" class="form-control" name="compdes"  value="{{$updatedata->des}}">
    </div>

     <div class="col">
     <label for="email">Tel:</label>
      <input type="text" class="form-control" name="comptel"  value="{{$updatedata->tel}}">
    </div>

     <div class="col">
     <label for="email">Mail:</label>
      <input type="text" class="form-control" name="compmail"  value="{{$updatedata->email}}">
    </div>

    <input type="hidden" name="id" value="{{$updatedata->id}}"/>

  </div>
  <br>
  <div class="text-right">
  <button type="submit" class="btn btn-primary">Update</button>
  
  &nbsp;&nbsp;<input type="submit" class="btn btn-danger" id="btn" value="Cancel"/>
  </div>


</form>
</section>


</body>
</html>