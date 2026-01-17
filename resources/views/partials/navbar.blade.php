<nav class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[96%] md:w-[92%] max-w-6xl transition-all duration-300"
    id="navbar">

    <div
        class="bg-cream/95 backdrop-blur-sm border-4 border-navy shadow-[4px_4px_0_rgba(45,51,107,0.2)] rounded-xl px-5 py-2 md:px-8 md:py-3 flex justify-between items-center relative z-20">

        <a href="{{ url('/') }}" class="group flex items-center gap-3 select-none">
            <div class="relative">
                <img src="{{ asset('assets/img/logo.png') }}" alt="anno.tech icon"
                    class="h-9 md:h-10 w-auto pixelated transition-transform group-hover:rotate-6 group-hover:scale-110">
            </div>
            <span class="font-pixel text-2xl md:text-3xl font-bold tracking-wide leading-none mt-1">
                <span class="text-navy">anno.</span><span
                    class="text-periwinkle transition-colors group-hover:text-navy">tech</span>
            </span>
        </a>

        <div class="hidden md:flex items-center gap-8 font-pixel text-xl text-navy">
            <a href="{{ url('/') }}#services" class="relative group/link py-1 hover:text-periwinkle transition-colors">
                Services_
                <span
                    class="absolute left-0 bottom-0 w-0 h-[3px] border-b-2 border-dotted border-periwinkle transition-all group-hover/link:w-full"></span>
            </a>

            <a href="{{ url('/about') }}" class="relative group/link py-1 hover:text-periwinkle transition-colors">
                About_
                <span
                    class="absolute left-0 bottom-0 w-0 h-[3px] border-b-2 border-dotted border-periwinkle transition-all group-hover/link:w-full"></span>
            </a>

            <a href="https://wa.me/6285117776959" target="_blank"
                class="bg-navy text-white px-6 py-2 rounded-lg border-2 border-navy hover:bg-cream hover:text-navy hover:shadow-[3px_3px_0_#A9B5DF] transition-all transform active:translate-y-[1px] active:shadow-none flex items-center gap-2 text-lg">
                Chat_WhatsApp <span class="hidden lg:inline">_></span>
            </a>
        </div>

        <button onclick="toggleMobileMenu()"
            class="md:hidden text-navy border-2 border-transparent hover:border-navy rounded-md p-1 transition-all focus:outline-none">
            <svg id="icon-open" class="w-8 h-8 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <svg id="icon-close" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <div id="mobile-menu"
        class="absolute top-full left-0 w-full pt-2 hidden opacity-0 -translate-y-5 transition-all duration-300 ease-out z-10">
        <div
            class="bg-cream border-4 border-navy shadow-[6px_6px_0_rgba(45,51,107,0.3)] rounded-xl p-4 flex flex-col gap-4 font-pixel text-xl text-navy">

            <a href="{{ url('/') }}#services" onclick="toggleMobileMenu()"
                class="block border-b-2 border-dashed border-navy/20 pb-2 hover:text-periwinkle hover:pl-2 transition-all">
                > Services_
            </a>

            <a href="{{ url('/about') }}" onclick="toggleMobileMenu()"
                class="block border-b-2 border-dashed border-navy/20 pb-2 hover:text-periwinkle hover:pl-2 transition-all">
                > About_
            </a>

            <a href="https://wa.me/6285117776959" target="_blank"
                class="bg-navy text-white text-center py-3 rounded-lg border-2 border-navy hover:bg-periwinkle active:scale-95 transition-all">
                Start_Project_WhatsApp_>
            </a>
        </div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        // Cek apakah menu sedang tersembunyi (hidden)
        if (menu.classList.contains('hidden')) {
            // BUKA MENU
            menu.classList.remove('hidden');
            // Sedikit delay agar transisi opacity/translate jalan halus
            setTimeout(() => {
                menu.classList.remove('opacity-0', '-translate-y-5');
            }, 10);

            // Ganti Ikon
            iconOpen.classList.add('hidden');
            iconClose.classList.remove('hidden');
            iconClose.classList.add('block');
        } else {
            // TUTUP MENU
            menu.classList.add('opacity-0', '-translate-y-5');

            // Tunggu animasi selesai baru hide total
            setTimeout(() => {
                menu.classList.add('hidden');
            }, 300);

            // Ganti Ikon
            iconOpen.classList.remove('hidden');
            iconOpen.classList.add('block');
            iconClose.classList.add('hidden');
            iconClose.classList.remove('block');
        }
    }
</script>