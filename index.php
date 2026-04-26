<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeltrixRP | The Apex of Roleplay</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #ff6b00;
            --bg: #050505;
        }

        body {
            background-color: var(--bg);
            color: white;
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
        }

        .font-gta { font-family: 'Bebas Neue', cursive; }

        #loader {
            position: fixed;
            inset: 0;
            background: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }

        .loader-wrapper {
            position: relative;
            width: 180px;
            height: 180px;
        }

        .logo-base {
            position: absolute;
            width: 100%;
            opacity: 0.1;
            filter: grayscale(1) brightness(0.5);
        }

        .logo-fill {
            position: absolute;
            width: 100%;
            clip-path: inset(100% 0 0 0);
            animation: fillAnim 2s cubic-bezier(0.45, 0.05, 0.55, 0.95) forwards;
            filter: drop-shadow(0 0 15px rgba(255, 107, 0, 0.5));
        }

        @keyframes fillAnim {
            0% { clip-path: inset(100% 0 0 0); }
            100% { clip-path: inset(0 0 0 0); }
        }

        .loader-bar {
            width: 200px;
            height: 2px;
            background: rgba(255, 255, 255, 0.1);
            margin-top: 40px;
            position: relative;
            overflow: hidden;
        }

        .loader-progress {
            position: absolute;
            height: 100%;
            width: 0%;
            background: var(--primary);
            animation: barAnim 2.5s ease-in-out forwards;
        }

        @keyframes barAnim {
            0% { width: 0%; }
            100% { width: 100%; }
        }

        .hero-mask {
            background: radial-gradient(circle at center, rgba(0,0,0,0) 0%, rgba(5,5,5,1) 90%);
        }

        .nav-item {
            position: relative;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 0.8rem;
            transition: color 0.3s;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            width: 0; height: 2px;
            bottom: -4px; left: 0;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-item:hover::after { width: 100%; }
        .nav-item:hover { color: var(--primary); }

        .btn-connect {
            background: var(--primary);
            color: black;
            font-family: 'Bebas Neue';
            font-size: 1.5rem;
            padding: 0.75rem 3rem;
            clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
            transition: all 0.3s ease;
        }

        .btn-connect:hover {
            transform: scale(1.05) skewX(-5deg);
            box-shadow: 0 0 30px rgba(255, 107, 0, 0.6);
            background: white;
        }

        .feature-card {
            background: #0d0d0d;
            border-bottom: 3px solid transparent;
            transition: all 0.4s;
        }

        .feature-card:hover {
            background: #141414;
            border-bottom-color: var(--primary);
            transform: translateY(-10px);
        }

        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: var(--primary); }
    </style>
