<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jacobs David</title>
    <meta name="description" content="My Application Description">
    <meta name="author" content="trojancodes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-400 via-purple-600 to-blue-700">

    <div class="w-3/4 lg:w-1/2 mx-auto  rounded-md bg-white opacity-78 shadow-lg m-20 p-6 text-center">

        <h1 class="text-3xl">Contact Form</h1>
        <p class="text-gray-500 pb-4">Feel free to contact me</p>
        <form action="{{ route('contact.store') }}" method="POST" >
            @csrf
            <!-- component -->
            {{-- <form class="w-full max-w-lg"> --}}
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-white-100 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="John Doe">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Phone
                        </label>
                        <input
                            class="appearance-none block w-full bg-white-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="tel" placeholder="Telphone Number">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            E-mail
                        </label>
                        <input
                            class="appearance-none block w-full bg-white-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="email" type="email">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Subject
                        </label>
                        <input
                            class="appearance-none block w-full bg-white-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="subject" type="text">

                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Message
                        </label>
                        <textarea
                            class=" no-resize appearance-none block w-full bg-white-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                            id="message"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                       <button type="submit" class="py-3 px-6 text-white rounded-lg bg-green-400 shadow-lg block md:inline-block">Submit</button>
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            {{-- </form> --}}
        </form>
    </div>
    <div class="w-3/4 lg:w-1/2 mx-auto  rounded-md shadow-lg m-10 p-6 text-center">
        <a href="{{ route('cv') }}">Take me back 👈🏼</a>
    </div>
</body>

</html>
