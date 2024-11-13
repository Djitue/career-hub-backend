<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Hub Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Login as {{ ucfirst(str_replace('-', ' ', $role)) }}</h2>
        <form action="{{ route('signup') }}" method="POST">
                 @csrf
                <label for="role">Select Role:</label>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="admin">Admin</option>
                    <option value="employer">Employer</option>
                    <option value="job_seeker">Job Seeker</option>
                </select>
            
                <label for="email">email:</label>
                <input type="text" id="username" name="username" required>
           
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
        
            <button type="submit" class="login-button">Login</button>
           
            <p>Don't have an account? <a href="{{ route('register') }}">Sign up here</a></p>

        </form>
        
    </div>
</body>
</html>
