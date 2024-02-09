<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Home</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        <a href="{{ route('logout') }}" class="btn btn-secondary">Logout</a>
    </div>
</body>
</html>