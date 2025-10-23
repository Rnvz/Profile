<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ywenant's Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-slate-900 font-sans">
    <div class="min-h-screen flex flex-col bg-white">
        <header class="w-full max-w-[1600px] mx-auto flex items-center justify-between px-6 py-6">
                <a href="#" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-semibold" style="background: linear-gradient(135deg,var(--violet-400),var(--violet-600));">YW</div>
                    <span class="text-lg font-semibold">Yohanes Wenanta</span>
                </a>
                <nav class="hidden md:flex items-center gap-4 text-sm">
                    <a href="#about" class="hover:text-violet-400 px-3 py-2 rounded-lg transition-colors hover:bg-violet-50">About</a>
                    <a href="#skills" class="hover:text-violet-400 px-3 py-2 rounded-lg transition-colors hover:bg-violet-50">Skills</a>
                    <a href="#experience" class="hover:text-violet-400 px-3 py-2 rounded-lg transition-colors hover:bg-violet-50">Experience</a>
                    <a href="#education" class="hover:text-violet-400 px-3 py-2 rounded-lg transition-colors hover:bg-violet-50">Education</a>
                    <a href="#contact" class="hover:text-violet-400 px-3 py-2 rounded-lg transition-colors hover:bg-violet-50">Contact</a>
                </nav>
            </header>
        <!-- HERO (full-width band) -->
        <section id="about" class="w-full section-gradient-light relative">
            <div class="max-w-[1200px] mx-auto px-6 py-16 md:py-24">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0 relative">
                        <div class="w-64 h-64 rounded-full p-1 violet-shadow-strong" style="background: linear-gradient(135deg,var(--violet-400),var(--violet-600));">
                            <div class="w-full h-full rounded-full bg-white overflow-hidden flex items-center justify-center border-violet-glow">
                                <img src="{{asset('assets/bgavatar.png')}}" class="w-full h-full object-cover" onerror="this.style.display='none'">
                            </div>
                        </div>
                        <div class="absolute -z-10 w-full h-full top-0 left-0 transform -translate-x-1/4 -translate-y-1/4">
                            <div class="w-full h-full rounded-full opacity-20" style="background: radial-gradient(circle at center, rgba(139, 92, 246, 0.3), transparent 70%);"></div>
                        </div>
                    </div>
                   <div class="flex-1 text-center md:text-left">
                        <div class="inline-block">
                            <h1 class="text-3xl md:text-4xl font-extrabold leading-tight mb-2 bg-clip-text text-transparent bg-gradient-to-r from-violet-600 to-violet-500">
                                Hi, I'm Yohanes Wenanta
                            </h1>
                        </div>
                        <p class="text-slate-600 mb-6 max-w-4xl">An Information Technology student at Bina Nusantara University passionate about building innovative web applications and applying technology to solve real-world problems.  
                                                                    I have a solid foundation in programming, UI/UX design, and data-driven systems, with experience from academic and volunteer projects that strengthened my teamwork and adaptability.</p>
                        <div class="flex items-center justify-center md:justify-start gap-4 glass-violet p-4 rounded-xl">
                            <a href="https://www.linkedin.com/in/yohanes-wenanta-2965a01ba/" class="inline-flex items-center gap-2 px-5 py-3 rounded-lg accent-violet hover:opacity-95 text-white text-sm font-medium shadow-lg transition-opacity">Let's Connect</a>
                            <a href="#projects" class="text-sm text-slate-500 dark:text-slate-400 hover:underline">See Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="skills" class="w-full bg-gradient-to-b from-slate-50 to-white border-b border-slate-100 relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="pattern-dots opacity-10"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-violet-100/20 via-transparent to-violet-100/20"></div>
            </div>
            
            <div class="max-w-[1400px] mx-auto px-6 py-20 relative">
                <div class="text-center mb-16">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 bg-gradient-to-r ">Skills & Expertise</h2>
                    <div class="w-20 h-1 mx-auto rounded-full bg-gradient-to-r from-violet-500 to-violet-300"></div>
                </div>

                <!-- Skills Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                     <div class="group relative flex">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                        <div class="relative p-8 rounded-xl bg-white shadow-lg card-hover-effect backdrop-blur-sm flex flex-col h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-400 flex items-center justify-center text-white shadow-lg flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold ml-4 text-slate-800">Frontend Development</h3>
                            </div>
                            <p class="text-sm text-slate-600 mb-6 flex-grow">Crafting responsive and accessible user interfaces with focus on usability.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-tag">HTML</span>
                                <span class="skill-tag">CSS</span>
                                <span class="skill-tag">TailwindCss</span>
                                <span class="skill-tag">Streamlit</span>
                                <span class="skill-tag">Figma</span>
                            </div>
                        </div>
                    </div>


                    <div class="group relative flex">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                        <div class="relative p-8 rounded-xl bg-white shadow-lg card-hover-effect backdrop-blur-sm flex flex-col h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-400 flex items-center justify-center text-white shadow-lg flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold ml-4 text-slate-800">Backend & Version Control Systems</h3>
                            </div>
                            <p class="text-sm text-slate-600 mb-6 flex-grow">Managing structured data and collaborative workflows.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-tag">MySQL</span>
                                <span class="skill-tag">Git / Github</span>
                                <span class="skill-tag">Javascript</span>
                                <span class="skill-tag">Google Colab</span>
                            </div>
                        </div>
                    </div>


                    <div class="group relative flex">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300"></div>
                        <div class="relative p-8 rounded-xl bg-white shadow-lg card-hover-effect backdrop-blur-sm flex flex-col h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-400 flex items-center justify-center text-white shadow-lg flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold ml-4 text-slate-800">Data Science</h3>
                            </div>
                            <p class="text-sm text-slate-600 mb-6 flex-grow">Analyzing complex datasets, clustering health-related data, and building data-driven insights</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-tag">Python</span>
                                <span class="skill-tag">Pandas</span>
                                <span class="skill-tag">Scikit-learn</span>
                                <span class="skill-tag">Numpy</span>
                                <span class="skill-tag">Matplotlib</span>
                                <span class="skill-tag">Seaborn</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="experience" class="w-full bg-white relative py-20">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-0 left-0 w-64 h-64 bg-violet-600 rounded-full mix-blend-multiply blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-violet-400 rounded-full mix-blend-multiply blur-3xl"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative">
                <!-- Section Header -->
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="text-3xl font-bold mb-4">Volunteer & Experience </h2>
                    <div class="w-24 h-1 mx-auto bg-gradient-to-r from-violet-500 to-violet-300 rounded-full"></div>
                </div>

           
                <div class="relative"> 
                    <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-violet-500/20 to-violet-300/20"></div>

                    <div class="space-y-16">
                        <div class="relative group">
                            <div class="absolute left-8 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-violet-500 bg-white shadow-md"></div>
                            
                            <div class="ml-16 md:ml-0 md:flex md:items-center even:md:flex-row-reverse group">
                                <div class="hidden md:block md:w-1/2 px-8">
                                    <div class="inline-flex items-center py-2 px-4 bg-violet-50 text-violet-700 rounded-full font-medium text-sm">
                                        2025
                                    </div>
                                </div>

                                <div class="md:w-1/2 p-6 bg-white rounded-2xl shadow-lg transition-all duration-300 hover:shadow-2xl">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-400 p-0.5">
                                            <div class="w-full h-full rounded-2xl bg-white flex items-center justify-center font-bold text-2xl text-violet-600">
                                                Vo
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-slate-900">Community : Instructor</h3>
                                            <p class="text-violet-600 font-medium">Instructor & Material Designer</p>
                                        </div>
                                    </div>

                                    <div class="space-y-4">
                                        <p class="text-slate-600">Conducted a hands-on training session on PowerPoint basics for elementary school students. Designed simple 
                                                                    interactive materials and guided students in creating their own slides. This experience honed my adaptability, 
                                                                    creativity, and communication skills when teaching young learners.</p>
                                        <ul class="space-y-2">
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Created visual learning materials tailored for children.
                                            </li>
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Led the session, explaining step-by-step PowerPoint use.
                                            </li>
                                        </ul>
                            
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span class="experience-tag">Teaching</span>
                                            <span class="experience-tag">Communication</span>
                                            <span class="experience-tag">Creativity</span>
                                            <span class="experience-tag">Team Collaboration</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <div class="absolute left-8 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-violet-500 bg-white shadow-md"></div>
                            

                            <div class="ml-16 md:ml-0 md:flex md:items-center">
                                <div class="hidden md:block md:w-1/2 px-8 text-right">
                                    <div class="inline-flex items-center py-2 px-4 bg-violet-50 text-violet-700 rounded-full font-medium text-sm">
                                        2024
                                    </div>
                                </div>

                             
                                <div class="md:w-1/2 p-6 bg-white rounded-2xl shadow-lg transition-all duration-300 hover:shadow-2xl">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-400 p-0.5">
                                            <div class="w-full h-full rounded-2xl bg-white flex items-center justify-center font-bold text-2xl text-violet-600">
                                                Vo
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-slate-900">Volunteer: Religious Harmony Education</h3>
                                            <p class="text-violet-600 font-medium">Campaign Organizer & Presenterr</p>
                                        </div>
                                    </div>


                                    <div class="space-y-4">
                                        <p class="text-slate-600">Collaborated with peers to raise awareness about religious tolerance and the impact of social media on interfaith relationships.</p>
                                        <ul class="space-y-2">
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Created educational content to reduce online religious conflicts.
                                            </li>
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                               Promoted inclusive values through storytelling and social media.
                                            </li>
                                        </ul>

                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span class="experience-tag">Communication</span>
                                            <span class="experience-tag">Teamwork</span>
                                            <span class="experience-tag">Social Awareness</span>
                                            <span class="experience-tag">Visual Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <div class="absolute left-8 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-violet-500 bg-white shadow-md"></div>
                            
                            <div class="ml-16 md:ml-0 md:flex md:items-center even:md:flex-row-reverse group">
                                <div class="hidden md:block md:w-1/2 px-8">
                                    <div class="inline-flex items-center py-2 px-4 bg-violet-50 text-violet-700 rounded-full font-medium text-sm">
                                        2023
                                    </div>
                                </div>

                                <div class="md:w-1/2 p-6 bg-white rounded-2xl shadow-lg transition-all duration-300 hover:shadow-2xl">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-400 p-0.5">
                                            <div class="w-full h-full rounded-2xl bg-white flex items-center justify-center font-bold text-2xl text-violet-600">
                                                Vo
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-slate-900">Volunteer Campaign: SDG 13 Climate Action</h3>
                                            <p class="text-violet-600 font-medium">Campaign Organizer & Presenter</p>
                                        </div>
                                    </div>

                                    <div class="space-y-4">
                                        <p class="text-slate-600">Organized and led a campaign to promote awareness about Climate Action (SDG 13) among high school students through presentations and interactive media.</p>
                                        <ul class="space-y-2">
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Created digital campaign materials about environmental awareness.
                                            </li>
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                               Engaged students in interactive learning activities.
                                            </li>
                                        </ul>
                            
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span class="experience-tag">Communication</span>
                                            <span class="experience-tag">Public Speaking</span>
                                            <span class="experience-tag">Visual Design</span>
                                            <span class="experience-tag">Environmental Awareness</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="relative group">
                            <div class="absolute left-8 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-violet-500 bg-white shadow-md"></div>
                            

                            <div class="ml-16 md:ml-0 md:flex md:items-center">
                                <div class="hidden md:block md:w-1/2 px-8 text-right">
                                    <div class="inline-flex items-center py-2 px-4 bg-violet-50 text-violet-700 rounded-full font-medium text-sm">
                                        2023 - present
                                    </div>
                                </div>

                             
                                <div class="md:w-1/2 p-6 bg-white rounded-2xl shadow-lg transition-all duration-300 hover:shadow-2xl">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-400 p-0.5">
                                            <div class="w-full h-full rounded-2xl bg-white flex items-center justify-center font-bold text-2xl text-violet-600">
                                                XY
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-slate-900">University Projects</h3>
                                            <p class="text-violet-600 font-medium">Developer & Designer</p>
                                        </div>
                                    </div>


                                    <div class="space-y-4">
                                        <p class="text-slate-600">Worked on several academic projects focusing on software development, web design, and artificial intelligence applications.</p>
                                        <ul class="space-y-2">
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Supreme Court Judgement Classification - NLP model for court document classification. - Machine Learning
                                            </li>
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Serenity - Web app for Mental helath consultation. - Software Engineering
                                            </li>
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Tuberculosis Case Clustering in Jakarta - Data Mining
                                            </li>
                                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Peluang Nusantara - UI/UX design
                                            </li>
                                        </ul>

                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span class="experience-tag">MySQL</span>
                                            <span class="experience-tag">Git/Github</span>
                                            <span class="experience-tag">HTML/CSS/JS</span>
                                            <span class="experience-tag">REACT.ts</span>
                                            <span class="experience-tag">TailwindCss</span>
                                            <span class="experience-tag">UI/UX - Figma</span>
                                            <span class="experience-tag">Python</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="w-full bg-gradient-to-b from-slate-50 to-white relative py-20">
            <div class="absolute inset-0">
                <div class="absolute top-0 right-0 w-96 h-96 bg-violet-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-violet-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-6">
                <div class="mb-12">
                    <div class="space-y-2 text-center">
                        <h2 class="text-3xl font-bold text-slate-900">Featured Projects</h2>
                        <div class="w-24 h-1 mx-auto bg-gradient-to-r from-violet-500 to-violet-300 rounded-full"></div>
                    </div>
                </div>

                <!-- Project Grid -->
                <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-25 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative flex flex-col h-full bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                            <div class="relative w-full h-36">
                                <img src="{{asset('assets/Serenity.png')}}" alt="Serenity Logo" class="w-full h-full object-contain mx:auto">
                            </div>
                            <div class="p-4 flex-grow flex flex-col">
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Serenity</h3>
                                <p class="text-sm text-slate-600 mb-3 flex-grow">An affordable online platform for mental health consultation via chat or video call, featuring personalized psychologist matching and community forums.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tech-badge">TypeScript</span>
                                    <span class="tech-badge">React TS</span>
                                    <span class="tech-badge">TailwindCss</span>
                                    <span class="tech-badge">Firebase</span>
                                </div>
                                <a href="https://github.com/dheovanwa/Serenity" target="_blank" class="mt-auto self-start p-2 rounded-full hover:bg-violet-100 transition-colors" title="View on GitHub">
                                    <svg class="w-5 h-5 text-slate-500 group-hover:text-violet-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-25 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative flex flex-col h-full bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                            <div class="relative">
                                <img src="{{asset('assets/Supreme-court-judgement-classification.png')}}" alt="supreme court" class="w-full h-full object-fill mx:auto">
                            </div>
                            <div class="p-4 flex-grow flex flex-col">
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Supreme Court Judgement Classification</h3>
                                <p class="text-sm text-slate-600 mb-3 flex-grow">Machine Learning model for classifying U.S Goverment court judgements automatically.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tech-badge">Python</span>
                                    <span class="tech-badge">Machine Learning</span>
                                    <span class="tech-badge">Streamlit</span>
                                </div>
                                <a href="https://github.com/dheovanwa/Supreme-court-judgement-classification" target="_blank" class="mt-auto self-start p-2 rounded-full hover:bg-violet-100 transition-colors" title="View on GitHub">
                                    <svg class="w-5 h-5 text-slate-500 group-hover:text-violet-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

             
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-25 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative flex flex-col h-full bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                            <div class="relative w-iull">
                                <img src="{{asset('assets/TBC_Clustering_DataMining.png')}}" alt="Data mining" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 flex-grow flex flex-col">
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Tuberculosis Case Clustering in Jakarta</h3>
                                <p class="text-sm text-slate-600 mb-3 flex-grow">A data mining project applying Agglomerative Clustering to map tuberculosis case patterns across Jakarta.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tech-badge">Python</span>
                                    <span class="tech-badge">Data Mining</span>
                                    <span class="tech-badge">Clustering</span>
                                </div>
                                <a href="https://github.com/Rnvz/TBC_Clustering_DataMining" target="_blank" class="mt-auto self-start p-2 rounded-full hover:bg-violet-100 transition-colors" title="View on GitHub">
                                    <svg class="w-5 h-5 text-slate-500 group-hover:text-violet-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

      
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-violet-400 rounded-2xl blur opacity-25 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative flex flex-col h-full bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                            <div class="relative w-full h-36">
                                <img src="{{asset('assets/Archive-HCI.png')}}" alt="Portfolio Website Project Image" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4 flex-grow flex flex-col">
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Peluang Nusantara</h3>
                                <p class="text-sm text-slate-600 mb-3 flex-grow">A UI/UX design prototype for a digital archiving system helping SMEs store and organize business documents efficiently.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tech-badge">HTML</span>
                                    <span class="tech-badge">CSS</span>
                                    <span class="tech-badge">Js</span>
                                    <span class="tech-badge">Figma</span>
                                </div>
                                <a href="https://github.com/Dexcop/Archive-HCI" target="_blank" class="mt-auto self-start p-2 rounded-full hover:bg-violet-100 transition-colors" title="View on GitHub">
                                    <svg class="w-5 h-5 text-slate-500 group-hover:text-violet-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

        </section>
            <section id="education" class="w-full bg-slate-50 border-t border-b border-slate-100 py-20">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-slate-900">Education</h2>
                        <div class="w-24 h-1 mx-auto mt-2 bg-gradient-to-r from-violet-500 to-violet-300 rounded-full"></div>
                    </div>

                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-500 to-violet-300 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white p-8 rounded-xl shadow-lg flex items-center gap-8">

                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-violet-500 to-violet-400 flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v6m-6-3.5v3.5m12-3.5v3.5"></path>
                                    </svg>
                                </div>
                            </div>
                       
                            <div>
                                <p class="text-sm text-violet-600 font-medium">2023 — Present</p>
                                <h3 class="text-xl font-bold text-slate-900 mt-1">Binus University</h3>
                                <p class="text-slate-600 mt-2">B.Sc. in Information Technology — focusing on software engineering, data systems, and modern web development.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-500 to-violet-300 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white p-8 rounded-xl shadow-lg flex items-center gap-8">

                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-violet-500 to-violet-400 flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v6m-6-3.5v3.5m12-3.5v3.5"></path>
                                    </svg>
                                </div>
                            </div>
                       
                            <div>
                                <p class="text-sm text-violet-600 font-medium">2020 — 2023</p>
                                <h3 class="text-xl font-bold text-slate-900 mt-1">Tarsisius 2 Highschool</h3>
                                <p class="text-slate-600 mt-2">Natural Science major with strong analytical and problem-solving foundations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="w-full bg-white py-20">
                <div class="max-w-4xl mx-auto px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-slate-900">Contact Me</h2>
                        <div class="w-24 h-1 mx-auto mt-2 bg-gradient-to-r from-violet-500 to-violet-300 rounded-full"></div>
                        <p class="mt-4 text-slate-600">Let's connect and discuss how we can work together!</p>
                    </div>

                    <!-- Grid Layout -->
                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="group relative">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-500 to-violet-300 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-violet-100 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-900">Email</h3>
                                        <a href="mailto:yohanes.wenanta@binus.ac.id"
                                            class="text-violet-600 hover:underline">Send Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LinkedIn -->
                        <div class="group relative">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-500 to-violet-300 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-violet-100 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-900">Phone Number</h3>
                                        <a class="text-violet-600" >081289992896</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- GitHub -->
                        <div class="group relative">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-500 to-violet-300 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-violet-100 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-slate-500 group-hover:text-violet-600" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-900">GitHub</h3>
                                        <a href="https://github.com/Rnvz" class="text-violet-600 hover:underline"
                                            target="_blank">View GitHub Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LinkedIn -->
                        <div class="group relative">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-500 to-violet-300 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                            <div class="relative bg-white p-6 rounded-lg shadow-lg">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-full bg-violet-100 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-slate-900">LinkedIn</h3>
                                        <a href="https://www.linkedin.com/in/yohanes-wenanta-2965a01ba/"
                                            class="text-violet-600 hover:underline" target="_blank">Connect on LinkedIn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="pt-2 border-t border-slate-100 text-center text-sm text-slate-500">
                <p class="pb-2">© {{ date('M Y') }} Yohanes Wenanta</p>
            </footer>
        </div>
    </div>
</body>
</html>
