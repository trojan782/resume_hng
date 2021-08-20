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

    <!-- component -->
    <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-lg mt-10">

        <div class="mt-4">
            <p class="text-lg text-gray-700 font-medium" href="#">Thank You for contacting me!</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <div class="flex items-center">
            </div>
            <span class="font-light text-sm text-gray-600">{{ date('Y-m-d') }}</span>
        </div>
        <div class="flex justify-center items-center">
            <a class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded" href="{{ route('cv') }}">Go back Home</a>
        </div>
    </div>


    <div class="p-10">
        <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
            <img class="w-full"
                src="https://res.cloudinary.com/zuri-team/image/upload/zuriboard/tenant-logo/ms5faj5pae6nd03wazk1.png"
                alt="zuri and i4g logo">
            <div class="px-6 py-4 bg-green-100">
                <div class="font-bold text-xl mb-2">You can visit us<a href="https://internship.zuri.team/"
                        class="bg-blue-300 p-1 rounded"> Here</a> Thank You.</div>
            </div>
        </div>
    </div>

</body>

</html>
