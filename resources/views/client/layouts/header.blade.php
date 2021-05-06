@if ($header[0] == "Logo" && $header[1] == "Titre" && $header[2] == "Menu")
<nav id="header" class="fixed w-full z-10 top-0" style="background-color: {{$primary1}} ">

        
    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3" style="border-bottom-width: 2px; border-bottom-color: {{$secondary2}}">
        <img class="h-10" src="{{ $setting[0]['Logo']}}">
        <div class="pl-4">
            <a class="text-base no-underline hover:no-underline font-extrabold text-xl" href="#" style="color: {{$text}};">
                {{$setting[0]['Title']}}
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded appearance-none focus:outline-none" style="color: {{$text}}; border-color: {{$text}}">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                @foreach ($menu as $item)
                <li class="mr-3">
                    <a class="inline-block hover:text-underline py-2 px-4" href="/{{$token}}{{$item->link}}" style="color: {{$text}};">{{$item->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
@endif
@if ($header[0] == "Menu" && $header[1] == "Titre" && $header[2] == "Logo")
<nav id="header" class="fixed w-full z-10 top-0" style="background-color: {{$primary1}} ">

        
    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3" style="border-bottom-width: 2px; border-bottom-color: {{$secondary2}}">
        <div class="flex-grow w-1/2 lg:flex lg:items-center hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center">
                @foreach ($menu as $item)
                <li class="mr-3">
                    <a class="inline-block hover:text-underline py-2 px-4" href="/{{$token}}{{$item->link}}" style="color: {{$text}};">{{$item->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="pl-4">
            <a class="text-base no-underline hover:no-underline font-extrabold text-xl" href="#" style="color: {{$text}};">
                {{$setting[0]['Title']}}
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded appearance-none focus:outline-none" style="color: {{$text}}; border-color: {{$text}}">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div>
            <img class="h-10" src="{{ $setting[0]['Logo']}}">
        </div>
        
    </div>
</nav>
@endif
@if ($header[0] == "Titre" && $header[1] == "Menu" && $header[2] == "Logo")
<nav id="header" class="fixed w-full z-10 top-0" style="background-color: {{$primary1}} ">

        
    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3" style="border-bottom-width: 2px; border-bottom-color: {{$secondary2}}">
        <div class="pl-4">
            <a class="text-base no-underline hover:no-underline font-extrabold text-xl" href="#" style="color: {{$text}};">
                {{$setting[0]['Title']}}
            </a>
        </div>
        <div class="flex-grow w-1/2 lg:flex lg:items-center hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center">
                @foreach ($menu as $item)
                <li class="mr-3">
                    <a class="inline-block hover:text-underline py-2 px-4" href="/{{$token}}{{$item->link}}" style="color: {{$text}};">{{$item->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded appearance-none focus:outline-none" style="color: {{$text}}; border-color: {{$text}}">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div>
            <img class="h-10" src="{{ $setting[0]['Logo']}}">
        </div>
        
    </div>
</nav>
@endif