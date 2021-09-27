<nav class="px-6 py-4 bg-blue-400  shadow">
        <div class="container flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <div>
                    <a href="{{route('home')}}" class="text-xl font-bold text-gray-800 md:text-2xl">NahosBLOG</a>
                </div>
                <div>
                    <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex-col hidden md:flex md:flex-row md:-mx-4">
                <a href="{{route('home')}}" class="my-1 text-gray-800 text-semibold text-lg hover:text-gray-500 md:mx-4 md:my-0">Accueil</a>
                <a href="{{ route('post.blog')}}" class="my-1 text-gray-800 text-semibold text-lg hover:text-gray-500 md:mx-4 md:my-0">Blog</a>
                <a href="{{ route('post.create')}}" class="my-1 text-gray-800 text-semibold text-lg hover:text-gray-500 md:mx-4 md:my-0">Créer un post</a>
                <a href="#" class="my-1 text-gray-800 hover:text-gray-500 text-semibold text-lg md:mx-4 md:my-0">Mon CV</a>
            </div>
           
            <form action="{{route('logout')}}" method="post" class="hidden" id="form">
                @csrf
            </form>
        </div>
    </nav>