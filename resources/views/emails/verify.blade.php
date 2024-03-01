<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h2>Email Verification</h2>
    <p>Hello {{ $user->name }},</p>
    <p>Thank you for registering. Please click the link below to verify your email address:</p>
    <p><a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a></p>
    <p>If you did not create an account, no further action is required.</p>
    <p>Best regards,<br>Your Application Team</p>
</body>
</html>
