<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact us</title>
</head>
<body class="w-full h-screen flex items-center justify-center">
   <form method="POST" action="/save-contact" class="w-80 flex flex-col items-start gap-3">

    {{-- show error message if any  --}}
    <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-400 p-2 border-red-400 bg-red-100 rounded-lg mb-2">{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{-- <!-- CSrF token --> --}}
     @csrf
    <input
    class="border-2 p-2 w-full rounded-lg text-sm"
    type="text"
    placeholder="Fullname"
    name="fullname"
    >

    <input
    class="border-2 p-2 w-full rounded-lg text-sm"
    type="email"
    placeholder="Email address"
    name="email"
    {{-- required --}}
    >

    <textarea class="border-2 p-2 w-full resize-none rounded-lg text-sm" name="message" rows="8" placeholder="Message"></textarea>

    <button class="px-4 py-2 p-2 bg-sky-400 text-white rounded-lg text-sm" type="submit">Submit</button>

   </form>
</body>
</html>
