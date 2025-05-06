<div style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <div
        style="color:white;display:flex; flex-direction:column; justify-content:center; align-items:center; background: linear-gradient(
        90deg,
        rgba(42, 91, 155, 1) 0%,
        rgba(87, 122, 199, 1) 75%,
        rgba(110, 117, 211, 1) 83%,
        rgba(165, 83, 237, 1) 100%
    );">
        <h1>Brainless Genius</h1><img src="{{ asset('images/brainless_logo-removebg-preview (1).png') }}" alt=""
            width="200px">
    </div>
    <div style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
        <p>Welcome to the team at Brainless Genius. You have been registered as a new admin at brainlessgenius.com.
            We're exited to have you abord.</p>
        <div style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
            <p> Your credentials for logging in are listed below:</p>
            <p> Email:</p>{{ $email }}
            <p> Password:</p>{{ $password }}
        </div>
        <p>Click the link below to get logged in and start your journey with us!</p>
        <a style="text-decoration: none;" href="127.0.0.1:8000/login">Admin Login</a>
    </div>
</div>
