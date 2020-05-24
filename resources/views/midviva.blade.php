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
top:10vh; 
background:#fff;
padding:30px;
width:100%;
border-radius:10px;
box-shadow:0px 0px 10px 0px;

}

</style>


</head>
<body>

<section class="row justify-content-center">


<div class="form-container">  
<table class="table table-dark">

<th>Student NO:</th>
<th>Phone:</th>
<th>Email:</th>
<th>GPA</th>
<th>Mid Marks:</th>

@foreach($mids as $mid)
<tr>
<td>{{$mid->index}}</td>
<td>{{$mid->mobil}}</td>
<td>{{$mid->mail}}</td>
<td>{{$mid->gpa}}</td>
<td><a href="/addmidmrk/{{$mid->index}}/{{$mid->mobil}}/{{$mid->mail}}/{{$mid->gpa}}" class="btn btn-primary">Add Mark</a></td>
</tr>
@endforeach
</table>

</div>

</section>

</form>
</body>
</html>