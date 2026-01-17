<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'anno.tech | IT Solutions')</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}?v=2" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}?v=2" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=VT323&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#FFF2F2',
                        navy: '#2D336B',
                        periwinkle: '#7886C7',
                        softblue: '#A9B5DF',
                    },
                    fontFamily: {
                        pixel: ['"VT323"', 'monospace'],
                        body: ['"Inter"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>
        /* Fallback jika file custom.css belum ter-load sempurna */
        body {
            background-color: #FFF2F2;
            color: #2D336B;
            overflow-x: hidden;
        }

        .pixelated {
            image-rendering: pixelated;
        }
    </style>
</head>

<body class="font-body selection:bg-periwinkle selection:text-white flex flex-col min-h-screen relative">

    @include('partials.navbar')

    <main class="flex-grow pt-10">
        @yield('content')
    </main>

    @include('partials.footer')

    <button id="scrollBtn" onclick="scrollToTop()"
        class="fixed bottom-8 right-8 z-50 hidden group transition-all duration-300 transform hover:scale-110">

        <div
            class="bg-periwinkle border-4 border-navy text-white w-14 h-14 md:w-16 md:h-16 flex flex-col items-center justify-center shadow-[6px_6px_0_rgba(45,51,107,0.5)] transition-all group-hover:bg-navy group-hover:shadow-[8px_8px_0_#A9B5DF] group-active:translate-y-2 group-active:shadow-none">

            <svg class="w-8 h-8 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 15l7-7 7 7"></path>
            </svg>
        </div>

        <div
            class="absolute -top-10 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            <span
                class="bg-navy text-cream text-xs font-pixel px-3 py-1 border-2 border-white shadow-lg whitespace-nowrap">
                LEVEL UP!
            </span>
            <div
                class="w-0 h-0 border-l-[6px] border-l-transparent border-r-[6px] border-r-transparent border-t-[6px] border-t-navy mx-auto">
            </div>
        </div>
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        // Ambil elemen tombol
        const scrollBtn = document.getElementById("scrollBtn");

        // Deteksi Scroll
        window.onscroll = function () {
            // Jika scroll lebih dari 300px ke bawah
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollBtn.classList.remove("hidden");
                scrollBtn.classList.add("flex");
                // Efek masuk (gsap simple)
                gsap.to(scrollBtn, { opacity: 1, y: 0, duration: 0.3 });
            } else {
                scrollBtn.classList.add("hidden");
                scrollBtn.classList.remove("flex");
            }
        };

        // Fungsi Klik: Kembali ke Atas
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

    @stack('scripts')

</body>

</html>