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
        <h2 class="text-red-600 text-xl">Abid Hasan</h2>

        <a href="/create" class="bg-green-600 text-white rounded py-2 px-4">Add new post</a>
      </div>

      @if(Session::has('success'))
    <div class="alert alert-success bg-success text-green-600">
        {{Session::get('success')}}
    </div>
@endif

<div class="mt-5">
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
                  <tr class="odd:bg-white even:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->description}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <a href="{{route('edit', $post->id)}}" class="text-green-600 hover:text-blue-800">Edit</a>
                    </td>
                  </tr>
              @endforeach
             
            </tbody>
          </table>
          {{$posts->links()}}
        </div>
      </div>
    </div>
  </div>
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