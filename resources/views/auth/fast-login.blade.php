<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER VAULT - Login</title>
    <link rel="stylesheet" href="{{ asset('build/assets/desktop-auth-dark.css') }}">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #0f0f0f;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-box {
            width: 100%;
            max-width: 400px;
            padding: 40px;
        }
        h1 { font-size: 28px; margin-bottom: 8px; font-weight: 600; }
        p { color: #999; margin-bottom: 32px; font-size: 15px; }
        .input-group { margin-bottom: 16px; }
        input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #333;
            border-radius: 8px;
            background: #1a1a1a;
            color: #fff;
            font-size: 15px;
            outline: none;
        }
        input:focus { border-color: #6366f1; }
        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #6366f1;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 8px;
        }
        button:hover { background: #4f46e5; }
        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
            font-size: 14px;
        }
        a { color: #6366f1; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="auth-box">
        <h1>Welcome Back</h1>
        <p>Login to your USER VAULT account</p>
        
        <form method="POST" action="{{ route('user.auth.login') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="login" placeholder="Email or username" required autofocus>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Continue</button>
        </form>
        
        <div class="links">
            <a href="{{ route('user.auth.forgot') }}">Forgot password?</a>
            <a href="{{ route('user.auth.signup') }}">Create account</a>
        </div>
    </div>
</body>
</html>
