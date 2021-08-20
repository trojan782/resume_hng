{{-- <h2>Hello</h2> <br><br>

You have got an email from : {{ $details['name'] }} <br><br>

User details: <br><br>

Name: {{ $details['name'] }} <br>
Email: {{ $details['email'] }} <br>
Phone: {{ $details['phone'] }} <br>
Subject: {{ $details['subject'] }} <br>
Message: {{$details['message'] }} <br><br>

Thanks --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jacobs David</title>
    <meta name="description" content="jacobs david">
    <meta name="author" content="trojancodes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-400 via-purple-600 to-blue-700">

    <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-lg mt-10">

        <div class="mt-4">
            <p class="text-lg text-gray-700 font-medium">You have an Email from {{ $details['name'] }}</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <div class="flex items-center">
            </div>
            Name: {{ $details['name'] }} <br>
            Email: {{ $details['email'] }} <br>
            Phone: {{ $details['phone'] }} <br>
            Subject: {{ $details['subject'] }} <br>
            Message: {{ $details['message'] }} <br><br>
        </div>
        {{-- <div class="flex justify-center items-center">
            <a class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded" href="{{ route('cv') }}">Go back Home</a>
        </div> --}}
    </div>
</body>

</html>
