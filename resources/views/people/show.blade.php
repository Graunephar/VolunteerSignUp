<!DOCTYPE html>
<html>
<head>
    <title>Person {{ $person->id }}</title>
</head>
<body>
<h1>Person {{ $person->id }}</h1>
<ul>
    <li>Name: {{ $person->name }}</li>
    <li>Email: {{ $person->email }}</li>
    <li>Times: {{ $person->timeslots}}</li>
</ul>
</body>
</html>