
<x-app-layout>
    @extends('layouts.plantilla')
    @section('title', 'Home')

        <section class="bg-cover home-background">
            <div class="w-full md:grid-cols-2 lg:col-span-4 pb-48 pt-20" >
                <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:py-36 lg:px-8 lg:flex lg:items-center lg:justify-between w-full md:grid-cols-2 lg:col-span-4">
                    <h2 class=" font-weight-bolder tracking-widest text-black sm:text-4xl">
                        <span class="block pb-5 text-red-600" style="font-size:3.75rem;">{{__('Expande tus límites')}}</span>
                        <span class="block font-sans text-bold text-3xl">{{__('Accede a nuestros cursos gratuitos registrándote')}}</span>
                        <div class="relative text-lg bg-transparent text-gray-800">
                            <div class="flex items-center border-b border-b-2 border-red-600 py-2">
                                <input class="bg-transparent border-none mr-3 px-2  focus:outline-none placeholder-white" type="text" placeholder="Search">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </h2>

                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md">
                            <a href="{{route('cursos.index')}}" class=" inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-500">
                                {{__('Cursos')}}
                            </a>
                        </div>
                        <div class="ml-3 inline-flex rounded-md shadow">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-500">
                                {{__('Registro')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <section class="text-gray-600 body-font">
        <div class="container px-5 pt-10 mx-auto">
            <div class="flex flex-wrap w-full mb-8 ">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-bold font-medium title-font mb-2 text-gray-900">Cursos disponibles</h1>
                    <div class="h-1 w-20 bg-red-600 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4 grid-cols-1">
                @foreach ($cursos as $curso)
                <div class="lg:w-1/4 p-4 w-1/2">
                    <a class="block relative h-48 rounded overflow-hidden shadow-lg">
                        <img alt="curso" class="object-cover object-center w-full h-full block " src="{{asset('img/home/iron-cross-exercise-3-1024x536.jpg')}}">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$curso->category}}</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{$curso->name}}</h2>
                        <p class="mt-1 line-through">$16.00</p>
                        <p class="mt-1 text-red-600">$Free</p>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="flex justify-center mt-2">
                <a href="{{route('cursos.index')}}">
                    Todos los cursos
                </a>
            </div>
        </div>

    </section>
</x-app-layout>


