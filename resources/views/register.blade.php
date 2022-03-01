<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="mt-5 col-6 m-auto d-flex justify-content-center">
        <h1>Here you can register in our web site or <a href="/login">Login</a> </h1>
    </div>
    <form action="/register" method="POST" class="col-4 m-auto mt-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="input mb-4">
            <label for="image" class="form-label mb-3">Choose your profile image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        @include('error')
        <div>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</body>
</html>
