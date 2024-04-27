<ul>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env('APP_NAME') }}</title>
        <!-- Include the Tailwind CSS CDN -->
        <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-2xl font-bold text-center mt-4">Wensenlijst</h1>
        <ul>
            @foreach($gifts as $gift)
                <li class="bg-gray-200 p-2 m-2 rounded-lg">
                    <a href="{{ $gift->url }}" target="_blank">{{ $gift->name }}</a>
                </li>
            @endforeach
        </ul>
    </body>
    </html>
