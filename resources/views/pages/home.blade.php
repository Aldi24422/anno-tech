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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-navy translate-x-4 translate-y-4"></div>
                    <div
                        class="relative bg-cream border-4 border-navy p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div
                            class="bg-softblue w-16 h-16 border-2 border-navy flex items-center justify-center text-3xl mb-4 shadow-[4px_4px_0_#2D336B]">
                            🖥️</div>
                        <h3 class="font-pixel text-4xl mb-4 text-navy">WEB_DEV</h3>
                        <p class="font-body text-navy/80 mb-6 flex-grow border-l-4 border-periwinkle pl-4">Bikin website
                            jangan cuma asal jadi. Kami buat yang estetik, kencang, dan responsif.</p>
                        <button onclick="openModal('modal-web')"
                            class="font-pixel text-xl text-right hover:text-periwinkle block mt-auto w-full text-left">
                            Details_>>>
                        </button>
                    </div>
                </div>

                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-navy translate-x-4 translate-y-4"></div>
                    <div
                        class="relative bg-cream border-4 border-navy p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div
                            class="bg-softblue w-16 h-16 border-2 border-navy flex items-center justify-center text-3xl mb-4 shadow-[4px_4px_0_#2D336B]">
                            🤖</div>
                        <h3 class="font-pixel text-4xl mb-4 text-navy">AI & DATA</h3>
                        <p class="font-body text-navy/80 mb-6 flex-grow border-l-4 border-periwinkle pl-4">Biarkan data yang
                            bicara. Machine Learning, Python Analysis, hingga Deep Learning.</p>
                        <button onclick="openModal('modal-ai')"
                            class="font-pixel text-xl text-right hover:text-periwinkle block mt-auto w-full text-left">
                            Details_>>>
                        </button>
                    </div>
                </div>

                <div class="group relative" data-tilt>
                    <div class="absolute top-0 left-0 w-full h-full bg-periwinkle translate-x-4 translate-y-4"></div>
                    <div
                        class="relative bg-navy border-4 border-navy p-6 transition-transform group-hover:-translate-y-2 group-hover:-translate-x-2 h-full flex flex-col">
                        <div
                            class="absolute -top-6 -right-6 bg-red-500 text-white font-pixel px-4 py-2 border-2 border-navy shadow-[4px_4px_0_#000] rotate-12 z-20">
                            BEST SELLER!</div>
                        <div
                            class="bg-cream w-16 h-16 border-2 border-white flex items-center justify-center text-3xl mb-4 shadow-[4px_4px_0_#A9B5DF]">
                            🎓</div>
                        <h3 class="font-pixel text-4xl mb-4 text-cream">SKRIPSI_KIT</h3>
                        <p class="font-body text-softblue mb-6 flex-grow border-l-4 border-cream pl-4">Paket Penyelamat
                            Semester Akhir. Judul, App, Dokumen Bab 1-5. Terima Beres & Paham.</p>
                        <button onclick="openModal('modal-skripsi')"
                            class="font-pixel text-xl text-right text-cream hover:text-softblue block mt-auto w-full text-left">
                            Order_Now_>>>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="modal-web"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div
            class="bg-cream border-4 border-navy shadow-[10px_10px_0_#2D336B] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-navy p-2 flex justify-between items-center text-white font-pixel text-xl">
                <span class="flex items-center gap-2">🖥️ WEB_DEV_DETAILS.TXT</span>
                <button onclick="closeModal('modal-web')"
                    class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[80vh]">
                <h3 class="font-pixel text-4xl text-navy mb-2">Web Development</h3>
                <p class="font-body text-navy/70 mb-6 italic border-b-2 border-navy/20 pb-4">"Membangun identitas digital
                    yang fungsional & estetik."</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">✅</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Company Profile</h4>
                            <p class="text-sm">Desain unik, SEO friendly, dan loading cepat.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">✅</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Web Apps (Laravel/PHP)</h4>
                            <p class="text-sm">Sistem manajemen, kasir, inventaris, dll.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">✅</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Responsive Design</h4>
                            <p class="text-sm">Tampil sempurna di HP, Tablet, dan Desktop.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-softblue/30 border-2 border-dashed border-navy p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left"><span class="font-pixel text-lg text-navy block">ESTIMATED
                            PRICE:</span><span class="font-pixel text-4xl font-bold text-navy">Start from Rp 1.500k</span>
                    </div>
                    <a href="https://wa.me/628xxxxxxx?text=Halo%20anno.tech%2C%20saya%20tertarik%20Web%20Dev"
                        target="_blank"
                        class="bg-navy text-white font-pixel text-xl px-6 py-2 border-2 border-navy hover:bg-cream hover:text-navy transition-all">Consult_Now_></a>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-ai"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div
            class="bg-cream border-4 border-navy shadow-[10px_10px_0_#2D336B] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div class="bg-navy p-2 flex justify-between items-center text-white font-pixel text-xl">
                <span class="flex items-center gap-2">🤖 AI_DATA_ANALYSIS.EXE</span>
                <button onclick="closeModal('modal-ai')"
                    class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[80vh]">
                <h3 class="font-pixel text-4xl text-navy mb-2">AI & Data Science</h3>
                <p class="font-body text-navy/70 mb-6 italic border-b-2 border-navy/20 pb-4">"Mengubah data mentah menjadi
                    keputusan cerdas."</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">📊</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Data Processing</h4>
                            <p class="text-sm">Cleaning & Merapikan dataset yang berantakan.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">🧠</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Machine Learning</h4>
                            <p class="text-sm">Prediksi, Klasifikasi, Clustering (Python).</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">📈</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Interactive Dashboard</h4>
                            <p class="text-sm">Visualisasi data real-time (Streamlit/Tableau).</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-softblue/30 border-2 border-dashed border-navy p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left"><span class="font-pixel text-lg text-navy block">ESTIMATED
                            PRICE:</span><span class="font-pixel text-4xl font-bold text-navy">Start from Rp 2.000k</span>
                    </div>
                    <a href="https://wa.me/628xxxxxxx?text=Halo%20anno.tech%2C%20saya%20butuh%20jasa%20AI/Data"
                        target="_blank"
                        class="bg-navy text-white font-pixel text-xl px-6 py-2 border-2 border-navy hover:bg-cream hover:text-navy transition-all">Consult_Now_></a>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-skripsi"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy/80 backdrop-blur-sm p-4 transition-all opacity-0">
        <div
            class="bg-cream border-4 border-navy shadow-[10px_10px_0_#7886C7] w-full max-w-2xl transform scale-90 transition-all duration-300 relative">
            <div
                class="bg-periwinkle p-2 flex justify-between items-center text-white font-pixel text-xl border-b-4 border-navy">
                <span class="flex items-center gap-2">🎓 FINAL_PROJECT_RESCUE.ZIP</span>
                <button onclick="closeModal('modal-skripsi')"
                    class="bg-red-500 w-8 h-8 border-2 border-white flex items-center justify-center hover:bg-red-600">X</button>
            </div>
            <div class="p-6 md:p-8 overflow-y-auto max-h-[80vh]">
                <h3 class="font-pixel text-4xl text-navy mb-2">Skripsi Full Kit</h3>
                <p class="font-body text-navy/70 mb-6 italic border-b-2 border-navy/20 pb-4">"Partner terbaik biar cepat
                    lulus tahun ini."</p>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 p-3 mb-6 text-sm text-yellow-800">⚠️
                    <b>Disclaimer:</b> Kami membantu coding & pemahaman, bukan joki ijazah palsu.</div>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">💻</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Full Source Code</h4>
                            <p class="text-sm">Aplikasi jadi sesuai judul (Web/Mobile/AI).</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">📄</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Dokumen Bab 4 & 5</h4>
                            <p class="text-sm">Bantuan penyusunan hasil pembahasan.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">🤝</span>
                        <div>
                            <h4 class="font-bold text-navy font-pixel text-xl">Private Mentoring</h4>
                            <p class="text-sm">Diajarin sampe paham codingannya buat sidang.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-navy text-cream border-2 border-dashed border-periwinkle p-4 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left"><span class="font-pixel text-lg text-softblue block">SPECIAL
                            PRICE:</span><span class="font-pixel text-4xl font-bold">Start from Rp 2.500k</span></div>
                    <a href="https://wa.me/628xxxxxxx?text=Halo%20anno.tech%2C%20bantu%20Skripsi%20saya%20dong"
                        target="_blank"
                        class="bg-cream text-navy font-pixel text-xl px-6 py-2 border-2 border-white hover:bg-periwinkle hover:text-white transition-all">SOS_Help_></a>
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
    </script>
@endpush