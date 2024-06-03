<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailData['title'] }}</title>
</head>
<body>
<h1>{{ $mailData['title'] }}</h1>
<p><strong>Full Name:</strong> {{ $mailData['body']['Full Name'] }}</p>
<p><strong>Email:</strong> {{ $mailData['body']['Email'] }}</p>
<p><strong>Message:</strong> {{ $mailData['body']['Message'] }}</p>
</body>
</html>
