<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeltrixRP | The Ultimate Experience</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #ff6b00;
            --primary-glow: rgba(255, 107, 0, 0.4);
            --bg-dark: #050505;
        }

        body {
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
        }

        body::before {
            content: " ";
            display: block;
            position: fixed;
            top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), 
                        linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.01), rgba(0, 255, 255, 0.03));
            z-index: 9999;
            background-size: 100% 4px, 3px 100%;
            pointer-events: none;
        }

        .hero-section {
            background: linear-gradient(rgba(5, 5, 5, 0.6), rgba(5, 5, 5, 0.9)), 
                        url('https://r4.wallpaperflare.com/wallpaper/74/436/533/gta-v-gta-5-video-games-grand-theft-auto-wallpaper-8900086dc1ca3d3b769738dfc0f17662.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .orange-accent { color: var(--primary); }
        .bg-orange-accent { background-color: var(--primary); }
        
        .glass-card {
            background: rgba(20, 20, 20, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .glass-card:hover {
            border-color: var(--primary);
            transform: translateY(-10px);
            box-shadow: 0 10px 30px -10px var(--primary-glow);
        }

        .btn-main {
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
        }

        .btn-main:hover {
            transform: skewX(-5deg) scale(1.05);
            box-shadow: 0 0 25px var(--primary);
        }

        .status-pulse {
            width: 10px;
            height: 10px;
            background: #00ff88;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
            box-shadow: 0 0 10px #00ff88;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 255, 136, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(0, 255, 136, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 255, 136, 0); }
        }

        .text-glow {
            text-shadow: 0 0 15px var(--primary-glow);
        }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #080808; }
        ::-webkit-scrollbar-thumb { background: var(--primary); border-radius: 10px; }

        .title-font { font-family: 'Syncopate', sans-serif; }
    </style>
</head>
<body>

    <div class="fixed w-full z-[60] bg-black/90 text-[10px] uppercase tracking-[3px] py-1 px-8 border-b border-white/5 flex justify-between items-center">
        <div><span class="status-pulse"></span> Server Status: <span class="text-[#00ff88]">Online</span></div>
        <div class="hidden md:block">Benvenuto nel futuro del Roleplay Italiano</div>
        <div>Player Online: <span class="orange-accent">412/512</span></div>
    </div>

    <nav id="navbar" class="fixed w-full z-50 mt-6 px-8 py-4 flex justify-between items-center transition-all duration-500">
        <div class="flex items-center space-x-10 uppercase font-bold tracking-widest text-sm">
            <a href="#" class="hover:orange-accent transition-all duration-300 relative group">
                Home
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-accent transition-all group-hover:w-full"></span>
            </a>
            <a href="https://store.veltrixrp.it" class="hover:orange-accent transition-all duration-300 relative group">
                Store
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-accent transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="hover:orange-accent transition-all duration-300 relative group">
                Regolamento
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-accent transition-all group-hover:w-full"></span>
            </a>
        </div>
        
        <div class="flex items-center space-x-6">
            <div class="flex space-x-4 mr-6 border-r border-white/10 pr-6">
                <i class="fa-brands fa-discord text-xl cursor-pointer hover:orange-accent transition"></i>
                <i class="fa-brands fa-instagram text-xl cursor-pointer hover:orange-accent transition"></i>
            </div>
            <a href="#" class="bg-white text-black px-6 py-2 rounded-sm font-black text-xs uppercase tracking-tighter hover:bg-orange-accent hover:text-white transition duration-500">
                Area Riservata
            </a>
        </div>
    </nav>

    <header class="hero-section h-screen flex flex-col items-center justify-center text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
        
        <div data-aos="zoom-out" data-aos-duration="1500">
            <img src="assets/logo.png" alt="Veltrix Logo" class="w-64 md:w-96 mb-8 drop-shadow-[0_0_50px_rgba(255,107,0,0.3)] hover:scale-105 transition-transform duration-700">
        </div>

        <h1 class="title-font text-2xl md:text-4xl font-bold mb-8 tracking-[10px] text-glow" data-aos="fade-up" data-aos-delay="200">
            VELTRIX <span class="orange-accent">ROLEPLAY</span>
        </h1>

        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6" data-aos="fade-up" data-aos-delay="400">
            <a href="#play" class="btn-main bg-orange-accent text-black px-12 py-4 font-black uppercase tracking-widest text-xl">
                Inizia l'Avventura
            </a>
            <a href="https://discord.veltrixrp.it" class="btn-main bg-white/5 backdrop-blur-md border border-white/10 px-12 py-4 font-black uppercase tracking-widest text-xl hover:bg-white/10 transition flex items-center">
                <i class="fa-brands fa-discord mr-3 text-2xl"></i> Community
            </a>
        </div>

        <a href="#stats" class="absolute bottom-10 animate-bounce text-white/30 hover:text-orange-accent transition">
            <i class="fa-solid fa-chevron-down text-3xl"></i>
        </a>
    </header>

    <section id="stats" class="py-32 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-card p-10 rounded-2xl relative overflow-hidden group" data-aos="fade-up">
                <div class="absolute -right-4 -bottom-4 text-9 font-black opacity-[0.03] group-hover:opacity-[0.08] transition-all text-9xl uppercase tracking-tighter">USER</div>
                <h2 class="text-6xl font-bold mb-2 italic orange-accent">300K</h2>
                <p class="uppercase text-gray-400 font-bold tracking-[4px] text-sm">Cittadini Unici</p>
                <div class="w-10 h-1 bg-orange-accent mt-4"></div>
            </div>
            
            <div class="glass-card p-10 rounded-2xl border-t-2 border-t-orange-600 shadow-2xl shadow-orange-900/20" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-6xl font-bold mb-2 italic">50K+</h2>
                <p class="uppercase text-gray-400 font-bold tracking-[4px] text-sm">Membri Discord</p>
                <div class="w-10 h-1 bg-white mt-4"></div>
            </div>

            <div class="glass-card p-10 rounded-2xl relative overflow-hidden group" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute -right-4 -bottom-4 text-9 font-black opacity-[0.03] group-hover:opacity-[0.08] transition-all text-9xl uppercase tracking-tighter">FPS</div>
                <h2 class="text-6xl font-bold mb-2 italic orange-accent">144</h2>
                <p class="uppercase text-gray-400 font-bold tracking-[4px] text-sm">FPS Medi</p>
                <div class="w-10 h-1 bg-orange-accent mt-4"></div>
            </div>
        </div>
    </section>

    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-20">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-orange-accent/20 blur-2xl rounded-full opacity-50 group-hover:opacity-100 transition duration-1000"></div>
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&q=80&w=1000" 
                         class="relative rounded-2xl border border-white/10 shadow-2xl filter grayscale hover:grayscale-0 transition duration-1000">
                </div>
            </div>
            
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <h4 class="orange-accent font-bold uppercase tracking-[6px] mb-4">Evoluzione</h4>
                <h2 class="title-font text-5xl font-black uppercase italic mb-8 leading-tight">Più di un <br><span class="orange-accent text-glow">Semplice Server</span></h2>
                <p class="text-gray-400 text-lg leading-relaxed mb-8 border-l-2 border-orange-accent pl-6">
                    VeltrixRP ridefinisce gli standard del Roleplay. Non siamo solo una città, siamo un ecosistema digitale dove ogni tua scelta ha un peso reale. Script esclusivi, economia bilanciata e una narrazione gestita da professionisti.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-3 text-sm font-bold uppercase tracking-widest text-gray-300">
                        <i class="fa-solid fa-check-double orange-accent"></i> <span>Mappe Custom</span>
                    </div>
                    <div class="flex items-center space-x-3 text-sm font-bold uppercase tracking-widest text-gray-300">
                        <i class="fa-solid fa-check-double orange-accent"></i> <span>No Lag Policy</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-black/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="title-font text-4xl font-black uppercase italic" data-aos="fade-up">Perchè Scegliere <span class="orange-accent">Veltrix</span></h2>
                <div class="w-24 h-1 bg-orange-accent mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="p-8 glass-card rounded-xl text-center group" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/5 rounded-lg mx-auto mb-6 flex items-center justify-center text-3xl group-hover:bg-orange-accent group-hover:text-black transition-all duration-500">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold uppercase mb-4 tracking-tighter">Anti-Cheat Pro</h3>
                    <p class="text-gray-500 text-sm">Protezione totale contro i trasgressori per un gioco equo.</p>
                </div>
                <div class="p-8 glass-card rounded-xl text-center group" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-16 h-16 bg-white/5 rounded-lg mx-auto mb-6 flex items-center justify-center text-3xl group-hover:bg-orange-accent group-hover:text-black transition-all duration-500">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3 class="text-xl font-bold uppercase mb-4 tracking-tighter">Veicoli HQ</h3>
                    <p class="text-gray-500 text-sm">Handling realistici e modelli 4K ottimizzati per FPS elevati.</p>
                </div>
                <div class="p-8 glass-card rounded-xl text-center group" data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/5 rounded-lg mx-auto mb-6 flex items-center justify-center text-3xl group-hover:bg-orange-accent group-hover:text-black transition-all duration-500">
                        <i class="fa-solid fa-gun"></i>
                    </div>
                    <h3 class="text-xl font-bold uppercase mb-4 tracking-tighter">Criminal Life</h3>
                    <p class="text-gray-500 text-sm">Sistemi di rapine e gestione gang mai visti prima.</p>
                </div>
                <div class="p-8 glass-card rounded-xl text-center group" data-aos="zoom-in" data-aos-delay="400">
                    <div class="w-16 h-16 bg-white/5 rounded-lg mx-auto mb-6 flex items-center justify-center text-3xl group-hover:bg-orange-accent group-hover:text-black transition-all duration-500">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold uppercase mb-4 tracking-tighter">Economia Reale</h3>
                    <p class="text-gray-500 text-sm">Mercato dinamico e opportunità di lavoro diversificate.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6" id="play">
        <div class="max-w-7xl mx-auto glass-card rounded-3xl p-12 flex flex-col md:flex-row justify-between items-center bg-gradient-to-r from-orange-900/20 to-transparent border-orange-accent/30" data-aos="flip-up">
            <div class="mb-8 md:mb-0">
                <h2 class="title-font text-4xl font-black uppercase italic mb-2">Pronto a <span class="orange-accent">Scrivere</span> la tua storia?</h2>
                <p class="text-gray-400 uppercase tracking-widest text-sm">Unisciti agli oltre 400 giocatori attivi oggi.</p>
            </div>
            <a href="fivem://connect/veltrixrp.it" class="bg-white text-black px-12 py-5 rounded-full font-black uppercase tracking-[3px] hover:bg-orange-accent hover:text-white transition duration-500 shadow-xl shadow-white/10 text-center">
                Entra Ora <i class="fa-solid fa-play ml-2"></i>
            </a>
        </div>
    </section>

    <footer class="bg-[#030303] pt-32 pb-10 px-8 border-t border-white/5">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-16 mb-20">
            <div class="col-span-1 md:col-span-2">
                <img src="assets/logo.png" class="w-20 mb-8 grayscale opacity-50">
                <h3 class="title-font text-2xl font-black uppercase italic mb-6">VELTRIX<span class="orange-accent">RP</span></h3>
                <p class="text-gray-500 max-w-sm leading-relaxed mb-8">
                    Il punto di riferimento per il roleplay italiano. Qualità, serietà e innovazione costante.
                </p>
                <div class="flex space-x-5 text-xl">
                    <a href="#" class="w-10 h-10 border border-white/10 rounded flex items-center justify-center hover:bg-orange-accent hover:border-orange-accent transition"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#" class="w-10 h-10 border border-white/10 rounded flex items-center justify-center hover:bg-orange-accent hover:border-orange-accent transition"><i class="fa-brands fa-twitch"></i></a>
                    <a href="#" class="w-10 h-10 border border-white/10 rounded flex items-center justify-center hover:bg-orange-accent hover:border-orange-accent transition"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            
            <div>
                <h4 class="font-bold uppercase tracking-[4px] mb-8 text-white text-sm">Link Utili</h4>
                <ul class="text-gray-500 space-y-4 font-semibold text-sm">
                    <li><a href="#" class="hover:text-white transition-all italic uppercase">Whitelist App</a></li>
                    <li><a href="#" class="hover:text-white transition-all italic uppercase">Supporto Tecnico</a></li>
                    <li><a href="#" class="hover:text-white transition-all italic uppercase">Partner Program</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold uppercase tracking-[4px] mb-8 text-white text-sm">Legal</h4>
                <ul class="text-gray-500 space-y-4 font-semibold text-sm">
                    <li><a href="#" class="hover:text-white transition-all italic uppercase">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-white transition-all italic uppercase">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-all italic uppercase">Cookies</a></li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-600 uppercase tracking-widest font-bold">
            <div>&copy; <?php echo date("Y"); ?> VeltrixRP. All rights reserved.</div>
            <div class="mt-4 md:mt-0 flex items-center">
                DEVELOPED WITH <i class="fa-solid fa-heart mx-2 text-orange-600"></i> BY <a href="https://rootlink.it" class="ml-2 text-white hover:text-orange-accent transition">ROOTLINK.IT</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        window.addEventListener('scroll', function() {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('bg-black/90', 'backdrop-blur-md', 'py-2', 'mt-0');
                nav.classList.remove('mt-6');
            } else {
                nav.classList.remove('bg-black/90', 'backdrop-blur-md', 'py-2', 'mt-0');
                nav.classList.add('mt-6');
            }
        });
    </script>
</body>
</html>