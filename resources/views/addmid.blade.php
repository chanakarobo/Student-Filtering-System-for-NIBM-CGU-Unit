<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <form action="/savemid" method="POST">
    {{ csrf_field() }}
    <input type="text" value='{{$index}}' name="index">
    <input type="text" value='{{$mail}}' name="mail">
    <input type="text" value='{{$mobil}}' name="mobil">
    <input type="text" value='{{$gpa}}' name="gpa">
    <input type="text"  name="midmrk">
    <input type="submit">
   </form>


</body>
</html>