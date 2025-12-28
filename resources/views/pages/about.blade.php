@extends('layouts.app')

@section('title', 'About Player 1 | anno.tech')

@section('content')

<div class="fixed inset-0 z-[-1] pointer-events-none opacity-20">
    <div class="absolute top-1/4 left-10 text-9xl text-navy rotate-12">💾</div>
    <div class="absolute bottom-1/4 right-10 text-9xl text-navy -rotate-12">🕹️</div>
</div>

<div class="container mx-auto px-4 pt-32 pb-20 max-w-5xl">

    <div class="bg-cream border-4 border-navy rounded-xl shadow-[8px_8px_0_#2D336B] p-6 md:p-10 mb-12 relative overflow-hidden" data-tilt>
        
        <div class="absolute top-4 right-4 bg-red-500 text-white font-pixel px-3 py-1 rounded border-2 border-navy text-sm transform rotate-3">
            PLAYER_1
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            
            <div class="relative group">
                <div class="w-40 h-40 md:w-56 md:h-56 bg-softblue border-4 border-navy rounded-xl overflow-hidden shadow-[6px_6px_0_rgba(45,51,107,0.3)] group-hover:scale-105 transition-transform">
                    <img src="https://api.dicebear.com/7.x/pixel-art/svg?seed=Aldi&backgroundColor=b6e3f4" 
                         alt="Profile Avatar" 
                         class="w-full h-full object-cover pixelated">
                </div>
                <div class="absolute -bottom-4 -right-4 bg-navy text-cream font-pixel px-4 py-1 rounded border-2 border-cream shadow-md">
                    LVL. 99
                </div>
            </div>

            <div class="flex-1 text-center md:text-left">
                <h1 class="font-pixel text-5xl md:text-7xl text-navy mb-2">
                    ALDI<span class="text-periwinkle">.DEV</span>
                </h1>
                <div class="font-pixel text-xl text-navy/70 mb-6 border-b-2 border-navy/20 pb-4 inline-block">
                    Fullstack Developer & Data Wizard
                </div>
                
                <p class="font-body text-navy leading-relaxed mb-6">
                    "Halo! Saya adalah otak di balik <b>anno.tech</b>. Saya mengubah kopi menjadi baris kode yang rapi. 
                    Spesialisasi saya adalah membantu mahasiswa survive dari Skripsi dan membantu bisnis go-digital dengan aplikasi yang efisien."
                </p>

                <div class="flex flex-wrap justify-center md:justify-start gap-4 font-pixel text-sm">
                    <div class="bg-white px-3 py-1 border-2 border-navy rounded">📍 Location: Surabaya</div>
                    <div class="bg-white px-3 py-1 border-2 border-navy rounded">⚡ Status: Open to Work</div>
                    <div class="bg-white px-3 py-1 border-2 border-navy rounded">☕ Coffee: Required</div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        
        <div class="bg-white/50 border-4 border-navy rounded-xl p-6 shadow-[6px_6px_0_rgba(45,51,107,0.15)]">
            <h2 class="font-pixel text-3xl text-navy mb-6 flex items-center gap-2">
                <span>🛠️</span> TECH_STACK
            </h2>
            
            <div class="space-y-4 font-pixel text-lg">
                <div>
                    <div class="flex justify-between mb-1">
                        <span>PHP / Laravel</span>
                        <span>95%</span>
                    </div>
                    <div class="w-full bg-cream border-2 border-navy h-4 rounded-full overflow-hidden">
                        <div class="bg-navy h-full w-[95%] animate-pulse"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-1">
                        <span>Flutter / Mobile</span>
                        <span>85%</span>
                    </div>
                    <div class="w-full bg-cream border-2 border-navy h-4 rounded-full overflow-hidden">
                        <div class="bg-periwinkle h-full w-[85%]"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-1">
                        <span>Python / AI</span>
                        <span>90%</span>
                    </div>
                    <div class="w-full bg-cream border-2 border-navy h-4 rounded-full overflow-hidden">
                        <div class="bg-softblue h-full w-[90%]"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white/50 border-4 border-navy rounded-xl p-6 shadow-[6px_6px_0_rgba(45,51,107,0.15)]">
            <h2 class="font-pixel text-3xl text-navy mb-6 flex items-center gap-2">
                <span>🎒</span> INVENTORY
            </h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-cream border-2 border-navy p-3 rounded flex items-center gap-3">
                    <span class="text-2xl">⚡</span>
                    <span class="font-pixel">Laragon</span>
                </div>
                <div class="bg-cream border-2 border-navy p-3 rounded flex items-center gap-3">
                    <span class="text-2xl">📝</span>
                    <span class="font-pixel">VS Code</span>
                </div>
                <div class="bg-cream border-2 border-navy p-3 rounded flex items-center gap-3">
                    <span class="text-2xl">🎨</span>
                    <span class="font-pixel">Figma</span>
                </div>
                <div class="bg-cream border-2 border-navy p-3 rounded flex items-center gap-3">
                    <span class="text-2xl">🤖</span>
                    <span class="font-pixel">ChatGPT</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-navy text-cream border-4 border-periwinkle rounded-xl p-8 text-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/graphy.png');"></div>
        
        <h2 class="font-pixel text-4xl mb-4 relative z-10">MISSION OBJECTIVE</h2>
        <p class="font-body text-lg max-w-2xl mx-auto mb-8 relative z-10 text-white/80">
            "Menghapus stigma bahwa koding itu menyeramkan. 
            Membangun solusi digital yang tidak hanya canggih secara fungsi, 
            tapi juga estetik dan menyenangkan untuk digunakan."
        </p>
        
        <a href="https://wa.me/628xxxxxxx" class="inline-block bg-periwinkle text-white font-pixel text-xl px-8 py-3 rounded-lg border-2 border-white shadow-[4px_4px_0_#000] hover:scale-105 hover:bg-cream hover:text-navy transition-all relative z-10">
            Start_Collaboration_>
        </a>
    </div>

</div>

@endsection