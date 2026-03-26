<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 350px;">

            <h3 class="text-center mb-3">Login</h3>

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form action="/login" method="POST">
                @csrf

                <input type="text" name="username" class="form-control mb-3" placeholder="Username">
                <input type="password" name="password" class="form-control mb-3" placeholder="Password">

                <button class="btn btn-primary w-100">Login</button>
            </form>

        </div>
    </div>

</body>

</html>