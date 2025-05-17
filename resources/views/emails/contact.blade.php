<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 20px;
            color: #333;
        }

        .email-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .header {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0;
            color: #444;
        }

        .content p {
            margin: 10px 0;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h2>📩 New Contact Submission</h2>
        </div>
        <div class="content">
            <p><strong>Name:</strong> {{ $name}}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong></p>
            <p style="white-space: pre-line;">{{ $messageContent }}</p>
        </div>

    </div>
</body>

</html>
