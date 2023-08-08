<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        <!-- Styles -->
        <style>
            
            body{
                font-family: 'Montserrat', sans-serif;
                margin: 0;
            }
            
            /* Estilos para motores Webkit y blink (Chrome, Safari, Opera... )*/

            body::-webkit-scrollbar {
                -webkit-appearance: none;
            }

            body::-webkit-scrollbar:vertical {
                width:10px;
            }

            body::-webkit-scrollbar-button:increment,body::-webkit-scrollbar-button {
                display: none;
            } 

            body::-webkit-scrollbar:horizontal {
                height: 10px;
            }

            body::-webkit-scrollbar-thumb {
                background-color: #4759B2;
                border-radius: 20px;
                border: 1px solid #f1f2f3;
            }

            body::-webkit-scrollbar-track {
                border-radius: 10px;  
            }
        </style>
    </head>
    <body class="antialiased dark:bg-gray-800">

        
        <div class="bg-gray-100 min-h-screen dark:bg-gray-800 flex justify-center">
            <div class="md:mx-2 w-full">
            <!-- =======================================================NAV============================================================= -->
                @include('layout.componentes.NavBar')
            <!-- ======================================================MAIN============================================================= -->
                <main>
                <div class="my-16">
                    <div class="flex flex-row justify-center">
                    <h1 class="md:w-2/4 text-center font-bold font-weight-bold text-5xl -tracking-2 text-gray-900 dark:text-gray-200">
                        Crea ofertas de empleo efectivas <span class="text-indigo-500">en minutos</span> 
                    </h1>
                    </div>
                    <div class="flex flex-row justify-center text-lg mt-2 text-gray-600 dark:text-gray-500">
                    <p class="text-center">
                        Optimiza el proceso de contratación temporal con Joblyn
                    </p>
                    </div>
                    
                    <div class="flex flex-row justify-center text-lg mt-2">
                    <a href="#" class="inline-block text-sm px-4 py-2 leading-tight rounded text-gray-900 border-2 rounded-lg border-gray-900 hover:border-gray-800 hover:bg-gray-800 hover:text-gray-200 dark:text-gray-200 dark:border-gray-200 dark:hover:bg-gray-200 dark:hover:text-gray-800 mt-4 lg:mt-0">
                        Crear oferta de empleo
                        <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.43 5.92993L20.5 11.9999L14.43 18.0699" stroke="#19191A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.5 12H20.33" stroke="#19191A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    </div>
                </div>
                <div class="my-16">
                    <div class="flex justify-center">
                    <div class="sm:w-5/6 h-96 sm:rounded-xl " style="background: #040F1A;">
                        <div class="mt-24 w-full sm:felx-col inline-flex justify-center">
                        <p class="font-extralight mx-2 md:mx-4 text-white tracking-tight">
                            <svg class="inline align-center" width="35" height="34" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4167 20.0001L18.1334 24.7168L27.5834 15.2834" stroke="#B2BFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>            
                            Innovación
                        </p>
                        <p class="font-extralight mx-2 md:mx-4 text-white tracking-tight">
                            <svg class="inline align-center" width="35" height="34" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4167 20.0001L18.1334 24.7168L27.5834 15.2834" stroke="#B2BFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>            
                            Facilidad</p>
                        <p class="font-extralight mx-2 md:mx-4 text-white tracking-tight">
                            <svg class="inline align-center" width="35" height="34" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4167 20.0001L18.1334 24.7168L27.5834 15.2834" stroke="#B2BFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>            
                            Compromiso
                        </p>
                        <p class="font-extralight mx-2 md:mx-4 text-white tracking-tight">
                            <svg class="inline align-center" width="35" height="34" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4167 20.0001L18.1334 24.7168L27.5834 15.2834" stroke="#B2BFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>            
                            Rapidez
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="flex flex-row justify-center">
                    <div class=" w-8/12 ">
                        <div class="mt-3 bg-dark ">
                        <div class="bg-white h-80 rounded-lg -mt-60 relative shadow-md dark:shadow-gray-200 mx-2 p-3 flex justify-center">
                            <div class="flex items-center flex mr-6">
                            <svg width="30" height="32" viewBox="1 0 176 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M139.056 37.8459V76.0167C138.969 106.307 116.372 130.829 87.9278 130.829C59.4293 130.829 36.2274 106.209 36.2274 75.8433C36.2274 75.5987 36.2274 75.3452 36.2357 75.105V37.8459H26.6277C12.199 37.8459 0.5 50.3116 0.5 65.6858V78.9964H0.554261C2.11525 128.984 40.6307 169 87.9236 169C136.122 169 175.209 127.44 175.347 76.1146H175.293V37.8459H139.056Z" fill="#4759B2"/>
                                <path d="M81.5668 0V14.2401C81.5668 27.2795 91.4879 37.8506 103.725 37.8506H139.027V0.00444482L81.5668 0Z" fill="#4759B2"/>
                            </svg>          
                            <span class="font-semibold text-3xl pl-2 tracking-wider text-dark">JobLyn</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </main>
            <!-- =========================================================footer========================================================= -->
                @include('layout.componentes.footer')
            </div>
            </div>
        </div>

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            // Change the icons inside the button based on previous settings
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }
            const boton = document.querySelector('#boton');
            const menu = document.querySelector('#menu');

            boton.addEventListener('click', () => {
                menu.classList.toggle('hidden')
            })
            var themeToggleBtn = document.getElementById('theme-toggle');

            themeToggleBtn.addEventListener('click', function() {

                // toggle icons inside button
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                // if set via local storage previously
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }

                // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
                
            });
        </script>
    </body>
</html>
