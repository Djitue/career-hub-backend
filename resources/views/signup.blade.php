<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Hub Signup</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="{{ route('home')}}" method="get">
            @csrf
            <label for="role">Select Role:</label>
            <select name="role" id="role" required>
                <option value="" disabled selected>Select your role</option>
                <option value="admin">Admin</option>
                <option value="employer">Employer</option>
                <option value="job_seeker">Job Seeker</option>
            </select>
        
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
           
            <button type="submit" class="signup-button">Sign Up</button>
        </form>
    </div>
</body>
</html>
