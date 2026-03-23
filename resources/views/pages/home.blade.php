@extends('layouts.app')

@section('title', 'anno.tech | System Online')

@section('content')

    <style>
        @keyframes marquee-anim {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee-custom {
            display: inline-block;
            white-space: nowrap;
            /* PENTING: Mencegah teks turun ke bawah di HP */
            animation: marquee-anim 20s linear infinite;
            padding-left: 100%;
            /* Agar mulai dari luar layar kanan */
        }
    </style>

    <div class="scanlines"></div>

    <section class="min-h-screen flex flex-col justify-center items-center relative px-4 pt-10">

        <div class="absolute top-24 left-10 md:left-20 animate-bounce delay-700 hidden md:block">
            <div class="bg-white border-2 border-navy p-2 shadow-[4px_4px_0_#2D336B]">
                <span class="font-pixel text-xl">💾 SAVE_PROJECT</span>
            </div>
        </div>
        <div class="absolute bottom-32 right-5 md:right-20 animate-pulse hidden md:block">
            <div class="bg-periwinkle text-white border-2 border-navy p-2 shadow-[4px_4px_0_#2D336B]">
                <span class="font-pixel text-xl">⚠ NO_BUGS_ALLOWED</span>
            </div>
        </div>

        <div class="bg-cream border-4 border-navy max-w-5xl w-full shadow-[12px_12px_0_#2D336B] relative z-10" data-tilt
            data-tilt-max="3">

            <div class="bg-navy p-2 flex justify-between items-center border-b-4 border-navy">
                <div class="text-white font-pixel text-xl flex gap-2">
                    <span>📂</span> SYSTEM_ANNO_TECH.EXE
                </div>
                <div class="flex gap-1">
                    <div
                        class="w-6 h-6 bg-cream border-2 border-white flex items-center justify-center font-bold text-navy cursor-pointer hover:bg-red-400">
                        _</div>
                    <div
                        class="w-6 h-6 bg-cream border-2 border-white flex items-center justify-center font-bold text-navy cursor-pointer hover:bg-red-400">
                        □</div>
                    <div
                        class="w-6 h-6 bg-cream border-2 border-white flex items-center justify-center font-bold text-navy cursor-pointer hover:bg-red-500">
                        X</div>
                </div>
            </div>

            <div class="p-8 md:p-16 text-center bg-[url('https://www.transparenttextures.com/patterns/graphy.png')]">

                <div
                    class="inline-block border-2 border-navy bg-softblue px-4 py-1 font-pixel text-navy mb-6 transform -rotate-2">
                    Available for Work ● Online
                </div>

                <h1 class="font-pixel text-6xl md:text-9xl font-bold text-navy leading-none mb-4"
                    style="text-shadow: 4px 4px 0 #A9B5DF;">
                    ANNO.TECH
                </h1>

                <div
                    class="font-pixel text-2xl md:text-3xl text-navy/90 mb-8 max-w-3xl mx-auto bg-white/80 p-4 border-2 border-dashed border-navy shadow-inner min-h-[80px] flex items-center justify-center">
                    > <span id="typed-text" class="ml-2"></span>
                </div>

                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a href="#services" class="group relative inline-block focus:outline-none focus:ring">
                        <span
                            class="absolute inset-0 translate-x-2 translate-y-2 bg-periwinkle transition-transform group-hover:translate-y-3 group-hover:translate-x-3 border-2 border-navy"></span>
                        <span
                            class="relative inline-block border-2 border-navy bg-cream px-8 py-3 font-pixel text-2xl font-bold uppercase tracking-widest text-navy transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1">
                            Start_Game_>
                        </span>
                    </a>
                </div>
            </div>

            <div class="bg-softblue border-t-4 border-navy p-2 font-pixel text-sm flex justify-between px-4">
                <span>Status: Ready</span>
                <span>Memory: 100%</span>
                <span>CPU: Optimal</span>
            </div>
        </div>

    </section>

    <div class="bg-navy py-3 border-y-4 border-periwinkle rotate-1 scale-105 z-20 relative shadow-lg overflow-hidden">
        <div class="marquee-container text-cream tracking-widest relative overflow-hidden w-full">
            <div class="animate-marquee-custom font-pixel text-xl md:text-3xl uppercase tracking-[0.15em]"
                style="font-family: 'VT323', monospace !important;">
                +++ SYSTEM READY +++ AI & DATA SOLUTIONS +++ WEB DEVELOPMENT +++ SKRIPSI RESCUE +++ INITIATING PROTOCOL...
                +++
                +++ SYSTEM READY +++ AI & DATA SOLUTIONS +++ WEB DEVELOPMENT +++ SKRIPSI RESCUE +++ INITIATING PROTOCOL...
                +++
            </div>
        </div>
    </div>

                        <section id="services" class="py-24 relative overflow-hidden bg-white/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-end gap-4 mb-12 border-b-4 border-navy pb-4">
                <h2 class="font-pixel text-5xl md:text-6xl text-navy">C:\SERVICES></h2>
                <span class="font-pixel text-2xl text-periwinkle animate-pulse">_</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                <!-- Service 1: Academic & Skripsi -->
                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-periwinkle translate-x-3 translate-y-3"></div>
                    <div class="relative bg-navy border-4 border-navy p-5 md:p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-cream w-16 h-16 border-4 border-white flex items-center justify-center text-3xl mb-5 shadow-[4px_4px_0_#A9B5DF]">🎓</div>
                        <h3 class="font-pixel text-2xl lg:text-3xl mb-3 text-cream leading-snug">ACADEMIC & SKRIPSI</h3>
                        <p class="font-body text-base lg:text-lg text-softblue mb-6 flex-grow border-l-4 border-cream pl-3 leading-relaxed">Paket Penyelamat Semester Akhir. Skripsi Error, Dosen Teror? anno.tech Siap Jadi Eksekutor!</p>
                        <button onclick="openModal('modal-skripsi')" class="font-pixel text-xl text-right text-cream hover:text-softblue block mt-auto w-full text-left transition-colors">Details_>>></button>
                    </div>
                </div>

                <!-- Service 2: Web-Apps Dev -->
                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-navy translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 md:p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="absolute -top-5 -right-5 bg-red-500 text-white font-pixel text-base px-3 py-1 border-2 border-navy shadow-[4px_4px_0_#000] rotate-12 z-20">BEST SELLER!</div>
                        <div class="bg-softblue w-16 h-16 border-4 border-navy flex items-center justify-center text-3xl mb-5 shadow-[4px_4px_0_#2D336B]">💻</div>
                        <h3 class="font-pixel text-2xl lg:text-3xl mb-3 text-navy leading-snug">WEB-APPS DEV</h3>
                        <p class="font-body text-base lg:text-lg text-navy/80 mb-6 flex-grow border-l-4 border-periwinkle pl-3 leading-relaxed">Landing Page, Web Dinamis (CMS), hingga Custom Web App Kasir / E-Commerce.</p>
                        <button onclick="openModal('modal-webapp')" class="font-pixel text-xl text-right hover:text-periwinkle block mt-auto w-full text-left transition-colors">Details_>>></button>
                    </div>
                </div>

                <!-- Service 3: Web-Profile -->
                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-navy translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 md:p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-softblue w-16 h-16 border-4 border-navy flex items-center justify-center text-3xl mb-5 shadow-[4px_4px_0_#2D336B]">👤</div>
                        <h3 class="font-pixel text-2xl lg:text-3xl mb-3 text-navy leading-snug">WEB-PROFILE</h3>
                        <p class="font-body text-base lg:text-lg text-navy/80 mb-6 flex-grow border-l-4 border-periwinkle pl-3 leading-relaxed">Identitas digital satu halaman, Portfolio dinamis, Memory web khusus momen spesial.</p>
                        <button onclick="openModal('modal-webprofile')" class="font-pixel text-xl text-right hover:text-periwinkle block mt-auto w-full text-left transition-colors">Details_>>></button>
                    </div>
                </div>

                <!-- Service 4: Invitation Wedding -->
                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-navy translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 md:p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-softblue w-16 h-16 border-4 border-navy flex items-center justify-center text-3xl mb-5 shadow-[4px_4px_0_#2D336B]">💍</div>
                        <h3 class="font-pixel text-2xl lg:text-3xl mb-3 text-navy leading-snug">INVITATION WEDDING</h3>
                        <p class="font-body text-base lg:text-lg text-navy/80 mb-6 flex-grow border-l-4 border-periwinkle pl-3 leading-relaxed">Undangan Digital Elegan dengan fitur RSVP, Musik, Amplop Digital & Navigasi Maps.</p>
                        <button onclick="openModal('modal-wedding')" class="font-pixel text-xl text-right hover:text-periwinkle block mt-auto w-full text-left transition-colors">Details_>>></button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION ABOUT US -->
    <section id="about" class="py-24 relative overflow-hidden bg-softblue/30">
        <div class="max-w-4xl mx-auto px-6" data-tilt data-tilt-max="2">
            <div class="bg-cream border-4 border-navy shadow-[12px_12px_0_#2D336B] relative z-10">
                <!-- Window Header -->
                <div class="bg-navy p-2 flex justify-between items-center border-b-4 border-navy">
                    <div class="text-white font-pixel text-xl flex gap-2">
                        <span>📄</span> readme.txt - Notepad
                    </div>
                    <div class="flex gap-1">
                        <div
                            class="w-6 h-6 bg-cream border-2 border-white flex items-center justify-center font-bold text-navy cursor-pointer hover:bg-red-400">
                            _</div>
                        <div
                            class="w-6 h-6 bg-cream border-2 border-white flex items-center justify-center font-bold text-navy cursor-pointer hover:bg-red-400">
                            □</div>
                        <div
                            class="w-6 h-6 bg-cream border-2 border-white flex items-center justify-center font-bold text-navy cursor-pointer hover:bg-red-500">
                            X</div>
                    </div>
                </div>
                <!-- Window Content -->
                <div class="p-8 md:p-12 font-body text-lg text-navy leading-relaxed bg-white">
                    <p class="font-pixel text-2xl mb-6 border-b-2 border-dashed border-navy/30 pb-4">Hello, World! Welcome
                        to <span class="text-periwinkle">anno.tech</span></p>
                    <p class="mb-4 text-justify">Anno.Tech adalah studio digital yang merancang website, aplikasi, dan sistem andal—memadukan desain clean dengan fungsionalitas yang optimal. Mari berkolaborasi dan wujudkan project Anda bersama kami.</p>

                    <div class="mt-8 font-pixel text-navy/60 text-sm">
                        > END OF FILE.<br>
                        > Press ESC to continue...
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION SHOWCASE -->
    <section id="showcase" class="py-24 relative overflow-hidden bg-white/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-end gap-4 mb-12 border-b-4 border-navy pb-4">
                <h2 class="font-pixel text-5xl md:text-6xl text-navy">C:\SHOWCASE></h2>
                <span class="font-pixel text-2xl text-periwinkle animate-pulse">_</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
                <!-- Portfolio 1: Company Profile Web (from old info) -->
                <div class="group relative" data-tilt data-tilt-max="4">
                    <div class="absolute top-0 left-0 w-full h-full bg-periwinkle translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-softblue border-2 border-navy h-48 md:h-56 mb-5 shadow-inner flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/showcase/web/WhatsApp Image 2026-03-23 at 9.27.20 PM.jpeg') }}" alt="Company Profile Web" class="w-full h-full object-cover transition-transform group-hover:scale-110 duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="font-pixel text-2xl lg:text-3xl text-navy mb-3">Company Profile Web</h3>
                        <p class="font-body text-navy/80 text-base mb-4">Website modern & interaktif untuk corporate client yang menonjolkan profesionalitas.</p>
                        <div class="text-sm font-body text-navy/70 space-y-2 flex-grow">
                            <p><strong>🌐 Web-Profile:</strong> Frontend yang responsif dan optimasi performa tinggi untuk membangun citra digital perusahaan.</p>
                        </div>
                        <button onclick="openLightbox('web', 'COMPANY_PROFILE_WEB')" class="mt-4 bg-navy text-white font-pixel px-4 py-2 border-2 border-navy hover:bg-periwinkle transition-all w-full text-center shadow-[4px_4px_0_#2D336B] hover:translate-y-1 hover:translate-x-1 hover:shadow-none active:translate-y-2 active:translate-x-2">Lihat Selengkapnya_>></button>
                    </div>
                </div>

                <!-- Portfolio 2: Annogram -->
                <div class="group relative" data-tilt data-tilt-max="4">
                    <div class="absolute top-0 left-0 w-full h-full bg-navy translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-navy border-2 border-navy h-48 md:h-56 mb-5 shadow-inner flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/showcase/annogram/Screenshot 2025-12-31 171947.png') }}" alt="Annogram" class="w-full h-full object-cover transition-transform group-hover:scale-110 duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="font-pixel text-2xl lg:text-3xl text-navy mb-3">Annogram</h3>
                        <p class="font-body text-navy/80 text-base mb-4">Aplikasi chat komunikasi yang cepat, aman, dan cerdas.</p>
                        <div class="text-sm font-body text-navy/70 space-y-2 flex-grow">
                            <p><strong>🔒 Fitur Keamanan:</strong> Lock Chat Rahasia (PIN) & Decoy Vault Privacy.</p>
                            <p><strong>💡 Fitur Cerdas:</strong> Smart Contact Sync, Ultra-Fast Media, AI Voice Note Summarizer, & Interactive Co-Space.</p>
                        </div>
                        <button onclick="openLightbox('annogram', 'ANNOGRAM_APP')" class="mt-4 bg-navy text-white font-pixel px-4 py-2 border-2 border-navy hover:bg-periwinkle transition-all w-full text-center shadow-[4px_4px_0_#2D336B] hover:translate-y-1 hover:translate-x-1 hover:shadow-none active:translate-y-2 active:translate-x-2">Lihat Selengkapnya_>></button>
                    </div>
                </div>

                <!-- Portfolio 3: Kurash Usul Scoring -->
                <div class="group relative" data-tilt data-tilt-max="4">
                    <div class="absolute top-0 left-0 w-full h-full bg-red-400 translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-red-400 border-2 border-navy h-48 md:h-56 mb-5 shadow-inner flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/showcase/kurash usul scoring/Screenshot 2026-01-12 051437.png') }}" alt="Kurash Usul Scoring" class="w-full h-full object-cover transition-transform group-hover:scale-110 duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="font-pixel text-2xl lg:text-3xl text-navy mb-3">Kurash Usul Scoring</h3>
                        <p class="font-body text-navy/80 text-base mb-4">Sistem penilaian real-time pertandingan Kurash kategori Usul.</p>
                        <div class="text-sm font-body text-navy/70 space-y-2 flex-grow">
                            <p><strong>✨ Fitur Inti:</strong> Live Scoring, Smart Auto-Calculation, Intelligent Timer & Penalty.</p>
                            <p><strong>👥 Akses Multi-Peran:</strong> Admin (Bagan), Juri (Poin), & Layar TV/Kontrol.</p>
                        </div>
                        <button onclick="openLightbox('kurash', 'KURASH_USUL_SCORING')" class="mt-4 bg-red-400 text-navy font-pixel px-4 py-2 border-2 border-navy hover:bg-periwinkle hover:text-white transition-all w-full text-center shadow-[4px_4px_0_#2D336B] hover:translate-y-1 hover:translate-x-1 hover:shadow-none active:translate-y-2 active:translate-x-2">Lihat Selengkapnya_>></button>
                    </div>
                </div>

                <!-- Portfolio 4: Woodball Scoreboard -->
                <div class="group relative" data-tilt data-tilt-max="4">
                    <div class="absolute top-0 left-0 w-full h-full bg-green-400 translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-green-400 border-2 border-navy h-48 md:h-56 mb-5 shadow-inner flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/showcase/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.37 PM (1).jpeg') }}" alt="Woodball Scoreboard" class="w-full h-full object-cover transition-transform group-hover:scale-110 duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="font-pixel text-2xl lg:text-3xl text-navy mb-3">Woodball Scoreboard</h3>
                        <p class="font-body text-navy/80 text-base mb-4">World's First Algorithmic System solusi digital komunitas woodball.</p>
                        <div class="text-sm font-body text-navy/70 space-y-2 flex-grow">
                            <p><strong>📊 Fitur Inti:</strong> Live Score & Analisis Statistik Performa.</p>
                            <p><strong>👨‍🏫 Akses Pelatih:</strong> Dashboard atlet, sesi pairing, dll.</p>
                            <p><strong>🏃 Akses Atlet:</strong> Ringkasan Average Score & riwayat.</p>
                        </div>
                        <button onclick="openLightbox('woodball', 'WOODBALL_SCOREBOARD')" class="mt-4 bg-green-400 text-navy font-pixel px-4 py-2 border-2 border-navy hover:bg-periwinkle hover:text-white transition-all w-full text-center shadow-[4px_4px_0_#2D336B] hover:translate-y-1 hover:translate-x-1 hover:shadow-none active:translate-y-2 active:translate-x-2">Lihat Selengkapnya_>></button>
                    </div>
                </div>

                <!-- Portfolio 5: Siniops Enterprise -->
                <div class="group relative lg:col-span-1 md:col-span-2 mx-auto lg:mx-0 w-full" data-tilt data-tilt-max="4">
                    <div class="absolute top-0 left-0 w-full h-full bg-yellow-400 translate-x-3 translate-y-3"></div>
                    <div class="relative bg-cream border-4 border-navy p-5 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div class="bg-yellow-400 border-2 border-navy h-48 md:h-56 mb-5 shadow-inner flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.09 AM.jpeg') }}" alt="Siniops Enterprise" class="w-full h-full object-cover p-2 bg-cream transition-transform group-hover:scale-110 duration-500 grayscale group-hover:grayscale-0">
                        </div>
                        <h3 class="font-pixel text-2xl lg:text-3xl text-navy mb-3">Siniops Enterprise</h3>
                        <p class="font-body text-navy/80 text-base mb-4">Sistem manajemen F&B terpadu dan kasir operasional hulu ke hilir.</p>
                        <div class="text-sm font-body text-navy/70 space-y-2 flex-grow">
                            <p><strong>💳 Transaksi:</strong> Kasir tunai & QRIS otomatis (Scan to Pay).</p>
                            <p><strong>📦 Operasional & Inventaris:</strong> Manajemen menu, Stok bahan baku, & Printer Bluetooth.</p>
                            <p><strong>📈 Laporan & RBA:</strong> Omzet, Rekap produk, dan Hak Akses (Owner, Manager, Crew).</p>
                        </div>
                        <button onclick="openLightbox('siniops', 'SINIOPS_F&B')" class="mt-4 bg-yellow-400 text-navy font-pixel px-4 py-2 border-2 border-navy hover:bg-periwinkle hover:text-white transition-all w-full text-center shadow-[4px_4px_0_#2D336B] hover:translate-y-1 hover:translate-x-1 hover:shadow-none active:translate-y-2 active:translate-x-2">Lihat Selengkapnya_>></button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button
                    class="bg-navy text-white font-pixel text-xl px-8 py-3 border-4 border-navy shadow-[6px_6px_0_#A9B5DF] hover:translate-y-1 hover:translate-x-1 hover:shadow-none transition-all active:translate-y-2 active:translate-x-2 active:shadow-none">LOAD_MORE_>></button>
            </div>
        </div>
    </section>

    <!-- SECTION WORKFLOW -->
    <section id="workflow" class="py-24 relative overflow-hidden bg-softblue/30">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-navy border-4 border-navy shadow-[12px_12px_0_#2D336B] p-6 md:p-10 relative">
                <!-- Mac-like Terminal Header -->
                <div class="absolute top-0 left-0 w-full h-8 bg-cream border-b-4 border-navy flex items-center px-4 gap-2">
                    <div class="w-3 h-3 bg-red-500 border-2 border-navy"></div>
                    <div class="w-3 h-3 bg-yellow-400 border-2 border-navy"></div>
                    <div class="w-3 h-3 bg-green-500 border-2 border-navy"></div>
                    <span class="ml-4 font-pixel text-sm text-navy uppercase">terminal@anno.tech: ~</span>
                </div>

                <div class="mt-8 text-white space-y-8">
                    <!-- Step 1 -->
                    <div class="flex items-start gap-4">
                        <span class="text-green-400 font-pixel text-xl md:text-2xl mt-1">></span>
                        <div class="w-full">
                            <span class="font-pixel text-xl md:text-2xl text-periwinkle font-bold">./install_project.sh
                                --step 1_Diskusi</span>
                            <p class="font-body text-cream/80 mt-2 text-lg">Menganalisis kebutuhan, timeline, dan budget via
                                chat atau meeting.</p>
                            <div class="w-full bg-navy border-2 border-white/20 h-4 mt-3">
                                <div class="bg-green-400 h-full w-1/4"></div>
                            </div>
                            <span class="font-pixel text-xs text-green-400 mt-1 block">Progress: 25%</span>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start gap-4">
                        <span class="text-green-400 font-pixel text-xl md:text-2xl mt-1">></span>
                        <div class="w-full">
                            <span class="font-pixel text-xl md:text-2xl text-yellow-400 font-bold">npm run
                                build_and_code</span>
                            <p class="font-body text-cream/80 mt-2 text-lg">Proses development (Coding, Design, AI Training)
                                dimulai sesuai blueprint.</p>
                            <div class="w-full bg-navy border-2 border-white/20 h-4 mt-3">
                                <div class="bg-yellow-400 h-full w-2/4"></div>
                            </div>
                            <span class="font-pixel text-xs text-yellow-400 mt-1 block">Progress: 50%</span>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start gap-4">
                        <span class="text-green-400 font-pixel text-xl md:text-2xl mt-1">></span>
                        <div class="w-full">
                            <span class="font-pixel text-xl md:text-2xl text-red-400 font-bold">git commit -m
                                "Revisi_&_QA"</span>
                            <p class="font-body text-cream/80 mt-2 text-lg">Pengecekan kualitas, testing, dan revisi dari
                                Anda hingga sempurna.</p>
                            <div class="w-full bg-navy border-2 border-white/20 h-4 mt-3">
                                <div class="bg-red-400 h-full w-3/4"></div>
                            </div>
                            <span class="font-pixel text-xs text-red-400 mt-1 block">Progress: 75%</span>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start gap-4">
                        <span class="text-green-400 font-pixel text-xl md:text-2xl mt-1">></span>
                        <div class="w-full">
                            <span
                                class="font-pixel text-xl md:text-2xl text-white font-bold">System.Success("PROJECT_SELESAI")</span>
                            <p class="font-body text-cream/80 mt-2 text-lg">Penyerahan hasil akhir (source code/app) beserta
                                dokumentasi.</p>
                            <div class="w-full bg-navy border-2 border-white/20 h-4 mt-3">
                                <div class="bg-white h-full w-full"></div>
                            </div>
                            <span class="font-pixel text-xs text-white mt-1 block">Progress: 100% [DONE]</span>
                        </div>
                    </div>

                    <div class="font-pixel text-xl text-green-400 mt-6 animate-pulse">_</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION FAQ -->
    <section id="faq" class="py-24 relative overflow-hidden bg-white/50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2
                    class="font-pixel text-4xl md:text-6xl text-navy inline-block bg-cream border-4 border-navy px-6 py-3 shadow-[8px_8px_0_#A9B5DF] transform -rotate-1">
                    FAQ.INI</h2>
            </div>

            <div class="space-y-6 accordion-container">
                <!-- FAQ Item 1 -->
                <div class="faq-item group">
                    <button
                        class="w-full flex justify-between items-center text-left bg-navy text-white font-pixel text-xl md:text-2xl p-4 border-4 border-navy hover:bg-periwinkle transition-colors focus:outline-none">
                        <span>> Berapa lama proses pengerjaannya?</span>
                        <span class="icon text-3xl font-bold">+</span>
                    </button>
                    <div
                        class="faq-content hidden bg-cream border-x-4 border-b-4 border-navy p-6 font-body text-lg text-navy">
                        Tergantung kompleksitas project. Untuk website sederhana biasanya 3-7 hari. Project aplikasi atau AI
                        bisa memakan waktu 2-4 minggu. Kami selalu mengedepankan kualitas dan ketepatan waktu.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item group">
                    <button
                        class="w-full flex justify-between items-center text-left bg-navy text-white font-pixel text-xl md:text-2xl p-4 border-4 border-navy hover:bg-periwinkle transition-colors focus:outline-none">
                        <span>> Apakah ada garansi / revisi?</span>
                        <span class="icon text-3xl font-bold">+</span>
                    </button>
                    <div
                        class="faq-content hidden bg-cream border-x-4 border-b-4 border-navy p-6 font-body text-lg text-navy">
                        Tentu! Kami menyediakan masa revisi minor gratis setelah project diserahkan. Kami juga memberikan
                        garansi bug-fix selama periode tertentu sesuai kesepakatan awal.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item group">
                    <button
                        class="w-full flex justify-between items-center text-left bg-navy text-white font-pixel text-xl md:text-2xl p-4 border-4 border-navy hover:bg-periwinkle transition-colors focus:outline-none">
                        <span>> Bagaimana sistem pembayarannya?</span>
                        <span class="icon text-3xl font-bold">+</span>
                    </button>
                    <div
                        class="faq-content hidden bg-cream border-x-4 border-b-4 border-navy p-6 font-body text-lg text-navy">
                        Kami menerapkan sistem DP (Down Payment) minimal 50% di awal sebelum project dikerjakan. Sisanya
                        dibayarkan setelah project selesai dan disetujui, sebelum penyerahan source code.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION CONTACTS -->
    <section id="contacts" class="py-24 relative overflow-hidden bg-softblue/30">
        <div class="max-w-4xl mx-auto px-6" data-tilt data-tilt-max="2">
            <div class="bg-navy border-4 border-navy shadow-[12px_12px_0_#A9B5DF] relative z-10 p-8 md:p-12 text-center">
                <!-- Window Header -->
                <div class="absolute top-0 left-0 w-full h-8 bg-cream border-b-4 border-navy flex items-center px-4 gap-2">
                    <div class="w-3 h-3 bg-red-500 border-2 border-navy"></div>
                    <div class="w-3 h-3 bg-yellow-400 border-2 border-navy"></div>
                    <div class="w-3 h-3 bg-green-500 border-2 border-navy"></div>
                    <span class="ml-4 font-pixel text-sm text-navy uppercase">contacts.exe</span>
                </div>
                
                <h2 class="font-pixel text-3xl md:text-5xl text-cream mb-8 mt-4 tracking-wide">_CONNECT_WITH_US</h2>
                
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/anno.tech24/" target="_blank" class="group relative inline-block focus:outline-none focus:ring w-full md:w-auto">
                        <span class="absolute inset-0 translate-x-2 translate-y-2 bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-500 transition-transform group-hover:translate-y-3 group-hover:translate-x-3 border-2 border-navy"></span>
                        <span class="relative inline-flex items-center justify-center gap-3 border-2 border-navy bg-white px-8 py-4 font-pixel text-xl font-bold uppercase tracking-widest text-navy transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 w-full">
                            <svg class="w-7 h-7 text-[#E1306C]" viewBox="0 0 448 512" fill="currentColor">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                            INSTAGRAM
                        </span>
                    </a>

                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@anno.tech?lang=en-GB" target="_blank" class="group relative inline-block focus:outline-none focus:ring w-full md:w-auto">
                        <span class="absolute inset-0 translate-x-2 translate-y-2 bg-black transition-transform group-hover:translate-y-3 group-hover:translate-x-3 border-2 border-navy"></span>
                        <span class="relative inline-flex items-center justify-center gap-3 border-2 border-navy bg-white px-8 py-4 font-pixel text-xl font-bold uppercase tracking-widest text-navy transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 w-full">
                            <svg class="w-7 h-7 text-black" viewBox="0 0 448 512" fill="currentColor">
                                <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                            </svg>
                            TIKTOK
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION ORDER -->
    <section id="order" class="py-24 relative overflow-hidden bg-navy text-cream border-t-8 border-periwinkle">
        <!-- Retro Grid Background overlay -->
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/graphy.png')]"></div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10" data-tilt data-tilt-max="3">
            <div class="bg-cream border-4 border-navy p-10 md:p-16 shadow-[16px_16px_0_#2D336B] border-solid relative">
                <div
                    class="absolute -top-6 -right-6 bg-red-500 text-white font-pixel px-4 py-2 border-2 border-navy shadow-[4px_4px_0_#000] rotate-12 z-20 animate-pulse">
                    LET'S CONNECT!
                </div>
                <h2 class="font-pixel text-4xl md:text-6xl text-navy mb-6 leading-tight">READY TO PUSH<br><span
                        class="text-white bg-navy px-4 mt-2 inline-block">START?</span></h2>
                <p class="font-body text-xl text-navy/80 mb-10 max-w-2xl mx-auto">Tinggalkan metode lama yang lambat. Bangun
                    produk digital Anda dengan cepat, elegan, dan tanpa pusing mikirin error. Chat kami sekarang!</p>

                <a href="https://wa.me/6285117776959?text=Halo%20anno.tech%2C%20saya%20ingin%20konsultasi%20project%20dong"
                    target="_blank" class="inline-block group relative focus:outline-none">
                    <span
                        class="absolute inset-0 bg-navy translate-x-3 translate-y-3 transition-transform group-hover:translate-x-4 group-hover:translate-y-4"></span>
                    <span
                        class="absolute inset-0 bg-periwinkle translate-x-1.5 translate-y-1.5 transition-transform group-hover:translate-x-2 group-hover:translate-y-2"></span>
                    <span
                        class="relative border-4 border-navy bg-white px-8 md:px-12 py-4 md:py-6 font-pixel text-xl md:text-3xl font-bold uppercase tracking-widest text-navy transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 flex items-center justify-center gap-4">
                        <span class="text-3xl animate-bounce">💬</span>
                        CONNECT_WHATSAPP
                    </span>
                </a>
            </div>

            <div class="mt-16 font-pixel text-cream/50 text-sm tracking-widest uppercase">
                SYSTEM SHUTDOWN IN 3... 2... 1...
            </div>
        </div>
    </section>

                <!-- MODAL SKRIPSI -->
    <div id="modal-skripsi" class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div class="bg-cream border-4 border-navy shadow-[10px_10px_0_#7886C7] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-periwinkle p-2 flex justify-between items-center text-white font-pixel text-xl border-b-4 border-navy">
                <span class="flex items-center gap-2">🎓 ACADEMIC_SKRIPSI.ZIP</span>
                <button onclick="closeModal('modal-skripsi')" class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600 focus:outline-none">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[85vh]">
                <h3 class="font-pixel text-3xl md:text-4xl text-navy mb-2 leading-tight">Academic & Skripsi</h3>
                <p class="font-body text-lg text-navy/80 mb-6 italic border-b-2 border-navy/20 pb-4">"Skripsi Error, Dosen Teror? anno.tech Siap Jadi Eksekutor!"</p>

                <div class="bg-cream border-2 border-dashed border-red-500 p-4 mb-6 flex items-start gap-3">
                    <span class="text-2xl animate-pulse mt-1">⚠️</span>
                    <div class="font-pixel text-red-500 text-sm tracking-wide leading-relaxed">
                        <b class="underline text-base mb-1 block">SYSTEM_RULE:</b>
                        "Tersedia berbagai platform: Web (Laravel/PHP), Mobile Apps (Flutter/Android), hingga Machine Learning & Data Science (Python)."
                    </div>
                </div>

                <div class="space-y-6 mb-8">
                    <!-- Paket Code.exe -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">1. Paket Code.exe</h4>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Free konsultasi</li>
                            <li>> Full Source Code</li>
                            <li>> Database lengkap</li>
                            <li>> Bantuan instalasi (Localhost)</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 1JT</p>
                    </div>
                    <!-- Paket Sempro.rar -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">2. Paket Sempro.rar</h4>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Semua fitur di Code.exe</li>
                            <li>> Penyusunan Bab 1, 2, 3</li>
                            <li>> Pembuatan PPT Sempro</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 1.5JT</p>
                    </div>
                    <!-- Paket Sidang.bat -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">3. Paket Sidang.bat</h4>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Semua fitur di Sempro.rar</li>
                            <li>> Penyusunan Bab 4, 5</li>
                            <li>> User Manual</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 2JT</p>
                    </div>
                    <!-- Paket Wisuda.iso -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">4. Paket Wisuda.iso</h4>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Full Pack: Aplikasi + Skripsi Bab 1-5</li>
                            <li>> Bantuan pembuatan Jurnal Ilmiah</li>
                            <li>> Unlimited Revisions</li>
                            <li>> Mentoring private</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 2.5JT</p>
                    </div>
                    <!-- Consultation -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">5. Consultation Project</h4>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Debugging & Error Solving</li>
                            <li>> Diskusi Tech Stack / Judul Skripsi</li>
                            <li>> Pengerjaan Tubes (Tugas Besar)</li>
                            <li>> UI/UX & Database Design</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 29k</p>
                    </div>
                </div>

                <div class="bg-navy text-cream border-2 border-dashed border-periwinkle p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left">
                        <span class="font-pixel text-lg text-softblue block mb-1">STARTS FROM:</span>
                        <span class="font-pixel text-4xl font-bold">Rp 29k</span>
                    </div>
                    <a href="https://wa.me/6285117776959?text=Halo%20anno.tech%2C%20bantu%20project%20akademik%20saya%20dong" target="_blank" class="bg-cream text-navy font-pixel text-xl md:text-2xl px-6 py-3 border-2 border-white hover:bg-periwinkle hover:text-white transition-all transform hover:-translate-y-1 shadow-[4px_4px_0_#A9B5DF] hover:shadow-none focus:outline-none">SOS_Help_></a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL WEB-APPS DEV -->
    <div id="modal-webapp" class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div class="bg-cream border-4 border-navy shadow-[10px_10px_0_#2D336B] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-navy p-2 flex justify-between items-center text-white font-pixel text-xl">
                <span class="flex items-center gap-2">💻 WEB_APPS_DEV.EXE</span>
                <button onclick="closeModal('modal-webapp')" class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600 focus:outline-none">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[85vh]">
                <h3 class="font-pixel text-3xl md:text-4xl text-navy mb-2 leading-tight">Web-Apps Development</h3>
                <p class="font-body text-lg text-navy/80 mb-6 italic border-b-2 border-navy/20 pb-4">"Membangun ekosistem digital mulai dari Landing Page hingga Custom Sistem."</p>

                <div class="space-y-6 mb-8">
                    <!-- Landing Page -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">1. Landing Page</h4>
                        <p class="font-body text-base font-bold text-navy mb-2 shadow-sm border-b pb-1">Cocok untuk: Web UMKM Basic</p>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Halaman Statis (Home, About, Services, Gallery, Contact)</li>
                            <li>> Gratis 1 Tahun domain lokal (.my.id / .biz.id)</li>
                            <li>> Responsive Design (HP & Laptop)</li>
                            <li>> Fee Maintenance 15 hari</li>
                            <li>> Database + Basic SEO</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 800k</p>
                    </div>

                    <!-- Web Dinamis + CMS -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">2. Web Dinamis + CMS / Admin</h4>
                        <p class="font-body text-base font-bold text-navy mb-2 shadow-sm border-b pb-1">Cocok untuk: Company Profile, Katalog Produk, Web Sekolah</p>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Halaman Front-End + Panel Admin khusus</li>
                            <li>> Gratis 1 Tahun domain premium (.com / .net)</li>
                            <li>> Cloud Hosting (Kapasitas ±2GB)</li>
                            <li>> Fitur: Sistem Login Admin, CRUD Data, Form Kontak</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 1.8JT</p>
                    </div>

                    <!-- Custom Web App -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">3. Custom Web App</h4>
                        <p class="font-body text-base font-bold text-navy mb-2 shadow-sm border-b pb-1">Cocok untuk: Sistem Kasir (POS), E-Commerce, Aplikasi Booking</p>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Pages Unlimited (Sesuai Flowchart)</li>
                            <li>> Dedicated Support + Garansi Maintenance 2 Bulan</li>
                            <li>> Fitur: Multi-Role User, Integrasi API (Midtrans/QRIS), Cetak PDF/Excel, Real-time Notification</li>
                        </ul>
                        <p class="font-pixel text-xl text-red-500 font-bold ml-2">Start From IDR 3JT</p>
                    </div>

                    <!-- Konsultasi -->
                    <div class="flex gap-4 items-center bg-softblue/10 p-3 border-2 border-navy">
                        <span class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg">💡 Konsultasi Tech</span>
                        <p class="font-pixel text-xl text-red-500 font-bold">IDR 49k</p>
                    </div>
                </div>

                <div class="bg-softblue/30 border-2 border-dashed border-navy p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left">
                        <span class="font-pixel text-lg text-navy block mb-1">STARTS FROM:</span>
                        <span class="font-pixel text-4xl font-bold text-navy">Rp 800k</span>
                    </div>
                    <a href="https://wa.me/6285117776959?text=Halo%20anno.tech%2C%20saya%20tertarik%20bikin%20Web-Apps" target="_blank" class="bg-navy text-white font-pixel text-xl md:text-2xl px-6 py-3 border-2 border-navy hover:bg-cream hover:text-navy transition-all transform hover:-translate-y-1 shadow-[4px_4px_0_#A9B5DF] hover:shadow-none focus:outline-none">Consult_Now_></a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL WEB-PROFILE -->
    <div id="modal-webprofile" class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div class="bg-cream border-4 border-navy shadow-[10px_10px_0_#2D336B] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-navy p-2 flex justify-between items-center text-white font-pixel text-xl">
                <span class="flex items-center gap-2">👤 WEB_PROFILE.HTML</span>
                <button onclick="closeModal('modal-webprofile')" class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600 focus:outline-none">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[85vh]">
                <h3 class="font-pixel text-3xl md:text-4xl text-navy mb-2 leading-tight">Web-Profile</h3>
                <p class="font-body text-lg text-navy/80 mb-6 italic border-b-2 border-navy/20 pb-4">"Identitas digital profesional, elegan, dan estetik."</p>

                <div class="space-y-6 mb-8">
                    <!-- Lite.html -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">1. Lite.html</h4>
                        <p class="font-body text-base font-bold text-navy mb-2 shadow-sm border-b pb-1">Identitas digital ringan satu halaman (Web-portfolio, CV).</p>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Halaman: 1 Halaman Utama (Scroll memanjang)</li>
                            <li>> Kapasitas Portofolio: Maks 6 karya (grid statis)</li>
                            <li>> Animasi: Efek CSS Dasar (fade-in, hover)</li>
                        </ul>
                    </div>

                    <!-- Pro.php -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">2. Pro.php</h4>
                        <p class="font-body text-base font-bold text-navy mb-2 shadow-sm border-b pb-1">Portofolio dinamis dengan beberapa halaman & filter kategori.</p>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Halaman: Maks 4 Halaman (Home, About, Portfolio, Contact)</li>
                            <li>> Kapasitas Portofolio: Maks 15 karya (bisa difilter)</li>
                            <li>> Animasi: GSAP Standar (scroll trigger, typing effect)</li>
                        </ul>
                    </div>

                    <!-- Memory.css -->
                    <div>
                        <h4 class="font-bold text-white bg-navy inline-block px-2 py-1 font-pixel text-lg mb-3 border-2 border-navy">3. Memory.css</h4>
                        <p class="font-body text-base font-bold text-navy mb-2 shadow-sm border-b pb-1">Abadikan momen ulang tahun / hari spesial dalam wujud web interaktif.</p>
                        <ul class="space-y-2 text-navy font-pixel tracking-wide text-sm md:text-base mb-2 ml-2">
                            <li>> Bebas request lagu (Music Player)</li>
                            <li>> Galeri Foto Kenangan</li>
                            <li>> Animasi 2D Halus</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-softblue/30 border-2 border-dashed border-navy p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left">
                        <span class="font-pixel text-lg text-navy block mb-1">STARTS FROM:</span>
                        <span class="font-pixel text-4xl font-bold text-navy">Rp 99k</span>
                    </div>
                    <a href="https://wa.me/6285117776959?text=Halo%20anno.tech%2C%20saya%20tertarik%20bikin%20Web-Profile" target="_blank" class="bg-navy text-white font-pixel text-xl md:text-2xl px-6 py-3 border-2 border-navy hover:bg-cream hover:text-navy transition-all transform hover:-translate-y-1 shadow-[4px_4px_0_#A9B5DF] hover:shadow-none focus:outline-none">Consult_Now_></a>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL WEDDING -->
    <div id="modal-wedding" class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div class="bg-cream border-4 border-navy shadow-[10px_10px_0_#2D336B] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-navy p-2 flex justify-between items-center text-white font-pixel text-xl">
                <span class="flex items-center gap-2">💍 INVITATION_WEDDING.EXE</span>
                <button onclick="closeModal('modal-wedding')" class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600 focus:outline-none">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[85vh]">
                <h3 class="font-pixel text-3xl md:text-4xl text-navy mb-2 leading-tight">Invitation Wedding</h3>
                <p class="font-body text-lg text-navy/80 mb-6 italic border-b-2 border-navy/20 pb-4">"Sebarkan kabar bahagiamu dengan undangan digital estetis & efisien."</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 text-base font-pixel text-navy tracking-wide border-2 border-navy p-4 bg-periwinkle/20">
                    <div class="font-bold mb-3 col-span-1 md:col-span-2 text-center border-b-2 border-navy pb-2 text-lg">✨ FITUR UMUM SEMUA PAKET:</div>
                    <ul class="space-y-2 ml-2 text-sm md:text-base">
                        <li>> Unlimited Tamu</li>
                        <li>> Request BGM</li>
                        <li>> Fitur Amplop Digital</li>
                    </ul>
                    <ul class="space-y-2 ml-2 text-sm md:text-base">
                        <li>> Navigasi G-Maps</li>
                        <li>> Countdown Time</li>
                        <li>> Kolom Ucapan & RSVP</li>
                    </ul>
                </div>

                <div class="space-y-6 mb-8">
                    <!-- Invite.basic -->
                    <div class="flex justify-between items-center border-l-4 border-navy pl-4 py-2 bg-white border-y border-r shadow-sm hover:translate-x-1 transition-transform">
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl mb-1">1. Invite.basic</h4>
                            <p class="font-body text-base text-navy/80">Hanya 1 Foto, Aktif 1 Bln, Max 5x Rev.</p>
                        </div>
                        <p class="font-pixel text-2xl text-red-500 font-bold bg-cream px-3 py-1 border-2 border-navy shadow-[2px_2px_0_#2D336B] rotate-2 mr-1">50k</p>
                    </div>

                    <!-- Invite_Lite -->
                    <div class="flex justify-between items-center border-l-4 border-navy pl-4 py-2 bg-white border-y border-r shadow-sm hover:translate-x-1 transition-transform">
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl mb-1">2. Invite_Lite</h4>
                            <p class="font-body text-base text-navy/80">Galeri maks 5 foto, Aktif 2 Bln, Max 5x Rev.</p>
                        </div>
                        <p class="font-pixel text-2xl text-red-500 font-bold bg-cream px-3 py-1 border-2 border-navy shadow-[2px_2px_0_#2D336B] -rotate-1 mr-1">60k</p>
                    </div>

                    <!-- Invite_Pro -->
                    <div class="flex justify-between items-center border-l-4 border-navy pl-4 py-2 bg-white border-y border-r shadow-sm hover:translate-x-1 transition-transform">
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl mb-1">3. Invite_Pro</h4>
                            <p class="font-body text-base text-navy/80">Galeri maks 10 foto, Love Story, Aktif 3 Bln.</p>
                        </div>
                        <p class="font-pixel text-2xl text-red-500 font-bold bg-cream px-3 py-1 border-2 border-navy shadow-[2px_2px_0_#2D336B] rotate-1 mr-1">80k</p>
                    </div>

                    <!-- Expansion Pack -->
                    <div class="mt-6 bg-navy text-white p-4 font-pixel text-base border-2 border-periwinkle shadow-[4px_4px_0_#A9B5DF]">
                        <h4 class="text-yellow-400 mb-3 text-lg border-b border-yellow-400/50 pb-1">🎁 EXPANSION PACK (ADD-ON):</h4>
                        <ul class="space-y-2 opacity-90 ml-2 text-sm md:text-base">
                            <li>> Foto Jadi Kartun/Vektor = <span class="text-red-400 font-bold">+5k</span></li>
                            <li>> Tambah Slot Foto = <span class="text-red-400 font-bold">+10k/3 foto</span></li>
                            <li>> Tambah Halaman Slide = <span class="text-red-400 font-bold">+10k/slide</span></li>
                            <li>> Ganti Tema di Tengah Jalan = <span class="text-red-400 font-bold">+15k</span></li>
                        </ul>
                    </div>
                </div>

                <div class="bg-softblue/30 border-2 border-dashed border-navy p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left">
                        <span class="font-pixel text-lg text-navy block mb-1">STARTS FROM:</span>
                        <span class="font-pixel text-4xl font-bold text-navy">Rp 50k</span>
                    </div>
                    <a href="https://wa.me/6285117776959?text=Halo%20anno.tech%2C%20saya%20tertarik%20bikin%20Undangan%20Digital" target="_blank" class="bg-navy text-white font-pixel text-xl md:text-2xl px-6 py-3 border-2 border-navy hover:bg-cream hover:text-navy transition-all transform hover:-translate-y-1 shadow-[4px_4px_0_#A9B5DF] hover:shadow-none focus:outline-none">Order_Now_></a>
                </div>
            </div>
        </div>
    </div>

    <!-- LIGHTBOX MODAL -->
    <div id="lightbox-modal" class="fixed inset-0 z-[110] hidden items-center justify-center bg-navy/90 backdrop-blur-md p-4 transition-all opacity-0">
        <div class="bg-cream border-4 border-navy shadow-[10px_10px_0_#7886C7] w-full max-w-4xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-periwinkle p-2 flex justify-between items-center text-white font-pixel text-xl border-b-4 border-navy">
                <span id="lightbox-title" class="flex items-center gap-2">📷 IMAGE_VIEWER.EXE</span>
                <button onclick="closeLightbox()" class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600 focus:outline-none">X</button>
            </div>
            <div class="p-4 md:p-6 relative">
                <div class="flex items-center justify-center h-[50vh] md:h-[65vh] bg-navy border-4 border-navy relative overflow-hidden group">
                    <img id="lightbox-img" src="" alt="View" class="max-w-full max-h-full object-contain transition-opacity duration-300">
                    
                    <!-- Navigation -->
                    <button onclick="prevImage()" class="absolute left-2 md:left-4 top-1/2 -translate-y-1/2 bg-cream text-navy font-pixel text-2xl w-10 h-10 border-2 border-navy hover:bg-periwinkle hover:text-white transition-all shadow-[4px_4px_0_#2D336B] hover:shadow-none translate-x-[-10px] group-hover:translate-x-0 opacity-0 group-hover:opacity-100 z-10">&lt;</button>
                    <button onclick="nextImage()" class="absolute right-2 md:right-4 top-1/2 -translate-y-1/2 bg-cream text-navy font-pixel text-2xl w-10 h-10 border-2 border-navy hover:bg-periwinkle hover:text-white transition-all shadow-[4px_4px_0_#2D336B] hover:shadow-none translate-x-[10px] group-hover:translate-x-0 opacity-0 group-hover:opacity-100 z-10">&gt;</button>
                </div>
                <div class="mt-4 flex justify-between items-center font-pixel text-navy bg-cream p-2">
                    <span id="lightbox-counter" class="bg-navy text-white px-3 py-1">1 / 5</span>
                    <span class="text-sm border-b-2 border-dashed border-navy">Use &lt; &gt; to navigate</span>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // 1. TYPED JS CONFIG
        var typed = new Typed('#typed-text', {
            strings: [
                'Web Development.',
                'AI & Machine Learning Project.',
                'Skripsi & Academic Assistance.',
                'System.out.println("Hello anno.tech");'
            ],
            contentType: 'text',
            typeSpeed: 40,
            backSpeed: 20,
            startDelay: 500,
            backDelay: 1500,
            loop: true,
            showCursor: true,
            cursorChar: '█',
        });

        // 2. GSAP ANIMATION
        gsap.from("section", { opacity: 0, y: 50, duration: 1, stagger: 0.2 });

        // 3. LOGIC POP-UP MODAL
        function openModal(modalID) {
            const modal = document.getElementById(modalID);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.firstElementChild.classList.remove('scale-90');
                modal.firstElementChild.classList.add('scale-100');
            }, 10);
        }

        function closeModal(modalID) {
            const modal = document.getElementById(modalID);
            modal.classList.add('opacity-0');
            modal.firstElementChild.classList.remove('scale-100');
            modal.firstElementChild.classList.add('scale-90');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        // Tutup modal jika klik di luar window
        window.onclick = function (event) {
            if (event.target.id.includes('modal-')) {
                closeModal(event.target.id);
            }
        }

        // 4. FAQ ACCORDION LOGIC
        document.querySelectorAll('.faq-item button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.icon');

                // Toggle current FAQ
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.textContent = '-';
                    button.classList.add('bg-periwinkle');
                } else {
                    content.classList.add('hidden');
                    icon.textContent = '+';
                    button.classList.remove('bg-periwinkle');
                }
            });
        });

        // 5. LIGHTBOX MODAL LOGIC
        const showcaseImages = {
            'web': [
                "{{ asset('assets/showcase/web/WhatsApp Image 2026-03-23 at 9.27.20 PM.jpeg') }}"
            ],
            'annogram': [
                "{{ asset('assets/showcase/annogram/Screenshot 2025-12-31 171947.png') }}",
                "{{ asset('assets/showcase/annogram/Screenshot 2025-12-31 173427.png') }}",
                "{{ asset('assets/showcase/annogram/Screenshot 2025-12-31 205808.png') }}",
                "{{ asset('assets/showcase/annogram/WhatsApp Image 2026-01-12 at 5.09.45 AM.jpeg') }}"
            ],
            'kurash': [
                "{{ asset('assets/showcase/kurash usul scoring/Screenshot 2026-01-12 051437.png') }}",
                "{{ asset('assets/showcase/kurash usul scoring/Screenshot 2026-01-12 051503.png') }}",
                "{{ asset('assets/showcase/kurash usul scoring/Screenshot 2026-01-12 051533.png') }}",
                "{{ asset('assets/showcase/kurash usul scoring/Screenshot 2026-01-12 051559.png') }}",
                "{{ asset('assets/showcase/kurash usul scoring/Screenshot 2026-01-12 051617.png') }}"
            ],
            'woodball': [
                "{{ asset('assets/showcase/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.37 PM (1).jpeg') }}",
                "{{ asset('assets/showcase/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.37 PM.jpeg') }}",
                "{{ asset('assets/showcase/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.38 PM.jpeg') }}",
                "{{ asset('assets/showcase/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.39 PM.jpeg') }}",
                "{{ asset('assets/showcase/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.40 PM.jpeg') }}"
            ],
            'siniops': [
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.09 AM.jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.10 AM (1).jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.10 AM.jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.11 AM (1).jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.11 AM.jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.12 AM (1).jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.12 AM (2).jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.12 AM.jpeg') }}",
                "{{ asset('assets/showcase/siniops/WhatsApp Image 2026-01-12 at 5.23.13 AM.jpeg') }}"
            ]
        };

        let currentGallery = [];
        let currentGalleryIndex = 0;

        function openLightbox(projectKey, title) {
            currentGallery = showcaseImages[projectKey];
            if (!currentGallery || currentGallery.length === 0) return;
            
            currentGalleryIndex = 0;
            document.getElementById('lightbox-title').innerHTML = `📷 ` + title;
            updateLightboxImage();

            const modal = document.getElementById('lightbox-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.firstElementChild.classList.remove('scale-90');
                modal.firstElementChild.classList.add('scale-100');
            }, 10);
        }

        function closeLightbox() {
            const modal = document.getElementById('lightbox-modal');
            modal.classList.add('opacity-0');
            modal.firstElementChild.classList.remove('scale-100');
            modal.firstElementChild.classList.add('scale-90');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        function updateLightboxImage() {
            const img = document.getElementById('lightbox-img');
            img.style.opacity = 0;
            setTimeout(() => {
                img.src = currentGallery[currentGalleryIndex];
                img.style.opacity = 1;
            }, 150);
            
            document.getElementById('lightbox-counter').textContent = `${currentGalleryIndex + 1} / ${currentGallery.length}`;
        }

        function nextImage() {
            if (!currentGallery || currentGallery.length === 0) return;
            currentGalleryIndex = (currentGalleryIndex + 1) % currentGallery.length;
            updateLightboxImage();
        }

        function prevImage() {
            if (!currentGallery || currentGallery.length === 0) return;
            currentGalleryIndex = (currentGalleryIndex - 1 + currentGallery.length) % currentGallery.length;
            updateLightboxImage();
        }

        // Add keyboard support to lightbox
        document.addEventListener('keydown', (e) => {
            const modal = document.getElementById('lightbox-modal');
            if (modal && !modal.classList.contains('hidden')) {
                if (e.key === 'ArrowRight') nextImage();
                if (e.key === 'ArrowLeft') prevImage();
                if (e.key === 'Escape') closeLightbox();
            }
        });
    </script>
@endpush