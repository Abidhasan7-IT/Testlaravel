<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>

<body>
    <div class="container">
      <div class="flex justify-between mt-5">
        <h2 class="text-red-600 text-xl">Edit {{$ourpost-> name}}</h2>

        <a href="/" class="bg-red-600 text-white rounded py-2 px-4">Back to Home</a>
      </div>

      <div>
        <form action="{{route('update', $ourpost-> id)}}" method="POST">
            @csrf
            <div class="flex flex-col gap-5 mt-4">
                <label for="name">Name</label>
                <input type="text" name="name" class="rounded" value="{{$ourpost-> name}}">
                <label for="descripe">Descripe</label>
                <input type="text" name="descripe" class="rounded" value="{{$ourpost-> description}}">
                <div>
                    <input type="submit" class="bg-green-600 text-white py-2 px-4 rounded inline-block" value="update">
                </div>
            </div>
        </form>
      </div>

    </div>
</body>

</html>

<style type="text/tailwindcss">
    @layer utilities {
      .container{
        @apply px-10 mx-auto ;
      }
    }
  </style>