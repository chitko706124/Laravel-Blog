<x-app-layout>
    {{-- <div id="posts" class=" px-3 lg:px-7 py-6">
                    <div class="py-4">
                        <article class=" border-gray-100 border pb-10">
                            <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start relative">

                                <div class=" col-span-4">
                                    <img class=" h-44 w-72" alt="">
                                </div>

                                <div class="col-span-8 relative">
                                    <div class="article-meta flex py-1 text-sm items-center">
                                        <img class="w-7 h-7 rounded-full mr-3" src="" alt="avatar">
                                        <span class="mr-1 text-xs">test</span>
                                        <span class="text-gray-500 text-xs">. 17 hours ago</span>
                                    </div>
                                    <h2 class="text-xl font-bold text-gray-900">
                                        Title
                                    </h2>

                                    <p class="mt-2 text-base text-gray-700 font-light">
                                        hello there
                                    </p>


                                </div>
                                <div class=" absolute bottom-0 left-[35%]">
                                    <span
                                        class="inline-block bg-gray-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">tailwind</span>
                                </div>

                            </div>
                        </article>
                    </div>

                </div> --}}
    {{-- <main class=" cContainer  flex flex-grow">
        <div class="w-full mt-10 grid grid-cols-4 gap-10">
            <div id="posts" class=" hidden md:col-span-3 col-span-4 border-r-2 md:pr-3 ">
                <div class="infinite-scroll">
                    @foreach ($posts as $post)
                        <div id="{{ $post->id }}" onclick="biometricData({{ $post->id }})"
                            class="mb-5  bg-white rounded-lg grid grid-cols-3 gap-4 overflow-hidden">
                            <div>
                                <img class=" h-44 w-72" src="{{ asset("storage/$post->image") }}" alt="">
                            </div>
                            <div class="col-span-2 relative">
                                <div class=" flex items-end">
                                    <img class=" h-8 w-8 rounded-full shadow border"
                                        src="{{ asset('storage/' . $post->user->image) }}" alt="">
                                    <h2>{{ $post->user->name }}</h2>
                                </div>
                                <h2 class=" text-xl font-bold">{{ $post->title }}</h2>
                                {!! Illuminate\Support\Str::of($post->description)->limit(200, ' ...') !!}

                                <div class=" absolute bottom-0">
                                    @foreach ($post->cat as $category)
                                        <span
                                            class="inline-block bg-gray-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $category->category }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class=" hidden">
                        {{ $posts->links() }}

                    </div>
                </div>
            </div>


            <div class=" col-span-4 md:col-span-1  h-screen sticky top-0">
                <div id="search-box">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3>
                        <div class="w-52 flex rounded-2xl bg-gray-100 py-2 px-3 mb-3 items-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input
                                class="w-40 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-xs text-gray-800 placeholder:text-gray-400"
                                type="text" placeholder="Search Yelo">
                        </div>
                    </div>
                </div>

                <div id="recommended-topics-box">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>
                    <div class="topics flex flex-wrap justify-start">
                        <a href="#"
                            class="bg-red-600
                                        text-white
                                        rounded-xl px-3 py-1 text-base">
                            Tailwind</a>
                    </div>
                </div>
            </div>
        </div>
    </main> --}}


    <div class=" mt-10">
        <div id="main" class=" cContainer grid grid-cols-3 ">

            @include('components.custom.loading')



            <div id="posts" class=" hidden col-span-2 border-r-2 md:pr-3 md:mr-3">
                <div class="infinite-scroll">
                    @foreach ($posts as $post)
                        <div id="{{ $post->id }}" onclick="biometricData({{ $post->id }})"
                            class="mb-5  bg-white rounded-lg grid grid-cols-3 gap-4 overflow-hidden shadow-md">
                            <div>
                                <img class=" h-44 w-72" src="{{ asset("storage/$post->image") }}" alt="">
                            </div>
                            <div class="col-span-2 relative">
                                <div class=" flex items-end">
                                    <img class=" h-8 w-8 rounded-full shadow border"
                                        src="{{ asset('storage/' . $post->user->image) }}" alt="">
                                    <h2>{{ $post->user->name }}</h2>
                                </div>
                                <h2 class=" text-xl font-bold text-gray-900">{{ $post->title }}</h2>

                                <p class="mt-1 text-base text-gray-700 font-light">
                                    {!! Illuminate\Support\Str::of($post->description)->limit(200, ' ...') !!}
                                </p>


                                <div class=" absolute bottom-0">
                                    @foreach ($post->cat as $category)
                                        <span
                                            class="inline-block bg-gray-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $category->category }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class=" hidden">
                        {{ $posts->links() }}

                    </div>
                </div>
            </div>

            <div class=" col-span-1 h-screen sticky top-0">
                <div id="search-box">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3>
                        <div class="w-full shadow-md flex rounded-lg bg-white py-2 px-3 mb-3 items-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input
                                class="w-full ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-xs text-gray-800 placeholder:text-gray-400"
                                type="text" placeholder="Search with title">
                        </div>
                    </div>
                </div>

                <div id="recommend-topic">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>

                    <span onclick="window.location.href = '{{ route('home') }}'"
                        class="inline-block shadow-md cursor-pointer bg-gray-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">All</span>
                    @foreach ($categories as $category)
                        <span onclick="window.location.href = '{{ route('home') }}?category={{ $category->id }}'"
                            class="inline-block shadow-md cursor-pointer bg-gray-200 rounded-md px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $category->category }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="postDetail" class=" cContainer ">

        </div>
    </div>

    @section('js')
        {{-- Jscroll --}}
        <script src="{{ asset('js/jscroll/jquery.jscroll.min.js') }}"></script>
        <script>
            $(window).on('load', function() {
                $('.loading').addClass('hidden');
                $('#posts').removeClass('hidden');
            });

            $(function() {
                $('.infinite-scroll').jscroll({
                    autoTrigger: true,
                    loadingHtml: '<div class="mb-5 animate-pulse bg-white rounded-lg grid grid-cols-3 gap-4 overflow-hidden"><div class=" bg-slate-500 col-span-1 h-44"></div><div class="col-span-2 relative"><div class="space-y-3"><div class=" flex items-end gap-3"><div class=" h-8 w-8  mt-3 bg-slate-500 rounded-full"></div><div class=" h-2 w-16  mt-3 bg-slate-500 rounded"></div></div><div class=" h-2 w-24   bg-slate-500 rounded"></div><div class=" grid grid-cols-3 gap-4"><div class="h-2 bg-slate-500 rounded col-span-2"></div><div class="h-2 bg-slate-500 rounded col-span-1"></div><div class="h-2 bg-slate-500 rounded col-span-1"></div><div class="h-2 bg-slate-500 rounded col-span-2"></div></div></div><div class=" absolute bottom-2 "><div class=" flex gap-3"><div class=" h-6 w-16  mt-3 bg-slate-500 rounded "></div><div class=" h-6 w-16  mt-3 bg-slate-500 rounded "></div></div></div></div></div><div class="mb-5 animate-pulse bg-white rounded-lg grid grid-cols-3 gap-4 overflow-hidden"><div class=" bg-slate-500 col-span-1 h-44"></div><div class="col-span-2 relative"><div class="space-y-3"><div class=" flex items-end gap-3"><div class=" h-8 w-8  mt-3 bg-slate-500 rounded-full"></div><div class=" h-2 w-16  mt-3 bg-slate-500 rounded"></div></div><div class=" h-2 w-24   bg-slate-500 rounded"></div><div class=" grid grid-cols-3 gap-4"><div class="h-2 bg-slate-500 rounded col-span-2"></div><div class="h-2 bg-slate-500 rounded col-span-1"></div><div class="h-2 bg-slate-500 rounded col-span-1"></div><div class="h-2 bg-slate-500 rounded col-span-2"></div></div></div><div class=" absolute bottom-2 "><div class=" flex gap-3"><div class=" h-6 w-16  mt-3 bg-slate-500 rounded "></div><div class=" h-6 w-16  mt-3 bg-slate-500 rounded "></div></div></div></div></div>',
                    padding: 0,
                    nextSelector: '.pagination li.active + li a',
                    contentSelector: 'div.infinite-scroll',
                    callback: function() {
                        $('ul.pagination').remove();
                    }
                });
            });

            var cliendScrollTop = 0;

            function biometricData(id) {
                cliendScrollTop = $(window).scrollTop();
                $('#main').addClass('hidden')
                $.ajax({
                    url: "post/" + id,
                    type: 'GET',
                    success: function(res) {
                        $('#postDetail').html(res);
                    }
                })
            }

            function back(id) {
                $('#main').removeClass('hidden')
                $('#postDetail').html('');

                // var position = $("#" + id).position().top;

                $(window).scrollTop(cliendScrollTop);
                // $('html, body').animate({
                //     scrollTop: position
                // }, 'slow');
            }

            $(document).ready(function() {

            })
        </script>
        {{-- <script>
            $(document).ready(function() {

            })
        </script> --}}
    @endsection
</x-app-layout>
