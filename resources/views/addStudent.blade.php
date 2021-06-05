<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add student</title>
</head>
<body>
    
    <h1 style="text-align:center">Add New Student</h1>
    @if (Session::has('student_created'))
        {{ Session::get('student_created') }}
    @endif
    <form method="POST" action="{{ route('student.addStudent') }}">
        @csrf
        <label for="name">Student name: </label>
        <input type="text" name="name" placeholder="Enter Your name..."> <br>
        <label for="surname">Student surname: </label>
        <input type="text" name="surname" placeholder="Enter your surname..."> <br>
        <label for="department">Student department: </label>
        <input type="text" name="department" placeholder="Enter your department..."> <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>