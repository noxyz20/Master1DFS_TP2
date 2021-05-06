<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="w-1/6 h-screen bg-white fixed">
    <div class="flex items-center justify-center mt-10">
        Admin page
    </div>

    <nav class="mt-10">
        <div class="hidden sm:-my-px sm:flex flex-col">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i class="fas fa-home mr-4"></i> {{ __('Dashboard') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('posts') }}"  :active="request()->routeIs('posts')">
                <i class="fas fa-newspaper mr-4"></i></i> {{ __('Posts') }}
            </x-jet-nav-link>
        </div>
    </nav>

    <div class="absolute bottom-0 my-8">
        <div class="flex items-center w-full py-2 px-8 text-gray-700 hover:text-gray-600">
            <div class="flex">
                <img class="h-10 w-10 rounded-full mr-3 object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="avatar">
            </div>
            <div class="flex flex-col">
                <span class="font-semibold">{{ Auth::user()->name }}</span>
                <a class="text-sm m-0 text-gray-400 hover:underline" href="/{{Auth::user()->token}}/home">View blog</a>
            </div>
            <a class="ml-4" href="{{ route('profile.show') }}">
                <i class="fas fa-cog text-xl">1</i>
            </a>
            <a class="ml-4" href="/changeSettings">
                <i class="fas fa-cog text-xl">2</i>
            </a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-responsive-nav-link>
        </form>

    </div>
</div>
