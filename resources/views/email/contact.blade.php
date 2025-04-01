<!DOCTYPE html>
<html>

<head>
    <title>{{ $data['subject'] }}</title>
</head>

<body>
    <h2>New Message from {{ $data['name'] }}</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
    <p>Thank you!</p>
</body>

</html>