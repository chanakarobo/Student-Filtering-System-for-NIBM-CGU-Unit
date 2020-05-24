<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>gpa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <form action="/addgpa" method="POST">
    {{ csrf_field() }}
    <input type="text" value='{{$index}}' name="index">
    <input type="text" value='{{$email}}' name="email">
    <input type="text" value='{{$mobile}}' name="mobile">
    <input type="text"  name="gpa">
    <input type="submit" >
    </form>
</body>
</html>