</head>
<body>

    <div id="loader">
        <div class="loader-wrapper">
            <img src="assets/logo.png" class="logo-base">
            <img src="assets/logo.png" class="logo-fill">
        </div>
        <div class="loader-bar">
            <div class="loader-progress"></div>
        </div>
        <div class="mt-4 font-gta tracking-[5px] text-xs opacity-50">INITIALIZING_SYSTEM</div>
    </div>

    <nav id="navbar" class="fixed w-full z-[100] px-12 py-8 flex justify-between items-center transition-all duration-500">
        <div class="flex items-center gap-16">
            <img src="assets/logo.png" class="w-10">
            <div class="hidden lg:flex gap-10">
                <a href="#" class="nav-item">Dashboard</a>
                <a href="https://store.veltrixrp.it" class="nav-item">Store</a>
                <a href="#" class="nav-item">Regolamento</a>
                <a href="#" class="nav-item">Whitelist</a>
            </div>
        </div>
        <div class="flex items-center gap-8">
            <div class="hidden sm:flex items-center gap-3 border-r border-white/10 pr-8">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                <span class="font-gta tracking-widest text-sm">412 Players Online</span>
            </div>
            <a href="https://discord.veltrixrp.it" class="text-2xl hover:text-[#ff6b00] transition"><i class="fa-brands fa-discord"></i></a>
        </div>
    </nav>

    <header class="relative h-screen w-full flex items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img src="https://r4.wallpaperflare.com/wallpaper/74/436/533/gta-v-gta-5-video-games-grand-theft-auto-wallpaper-8900086dc1ca3d3b769738dfc0f17662.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-mask"></div>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="relative z-10 text-center" data-aos="zoom-in" data-aos-duration="1500">
            <h1 class="font-gta text-[120px] md:text-[180px] leading-none tracking-tighter mb-4">
                VELTRIX<span class="text-[#ff6b00]">RP</span>
            </h1>
            <p class="font-light text-xl md:text-2xl tracking-[10px] uppercase text-white/70 mb-12">
                The Ultimate FiveM Experience
            </p>
            <div class="flex flex-col md:flex-row gap-8 justify-center items-center">
                <a href="fivem://connect/veltrixrp.it" class="btn-connect">Connettiti Ora</a>
                <a href="#about" class="font-gta text-xl tracking-widest border-b-2 border-white/20 hover:border-[#ff6b00] transition-all pb-1">Scopri di più</a>
            </div>
        </div>

        <div class="absolute bottom-10 left-12 hidden md:block">
            <p class="font-gta text-xs tracking-[5px] text-white/30 uppercase">Coordinates: 34.0522° N, 118.2437° W</p>
        </div>
    </header>

    <section id="about" class="py-32 px-6 bg-[#050505]">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
            <div data-aos="fade-right">
                <h2 class="font-gta text-6xl mb-8">Ridefiniamo il <span class="text-[#ff6b00]">Roleplay</span></h2>
                <div class="space-y-6 text-lg text-white/50 leading-relaxed font-light">
                    <p>Su VeltrixRP non trovi solo un server, ma un'infrastruttura dedicata alla simulazione estrema. Ogni script è ottimizzato per garantire zero lag e la massima immersione possibile.</p>
                    <p>Dalle rapine dinamiche alla gestione politica della città, ogni tua azione scrive una pagina della storia di Veltrix.</p>
                </div>
                <div class="grid grid-cols-2 gap-8 mt-12">
                    <div>
                        <h4 class="text-[#ff6b00] font-gta text-4xl">300K+</h4>
                        <p class="text-xs uppercase tracking-widest opacity-50">Utenti Registrati</p>
                    </div>
                    <div>
                        <h4 class="text-[#ff6b00] font-gta text-4xl">144</h4>
                        <p class="text-xs uppercase tracking-widest opacity-50">FPS Medi</p>
                    </div>
                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute -inset-4 bg-[#ff6b00]/20 blur-3xl rounded-full"></div>
                <img src="assets/logo-square.png" class="relative rounded-lg border border-white/5 grayscale hover:grayscale-0 transition duration-1000 shadow-2xl">
            </div>
        </div>
    </section>

    <section class="py-32 px-6 bg-[#080808]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-gta text-5xl tracking-widest uppercase">Perchè noi?</h2>
                <div class="w-20 h-1 bg-[#ff6b00] mx-auto mt-4"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="feature-card p-12" data-aos="fade-up">
                    <i class="fa-solid fa-server text-[#ff6b00] text-4xl mb-8"></i>
                    <h3 class="font-gta text-3xl mb-4">Infrastruttura Apex</h3>
                    <p class="text-white/40 leading-relaxed uppercase text-xs tracking-wider font-bold">Hardware dedicato e protezione DDoS di livello enterprise per sessioni di gioco ininterrotte.</p>
                </div>
                <div class="feature-card p-12" data-aos="fade-up" data-aos-delay="200">
                    <i class="fa-solid fa-code text-[#ff6b00] text-4xl mb-8"></i>
                    <h3 class="font-gta text-3xl mb-4">Script Esclusivi</h3>
                    <p class="text-white/40 leading-relaxed uppercase text-xs tracking-wider font-bold">Sistemi creati da zero: dal tuning dei veicoli alla gestione dei magazzini illegali.</p>
                </div>
                <div class="feature-card p-12" data-aos="fade-up" data-aos-delay="400">
                    <i class="fa-solid fa-headset text-[#ff6b00] text-4xl mb-8"></i>
                    <h3 class="font-gta text-3xl mb-4">Staff Support</h3>
                    <p class="text-white/40 leading-relaxed uppercase text-xs tracking-wider font-bold">Un team di amministratori maturo e sempre presente per garantirti la miglior esperienza RP.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black pt-32 pb-12 px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-16 border-b border-white/5 pb-24 mb-12">
            <div class="max-w-sm">
                <h3 class="font-gta text-4xl mb-6">VELTRIX<span class="text-[#ff6b00]">RP</span></h3>
                <p class="text-white/30 uppercase text-xs tracking-widest leading-loose">
                    Domina le strade, costruisci il tuo impero, vivi la tua seconda vita. La città ti aspetta.
                </p>
            </div>
            <div class="flex flex-wrap gap-16">
                <div class="space-y-4">
                    <h4 class="font-gta text-xl text-[#ff6b00] tracking-widest">Social</h4>
                    <div class="flex gap-6 text-xl opacity-40 hover:opacity-100 transition">
                        <a href="#"><i class="fa-brands fa-instagram hover:text-[#ff6b00]"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok hover:text-[#ff6b00]"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube hover:text-[#ff6b00]"></i></a>
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="font-gta text-xl text-[#ff6b00] tracking-widest">Sito</h4>
                    <ul class="text-xs uppercase tracking-[3px] text-white/30 space-y-2">
                        <li><a href="#" class="hover:text-white transition">Store</a></li>
                        <li><a href="#" class="hover:text-white transition">Regole</a></li>
                        <li><a href="#" class="hover:text-white transition">Wiki</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center font-gta text-sm tracking-[5px] opacity-20">
            <div>© 2025 VELTRIXRP PROJECT</div>
            <div class="mt-4 md:mt-0">DEVELOPED BY ROOTLINK.IT</div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.style.transition = 'all 1s ease';
                loader.style.opacity = '0';
                loader.style.visibility = 'hidden';
            }, 3000);
        });

        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(0,0,0,0.95)';
                nav.style.padding = '1.5rem 3rem';
                nav.style.borderBottom = '1px solid rgba(255,107,0,0.2)';
            } else {
                nav.style.background = 'transparent';
                nav.style.padding = '2rem 3rem';
                nav.style.borderBottom = 'none';
            }
        });
    </script>
</body>
</html>