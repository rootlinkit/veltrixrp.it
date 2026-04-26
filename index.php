<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELTRIX RP | NEXT GEN ROLEPLAY</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #0b0b0d;
            color: #fff;
            font-family: 'Rajdhani', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

        .bg-main {
            background: linear-gradient(rgba(11, 11, 13, 0.8), rgba(11, 11, 13, 0.9)), url('https://wallpaperaccess.com/full/2226257.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .neon-border {
            position: relative;
            border: 1px solid rgba(0, 150, 255, 0.3);
            box-shadow: 0 0 15px rgba(0, 150, 255, 0.1);
        }

        .neon-text {
            text-shadow: 0 0 10px rgba(0, 150, 255, 0.7);
        }

        .btn-primary {
            background: linear-gradient(90deg, #0062ff, #00c6ff);
            transition: all 0.3s ease;
            clip-path: polygon(10% 0, 100% 0, 90% 100%, 0% 100%);
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 150, 255, 0.6);
        }

        .stats-box {
            background: rgba(255, 255, 255, 0.03);
            border-left: 4px solid #0062ff;
        }

        .nav-link {
            position: relative;
            transition: 0.3s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #0062ff;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .card-feature {
            background: linear-gradient(145deg, rgba(20,20,25,1) 0%, rgba(10,10,12,1) 100%);
            border: 1px solid rgba(255,255,255,0.05);
        }
    </style>
</head>
<body>

    <nav class="fixed w-full z-50 bg-[#0b0b0d]/90 backdrop-blur-md border-b border-white/5 py-4 px-8 flex justify-between items-center">
        <div class="text-3xl font-bold tracking-tighter uppercase italic">
            VELTRIX<span class="text-blue-500 neon-text">RP</span>
        </div>
        
        <div class="hidden md:flex space-x-8 text-lg font-medium uppercase tracking-wider">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Store</a>
            <a href="#" class="nav-link">Regolamento</a>
            <a href="#" class="nav-link text-blue-400">Whitelist</a>
        </div>

        <div class="flex items-center space-x-4">
            <a href="login.php" class="bg-white/5 hover:bg-white/10 px-5 py-2 rounded text-sm font-bold uppercase transition border border-white/10">
                <i class="fa-solid fa-user mr-2"></i> Area Riservata
            </a>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center justify-center bg-main pt-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-blue-600/5 pointer-events-none"></div>
        
        <div class="relative z-10 text-center px-4">
            <h2 class="text-blue-500 font-bold tracking-[10px] uppercase mb-4 animate-pulse">Official FiveM Server</h2>
            <h1 class="text-7xl md:text-9xl font-black uppercase italic leading-none mb-6">
                VELTRIX<br><span class="text-transparent" style="-webkit-text-stroke: 2px #fff;">ROLEPLAY</span>
            </h1>
            
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-12">
                <a href="fivm://connect/tuoip" class="btn-primary px-16 py-5 text-xl font-black uppercase italic tracking-widest text-white">
                    Gioca Ora
                </a>
                <a href="https://discord.gg/link" class="bg-[#5865F2] hover:bg-[#4752c4] px-10 py-5 text-xl font-bold uppercase italic flex items-center transition translate-x-[-10px]" style="clip-path: polygon(0 0, 90% 0, 100% 100%, 10% 100%);">
                    <i class="fa-brands fa-discord mr-3 text-2xl"></i> Discord
                </a>
            </div>
        </div>
    </header>

    <section class="py-10 bg-blue-600">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center md:text-left flex items-center gap-4">
                <i class="fa-solid fa-users text-4xl text-black/30"></i>
                <div>
                    <h3 class="text-3xl font-black leading-none">12.500+</h3>
                    <p class="uppercase font-bold text-sm text-black/60">Utenti Registrati</p>
                </div>
            </div>
            <div class="text-center md:text-left flex items-center gap-4 border-l border-black/10 pl-8">
                <i class="fa-solid fa-signal text-4xl text-black/30"></i>
                <div>
                    <h3 class="text-3xl font-black leading-none">400/400</h3>
                    <p class="uppercase font-bold text-sm text-black/60">Player Online</p>
                </div>
            </div>
            <div class="text-center md:text-left flex items-center gap-4 border-l border-black/10 pl-8">
                <i class="fa-solid fa-shield-halved text-4xl text-black/30"></i>
                <div>
                    <h3 class="text-3xl font-black leading-none">24/7</h3>
                    <p class="uppercase font-bold text-sm text-black/60">Anticheat System</p>
                </div>
            </div>
            <div class="text-center md:text-left flex items-center gap-4 border-l border-black/10 pl-8">
                <i class="fa-solid fa-star text-4xl text-black/30"></i>
                <div>
                    <h3 class="text-3xl font-black leading-none">TOP #1</h3>
                    <p class="uppercase font-bold text-sm text-black/60">In Italia</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-6 bg-[#08080a]">
        <div class="max-w-7xl mx-auto">
            <div class="mb-20">
                <h4 class="text-blue-500 font-bold uppercase tracking-widest">Esclusività</h4>
                <h2 class="text-6xl font-black uppercase italic">Perché scegliere noi?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="card-feature p-10 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-30 transition">
                        <i class="fa-solid fa-car text-8xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold uppercase italic mb-4 text-blue-400">Veicoli Custom</h3>
                    <p class="text-gray-400 text-lg leading-relaxed">Handling realistici e modelli 3D ottimizzati per non perdere prestazioni. Oltre 200 auto reali disponibili.</p>
                </div>

                <div class="card-feature p-10 relative overflow-hidden group border-t-2 border-t-blue-600">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-30 transition">
                        <i class="fa-solid fa-gun text-8xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold uppercase italic mb-4 text-blue-400">Criminal System</h3>
                    <p class="text-gray-400 text-lg leading-relaxed">Sistemi di droga, rapine multilivello e crafting illegale completamente dinamici e bilanciati.</p>
                </div>

                <div class="card-feature p-10 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-30 transition">
                        <i class="fa-solid fa-briefcase text-8xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold uppercase italic mb-4 text-blue-400">Lavori Whitelist</h3>
                    <p class="text-gray-400 text-lg leading-relaxed">Dipartimenti di Polizia, EMS e Meccanici con tablet gestionali integrati e script unici.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 bg-[#0b0b0d] border-y border-white/5">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2">
                <h2 class="text-5xl font-black uppercase italic mb-6">Unisciti alla <span class="text-blue-500">Rivoluzione</span></h2>
                <p class="text-xl text-gray-400 mb-8 leading-relaxed">VeltrixRP non è solo un server, è una community. Ogni giorno creiamo storie indimenticabili grazie a un regolamento ferreo e uno staff imparziale.</p>
                <div class="flex gap-4 italic font-bold">
                    <div class="bg-blue-600/10 border border-blue-600/30 px-6 py-2 rounded">NO PAY TO WIN</div>
                    <div class="bg-blue-600/10 border border-blue-600/30 px-6 py-2 rounded">HARD RP</div>
                    <div class="bg-blue-600/10 border border-blue-600/30 px-6 py-2 rounded">WHITELIST</div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="neon-border p-2">
                    <img src="https://images8.alphacoders.com/102/1029415.jpg" class="w-full opacity-80 grayscale hover:grayscale-0 transition duration-500">
                </div>
            </div>
        </div>
    </section>

    <footer class="py-20 px-8 bg-[#050505] text-gray-500">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2">
                <div class="text-3xl font-black text-white uppercase italic mb-6">VELTRIX<span class="text-blue-500">RP</span></div>
                <p class="max-w-md mb-8">La destinazione definitiva per chi cerca il vero Roleplay su FiveM. Qualità tecnica, serietà e innovazione costante dal 2024.</p>
                <div class="flex space-x-6 text-2xl">
                    <a href="#" class="hover:text-blue-500 transition"><i class="fa-brands fa-discord"></i></a>
                    <a href="#" class="hover:text-blue-500 transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-blue-500 transition"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-white font-bold uppercase mb-6 tracking-widest">Link Rapidi</h4>
                <ul class="space-y-4 uppercase text-sm font-bold">
                    <li><a href="#" class="hover:text-blue-400">Wiki Server</a></li>
                    <li><a href="#" class="hover:text-blue-400">Staff Application</a></li>
                    <li><a href="#" class="hover:text-blue-400">Shop Online</a></li>
                    <li><a href="#" class="hover:text-blue-400">Ban Appeal</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold uppercase mb-6 tracking-widest">Informativa</h4>
                <p class="text-xs leading-relaxed uppercase">VeltrixRP non è affiliato con Rockstar Games, Take-Two Interactive o Cfx.re. Tutti i marchi appartengono ai rispettivi proprietari.</p>
                <p class="mt-4 text-xs font-bold text-white uppercase italic">Powered by Tebex.io</p>
            </div>
        </div>
        <div class="mt-20 pt-8 border-t border-white/5 text-center text-xs uppercase tracking-[5px]">
            &copy; <?php echo date("Y"); ?> VELTRIX ROLEPLAY - ALL RIGHTS RESERVED
        </div>
    </footer>

</body>
</html>