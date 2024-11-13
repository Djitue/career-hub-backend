<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Hub - Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Career Hub</h1>
        <nav>
          <!-- In home.blade.php -->

            <a href="{{ route('login.admin') }}">Admin</a>
            <a href="{{ route('login.employer') }}">Employer</a>
            <a href="{{ route('login.job-seeker') }}">Job Seeker</a>
            <a href="/">Home</a>
        </nav>
    </header> 

    <main>
        <!-- Hero Banner Section -->
        <section class="hero">
            <img src="assets/images/hero-banner.jpeg" alt="Career Hub Banner">
            <div class="hero-text">
                <h2>Your Gateway to Career Opportunities</h2>
                <p>Connecting job seekers and employers in one centralized platform.</p>
            </div>
        </section>

        <!-- User Roles Section -->
        <section class="user-roles">
            <h2>Explore as</h2>
            <div class="roles-container">
                <!-- Admin Role -->
                <div class="role-card">
                    <img src="assets/images/admin-icon.jpeg" alt="Admin Icon">
                    <h3>Admin</h3>
                    <p>Oversee and manage user accounts and job listings efficiently.</p>
                    <a href="{{ route('login.admin') }}" class="role-link">Go to Admin Panel</a>
                </div>

                <!-- Employer Role -->
                <div class="role-card">
                    <img src="assets/images/employer-icon.jpeg" alt="Employer Icon">
                    <h3>Employer</h3>
                    <p>Post job vacancies, manage applications, and streamline hiring.</p>
                    <a href="{{ route('login.employer') }}" class="role-link">Go to Employer Panel</a>
                </div>

                <!-- Job Seeker Role -->
                <div class="role-card">
                    <img src="assets/images/job-seeker-icon.jpeg" alt="Job Seeker Icon">
                    <h3>Job Seeker</h3>
                    <p>Find the perfect job, apply with ease, and track your applications.</p>
                    <a href="{{ route('login.job-seeker') }}" class="role-link">Go to Job Seeker Panel</a>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>
