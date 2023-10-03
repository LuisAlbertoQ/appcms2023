<div class="mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            @foreach ($posts as $post)
                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="grid grid-cols-2">

                          <div class="p-4 flex items-center justify-center">
                                <img src="{{Storage::url($post->image->url)}}" >
                            </div>

                        <div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$post->name}}</h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                {{$post->extract}}
                            </p>
                            <a href="{{route('posts.show',$post)}}" class="bg-indigo-400 text-white px-6 py-1  ">
                                 ver mas
                            </a>
                         </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="mt-2">
            {{$posts->links()}}
    </div>
</div>
