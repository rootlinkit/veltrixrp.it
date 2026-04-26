<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELTRIXRP | THE APEX OF ROLEPLAY</title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #ff6b00;
            --primary-rgb: 255, 107, 0;
            --bg: #020202;
        }

        body {
            background-color: var(--bg);
            color: #fff;
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
        }

        .orbitron { font-family: 'Orbitron', sans-serif; }

        .hero-vid {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            object-fit: cover;
            opacity: 0.4;
            filter: saturate(0) brightness(0.5);
        }

        .glitch {
            position: relative;
            display: inline-block;
        }

        .glitch::before, .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: var(--bg);
        }

        .glitch::after {
            left: 2px;
            text-shadow: -2px 0 #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }

        .glitch::before {
            left: -2px;
            text-shadow: 2px 0 #00fff9;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% { clip: rect(31px, 9999px, 94px, 0); }
            20% { clip: rect(62px, 9999px, 42px, 0); }
            40% { clip: rect(16px, 9999px, 78px, 0); }
            60% { clip: rect(87px, 9999px, 11px, 0); }
            80% { clip: rect(44px, 9999px, 5px, 0); }
            100% { clip: rect(9px, 9999px, 32px, 0); }
        }

        @keyframes glitch-anim2 {
            0% { clip: rect(65px, 9999px, 100px, 0); }
            20% { clip: rect(12px, 9999px, 58px, 0); }
            40% { clip: rect(95px, 9999px, 33px, 0); }
            60% { clip: rect(21px, 9999px, 71px, 0); }
            80% { clip: rect(2px, 9999px, 90px, 0); }
            100% { clip: rect(44px, 9999px, 12px, 0); }
        }

        .cyber-card {
            background: rgba(10, 10, 10, 0.8);
            border: 1px solid rgba(255, 107, 0, 0.1);
            position: relative;
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%);
            transition: all 0.3s ease;
        }

        .cyber-card:hover {
            border-color: var(--primary);
            box-shadow: 0 0 30px rgba(255, 107, 0, 0.2);
            transform: translateY(-5px);
        }

        .cyber-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 2px; height: 100%;
            background: var(--primary);
            transform: scaleY(0);
            transition: transform 0.3s;
        }

        .cyber-card:hover::before {
            transform: scaleY(1);
        }

        .nav-link {
            position: relative;
            font-size: 0.75rem;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            font-weight: 700;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: -5px; left: 0; width: 0; height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .scanline {
            width: 100%;
            height: 100px;
            z-index: 10;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0) 0%, rgba(255, 107, 0, 0.1) 50%, rgba(0, 0, 0, 0) 100%);
            opacity: 0.1;
            position: absolute;
            bottom: 100%;
            animation: scanline 8s linear infinite;
        }

        @keyframes scanline {
            0% { bottom: 100%; }
            100% { bottom: -100%; }
        }

        .btn-apex {
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
            padding: 1rem 2.5rem;
            position: relative;
            font-weight: 900;
            text-transform: uppercase;
            overflow: hidden;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }

        .btn-apex:hover {
            background: var(--primary);
            color: black;
            box-shadow: 0 0 40px var(--primary);
        }

        .btn-apex::after {
            content: "";
            position: absolute;
            width: 50px; height: 100%;
            background: rgba(255,255,255,0.2);
            left: -100px;
            transform: skewX(-20deg);
            transition: 0.5s;
        }

        .btn-apex:hover::after {
            left: 150%;
        }

        #cursor-glow {
            position: fixed;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(255, 107, 0, 0.08) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>

    <div id="cursor-glow"></div>

    <nav id="navbar" class="fixed w-full z-[100] px-12 py-6 flex justify-between items-center transition-all duration-700 bg-transparent">
        <div class="flex items-center space-x-12">
            <a href="#" class="nav-link text-white">Database</a>
            <a href="https://store.veltrixrp.it" class="nav-link text-white">Market</a>
            <a href="#" class="nav-link text-white">Records</a>
        </div>
        
        <div class="flex items-center space-x-8">
            <div class="h-px w-12 bg-white/20 hidden lg:block"></div>
            <div class="flex space-x-6">
                <i class="fa-brands fa-discord text-xl hover:text-[#ff6b00] cursor-pointer transition"></i>
                <i class="fa-brands fa-instagram text-xl hover:text-[#ff6b00] cursor-pointer transition"></i>
            </div>
            <a href="#" class="orbitron text-[10px] border border-white/20 px-4 py-2 hover:bg-white hover:text-black transition">IDENTIFY_SYSTEM</a>
        </div>
    </nav>

    <header class="relative h-screen w-full flex items-center justify-center overflow-hidden">
        <img src="https://r4.wallpaperflare.com/wallpaper/74/436/533/gta-v-gta-5-video-games-grand-theft-auto-wallpaper-8900086dc1ca3d3b769738dfc0f17662.jpg" class="hero-vid">
        <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-transparent to-[#020202]"></div>
        <div class="scanline"></div>

        <div class="relative z-10 text-center px-4">
            <div data-aos="zoom-in" data-aos-duration="2000">
                <img src="assets/logo.png" class="w-48 md:w-64 mx-auto mb-12 drop-shadow-[0_0_80px_rgba(255,107,0,0.4)]">
            </div>
            <h1 class="orbitron text-5xl md:text-8xl font-black mb-4 tracking-tighter" data-aos="fade-up">
                <span class="glitch" data-text="VELTRIX">VELTRIX</span><span class="text-[#ff6b00]">RP</span>
            </h1>
            <div class="flex flex-col items-center gap-6" data-aos="fade-up" data-aos-delay="400">
                <p class="orbitron text-xs md:text-sm tracking-[0.5em] text-white/60 uppercase">High Performance Roleplay Environment</p>
                <div class="flex flex-col md:flex-row gap-6 mt-8">
                    <a href="#" class="btn-apex orbitron">Access System</a>
                    <a href="#" class="btn-apex orbitron !bg-white !text-black !border-white">Discord_Sync</a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-12 left-12 flex flex-col space-y-4 hidden md:flex">
            <div class="flex items-center space-x-4">
                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse shadow-[0_0_10px_#22c55e]"></div>
                <span class="orbitron text-[10px] tracking-widest text-white/40">SERVER_STATUS: ONLINE</span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-2 h-2 bg-[#ff6b00] rounded-full animate-pulse"></div>
                <span class="orbitron text-[10px] tracking-widest text-white/40">LATENCY: 22MS</span>
            </div>
        </div>
    </header>

    <section class="py-40 px-6 relative bg-[#020202]">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="cyber-card p-12 group" data-aos="fade-up">
                <div class="text-[#ff6b00] text-xs orbitron mb-6">01 // POPULATION</div>
                <h3 class="text-6xl font-bold orbitron mb-4 italic">300K+</h3>
                <p class="text-white/40 uppercase tracking-widest text-xs font-bold">Authorized Entities</p>
                <div class="mt-8 h-px w-full bg-white/5 group-hover:bg-[#ff6b00]/30 transition"></div>
            </div>

            <div class="cyber-card p-12 group" data-aos="fade-up" data-aos-delay="200">
                <div class="text-[#ff6b00] text-xs orbitron mb-6">02 // STABILITY</div>
                <h3 class="text-6xl font-bold orbitron mb-4 italic">99.9%</h3>
                <p class="text-white/40 uppercase tracking-widest text-xs font-bold">Uptime Performance</p>
                <div class="mt-8 h-px w-full bg-white/5 group-hover:bg-[#ff6b00]/30 transition"></div>
            </div>

            <div class="cyber-card p-12 group" data-aos="fade-up" data-aos-delay="400">
                <div class="text-[#ff6b00] text-xs orbitron mb-6">03 // HARDWARE</div>
                <h3 class="text-6xl font-bold orbitron mb-4 italic">DEDICATED</h3>
                <p class="text-white/40 uppercase tracking-widest text-xs font-bold">High-End Infrastructure</p>
                <div class="mt-8 h-px w-full bg-white/5 group-hover:bg-[#ff6b00]/30 transition"></div>
            </div>
        </div>
    </section>

    <section class="py-32 relative overflow-hidden bg-[#050505]">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row gap-24 items-center">
            <div class="w-full md:w-1/2 relative" data-aos="fade-right">
                <div class="absolute -inset-1 bg-gradient-to-r from-[#ff6b00] to-purple-600 blur opacity-20 group-hover:opacity-100 transition duration-1000"></div>
                <div class="relative bg-black rounded-lg overflow-hidden border border-white/10">
                    <img src="https://images.unsplash.com/photo-1614850523296-d8c1af93d400?auto=format&fit=crop&q=80&w=1000" class="w-full grayscale hover:grayscale-0 transition-all duration-700">
                </div>
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <h2 class="orbitron text-4xl md:text-6xl font-black uppercase mb-8 leading-none italic">The <span class="text-[#ff6b00]">Future</span> of RP</h2>
                <p class="text-lg text-white/50 leading-relaxed mb-12 font-light tracking-wide border-r-2 border-[#ff6b00] pr-8">
                    VeltrixRP non è solo un server, è un'architettura digitale progettata per chi esige il massimo. Abbiamo riscritto ogni linea di codice per garantirti un'immersione che sfida la realtà. Entra nel sistema. Domina la città.
                </p>
                <div class="grid grid-cols-2 gap-8">
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-microchip text-[#ff6b00]"></i>
                        <span class="orbitron text-[10px] tracking-widest">CUSTOM_SCRIPTS</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-bolt text-[#ff6b00]"></i>
                        <span class="orbitron text-[10px] tracking-widest">ZERO_LATENCY</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black pt-40 pb-20 px-12 border-t border-white/5 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#ff6b00] blur-[150px] opacity-5"></div>
        
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-24 relative z-10">
            <div class="col-span-1 md:col-span-2">
                <h3 class="orbitron text-3xl font-black mb-8 italic">VELTRIX<span class="text-[#ff6b00]">RP</span></h3>
                <p class="text-white/30 text-sm tracking-widest uppercase mb-12 max-w-md leading-loose">
                    L'eccellenza non è un atto, ma un'abitudine. VeltrixRP incarna l'avanguardia del gioco di ruolo competitivo.
                </p>
                <div class="flex space-x-8">
                    <a href="#" class="text-white/20 hover:text-[#ff6b00] transition-all"><i class="fa-brands fa-tiktok text-2xl"></i></a>
                    <a href="#" class="text-white/20 hover:text-[#ff6b00] transition-all"><i class="fa-brands fa-twitch text-2xl"></i></a>
                    <a href="#" class="text-white/20 hover:text-[#ff6b00] transition-all"><i class="fa-brands fa-youtube text-2xl"></i></a>
                </div>
            </div>

            <div>
                <h4 class="orbitron text-xs font-bold text-[#ff6b00] mb-8 tracking-widest">INFRASTRUCTURE</h4>
                <ul class="text-[10px] space-y-6 orbitron tracking-[3px] text-white/40">
                    <li><a href="#" class="hover:text-white transition">CONNECT_TO_IP</a></li>
                    <li><a href="#" class="hover:text-white transition">DATABASE_LOGS</a></li>
                    <li><a href="#" class="hover:text-white transition">STORE_ACCESS</a></li>
                </ul>
            </div>

            <div>
                <h4 class="orbitron text-xs font-bold text-[#ff6b00] mb-8 tracking-widest">PROTOCOL</h4>
                <ul class="text-[10px] space-y-6 orbitron tracking-[3px] text-white/40">
                    <li><a href="#" class="hover:text-white transition">PRIVACY_V1</a></li>
                    <li><a href="#" class="hover:text-white transition">RULES_V4.2</a></li>
                    <li><a href="#" class="hover:text-white transition">TERMS_OF_ENGAGEMENT</a></li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto mt-40 pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center italic">
            <div class="orbitron text-[9px] tracking-[4px] text-white/20">&copy; 2024 VELTRIXRP // ALL_SYSTEMS_OPERATIONAL</div>
            <div class="orbitron text-[9px] tracking-[4px] text-white/20 mt-4 md:mt-0">
                CRAFTED BY <a href="https://rootlink.it" class="text-white/40 hover:text-[#ff6b00] transition">ROOTLINK.IT</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        const glow = document.getElementById('cursor-glow');
        window.addEventListener('mousemove', (e) => {
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        });

        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 100) {
                nav.style.backgroundColor = 'rgba(2, 2, 2, 0.95)';
                nav.style.padding = '20px 48px';
                nav.style.borderBottom = '1px solid rgba(255,107,0,0.2)';
            } else {
                nav.style.backgroundColor = 'transparent';
                nav.style.padding = '24px 48px';
                nav.style.borderBottom = 'none';
            }
        });
    </script>
</body>
</html>