<x-index-layout>
    <div>
        <div class="border-y-2 border-indigo-600 py-3 flex justify-between">
            <h3>{{$post->category->name}}</h3>
            <a href="/" class="bg-indigo-400 text-white px-6 py-1">Regeresar</a>
        </div>
        <div>
            <h1 class="text-2xl font-bold py-6 text-white">{{$post->name}}</h1>
        </div>
        <div class="grid grid-cols-3 gap-6 w-full text-white">
            <div class="col-span-2 text-white">
                <div>
                    <img class="w-full text-white" src="{{Storage::url($post->image->url)}}" alt="">
                </div>
                <div>
                    <p class="font-bold border-y-2 text-white border-indigo-600 border-dotted py-3 my-4">Publicado el {{$post->created_at}}</p>
                    <p class="text-sm text-white">{{$post->body}}</p>
                </div>
            </div>
            <div>
                <h3 class="bg-indigo-600 text-white p-2">Ultimas noticias</h3>
                @foreach ($ultimas as $item)
                <a href="{{route('posts.show',$item)}}" class="grid grid-cols-2 my-4 border-b-2 border-indigo-600 pb-4">
                    <div>
                        <img src="{{Storage::url($item->image->url)}}" alt="">
                    </div>
                    <div class="ml-4 text-white">
                        <h4>{{$item->name}}</h4>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-index-layout>
