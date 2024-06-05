<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Fotozona Baltic') }}</title>
    <!-- Fonts -->
    <link href="../resources/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Dosis:wght@200..800&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0" />
    <!-- Styles -->
    <style>
        .cormorant-garamond-light {
            font-family: "Cormorant Garamond", serif;
            font-weight: 300;
            font-style: normal;
        }

        .cormorant-garamond-regular {
            font-family: "Cormorant Garamond", serif;
            font-weight: 400;
            font-style: normal;
        }

        .cormorant-garamond-medium {
            font-family: "Cormorant Garamond", serif;
            font-weight: 500;
            font-style: normal;
        }

        .cormorant-garamond-semibold {
            font-family: "Cormorant Garamond", serif;
            font-weight: 600;
            font-style: normal;
        }

        .cormorant-garamond-bold {
            font-family: "Cormorant Garamond", serif;
            font-weight: 700;
            font-style: normal;
        }

        .cormorant-garamond-light-italic {
            font-family: "Cormorant Garamond", serif;
            font-weight: 300;
            font-style: italic;
        }

        .cormorant-garamond-regular-italic {
            font-family: "Cormorant Garamond", serif;
            font-weight: 400;
            font-style: italic;
        }

        .cormorant-garamond-medium-italic {
            font-family: "Cormorant Garamond", serif;
            font-weight: 500;
            font-style: italic;
        }

        .cormorant-garamond-semibold-italic {
            font-family: "Cormorant Garamond", serif;
            font-weight: 600;
            font-style: italic;
        }

        .cormorant-garamond-bold-italic {
            font-family: "Cormorant Garamond", serif;
            font-weight: 700;
            font-style: italic;
        }

        .dosis-extralight {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .dosis-light {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }

        .dosis-normal {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .dosis-medium {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .dosis-semibold {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .dosis-bold {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .dosis-extrabold {
            font-family: "Dosis", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        .welcome-bg {
            height: 100vh;
            width: 100%;
            background-image: url("https://images.pexels.com/photos/414660/pexels-photo-414660.jpeg");
            background-position: center;
            background-size: cover;
        }

        .facebook:hover {
            background: #1877F2;
        }

        .instagram:hover {
            background: #833ab4;
            background: -webkit-linear-gradient(to left, #fcb045, #fd1d1d, #833ab4);
            background: linear-gradient(to left, #fcb045, #fd1d1d, #833ab4);
        }

        .whatsapp:hover {
            background: #25D366;
        }
    </style>

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dosis-medium antialiased">
    <div class="flex flex-col justify-center h-screen w-full">
        <div class="welcome-bg flex flex-col justify-center p-4">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="flex justify-center text-4xl sm:text-5xl md:text-6xl lg:text-8xl uppercase gap-5 pt-36">
                    <h1 class="cormorant-garamond-bold">Fotozona</h1>
                    <h1 class="cormorant-garamond-light-italic">Baltic</h1>
                </div>
                <h2
                    class="flex justify-center text-xl sm:text-2xl md:text-3xl lg:text-4xl md:tracking-wider dosis-extralight capitalize pt-6 sm:pt-7">
                    Padarīsim jūsu svētkus neazmirstamus!</h2>
                <div class="flex justify-center">
                    <a href="/dashboard"
                        class="flex justify-center items-center text-white text-1xl md:text-2xl lg:text-3xl dosis-extralight uppercase rounded-full sm:rounded-md p-2 mt-14 sm:mt-24 hover:text-black hover:bg-rose-300 transition duration-300 ease-in-out">
                        <span class="hidden sm:flex">Sākumlapa</span>
                        <span class="material-symbols-outlined flex sm:hidden">
                            arrow_forward
                        </span>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-center items-end gap-6 mt-16 md:mt-20">
                <a href="https://www.facebook.com/profile.php?id=61554710714199"
                    class="facebook rounded-full p-2 hover:fill-white hover:shadow-lg transition duration-0 ease-in-out"
                    target="_blank"><x-facebook-svg></x-facebook-svg></a>
                <a href="https://www.instagram.com/fotozona_baltic_/"
                    class="instagram rounded-full p-2 hover:fill-white hover:shadow-lg transition duration-0 ease-in-out"
                    target="_blank"><x-instagram-svg></x-instagram-svg></a>
                <a href="https://wa.me/+37122849749"
                    class="whatsapp rounded-full p-2 hover:fill-white hover:shadow-lg transition duration-0 ease-in-out"
                    target="_blank"><x-whatsapp-svg></x-whatsapp-svg></a>
            </div>
        </div>
    </div>
</body>

</html>
