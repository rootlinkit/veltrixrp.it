<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELTRIX RP | The Future of Roleplay</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #050505;
            color: #fff;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .font-title { font-family: 'Syncopate', sans-serif; }
        
        .hero-gradient {
            background: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.15) 0%, rgba(5, 5, 5, 1) 70%);
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .btn-glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
            transition: all 0.4s ease;
        }

        .btn-glow:hover {
            box-shadow: 0 0 35px rgba(59, 130, 246, 0.7);
            transform: translateY(-2px);
        }

        .card-hover:hover {
            border-color: rgba(59, 130, 246, 0.5);
            background: rgba(59, 130, 246, 0.05);
            transform: translateY(-5px);
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s infinite;
        }

        .text-gradient {
            background: linear-gradient(to right, #fff, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>

    <nav class="fixed w-full z-[100] px-6 py-4 flex justify-between items-center glass border-b border-white/5">
        <div class="font-title text-2xl font-bold tracking-tighter">
            VELTRIX<span class="text-blue-500">RP</span>
        </div>
        
        <div class="hidden md:flex space-x-10 text-xs font-bold uppercase tracking-[0.2em] text-gray-400">
            <a href="#" class="hover:text-white transition">Home</a>
            <a href="#" class="hover:text-white transition">City Map</a>
            <a href="#" class="hover:text-white transition">Store</a>
            <a href="#" class="hover:text-white transition">Wiki</a>
        </div>

        <div class="flex items-center space-x-4">
            <a href="/login.php" class="text-sm font-semibold hover:text-blue-400 transition">LOGIN</a>
            <a href="#" class="btn-glow bg-blue-600 px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-widest">Join Discord</a>
        </div>
    </nav>

    <section class="relative min-h-screen flex items-center justify-center pt-20 hero-gradient">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[120px] animate-pulse-slow"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px] animate-pulse-slow"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-5xl">
            <h2 class="font-title text-sm tracking-[0.5em] text-blue-500 mb-6 uppercase">Define your legacy</h2>
            <h1 class="font-title text-5xl md:text-8xl font-bold leading-tight mb-8">
                BEYOND THE <br> <span class="text-gradient">ORDINARY RP</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light leading-relaxed">
                VeltrixRP è più di un server. È un ecosistema digitale evoluto dove la simulazione incontra il design di nuova generazione.
            </p>
            
            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="#play" class="w-full md:w-auto btn-glow bg-white text-black px-12 py-4 rounded-full font-bold uppercase text-sm transition">
                    Entra in Città
                </a>
                <a href="#" class="w-full md:w-auto glass hover:bg-white/10 px-12 py-4 rounded-full font-bold uppercase text-sm transition flex items-center justify-center">
                    Scopri di più <i class="fa-solid fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 bg-[#080808]">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass p-10 rounded-3xl border border-white/5 card-hover transition-all duration-500">
                <div class="w-14 h-14 bg-blue-600/20 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fa-solid fa-bolt-lightning text-blue-500 text-2xl"></i>
                </div>
                <h3 class="font-title text-xl mb-4">Zero Lag Engine</h3>
                <p class="text-gray-500 leading-relaxed">Sviluppato su core ottimizzati per garantire 144 FPS costanti anche nelle zone più affollate della città.</p>
            </div>

            <div class="glass p-10 rounded-3xl border border-white/5 card-hover transition-all duration-500">
                <div class="w-14 h-14 bg-purple-600/20 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fa-solid fa-microchip text-purple-500 text-2xl"></i>
                </div>
                <h3 class="font-title text-xl mb-4">Custom Scripts</h3>
                <p class="text-gray-500 leading-relaxed">Il 90% del nostro codice è proprietario. Sistemi di rapina, inventario e housing mai visti altrove.</p>
            </div>

            <div class="glass p-10 rounded-3xl border border-white/5 card-hover transition-all duration-500">
                <div class="w-14 h-14 bg-emerald-600/20 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fa-solid fa-building-columns text-emerald-500 text-2xl"></i>
                </div>
                <h3 class="font-title text-xl mb-4">Real Economy</h3>
                <p class="text-gray-500 leading-relaxed">Un sistema economico bilanciato che premia l'impegno e la creatività imprenditoriale dei cittadini.</p>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <div class="absolute -inset-4 bg-blue-600/20 blur-3xl rounded-full"></div>
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&q=80&w=2070" class="relative z-10 rounded-[40px] border border-white/10 shadow-2xl shadow-blue-900/20 grayscale hover:grayscale-0 transition duration-700">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="font-title text-4xl md:text-5xl mb-8 leading-tight">Vivi la tua <br> <span class="text-blue-500">Seconda Vita</span></h2>
                <div class="space-y-6">
                    <div class="flex gap-6 items-start">
                        <span class="text-blue-500 font-title text-2xl">01</span>
                        <p class="text-gray-400">Legalize la tua carriera: dalla politica alle forze dell'ordine d'élite.</p>
                    </div>
                    <div class="flex gap-6 items-start">
                        <span class="text-blue-500 font-title text-2xl">02</span>
                        <p class="text-gray-400">Dominio Underground: scala le gerarchie criminali con sistemi di gang evoluti.</p>
                    </div>
                    <div class="flex gap-6 items-start">
                        <span class="text-blue-500 font-title text-2xl">03</span>
                        <p class="text-gray-400">Social Evolution: eventi, locali notturni e attività gestite interamente dai player.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-6">
        <div class="glass max-w-7xl mx-auto rounded-[50px] p-12 md:p-24 text-center relative overflow-hidden border border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent"></div>
            <h2 class="font-title text-3xl md:text-6xl mb-10 relative z-10">PRONTO PER IL <br> LIVELLO SUCCESSIVO?</h2>
            <div class="flex flex-wrap justify-center gap-6 relative z-10">
                <div class="px-8 py-4 glass rounded-2xl">
                    <div class="text-3xl font-bold text-blue-500">2.4k+</div>
                    <div class="text-xs uppercase tracking-widest text-gray-500 mt-2">Membri Attivi</div>
                </div>
                <div class="px-8 py-4 glass rounded-2xl">
                    <div class="text-3xl font-bold text-blue-500">400+</div>
                    <div class="text-xs uppercase tracking-widest text-gray-500 mt-2">Whitelist Slots</div>
                </div>
                <div class="px-8 py-4 glass rounded-2xl">
                    <div class="text-3xl font-bold text-blue-500">24/7</div>
                    <div class="text-xs uppercase tracking-widest text-gray-500 mt-2">Staff Support</div>
                </div>
            </div>
            <button class="mt-12 btn-glow bg-white text-black px-16 py-5 rounded-full font-bold uppercase tracking-widest relative z-10">
                Inizia ora
            </button>
        </div>
    </section>

    <footer class="py-20 px-6 border-t border-white/5 bg-[#030303]">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-12">
            <div class="max-w-sm">
                <div class="font-title text-2xl font-bold mb-6">VELTRIX<span class="text-blue-500">RP</span></div>
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    La frontiera finale del gaming di ruolo. Esperienza immersiva, tecnologia d'avanguardia e una community d'élite.
                </p>
                <div class="flex space-x-5 text-xl text-gray-400">
                    <a href="#" class="hover:text-blue-500 transition"><i class="fa-brands fa-discord"></i></a>
                    <a href="#" class="hover:text-pink-500 transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-red-500 transition"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="hover:text-blue-400 transition"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-12">
                <div>
                    <h4 class="font-bold text-white mb-6 uppercase text-xs tracking-widest">Esplora</h4>
                    <ul class="text-gray-500 space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition">Regolamento</a></li>
                        <li><a href="#" class="hover:text-white transition">Store Ufficiale</a></li>
                        <li><a href="#" class="hover:text-white transition">Whitelist</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-6 uppercase text-xs tracking-widest">Supporto</h4>
                    <ul class="text-gray-500 space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition">Ticket System</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition">Lavora con noi</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <h4 class="font-bold text-white mb-6 uppercase text-xs tracking-widest">Legale</h4>
                    <ul class="text-gray-500 space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600 uppercase tracking-widest">
            <div>&copy; <?php echo date("Y"); ?> VeltrixRP. All rights reserved.</div>
            <div class="mt-4 md:mt-0 italic">Powered by high-end engineering</div>
        </div>
    </footer>

</body>
</html>