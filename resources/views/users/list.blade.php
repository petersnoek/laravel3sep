<!doctype html>
<html>
<head>
    <title>List of all users</title>
</head>
<body>
<H1>Welcome</H1>
<p>This is a list of all users</p>
    @foreach($users as $user)
        <li>{{ $user->email }}</li>
    @endforeach
</body>
</html>