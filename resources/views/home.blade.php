
<x-app-layout>
    @extends('layouts.plantilla')
    @section('title', 'Home')

        <section class="bg-cover" style=" background-image: url({{asset('img/home/street-workout-2628904_1920.jpg')}})">
            <div class="w-full md:grid-cols-2 lg:col-span-4 pb-48 pt-20" >
                <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:py-36 lg:px-8 lg:flex lg:items-center lg:justify-between w-full md:grid-cols-2 lg:col-span-4">
                    <h2 class=" font-weight-bolder tracking-widest text-black sm:text-4xl">
                        <span class="block pb-5" style="font-size:3.75rem;">Expande tus límites</span>
                        <span class="block text-red-600 text-3xl">Regístrate y accede a nuestros cursos gratuitos.</span>
                    </h2>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md">
                            <a href="#" class=" inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-500">
                                Cursos
                            </a>
                        </div>
                        <div class="ml-3 inline-flex rounded-md shadow">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-500">
                                Registro
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-app-layout>


