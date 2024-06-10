<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigitHealth</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="show-chatbot">
    {{-- ==================================== HEADER  ==================================== --}}
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-content">
                    <div class="top-header-content-left">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-envelope" style="color: #ffffff;"></i>
                                    <span>DigitHealth@gmail.Com</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                                    <span>Cotonou</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <i class="fa-regular fa-clock" style="color: #ffffff;"></i>
                                    <span>LUN - VEN : 8:00 - 19:00 </span>
                                </a></li>
                        </ul>
                    </div>
                    <div class="top-header-content-right">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a>
                            </li>
                            <li><a href="#"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i></a>
                            <li><a href="#"><i class="fa-solid fa-whatsapp" style="color: #ffffff;"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container">
                <nav class="header-nav-content">
                    <div class="header-nav-content-logo">
                        <a href="#">
                            <img src="{{ asset('assets/img/Logo-dark-1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="header-nav-content-navLinks">
                        <ul class="header-nav-content-navLinks-items">
                            <li><a href="#">Acceuil</a></li>
                            <li><a href="/#about">A propos</a></li>
                            <li><a href="/#bestDepartement">Departement</a></li>
                            <li><a href="{{ route('register') }}">Inscription</a></li>
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                        </ul>
                    </div>
                    <div class="header-nav-content-navLinks-contact-items">
                        <ul>
                            {{-- <li><i class="fa-solid fa-magnifying-glass"></i></li> --}}
                            <li>|</li>
                            <li><i class="fa-solid fa-phone"></i></li>
                            <li class="header-nav-content-navLinks-contact-items-call">
                               {{--  <div><span class="phone-number-title">Phone Number</span></div> --}}
                                <div><span><a href="#" class="number">(00229) 912 628 20</a></span></div>
                            </li>
                            <li>|</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    {{-- ==================================== BANNER SECTION  ==================================== --}}
    <section class="banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="banner-content">
                    <div class="banner-content-description-block">
                        <div class="banner-content-title">
                            <h1>Nous prenons soin de votre santé</h1>
                        </div>
                        <div class="banner-content-paragraphe">
                            <p>Chez nous, votre bien-être est notre priorité
                                absolue. Nous comprenons l'importance d'une santé solide et nous nous engageons à vous
                                fournir les meilleurs soins possibles. Notre équipe expérimentée et dévouée est là pour
                                répondre à tous vos besoins médicaux. </p>
                        </div>
                        <div class="more-btn-content flex gap-[25px]">
                            <button class="primary-btn">Continuer</button>
                            <button class="secondary-btn">Continuer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== SMALL SECTION  ==================================== --}}
    <section class="bestProfesional-departement">
        <div class="container">
            <div class="bestProfesional-departementBox">
                <div class="bestProfesional-departement-content">
                    <div class="profesionalDoctor-content">
                        <div class="professionalBox">
                            <div class="professionalIcon">
                                <i class="fa-solid fa-user-doctor" style="color: #28b6f6"></i>
                            </div>
                            <div class="professionalText">
                                <h1>Médecin professionnel</h1>
                                <p class="animatedParagraphe">Un médecin professionnel est essentiel pour garantir des
                                    soins de santé de qualité et adaptés à vos besoins.</p>
                            </div>
                        </div>
                        <div class="professionalBox">
                            <div class="professionalIcon">
                                <i class="fa-sharp fa-solid fa-pills" style="color: #28b6f6;"></i>
                            </div>
                            <div class="professionalText">
                                <h1>Consulatation de qualité</h1>
                                <p class="animatedParagraphe">Une consultation de qualité est fondamentale pour assurer
                                    un suivi médical efficace et personnalisé.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="professionalBox openClosed">
                    <div class="professionalText">
                        <div class="professionalTextIcon">
                            <i class="fa-solid fa-earth-africa" style="color: #ffffff;"></i>
                        </div>
                        <div class="professionalTextTitle">
                            <h1>ouverture - fermeture</h1>
                        </div>
                        <div class="professionalTextDays-open-content">
                            <div class="daysBox">
                                <p>Lundi</p>
                                <p>6.00</p>
                            </div>
                            <hr>
                            <div class="daysBox">
                                <p>Mardi</p>
                                <p>6.00</p>
                            </div>
                            <hr>

                            <div class="daysBox">
                                <p>Mercredi/Dimanche</p>
                                <p>6.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== ABOUT SECTION  ==================================== --}}
    <section id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-leftContent">
                    <div class="about-subTitle">
                        <h4>A propos</h4>
                    </div>
                    <div class="about-Title">
                        <h1>Soins médicaux et de santé professionnels en pleine mesure</h1>
                    </div>
                    <div class="about-midleContent">
                        </p>
                    </div>
                    <div class="about-textContent">
                        <p>Meddox est un chatbot proposant des services médicaux et de santé adaptés aux soins de santé,
                            à la médecine, aux médecins, aux dentistes, aux pharmacies et à tout autre domaine médical
                            connexe. En substance, il assure une préconsultation médicale, dispense des conseils et
                            oriente vers les spécialistes pour la prise de rendez-vous.</p>
                    </div>
                    <div class="aboutAventage">
                        <div class="aboutAventageBox">
                            <div class="firstAboutAventageBox">
                                <span><i class="fa-solid fa-check-double" style="color: #28b6f6;"></i></span>
                                <span>Programme en ligne</span>
                            </div>
                            <div class="firstAboutAventageBox">
                                <span><i class="fa-solid fa-check-double" style="color: #28b6f6;"></i></span>
                                <span></span>
                            </div>
                            <div class="firstAboutAventageBox">
                                <span><i class="fa-solid fa-check-double" style="color: #28b6f6;"></i></span>
                                <span>Et bien plus...</span>
                            </div>
                        </div>
                        <div class="aboutAventageBox">
                            <div class="firstAboutAventageBox">
                                <span><i class="fa-solid fa-check-double" style="color: #28b6f6;"></i></span>
                                <span>Technologie de pointe</span>
                            </div>
                            <div class="firstAboutAventageBox">
                                <span><i class="fa-solid fa-check-double" style="color: #28b6f6;"></i></span>
                                <span>24/7 Support en ligne</span>
                            </div>
                        </div>
                    </div>
                    <div class="more-btn-content flex mt-[15px] gap-[25px]">
                        <button class="secondary-btn hover:bg-[#1a3d7d] ">En savoir plus </button>
                    </div>
                </div>
                <div class="about-righttContent">
                    <div class="about-rightContentBox">
                        <div class="about-rightContent-firstBox"></div>
                        <div class="about-rightContent-secondtBox">
                            <img src="{{ asset('../../assets/images/bg3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ==================================== BEST DEPARTEMENT SECTION  ==================================== --}}
    <section id="bestDepartement">
        <div class="container">
            <div class="besDepartement-content">
                <div class="bestDepartement-firstSection">
                    <div class="bestDepartement-firstSectionLeft">
                        <div class="bestDepartement-subTitle">
                            <h4>Meilleur service !</h4>
                        </div>
                        <div class="bestDepartement-Title">
                            <h1>Les différents types de services</h1>
                        </div>
                    </div>
                    <div class="bestDepartement-firstSectionRight">
                        <div class="bestDepartement-firstSectionRight-paragraphe">
                            <p>Meddox est un chatbot proposant des services médicaux et de santé adaptés aux soins de
                                santé,
                                à la médecine, aux médecins, aux dentistes, aux pharmacies et à tout autre domaine
                                médical
                                connexe. En substance, il assure une préconsultation médicale, dispense des conseils et
                                oriente vers les spécialistes pour la prise de rendez-vous.</p>
                        </div>
                        {{-- <div class="more-btn-content flex mt-[35px] gap-[25px]">
                            <button class="secondary-btn hover:bg-[#1a3d7d] ">View All Department </button>
                        </div> --}}
                    </div>
                </div>
                <div class="bestDepartement-secondtSection">
                    <div class="departementBox">
                        <div class="departementIconeBox">
                            <i class="fa-solid fa-tooth" style="color: #28b6f6;"></i>
                        </div>
                        <div class="departement-textContentBox">
                            <div class="departement-textContent-title">
                                <h4>Soins dentaires</h4>
                            </div>
                            <div class="departement-textContent-paragraphe">
                                <p>Les soins dentaires englobent les traitements et services pour maintenir la santé des
                                    dents, comme le nettoyage, les traitements des caries, les prothèses, les
                                    extractions et les traitements orthodontiques. L'objectif est de prévenir les
                                    problèmes et de traiter les affections dentaires.</p>
                            </div>
                            <div class="departement-textContent-DiscovoreMore">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="departementBox">
                        <div class="departementIconeBox">
                            <i class="fa-solid fa-tooth" style="color: #28b6f6;"></i>
                        </div>
                        <div class="departement-textContentBox">
                            <div class="departement-textContent-title">
                                <h4>Orthopédie</h4>
                            </div>
                            <div class="departement-textContent-paragraphe">
                                <p>L'orthopédie traite les troubles musculo-squelettiques comme les fractures,
                                    déformations, blessures articulaires et affections des muscles, tendons et
                                    ligaments. Son but : restaurer la fonction et soulager la douleur.</p>
                            </div>
                            <div class="departement-textContent-DiscovoreMore">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="departementBox">
                        <div class="departementIconeBox">
                            <i class="fa-solid fa-arrows-to-eye" style="color: #28b6f6;"></i>
                        </div>
                        <div class="departement-textContentBox">
                            <div class="departement-textContent-title">
                                <h4>Soins des yeux</h4>
                            </div>
                            <div class="departement-textContent-paragraphe">
                                <p>Le soin des yeux englobe le traitement des troubles oculaires tels que les
                                    infections, les allergies et les problèmes de vision. Il inclut des examens de la
                                    vue, des prescriptions de lunettes ou de lentilles de contact.</p>
                            </div>
                            <div class="departement-textContent-DiscovoreMore">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="departementBox">
                        <div class="departementIconeBox">
                            <i class="fa-solid fa-tooth" style="color: #28b6f6;"></i>
                        </div>
                        <div class="departement-textContentBox">
                            <div class="departement-textContent-title">
                                <h4>Soins chirurgicaux</h4>
                            </div>
                            <div class="departement-textContent-paragraphe">
                                <p>Les soins chirurgicaux impliquent des interventions médicales pour traiter diverses
                                    affections nécessitant une opération, telles que des maladies, des fractures, des
                                    tumeurs ou des problèmes reconstructifs. L'objectif est de restaurer la santé et la
                                    fonctionnalité des patients par des interventions chirurgicales adaptées.</p>
                            </div>
                            <div class="departement-textContent-DiscovoreMore">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="departementBox">
                        <div class="departementIconeBox">
                            <i class="fa-solid fa-tooth" style="color: #28b6f6;"></i>
                        </div>
                        <div class="departement-textContentBox">
                            <div class="departement-textContent-title">
                                <h4>Soins médicaux</h4>
                            </div>
                            <div class="departement-textContent-paragraphe">
                                <p>Les soins médicaux englobent le traitement des diverses affections et maladies
                                    nécessitant une attention médicale, comme les infections, les troubles chroniques,
                                    les blessures et les maladies graves. L'objectif est de diagnostiquer, traiter et
                                    prévenir les problèmes de santé pour améliorer le bien-être des patients.</p>
                            </div>
                            <div class="departement-textContent-DiscovoreMore">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="departementBox">
                        <div class="departementIconeBox">
                            <i class="fa-solid fa-tooth" style="color: #28b6f6;"></i>
                        </div>
                        <div class="departement-textContentBox">
                            <div class="departement-textContent-title">
                                <h4>Gastroentérologie</h4>
                            </div>
                            <div class="departement-textContent-paragraphe">
                                <p>La gastroentérologie traite les affections du système digestif comme les problèmes
                                    d'estomac, d'intestins, de foie, de vésicule biliaire et de pancréas. Elle comprend
                                    des examens diagnostiques et des traitements médicaux, parfois avec des
                                    interventions chirurgicales. L'objectif est de diagnostiquer et de traiter les
                                    troubles gastro-intestinaux pour améliorer la santé digestive des patients.</p>
                            </div>
                            <div class="departement-textContent-DiscovoreMore">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ==================================== MAKE APOINEMENT BANNER SECTION  ==================================== --}}
    <section id="makeApoinement">
        <div class="makeApoinementOver-bannerConetent">
            <div class="container">
                <div class="makeApoinement-content">
                    <div class="makeApoinement-contentBox">
                        <div class="makeApoinementSubTitle">
                            <h4>Besoin d'un médecin pour un contrôle ?</h4>
                        </div>
                        <div class="makeApoinementTitle">
                            <h1>Il suffit de prendre rendez-vous</h1>
                        </div>
                        <div class="makeApoinementText">
                            <p>Meddox est un chatbot proposant des services médicaux et de santé adaptés aux soins de
                                santé,
                                à la médecine, aux médecins, aux dentistes, aux pharmacies et à tout autre domaine
                                médical
                                connexe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== BOT SECTION  ==================================== --}}
    {{--   <button class="chtabot-toggler">
        <span class="materail-symbols-outlined"><i class="fa-brands fa-rocketchat"></i></span>
        <span class="materail-symbols-outlined"><i class="fa-solid fa-xmark"></i></span>
    </button>
    <div class="chatbot">
        <div class="chatHeader">
            <h2>chatbot</h2>
            <span class="materail-symbols-outlined"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="materail-symbols-outlined">Ai</span>
                <p>Hi there <br>How can I help you today</p>
            </li>
            <li class="chat outgoing">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Enter a message...." required></textarea>
            <span id="send-btn" class="materail-symbols-outlined"><i class="fa-solid fa-paper-plane"></i></span>
        </div>
    </div> --}}
    {{-- ==================================== FOOTER SECTION  ==================================== --}}
    <footer id="footer">
        <div class="container">
            <section class="items-center mt-12 max-w-screen-xl mx-auto px-4 gap-4 md:flex md:px-8 xl:gap-12 letter">
                <div class="flex-1 space-y-3">
                    <h3 class="text-2xl text-white font-bold lg:text-2xl">
                        S'abonner à la newsletter
                    </h3>
                </div>
                <div class="mt-6 flex-1">
                    <form class="items-center justify-center sm:flex">
                        <input type="email" placeholder="Enter your email"
                            class="text-gray-500 w-full p-3 rounded-md border outline-none focus:border-indigo-600" />
                        <button
                            class="w-full mt-3 px-5 py-3 rounded-md text-white bg-[#28b6f6] hover:bg-[#28b6f6] active:bg-[#28b6f6] duration-150 outline-none shadow-md focus:shadow-none focus:ring-2 ring-offset-2 ring-indigo-600 sm:mt-0 sm:ml-3 sm:w-auto">
                            S'abonner
                        </button>
                    </form>
                </div>
                <hr>
            </section>
        </div>

        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="" class="flex items-center">
                        {{-- <img src="" class="h-8 me-3" alt="FlowBite Logo" /> --}}
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Logo</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-[#fff] uppercase dark:text-white">Quick Link</h2>
                        <ul class="text-[#fff] dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="" class="hover:underline">A propos</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Our Doctor</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="" class="hover:underline ">Testimonial</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-[#fff] sm:mx-auto  lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href=""
                        class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
