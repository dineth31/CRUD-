<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to the CRUD Application</h1>
        
        @if (Route::has('login'))
            <div class="text-end">
                @auth
                    <a href="{{ url('/student') }}" class="btn btn-success">Go to CRUD</a>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
