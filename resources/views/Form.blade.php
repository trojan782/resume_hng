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

    <div class="w-3/4 lg:w-1/2 mx-auto  rounded-md bg-white opacity-78 shadow-lg m-20 p-6 text-center">
        @if(Session::has('Mail_sent'))
        	<div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
			<div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
						 viewBox="0 0 20 20"
						 class="h-6 w-6">
						<path fill-rule="evenodd"
							  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
							  clip-rule="evenodd"></path>
					</svg>
				</span>
			</div>
			<div class="alert-content ml-4">
				<div class="alert-description text-sm text-green-600">
					{{ Session::get('Mail_sent') }}
				</div>
			</div>
		</div>
        @endif
        <h1 class="text-3xl">Contact Form</h1>
        <p class="text-gray-500 pb-4">Feel free to contact me</p>
        <form action="{{ route('contact.send') }}" method="POST" >
            {{-- @csrf --}}
            <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            id="grid-first-name" name="name" type="text" placeholder="John Doe">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Phone
                        </label>
                        <input
                            class="appearance-none block w-full bg-white-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" name ="phone" type="tel" placeholder="Telphone Number">
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
                            id="email" name="email" type="email">
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
                            id="subject" name="subject" type="text">

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
                            id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                       <button type="submit" class="py-3 px-6 text-white rounded-lg bg-green-400 shadow-lg block md:inline-block">Submit</button>
                    </div>
                    <div class="md:w-2/3">
                       {{-- <button type="submit" class="py-3 px-6 text-white rounded-lg bg-green-400 shadow-lg block md:inline-block">Submit</button> --}}
                    
                    </div>
                </div>
        <a href="{{ route('cv') }}" class="bg-blue-200 p-4">Take me back 👈🏼</a>

            {{-- </form> --}}
        </form>
{{-- <div class=" mx-auto  rounded-md m-10 p-6 text-center"> --}}
    {{-- </div> --}}
    </div>
    
</body>

</html>
