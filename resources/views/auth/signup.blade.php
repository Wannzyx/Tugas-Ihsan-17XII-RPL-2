<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .signup-container {
            margin-top: 100px;
            padding: 40px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        .signup-container h3 {
            font-size: 24px;
            font-weight: 600;
            color: #141b34;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-label {
            font-weight: bold;
            color: #141b34;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #e2e7f1;
            padding: 15px;
            font-size: 14px;
        }
        .form-control:focus {
            border-color: #3b71ff;
            box-shadow: 0 0 8px rgba(59, 113, 255, 0.3);
        }
        .form-text {
            font-size: 12px;
            color: #6c757d;
        }
        .btn-primary {
            background-color: #3b71ff;
            border: none;
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #2e5fcb;
        }
        .alert {
            margin-top: 20px;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer a {
            color: #3b71ff;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 signup-container">
            <h3>Signup</h3>

            <!-- Success message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Error message -->
            @if($errors->any())
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{ $err }}
                    </div>
                @endforeach
            @endif

            <form method="POST" action="{{ route('storeSignup') }}">
                @csrf
                <!-- Name input -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <!-- Email input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Footer (sign in link) -->
            <div class="form-footer">
                <p class="m-0">Already have an account? <a href="{{ route('signin') }}">Sign in</a></p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
