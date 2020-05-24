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
width:100%;
box-shadow:0px 0px 10px 0px;

}

</style>
</head>
<body>
<section class="row justify-content-center">


<div class="form-container">  
<table class="table table-dark">

<th>Student NO:</th>
<th>Email:</th>
<th>Phone:</th>
<th>GPA</th>
<th>Mid Marks:</th>

@foreach($fins as $fins)
<tr>
<td>{{$fins->index}}</td>
<td>{{$fins->mobil}}</td>
<td>{{$fins->mail}}</td>
<td>{{$fins->gpa}}</td>
<td>{{$fins->midmark}}</td>


<td>
@if($fins->midmark==0)
<button class="btn btn-warning">Not completed</button>
@else
<button class="btn btn-success">completed</button>
@endif
</td>

<td><a href="/addfinal/{{$fins->index}}/{{$fins->mobil}}/{{$fins->mail}}/{{$fins->gpa}}/{{$fins->midmark}}" class="btn btn-primary">Add Mark</a></td>
</tr>
@endforeach
</table>

</div>

</section> 
</body>
</html>