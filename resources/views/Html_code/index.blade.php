<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Morgan | Full-Stack Web Developer Portfolio</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            cyan: '#06b6d4',
                            violet: '#8b5cf6',
                            dark: '#0b0f19',
                            cardDark: '#111827',
                            lightBg: '#f8fafc',
                            cardLight: '#ffffff'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* Custom glow & gradient utilities */
        .glow-cyan {
            box-shadow: 0 0 25px -5px rgba(6, 182, 212, 0.4);
        }
        .glow-violet {
            box-shadow: 0 0 25px -5px rgba(139, 92, 246, 0.4);
        }
        .text-gradient {
            background: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-gradient-accent {
            background: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 100%);
        }
        /* Glassmorphism backdrop */
        .glass-header {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .glass-card {
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        /* Dynamic Cursor Animation */
        .typing-cursor::after {
            content: '|';
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
</head>
<body class="font-sans bg-slate-50 dark:bg-brand-dark text-slate-800 dark:text-slate-200 transition-colors duration-300 antialiased selection:bg-brand-cyan selection:text-white">

    <!-- Header / Navigation Bar -->
    <header class="fixed top-0 left-0 w-full z-50 glass-header bg-white/80 dark:bg-brand-dark/80 border-b border-slate-200 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#home" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-accent flex items-center justify-center text-white font-extrabold text-xl shadow-lg transform group-hover:scale-105 transition-transform duration-200">
                    AM
                </div>
                <span class="font-bold text-xl tracking-tight text-slate-900 dark:text-white">
                    Alex<span class="text-brand-cyan">.dev</span>
                </span>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8 font-medium text-sm">
                <a href="#home" class="hover:text-brand-cyan dark:hover:text-brand-cyan transition-colors">Home</a>
                <a href="#about" class="hover:text-brand-cyan dark:hover:text-brand-cyan transition-colors">About</a>
                <a href="#services" class="hover:text-brand-cyan dark:hover:text-brand-cyan transition-colors">Services</a>
                <a href="#contact" class="hover:text-brand-cyan dark:hover:text-brand-cyan transition-colors">Contact</a>
            </nav>

            <!-- Actions & Theme Toggle -->
            <div class="hidden md:flex items-center space-x-4">
                <button id="themeToggleBtn" class="p-2.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 hover:text-brand-cyan dark:hover:text-brand-cyan transition-colors" aria-label="Toggle Theme">
                    <i data-lucide="moon" class="w-5 h-5 hidden dark:block"></i>
                    <i data-lucide="sun" class="w-5 h-5 block dark:hidden"></i>
                </button>
                <a href="#contact" class="px-5 py-2.5 rounded-xl bg-gradient-accent text-white font-semibold text-sm shadow-md hover:opacity-95 transform hover:-translate-y-0.5 transition-all">
                    Hire Me
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center space-x-3 md:hidden">
                <button id="mobileThemeToggleBtn" class="p-2 rounded-lg border border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400">
                    <i data-lucide="moon" class="w-5 h-5 hidden dark:block"></i>
                    <i data-lucide="sun" class="w-5 h-5 block dark:hidden"></i>
                </button>
                <button id="mobileMenuBtn" class="p-2 rounded-lg border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-slate-200 dark:border-slate-800 bg-white/95 dark:bg-brand-dark/95 backdrop-blur-lg px-4 pt-4 pb-6 space-y-3">
            <a href="#home" class="mobile-nav-link block px-3 py-2 rounded-lg font-medium hover:bg-slate-100 dark:hover:bg-slate-800">Home</a>
            <a href="#about" class="mobile-nav-link block px-3 py-2 rounded-lg font-medium hover:bg-slate-100 dark:hover:bg-slate-800">About</a>
            <a href="#services" class="mobile-nav-link block px-3 py-2 rounded-lg font-medium hover:bg-slate-100 dark:hover:bg-slate-800">Services</a>
            <a href="#contact" class="mobile-nav-link block px-3 py-2 rounded-lg font-medium hover:bg-slate-100 dark:hover:bg-slate-800">Contact</a>
            <a href="#contact" class="mobile-nav-link block text-center mt-4 w-full py-2.5 rounded-xl bg-gradient-accent text-white font-semibold text-sm">Hire Me</a>
        </div>
    </header>

    <!-- Hero / Home Section -->
    <section id="home" class="relative min-h-screen pt-32 pb-20 flex items-center justify-center overflow-hidden">
        <!-- Glowing Background Orbs -->
        <div class="absolute top-1/4 left-10 w-72 h-72 bg-brand-cyan/20 dark:bg-brand-cyan/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-10 w-80 h-80 bg-brand-violet/20 dark:bg-brand-violet/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full border border-brand-cyan/30 bg-brand-cyan/10 text-brand-cyan text-xs sm:text-sm font-semibold mb-8">
                <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                <span>Available for New Projects</span>
            </div>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-slate-900 dark:text-white mb-6">
                Hi, I'm <span class="text-gradient">Alex Morgan</span>
            </h1>

            <!-- Dynamic Typing Effect -->
            <div class="h-12 sm:h-16 text-xl sm:text-3xl md:text-4xl font-semibold text-slate-600 dark:text-slate-300 mb-8">
                <span id="typingElement" class="typing-cursor text-slate-800 dark:text-slate-100"></span>
            </div>

            <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-10">
                Crafting modern, scalable web applications with pixel-perfect responsive designs and robust backend architectures. Turning complex ideas into elegant digital solutions.
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#services" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-accent text-white font-semibold text-base shadow-lg hover:shadow-brand-cyan/25 transform hover:-translate-y-1 transition-all flex items-center justify-center space-x-2">
                    <span>Explore Works</span>
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
                <a href="#contact" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-slate-300 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-800 dark:text-slate-200 font-semibold text-base transition-all flex items-center justify-center space-x-2">
                    <i data-lucide="download" class="w-5 h-5"></i>
                    <span>Download CV</span>
                </a>
            </div>

            <!-- Social Links Banner -->
            <div class="mt-16 flex items-center justify-center space-x-6 text-slate-500 dark:text-slate-400">
                <a href="#" class="hover:text-brand-cyan transition-colors p-2 rounded-lg bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
                    <i data-lucide="github" class="w-5 h-5"></i>
                </a>
                <a href="#" class="hover:text-brand-cyan transition-colors p-2 rounded-lg bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                </a>
                <a href="#" class="hover:text-brand-cyan transition-colors p-2 rounded-lg bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
                    <i data-lucide="twitter" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="py-24 bg-slate-100/60 dark:bg-slate-900/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-xs font-bold uppercase tracking-wider text-brand-cyan mb-2">Get To Know Me</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">About Me</p>
                <div class="w-16 h-1 bg-gradient-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Profile Card -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative w-full max-w-md p-6 bg-white dark:bg-brand-cardDark rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl glass-card">
                        <div class="relative w-full h-80 rounded-xl overflow-hidden mb-6 bg-slate-200 dark:bg-slate-800">
                            <!-- Avatar Placeholder Visual -->
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80"
                                 alt="Alex Morgan"
                                 class="w-full h-full object-cover"
                                 onerror="this.onerror=null; this.src='https://placehold.co/600x600/111827/06b6d4?text=Alex+Morgan';"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-transparent to-transparent"></div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div class="p-3 bg-slate-50 dark:bg-slate-900/80 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="block text-2xl font-extrabold text-brand-cyan">5+</span>
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">Years Exp.</span>
                            </div>
                            <div class="p-3 bg-slate-50 dark:bg-slate-900/80 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="block text-2xl font-extrabold text-brand-violet">45+</span>
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">Projects</span>
                            </div>
                            <div class="p-3 bg-slate-50 dark:bg-slate-900/80 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="block text-2xl font-extrabold text-emerald-500">20+</span>
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">Clients</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Detailed Bio & Skill Bars -->
                <div class="lg:col-span-7 space-y-6">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">
                        Passionate Full-Stack Developer dedicated to building efficient, modern web applications.
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        I specialize in building full-stack applications with strong focus on Laravel, PHP, and modern JavaScript frameworks. Over the past 5 years, I've designed scalable architectures, optimized MySQL databases, and crafted engaging frontend interfaces.
                    </p>

                    <!-- Interactive Tech Skills Tabs -->
                    <div class="pt-4">
                        <div class="flex border-b border-slate-200 dark:border-slate-800 space-x-6 mb-6">
                            <button id="tabBtnFrontend" onclick="switchSkillTab('frontend')" class="pb-3 text-sm font-semibold border-b-2 border-brand-cyan text-brand-cyan transition-all">
                                Frontend
                            </button>
                            <button id="tabBtnBackend" onclick="switchSkillTab('backend')" class="pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 transition-all">
                                Backend & Database
                            </button>
                            <button id="tabBtnTools" onclick="switchSkillTab('tools')" class="pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 transition-all">
                                Tools & DevOps
                            </button>
                        </div>

                        <!-- Frontend Tab Content -->
                        <div id="tabFrontend" class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>JavaScript (ES6+)</span>
                                    <span class="text-brand-cyan">90%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-accent rounded-full" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>Tailwind CSS & Bootstrap</span>
                                    <span class="text-brand-cyan">95%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-accent rounded-full" style="width: 95%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>Vue.js / React Basics</span>
                                    <span class="text-brand-cyan">80%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-accent rounded-full" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Backend Tab Content (Hidden by default) -->
                        <div id="tabBackend" class="space-y-4 hidden">
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>PHP / Laravel Framework</span>
                                    <span class="text-brand-violet">92%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-accent rounded-full" style="width: 92%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>MySQL & Database Design</span>
                                    <span class="text-brand-violet">88%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-accent rounded-full" style="width: 88%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>RESTful APIs & Microservices</span>
                                    <span class="text-brand-violet">85%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-accent rounded-full" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Tools Tab Content (Hidden by default) -->
                        <div id="tabTools" class="space-y-4 hidden">
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>Git / GitHub Workflows</span>
                                    <span class="text-emerald-500">90%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-emerald-400 to-teal-500 rounded-full" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-medium mb-1">
                                    <span>Docker & CI/CD Pipelines</span>
                                    <span class="text-emerald-500">75%</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-emerald-400 to-teal-500 rounded-full" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-xs font-bold uppercase tracking-wider text-brand-cyan mb-2">What I Offer</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Services & Expertise</p>
                <div class="w-16 h-1 bg-gradient-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 hover:border-brand-cyan/50 dark:hover:border-brand-cyan/50 transition-all duration-300 transform hover:-translate-y-2 group shadow-md hover:shadow-xl">
                    <div class="w-14 h-14 rounded-xl bg-brand-cyan/10 text-brand-cyan flex items-center justify-center mb-6 group-hover:bg-gradient-accent group-hover:text-white transition-colors duration-300">
                        <i data-lucide="code" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Full-Stack Web Dev</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        Custom, scalable web applications crafted using PHP & Laravel for powerful backend logic and API services.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 hover:border-brand-violet/50 dark:hover:border-brand-violet/50 transition-all duration-300 transform hover:-translate-y-2 group shadow-md hover:shadow-xl">
                    <div class="w-14 h-14 rounded-xl bg-brand-violet/10 text-brand-violet flex items-center justify-center mb-6 group-hover:bg-gradient-accent group-hover:text-white transition-colors duration-300">
                        <i data-lucide="layout" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Responsive UI/UX</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        Pixel-perfect, mobile-first frontend interfaces built with Tailwind CSS, Bootstrap, and interactive JS.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 transition-all duration-300 transform hover:-translate-y-2 group shadow-md hover:shadow-xl">
                    <div class="w-14 h-14 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300">
                        <i data-lucide="database" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Database Architecture</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        Optimized MySQL database schemes, query tuning, RESTful API design, and smooth third-party integrations.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 hover:border-amber-500/50 dark:hover:border-amber-500/50 transition-all duration-300 transform hover:-translate-y-2 group shadow-md hover:shadow-xl">
                    <div class="w-14 h-14 rounded-xl bg-amber-500/10 text-amber-500 flex items-center justify-center mb-6 group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Performance & SEO</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        High-speed page performance optimization, security hardening, and clean, search-engine-friendly code structure.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-slate-100/60 dark:bg-slate-900/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-xs font-bold uppercase tracking-wider text-brand-cyan mb-2">Let's Connect</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Get In Touch</p>
                <div class="w-16 h-1 bg-gradient-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Direct Contact Information -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-6 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-brand-cyan/10 text-brand-cyan flex items-center justify-center shrink-0">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Email</span>
                            <a href="mailto:alex.morgan@example.com" class="text-base font-bold text-slate-900 dark:text-white hover:text-brand-cyan transition-colors">alex.morgan@example.com</a>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-brand-violet/10 text-brand-violet flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Location</span>
                            <span class="text-base font-bold text-slate-900 dark:text-white">San Francisco, CA (Remote Ready)</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center shrink-0">
                            <i data-lucide="clock" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Availability</span>
                            <span class="text-base font-bold text-slate-900 dark:text-white">Open to Contract & Full-time</span>
                        </div>
                    </div>
                </div>

                <!-- Interactive Contact Form -->
                <div class="lg:col-span-7">
                    <form id="contactForm" class="p-8 rounded-2xl bg-white dark:bg-brand-cardDark border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="formName" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-2">Name</label>
                                <input type="text" id="formName" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:border-brand-cyan dark:focus:border-brand-cyan focus:outline-none transition-colors">
                            </div>
                            <div>
                                <label for="formEmail" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-2">Email</label>
                                <input type="email" id="formEmail" required placeholder="john@example.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:border-brand-cyan dark:focus:border-brand-cyan focus:outline-none transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="formSubject" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-2">Subject</label>
                            <input type="text" id="formSubject" required placeholder="Project Inquiry / Job Opportunity" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:border-brand-cyan dark:focus:border-brand-cyan focus:outline-none transition-colors">
                        </div>

                        <div>
                            <label for="formMessage" class="block text-xs font-semibold uppercase text-slate-600 dark:text-slate-400 mb-2">Message</label>
                            <textarea id="formMessage" rows="5" required placeholder="Tell me about your project..." class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:border-brand-cyan dark:focus:border-brand-cyan focus:outline-none transition-colors resize-none"></textarea>
                        </div>

                        <!-- Submit Notification Banner -->
                        <div id="formAlert" class="hidden p-4 rounded-xl text-sm font-medium"></div>

                        <button type="submit" id="submitBtn" class="w-full py-4 rounded-xl bg-gradient-accent text-white font-semibold shadow-lg hover:opacity-95 transform hover:-translate-y-0.5 transition-all flex items-center justify-center space-x-2">
                            <span>Send Message</span>
                            <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-brand-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-xs text-slate-500 dark:text-slate-400">
                &copy; 2026 Alex Morgan. All rights reserved. Crafted with passion & precision.
            </p>

            <div class="flex items-center space-x-6 text-xs text-slate-500 dark:text-slate-400">
                <a href="#home" class="hover:text-brand-cyan transition-colors">Home</a>
                <a href="#about" class="hover:text-brand-cyan transition-colors">About</a>
                <a href="#services" class="hover:text-brand-cyan transition-colors">Services</a>
                <a href="#contact" class="hover:text-brand-cyan transition-colors">Contact</a>
            </div>
        </div>
    </footer>

    <!-- Floating Back-to-Top Button -->
    <button id="backToTopBtn" class="fixed bottom-6 right-6 p-3 rounded-full bg-gradient-accent text-white shadow-xl opacity-0 pointer-events-none transition-all duration-300 z-50 hover:scale-110">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Dark / Light Mode Logic
        const themeToggleBtn = document.getElementById('themeToggleBtn');
        const mobileThemeToggleBtn = document.getElementById('mobileThemeToggleBtn');

        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        themeToggleBtn?.addEventListener('click', toggleTheme);
        mobileThemeToggleBtn?.addEventListener('click', toggleTheme);

        // Mobile Navigation Drawer Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn?.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile drawer on navigation link click
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Dynamic Typing Effect Logic
        const roles = [
            "Full-Stack Web Developer",
            "Laravel & PHP Specialist",
            "UI/UX Frontend Craftsman",
            "Database Architect"
        ];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById('typingElement');

        function typeEffect() {
            const currentRole = roles[roleIndex];

            if (isDeleting) {
                typingElement.textContent = currentRole.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentRole.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 40 : 80;

            if (!isDeleting && charIndex === currentRole.length) {
                typeSpeed = 2000; // Pause at full word
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                typeSpeed = 500;
            }

            setTimeout(typeEffect, typeSpeed);
        }

        document.addEventListener('DOMContentLoaded', typeEffect);

        // Interactive Skill Tab Switcher Logic
        function switchSkillTab(tab) {
            const tabFrontend = document.getElementById('tabFrontend');
            const tabBackend = document.getElementById('tabBackend');
            const tabTools = document.getElementById('tabTools');

            const btnFrontend = document.getElementById('tabBtnFrontend');
            const btnBackend = document.getElementById('tabBtnBackend');
            const btnTools = document.getElementById('tabBtnTools');

            // Hide all tabs
            tabFrontend.classList.add('hidden');
            tabBackend.classList.add('hidden');
            tabTools.classList.add('hidden');

            // Reset button active styles
            [btnFrontend, btnBackend, btnTools].forEach(btn => {
                btn.className = "pb-3 text-sm font-semibold border-b-2 border-transparent text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 transition-all";
            });

            // Show selected tab & set active button style
            if (tab === 'frontend') {
                tabFrontend.classList.remove('hidden');
                btnFrontend.className = "pb-3 text-sm font-semibold border-b-2 border-brand-cyan text-brand-cyan transition-all";
            } else if (tab === 'backend') {
                tabBackend.classList.remove('hidden');
                btnBackend.className = "pb-3 text-sm font-semibold border-b-2 border-brand-violet text-brand-violet transition-all";
            } else if (tab === 'tools') {
                tabTools.classList.remove('hidden');
                btnTools.className = "pb-3 text-sm font-semibold border-b-2 border-emerald-500 text-emerald-500 transition-all";
            }
        }

        // Back To Top Floating Button Scroll Behavior
        const backToTopBtn = document.getElementById('backToTopBtn');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Contact Form Interactive Validation
        const contactForm = document.getElementById('contactForm');
        const formAlert = document.getElementById('formAlert');
        const submitBtn = document.getElementById('submitBtn');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Disable button during simulated submission
            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span>Sending...</span>`;

            setTimeout(() => {
                formAlert.classList.remove('hidden', 'bg-red-500/10', 'text-red-500');
                formAlert.classList.add('bg-emerald-500/10', 'text-emerald-500', 'border', 'border-emerald-500/20');
                formAlert.textContent = 'Thank you! Your message has been sent successfully.';

                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = `<span>Send Message</span><i data-lucide="send" class="w-4 h-4"></i>`;
                lucide.createIcons();

                setTimeout(() => {
                    formAlert.classList.add('hidden');
                }, 5000);
            }, 1200);
        });
    </script>
</body>
</html>
