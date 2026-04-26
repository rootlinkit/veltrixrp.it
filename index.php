<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeltrixRP - L'esperienza Roleplay definitiva</title>
    <!-- Tailwind CSS per lo stile moderno -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #0a0a0a;
            color: white;
        }
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/hero-bg.jpg');
            background-size: cover;
            background-position: center;
        }
        .accent-color { color: #3b82f6; } /* Blu Veltrix */
        .accent-bg { background-color: #3b82f6; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-10 py-5 bg-black/50 backdrop-blur-md sticky top-0 z-50">
        <div class="flex space-x-6 text-lg font-semibold uppercase tracking-widest">
            <a href="#" class="hover:text-blue-500 transition">Home</a>
            <a href="#" class="hover:text-blue-500 transition">Store</a>
            <a href="#" class="hover:text-blue-500 transition">FAQ</a>
        </div>
        <div>
            <button class="bg-indigo-600 hover:bg-indigo-700 px-6 py-2 rounded-md font-bold transition">
                Accedi con Discord
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-bg h-screen flex flex-col items-center justify-center text-center px-4">
        <img src="assets/logo.png" alt="VeltrixRP Logo" class="w-64 mb-8 drop-shadow-2xl">
        <div class="flex space-x-4">
            <a href="#store" class="accent-bg hover:opacity-80 text-black px-10 py-3 rounded-sm font-bold uppercase transition">
                Visita lo store
            </a>
            <a href="https://discord.gg/tuolink" class="bg-zinc-800 hover:bg-zinc-700 px-10 py-3 rounded-sm font-bold uppercase transition flex items-center">
                Discord
            </a>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="py-20 px-10 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-zinc-900/50 p-10 rounded-xl border border-zinc-800">
                <h2 class="text-6xl font-bold mb-2">150,000</h2>
                <p class="text-zinc-400 uppercase tracking-widest font-bold">Giocatori Registrati</p>
            </div>
            <div class="bg-zinc-900/50 p-10 rounded-xl border border-zinc-800">
                <h2 class="text-6xl font-bold mb-2">25,000+</h2>
                <p class="text-zinc-400 uppercase tracking-widest font-bold">Utenti Community</p>
            </div>
        </div>
        <div class="mt-6 bg-zinc-900/50 p-10 rounded-xl border border-zinc-800 flex justify-between items-center">
            <div>
                <h2 class="text-4xl font-bold uppercase">Media Giocatori <span class="accent-color">200+</span></h2>
                <p class="text-zinc-400">Server sempre popolato e ottimizzato.</p>
            </div>
            <button class="bg-white text-black px-8 py-3 rounded font-bold uppercase hover:bg-zinc-200 transition">
                Entra in città
            </button>
        </div>
    </section>

    <!-- Chi Siamo Section -->
    <section class="py-20 bg-zinc-950 px-10">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <img src="assets/logo-square.png" class="w-full md:w-1/2 rounded-lg opacity-80">
            <div>
                <h4 class="accent-color font-bold uppercase tracking-widest mb-2">Chi siamo</h4>
                <h2 class="text-5xl font-bold mb-6">LA NOSTRA STORIA</h2>
                <p class="text-zinc-400 leading-relaxed text-lg italic border-l-4 border-blue-500 pl-6">
                    Benvenuto su VeltrixRP, il progetto nato per rivoluzionare il mondo del Roleplay su FiveM. 
                    Offriamo script esclusivi, un'economia bilanciata e uno staff sempre presente per garantirti 
                    un'esperienza senza eguali. Che tu voglia essere un criminale temuto o un tutore della legge, 
                    Veltrix è il posto giusto per te.
                </p>
                <a href="#" class="inline-block mt-8 font-bold hover:underline">VAI ALLO STORE &rarr;</a>
            </div>
        </div>
    </section>

    <!-- Peculiarità -->
    <section class="py-20 px-10 text-center">
        <h2 class="text-4xl font-bold mb-16 uppercase">Le Nostre <span class="accent-color">Peculiarità</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-7xl mx-auto">
            <!-- Card 1 -->
            <div class="group">
                <div class="w-16 h-16 accent-bg rounded-full mx-auto mb-6 flex items-center justify-center text-2xl group-hover:scale-110 transition">🛠️</div>
                <h3 class="text-xl font-bold mb-2">Staff Attivo 24/7</h3>
                <p class="text-zinc-500 text-sm">Supporto costante per ogni tua esigenza in game.</p>
            </div>
            <!-- Card 2 -->
            <div class="group">
                <div class="w-16 h-16 accent-bg rounded-full mx-auto mb-6 flex items-center justify-center text-2xl group-hover:scale-110 transition">⚡</div>
                <h3 class="text-xl font-bold mb-2">Server Ottimizzato</h3>
                <p class="text-zinc-500 text-sm">Alte prestazioni ed FPS stabili per tutti i PC.</p>
            </div>
            <!-- Card 3 -->
            <div class="group">
                <div class="w-16 h-16 accent-bg rounded-full mx-auto mb-6 flex items-center justify-center text-2xl group-hover:scale-110 transition">📜</div>
                <h3 class="text-xl font-bold mb-2">Script Custom</h3>
                <p class="text-zinc-500 text-sm">Sistemi unici creati dal nostro team di sviluppatori.</p>
            </div>
            <!-- Card 4 -->
            <div class="group">
                <div class="w-16 h-16 accent-bg rounded-full mx-auto mb-6 flex items-center justify-center text-2xl group-hover:scale-110 transition">🎧</div>
                <h3 class="text-xl font-bold mb-2">Chat Vocale In-Game</h3>
                <p class="text-zinc-500 text-sm">Sistema integrato per un'immersione totale senza software esterni.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-16 px-10 border-t border-zinc-900 text-sm">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 text-zinc-500">
            <div>
                <h3 class="text-white text-xl font-bold mb-4">VeltrixRP</h3>
                <p>La migliore esperienza roleplay. Unisciti alla nostra community e migliora il tuo gameplay.</p>
            </div>
            <div>
                <h3 class="text-white font-bold mb-4">SUPPORTO</h3>
                <ul>
                    <li class="mb-2"><a href="#">Termini di Servizio</a></li>
                    <li class="mb-2"><a href="#">Contattaci</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold mb-4">PAGAMENTI</h3>
                <p>Accettiamo le principali carte e PayPal tramite il checkout sicuro di Tebex.</p>
            </div>
        </div>
        <div class="mt-10 text-center text-zinc-600">
            &copy; <?php echo date("Y"); ?> VeltrixRP. Tutti i diritti riservati. <br>
            Non affiliato con Rockstar Games o Cfx.re.
        </div>
    </footer>

</body>
</html>