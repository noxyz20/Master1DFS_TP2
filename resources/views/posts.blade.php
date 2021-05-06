<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-wrap">
                <div class="w-1/2 p-2">
                    <div class="bg-white p-8 rounded">
                        <h3 class="font-bold text-2xl">Create post</h3>
                        <form action="/posts" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="mb-3 pt-0">
                                <input type="text" name="title" placeholder="Title"
                                    class="px-3 py-4 mt-2 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                            </div>
                            <div class="py-2 bg-white px-2">
                                <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
                                    <div class="md:flex">
                                        <div class="w-full p-3">
                                            <div
                                                class="relative h-48 rounded-lg border-dotted border-2 border-purple-700 bg-gray-100 flex justify-center items-center">
                                                <div class="absolute">
                                                    <div class="flex flex-col items-center"> <i
                                                            class="far fa-images fa-4x text-purple-700"></i> <span
                                                            class="block text-gray-400 font-normal">Attach you image
                                                            banner</span> </div>
                                                </div> <input type="file" class="h-full w-full opacity-0" name="banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <textarea class="ckeditor form-control" name="content"></textarea>
                            <button
                                class="bg-green-500 mt-8 text-white active:bg-emerald-600 font-bold uppercase text-base px-8 py-3 rounded shadow-md hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="submit" >
                                <i class="fas fa-plus mr-4"></i> Create
                            </button>
                        </form>
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="bg-white p-8 rounded">
                        <h3 class="font-bold text-2xl">Posts</h3>
                        <table class="w-full table-auto rounded-t-lg m-5 mx-auto">
                            <thead>
                                <tr class="text-left border-b bg-gray-800 text-gray-200">
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                
                                    <tr class="">
                                        <td>{{$post['Title']}}</td>
                                        <td class="">
                                            <a class="ml-1 transition duration-150 ease-in-out float-right bg-transparent hover:bg-red-400 text-red-400 text-md hover:text-white flex items-center justify-center  block rounded-full h-5 w-5 border border-red-400 hover:border-transparent"
                                                href="#"><i class="fas fa-minus"></i></a>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
