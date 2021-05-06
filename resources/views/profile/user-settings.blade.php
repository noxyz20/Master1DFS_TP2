<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="col-span-6 sm:col-span-4 md:grid md:grid-cols-3 md:gap-6">
                <div>
                    <h3 class="text-lg">Blog settings</h3>
                    <p class="mt-1 text-sm text-gray-600">Fonctionalité spécifique au TP</p><br>
                    
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="post" action="/changeSettings">
                        @csrf
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700" for="current_password">
                                        Blog title
                                    </label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        name="title" type="text" value="{{$setting[0]["Title"]}}">
                                </div>
                            </div>
                            <br>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700" for="current_password">
                                        Logo
                                    </label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        name="logo" type="text" value="{{$setting[0]["Logo"]}}">
                                </div>
                            </div>
                            <br>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700" for="current_password">
                                        Footer
                                    </label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        name="footer" type="text" value="{{$setting[0]["Footer"]}}">
                                </div>
                            </div>
                            <br>
                            <label class="block font-medium text-sm text-gray-700" for="current_password">
                                Header
                            </label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="header" value="{{json_encode(["Logo","Titre","Menu"])}}">
                                    <span class="ml-2">Logo, Titre, Menu</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="header" value="{{json_encode(["Menu","Titre","Logo"])}}">
                                    <span class="ml-2">Menu, Titre, Logo</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="header" value="{{json_encode(["Titre","Menu","Logo"])}}">
                                    <span class="ml-2">Titre, Menu, Logo</span>
                                </label>
                            </div>
                            <br>
                            <label class="block font-medium text-sm text-gray-700" for="current_password">
                                Header
                            </label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#363636", "#2b73b3", "#4db3e9", "#e8362c", "#ffffff"])}}">
                                    <span class="ml-2">Couleur 1</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#000000", "#e7e7e7", "#2473ea", "#9a9a9a", "#5e3930"])}}">
                                    <span class="ml-2">Couleur 2</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#f9fbfc", "#203961", "#a2cdb8", "#e1755e", "#5d554b"])}}">
                                    <span class="ml-2">Couleur 3</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#316117", "#90b644", "#ffffff", "#e98341", "#f2fefe"])}}">
                                    <span class="ml-2">Couleur 4</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#28634f", "#509534", "#ffffff", "#22486c", "#607447"])}}">
                                    <span class="ml-2">Couleur 5</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#3789c5", "#43a1db", "#deebf0", "#fffd63", "#ffffff"])}}">
                                    <span class="ml-2">Couleur 6</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="color" value="{{json_encode(["#184a73", "#c3423d", "#343f4d", "#51aa3a", "#bdd7e2"])}}">
                                    <span class="ml-2">Couleur 7</span>
                                </label>
                            </div>
                            <br>
                            <label class="block font-medium text-sm text-gray-700" for="current_password">
                                Disposition
                            </label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="main" value="1">
                                    <span class="ml-2">Classic</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="main" value="0">
                                    <span class="ml-2">Blog</span>
                                </label>
                            </div>
                            <br>
                        </div>
                        <div
                            class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</x-app-layout>
