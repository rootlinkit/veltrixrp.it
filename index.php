<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeltrixRP | Official Website</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #ff6b00;
            --bg: #0a0a0a;
        }

        body {
            background-color: var(--bg);
            color: white;
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
        }

        #loader {
            position: fixed;
            inset: 0;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            transition: opacity 0.8s cubic-bezier(0.65, 0, 0.35, 1), visibility 0.8s;
        }

        .loader-content {
            position: relative;
            width: 150px;
            height: 150px;
        }

        .logo-gray {
            position: absolute;
            width: 100%;
            opacity: 0.2;
            filter: grayscale(1);
        }

        .logo-color {
            position: absolute;
            width: 100%;
            clip-path: inset(100% 0 0 0);
            animation: fillLogo 2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        @keyframes fillLogo {
            0% { clip-path: inset(100% 0 0 0); }
            100% { clip-path: inset(0 0 0 0); }
        }

        .loader-ring {
            position: absolute;
            inset: -20px;
            border: 2px solid transparent;
            border-top-color: var(--primary);
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .hero-gradient {
            background: linear-gradient(180deg, rgba(10, 10, 10, 0.2) 0%, rgba(10, 10, 10, 1) 100%);
        }

        .nav-glass {
            background: rgba(10, 10, 10, 0.0);
            transition: all 0.4s ease;
        }

        .nav-active {
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(10px);
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 107, 0, 0.1);
        }

        .btn-premium {
            position: relative;
            background: var(--primary);
            color: black;
            font-weight: 700;
            text-transform: uppercase;
            padding: 1rem 2.5rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            overflow: hidden;
            z-index: 1;
        }

        .btn-premium:hover {
            color: white;
            box-shadow: 0 0 30px rgba(255, 107, 0, 0.4);
            transform: translateY(-2px);
        }

        .btn-premium::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: #000;
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn-premium:hover::before {
            left: 0;
        }

        .stat-card {
            background: linear-gradient(145deg, #121212 0%, #080808 100%);
            border: 1px solid rgba(255, 255, 255, 0.03);
            transition: border 0.3s ease;
        }

        .stat-card:hover {
            border-color: var(--primary);
        }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #0a0a0a; }
        ::-webkit-scrollbar-thumb { background: var(--primary); }
    </style>
</head>
<body>

    <div id="loader">
        <div class="loader-content">
            <div class="loader-ring"></div>
            <img src="assets/logo.png" class="logo-gray">
            <img src="assets/logo.png" class="logo-color">
        </div>
    </div>

    <nav id="navbar" class="fixed w-full z-[1000] px-8 md:px-16 py-8 flex justify-between items-center nav-glass">
        <div class="flex items-center gap-12">
            <img src="assets/logo.png" class="w-12">
            <div class="hidden md:flex gap-8 text-sm font-bold uppercase tracking-[2px]">
                <a href="#" class="hover:text-[#ff6b00] transition">Home</a>
                <a href="https://store.veltrixrp.it" class="hover:text-[#ff6b00] transition">Store</a>
                <a href="#" class="hover:text-[#ff6b00] transition">Regolamento</a>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <a href="https://discord.veltrixrp.it" class="text-xl hover:text-[#ff6b00] transition"><i class="fa-brands fa-discord"></i></a>
            <a href="#" class="bg-white/5 hover:bg-white/10 px-6 py-2 rounded text-xs font-bold uppercase tracking-widest transition">Entra in Città</a>
        </div>
    </nav>

    <header class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://r4.wallpaperflare.com/wallpaper/74/436/533/gta-v-gta-5-video-games-grand-theft-auto-wallpaper-8900086dc1ca3d3b769738dfc0f17662.jpg" class="w-full h-full object-cover scale-110">
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <div class="relative z-10 text-center px-4" data-aos="fade-up" data-aos-duration="1500">
            <h4 class="text-[#ff6b00] font-bold tracking-[8px] uppercase mb-4 text-sm md:text-base">Benvenuto nel Futuro</h4>
            <h1 class="text-6xl md:text-8xl font-black uppercase italic mb-8 tracking-tighter">VELTRIX<span class="text-[#ff6b00]">RP</span></h1>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg md:text-xl font-light leading-relaxed mb-10">
                L'esperienza definitiva di Roleplay italiano. Qualità tecnica senza compromessi, 
                storie senza limiti e una community che non dorme mai.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="#" class="btn-premium">Inizia Ora</a>
                <a href="#" class="bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white hover:text-black px-10 py-4 font-bold uppercase tracking-widest transition-all duration-500">Esplora lo Store</a>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 text-white/20 animate-bounce">
            <i class="fa-solid fa-chevron-down text-2xl"></i>
        </div>
    </header>

    <section class="py-32 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="stat-card p-12 rounded-2xl text-center" data-aos="fade-up">
                <i class="fa-solid fa-users text-[#ff6b00] text-3xl mb-6"></i>
                <h3 class="text-5xl font-bold mb-2 tracking-tighter italic">300K</h3>
                <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Giocatori Registrati</p>
            </div>
            <div class="stat-card p-12 rounded-2xl text-center border-t-2 !border-t-[#ff6b00]" data-aos="fade-up" data-aos-delay="200">
                <i class="fa-solid fa-signal text-[#ff6b00] text-3xl mb-6"></i>
                <h3 class="text-5xl font-bold mb-2 tracking-tighter italic">500+</h3>
                <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Slot Disponibili</p>
            </div>
            <div class="stat-card p-12 rounded-2xl text-center" data-aos="fade-up" data-aos-delay="400">
                <i class="fa-solid fa-microchip text-[#ff6b00] text-3xl mb-6"></i>
                <h3 class="text-5xl font-bold mb-2 tracking-tighter italic">ZERO</h3>
                <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Latenza Rilevata</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#080808]">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-20">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <div class="relative">
                    <div class="absolute -inset-2 bg-[#ff6b00]/10 blur-2xl rounded-full"></div>
                    <img src="assets/logo-square.png" class="relative rounded-2xl border border-white/5 shadow-2xl">
                </div>
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <h2 class="text-5xl font-black uppercase italic mb-8">La Nostra <span class="text-[#ff6b00]">Identità</span></h2>
                <p class="text-gray-400 text-xl leading-relaxed mb-8 italic border-l-4 border-[#ff6b00] pl-8">
                    VeltrixRP nasce con l'obiettivo di abbattere le barriere tra gioco e realtà. 
                    Utilizziamo tecnologie proprietarie per garantire una stabilità mai vista prima. 
                    Non giochiamo a fare Roleplay, creiamo mondi.
                </p>
                <div class="grid grid-cols-2 gap-6 text-sm font-bold uppercase tracking-widest">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-[#ff6b00]"></i> Script Custom</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-[#ff6b00]"></i> Staff 24/7</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-[#ff6b00]"></i> Economia Reale</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-[#ff6b00]"></i> Eventi Unici</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black pt-32 pb-12 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-16 border-b border-white/5 pb-20">
            <div class="col-span-1 md:col-span-2">
                <img src="assets/logo.png" class="w-16 mb-8">
                <h3 class="text-2xl font-black uppercase italic mb-6">VELTRIX<span class="text-[#ff6b00]">RP</span></h3>
                <p class="text-gray-500 max-w-sm leading-relaxed mb-8 text-sm uppercase tracking-wider">
                    Innovazione costante. Performance elevate. Community al centro di tutto. 
                    Unisciti al network di Roleplay più avanzato d'Italia.
                </p>
                <div class="flex gap-6 text-xl text-gray-400">
                    <a href="#" class="hover:text-[#ff6b00] transition"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#" class="hover:text-[#ff6b00] transition"><i class="fa-brands fa-twitch"></i></a>
                    <a href="#" class="hover:text-[#ff6b00] transition"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-bold uppercase tracking-[3px] mb-8 text-sm">Navigazione</h4>
                <ul class="text-gray-500 space-y-4 text-xs font-bold uppercase tracking-widest">
                    <li><a href="#" class="hover:text-white transition">Database</a></li>
                    <li><a href="#" class="hover:text-white transition">Whitelist</a></li>
                    <li><a href="#" class="hover:text-white transition">Supporto</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold uppercase tracking-[3px] mb-8 text-sm">Informazioni</h4>
                <ul class="text-gray-500 space-y-4 text-xs font-bold uppercase tracking-widest">
                    <li><a href="#" class="hover:text-white transition">Regolamento</a></li>
                    <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition">TOS</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-12 flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-600 font-bold uppercase tracking-[4px]">
            <div>© <?php echo date("Y"); ?> VELTRIXRP NETWORK</div>
            <div class="mt-4 md:mt-0 italic">
                Powered by <a href="https://rootlink.it" class="text-white hover:text-[#ff6b00] transition">RootLink.it</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.style.opacity = '0';
                loader.style.visibility = 'hidden';
            }, 2500);
        });

        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('nav-active');
            } else {
                nav.classList.remove('nav-active');
            }
        });
    </script>
</body>
</html>