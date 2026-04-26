<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeltrixRP | Official Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #080808;
            color: white;
            font-family: 'Rajdhani', sans-serif;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://r4.wallpaperflare.com/wallpaper/74/436/533/gta-v-gta-5-video-games-grand-theft-auto-wallpaper-8900086dc1ca3d3b769738dfc0f17662.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            border-bottom: 2px solid #ff6b00;
        }
        .orange-accent { color: #ff6b00; }
        .bg-orange-accent { background-color: #ff6b00; }
        .bg-card { background-color: #111111; }
        .border-orange { border-color: #ff6b00; }
        .btn-glow:hover {
            box-shadow: 0 0 20px rgba(255, 107, 0, 0.4);
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>

    <nav class="fixed w-full z-50 bg-black/80 backdrop-blur-md px-8 py-4 flex justify-between items-center border-b border-white/5">
        <div class="flex items-center space-x-8 uppercase font-bold tracking-widest text-sm">
            <a href="#" class="hover:orange-accent transition">Home</a>
            <a href="#" class="hover:orange-accent transition">Store</a>
            <a href="#" class="hover:orange-accent transition">FAQ</a>
        </div>
        <div class="flex items-center space-x-6">
            <a href="login.php" class="bg-[#5865F2] hover:bg-[#4752c4] px-6 py-2 rounded font-bold text-sm transition">
                Accedi con Discord
            </a>
            <i class="fa-solid fa-cart-shopping text-lg cursor-pointer hover:orange-accent"></i>
            <i class="fa-brands fa-discord text-xl cursor-pointer hover:orange-accent"></i>
        </div>
    </nav>

    <header class="hero-section flex flex-col items-center justify-center text-center">
        <img src="assets/logo.png" alt="Veltrix Hawk" class="w-80 mb-12 drop-shadow-[0_0_35px_rgba(255,107,0,0.5)]">
        <div class="flex space-x-4">
            <a href="#" class="bg-orange-accent text-black px-12 py-3 rounded-sm font-black uppercase tracking-tighter text-xl btn-glow">
                Visita lo store
            </a>
            <a href="#" class="bg-white/5 hover:bg-white/10 border border-white/10 px-12 py-3 rounded-sm font-black uppercase tracking-tighter text-xl transition flex items-center">
                <i class="fa-brands fa-discord mr-3"></i> Discord
            </a>
        </div>
    </header>

    <section class="py-24 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-card p-12 rounded-xl flex justify-between items-center border border-white/5 shadow-2xl">
                <div>
                    <h2 class="text-7xl font-bold leading-none mb-2 italic">300,000</h2>
                    <p class="uppercase text-gray-500 font-bold tracking-[3px]">Giocatori Registrati</p>
                    <p class="text-xs text-gray-600 mt-2">Registrati sulla nostra piattaforma negli ultimi 5 anni.</p>
                </div>
                <i class="fa-solid fa-users text-7xl opacity-10"></i>
            </div>
            <div class="bg-card p-12 rounded-xl flex justify-between items-center border border-white/5 shadow-2xl">
                <div>
                    <h2 class="text-7xl font-bold leading-none mb-2 italic text-orange-accent">50,000+</h2>
                    <p class="uppercase text-gray-500 font-bold tracking-[3px]">Utenti Community</p>
                    <p class="text-xs text-gray-600 mt-2">Membri attivi pronti a ruolare insieme a te.</p>
                </div>
                <i class="fa-solid fa-comments text-7xl opacity-10"></i>
            </div>
        </div>
        <div class="bg-card p-10 rounded-xl flex flex-col md:flex-row justify-between items-center border border-white/5">
            <div>
                <h2 class="text-5xl font-bold uppercase italic">Media Giocatori <span class="orange-accent">400+</span></h2>
                <p class="text-gray-500 mt-1">Un server sempre popolato a qualsiasi ora. Non sarai mai da solo.</p>
            </div>
            <a href="#" class="mt-6 md:mt-0 bg-white text-black px-10 py-4 rounded font-black uppercase tracking-widest flex items-center hover:bg-orange-accent hover:text-white transition duration-300">
                <i class="fa-solid fa-play mr-3"></i> Entra in città
            </a>
        </div>
    </section>

    <section class="py-24 bg-[#0a0a0a] px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative group">
                <div class="absolute -inset-2 bg-orange-accent/20 blur-xl opacity-0 group-hover:opacity-100 transition duration-500"></div>
                <img src="assets/logo-square.png" class="relative rounded-lg border border-white/10 shadow-2xl grayscale hover:grayscale-0 transition duration-700">
            </div>
            <div class="w-full md:w-1/2">
                <h4 class="orange-accent font-bold uppercase tracking-[4px] mb-2">Chi Siamo</h4>
                <h2 class="text-6xl font-black uppercase italic mb-8">La Nostra <span class="orange-accent">Storia</span></h2>
                <div class="border-l-4 border-orange px-8 py-2">
                    <p class="text-gray-400 text-xl leading-relaxed italic">
                        Benvenuto su VeltrixRP, il progetto dove la potenza del falco incontra la simulazione estrema. 
                        Con mappe custom e script realizzati interamente da noi, offriamo un'esperienza unica nel suo genere. 
                        La nostra missione è fornire un Roleplay serio, immersivo e privo di interruzioni. 
                        Unisci le tue ali alle nostre e inizia la tua ascesa in città.
                    </p>
                </div>
                <a href="#" class="inline-block mt-10 font-bold uppercase tracking-widest hover:orange-accent transition">Vai allo store <i class="fa-solid fa-arrow-right ml-2 text-sm"></i></a>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 text-center">
        <h2 class="text-5xl font-black uppercase italic mb-20">Le Nostre <span class="orange-accent">Peculiarità</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-7xl mx-auto">
            <div>
                <div class="w-20 h-20 bg-orange-accent rounded-full mx-auto mb-8 flex items-center justify-center text-black text-3xl shadow-[0_0_30px_rgba(255,107,0,0.3)]">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3 class="text-2xl font-bold uppercase italic mb-4">Staff Attivo 24/7</h3>
                <p class="text-gray-500">Supporto dedicato e professionale per ogni tua necessità in-game.</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-orange-accent rounded-full mx-auto mb-8 flex items-center justify-center text-black text-3xl shadow-[0_0_30px_rgba(255,107,0,0.3)]">
                    <i class="fa-solid fa-gauge-high"></i>
                </div>
                <h3 class="text-2xl font-bold uppercase italic mb-4">Server Ottimizzato</h3>
                <p class="text-gray-500">Massima fluidità e performance elevate anche sui PC meno potenti.</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-orange-accent rounded-full mx-auto mb-8 flex items-center justify-center text-black text-3xl shadow-[0_0_30px_rgba(255,107,0,0.3)]">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3 class="text-2xl font-bold uppercase italic mb-4">Script Custom</h3>
                <p class="text-gray-500">Sistemi di gioco innovativi e unici che non troverai altrove.</p>
            </div>
            <div>
                <div class="w-20 h-20 bg-orange-accent rounded-full mx-auto mb-8 flex items-center justify-center text-black text-3xl shadow-[0_0_30px_rgba(255,107,0,0.3)]">
                    <i class="fa-solid fa-microphone-lines"></i>
                </div>
                <h3 class="text-2xl font-bold uppercase italic mb-4">Chat Vocale HQ</h3>
                <p class="text-gray-500">Audio 3D cristallino integrato per un'immersione totale nel ruolo.</p>
            </div>
        </div>
    </section>

    <footer class="bg-black py-24 px-8 border-t border-white/5">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-16">
            <div>
                <h3 class="text-3xl font-black uppercase italic mb-6">VELTRIX<span class="orange-accent">RP</span></h3>
                <p class="text-gray-500 leading-relaxed mb-8">La migliore esperienza roleplay. Unisciti alla nostra community e domina i cieli della città con asset esclusivi e veicoli unici.</p>
                <div class="flex space-x-6 text-2xl text-gray-400">
                    <i class="fa-brands fa-instagram cursor-pointer hover:orange-accent"></i>
                    <i class="fa-brands fa-tiktok cursor-pointer hover:orange-accent"></i>
                    <i class="fa-brands fa-youtube cursor-pointer hover:orange-accent"></i>
                </div>
            </div>
            <div>
                <h4 class="font-bold uppercase tracking-widest mb-8 text-white">Supporto</h4>
                <ul class="text-gray-500 space-y-4 uppercase font-semibold text-sm">
                    <li><a href="#" class="hover:orange-accent transition italic">Termini di Servizio</a></li>
                    <li><a href="#" class="hover:orange-accent transition italic">Contattaci</a></li>
                    <li><a href="#" class="hover:orange-accent transition italic">Wiki Server</a></li>
                </ul>
            </div>
            <!--<div>
                <h4 class="font-bold uppercase tracking-widest mb-8 text-white">Pagamenti</h4>
                <p class="text-gray-500 text-sm mb-6 leading-relaxed">Accettiamo carte di credito e PayPal tramite il checkout sicuro e certificato di Tebex.</p>
            </div> -->
        </div>
        <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600 uppercase tracking-widest font-bold">
            <div>&copy; <?php echo date("Y"); ?> VeltrixRP. Tutti i diritti riservati.</div>
            <div class="mt-4 md:mt-0 italic">
                Created and hosted by <a href="https://rootlink.it" target="_blank" class="hover:text-[#ff6b00] transition-colors duration-300">RootLink.it</a>
            </div>
        </div>
    </footer>

</body>
</html>