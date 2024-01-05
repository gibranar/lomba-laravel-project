<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <div style="background-color: #f4f4f4; padding: 20px; text-align: center;">
            <h2 style="color: #333;">Password Reset</h2>
            <p style="color: #666;">
                Dear User,<br><br>
                You've requested to reset your password. Click the link below to proceed:
            </p>
        </div>
        <div style="background-color: #fff; padding: 20px;">
            <p style="color: #333;">
                <a href="{{ $url }}" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none;">
                    Reset Password
                </a>
            </p>
        </div>
        <div style="background-color: #f4f4f4; padding: 20px; text-align: center;">
            <p style="color: #666;">
                If the button doesn't work, you can copy and paste the following URL into your browser's address bar:<br>
                <a href="{{ $url }}" style="color: #4CAF50;">
                    {{ $url }}
                </a>
            </p>
        </div>
        <div style="background-color: #fff; padding: 20px;">
            <p style="color: #333;">
                If you did not request a password reset, please ignore this email or contact support.
            </p>
        </div>
    </div>
</body>
</html>
