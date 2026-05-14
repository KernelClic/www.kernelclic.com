<?php include 'header.php'; ?>

<!-- ── HERO ── -->
<section class="relative min-h-[calc(100vh-65px)] flex flex-col justify-center px-6 md:px-12 max-w-[1280px] mx-auto overflow-hidden">
  <!-- Background glows -->
  <div class="absolute top-[-8%] right-[-8%] w-[560px] h-[560px] bg-primary/10 rounded-full blur-[130px] -z-10"></div>
  <div class="absolute bottom-[-15%] left-[-6%] w-[380px] h-[380px] bg-tertiary/6 rounded-full blur-[110px] -z-10"></div>
  <div class="scan-line absolute inset-0 opacity-20 -z-10"></div>

  <div class="max-w-3xl space-y-6 py-20">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high border border-outline-variant/30">
      <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
      <span class="font-label text-[11px] tracking-widest text-primary uppercase">Sistema v2.0.4 · En Línea</span>
    </div>

    <h1 class="font-headline text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.1] text-on-surface">
      Soluciones tecnológicas que impulsan tu <span class="text-primary-container">crecimiento</span>
    </h1>

    <p class="text-on-surface-variant text-lg md:text-xl max-w-2xl leading-relaxed">
      En KernelClic transformamos tus ideas en soluciones digitales robustas y escalables.
    </p>

    <div class="flex flex-wrap gap-4 pt-2">
      <a href="servicios.php"
         class="bg-primary-container text-on-primary-container px-8 py-4 rounded-lg font-bold text-lg hover:brightness-110 transition-all electric-glow">
        Explorar Servicios
      </a>
      <a href="contacto.php"
         class="glass-panel text-on-surface px-8 py-4 rounded-lg font-bold text-lg hover:bg-surface-variant/50 transition-all">
        Hablar con un Experto
      </a>
    </div>
  </div>
</section>

<!-- ── BIENVENIDA ── -->
<section class="border-b border-outline-variant/20 bg-surface-container-lowest">
  <div class="max-w-[1280px] mx-auto px-6 md:px-12 py-12 fade-up">
    <h2 class="font-headline text-2xl font-bold text-on-surface mb-3">Bienvenido a KernelClic</h2>
    <p class="text-on-surface-variant text-sm leading-relaxed max-w-3xl">
      Somos una empresa dedicada a ofrecer soluciones integrales en tecnología, desde desarrollo de software a medida hasta infraestructura de redes y seguridad. Nuestro compromiso es brindar calidad e innovación en cada proyecto.
    </p>
  </div>
</section>

<!-- ── STATS ── -->
<section class="border-y border-outline-variant/20 bg-surface-container-lowest">
  <div class="max-w-[1280px] mx-auto px-6 md:px-12">
    <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-outline-variant/20">
      <div class="py-10 px-6 text-center">
        <div class="text-5xl font-headline font-extrabold text-on-surface stat-num">
          <span class="stat-number" data-target="50">0</span><span class="text-primary">+</span>
        </div>
        <p class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase mt-2">Proyectos Entregados</p>
      </div>
      <div class="py-10 px-6 text-center">
        <div class="text-5xl font-headline font-extrabold text-on-surface stat-num">
          <span class="stat-number" data-target="30">0</span><span class="text-primary">+</span>
        </div>
        <p class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase mt-2">Clientes Satisfechos</p>
      </div>
      <div class="py-10 px-6 text-center">
        <div class="text-5xl font-headline font-extrabold text-on-surface stat-num">
          <span class="stat-number" data-target="5">0</span><span class="text-primary">+</span>
        </div>
        <p class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase mt-2">Años de Experiencia</p>
      </div>
      <div class="py-10 px-6 text-center">
        <div class="text-5xl font-headline font-extrabold text-on-surface stat-num">
          <span class="stat-number" data-target="100">0</span><span class="text-primary">%</span>
        </div>
        <p class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase mt-2">Compromiso con Calidad</p>
      </div>
    </div>
  </div>
</section>

<!-- ── SERVICIOS BENTO ── -->
<section class="py-24 px-6 md:px-12 max-w-[1280px] mx-auto">
  <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
    <div class="space-y-2 fade-up">
      <h2 class="font-headline text-3xl font-bold tracking-tight text-on-surface">Ecosistema de Servicios</h2>
      <p class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase">Módulos de ingeniería especializados</p>
    </div>
    <div class="h-px flex-1 bg-outline-variant/30 mb-1 hidden md:block"></div>
    <a href="servicios.php" class="font-label text-[11px] tracking-widest text-primary uppercase hover:text-primary-container transition-colors shrink-0 fade-up">
      Ver todos →
    </a>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

    <!-- MeritoIA — destacado -->
    <div class="md:col-span-7 glass-panel rounded-xl p-8 flex flex-col gap-6 group hover:border-primary/40 transition-all fade-up">
      <div class="flex justify-between items-start">
        <div class="p-3 bg-primary/10 rounded-lg">
          <span class="material-symbols-outlined text-primary text-3xl">psychology</span>
        </div>
        <span class="font-label text-[10px] tracking-widest bg-primary-container/20 text-primary-container px-3 py-1 rounded-full border border-primary-container/30 uppercase">Módulo IA</span>
      </div>
      <div class="space-y-3">
        <h3 class="font-headline text-2xl font-bold text-on-surface">MeritoIA</h3>
        <p class="text-on-surface-variant leading-relaxed text-sm">
          Plataforma inteligente de evaluación de mérito y desempeño del talento humano, potenciada por IA. Análisis semántico de HV con 99.8% de precisión para concursos de carrera administrativa.
        </p>
      </div>
      <div class="mt-auto grid grid-cols-3 gap-4 border-t border-outline-variant/30 pt-5">
        <div>
          <div class="font-label text-[10px] text-primary uppercase tracking-wider mb-1">Latencia</div>
          <div class="font-headline font-bold text-on-surface">240ms</div>
        </div>
        <div>
          <div class="font-label text-[10px] text-primary uppercase tracking-wider mb-1">Capacidad</div>
          <div class="font-headline font-bold text-on-surface">10k/min</div>
        </div>
        <div>
          <div class="font-label text-[10px] text-primary uppercase tracking-wider mb-1">Precisión</div>
          <div class="font-headline font-bold text-on-surface">99.8%</div>
        </div>
      </div>
    </div>

    <!-- SIAMOT -->
    <div class="md:col-span-5 glass-panel rounded-xl p-8 flex flex-col gap-6 group hover:border-tertiary/40 transition-all fade-up">
      <div class="flex justify-between items-start">
        <div class="p-3 bg-tertiary/10 rounded-lg">
          <span class="material-symbols-outlined text-tertiary text-3xl">hub</span>
        </div>
        <span class="font-label text-[10px] tracking-widest bg-tertiary-container/20 text-tertiary-container px-3 py-1 rounded-full border border-tertiary-container/30 uppercase">Core Ops</span>
      </div>
      <div class="space-y-3">
        <h3 class="font-headline text-2xl font-bold text-on-surface">SIAMOT</h3>
        <p class="text-on-surface-variant leading-relaxed text-sm">
          Sistema integral de gestión y monitoreo operacional. Centralización de flujos de trabajo críticos en tiempo real.
        </p>
      </div>
      <div class="rounded-lg bg-surface-container-lowest p-4 font-label text-[11px] text-tertiary/70 border border-outline-variant/20 mt-auto">
        <pre><code>[INFO] SIAMOT_SERVICE_INIT
[STABLE] Conexión establecida
&gt; Escuchando en puerto 8080...</code></pre>
      </div>
    </div>

    <!-- Redes y Cableado -->
    <div class="md:col-span-4 glass-panel rounded-xl p-6 space-y-4 hover:border-primary/30 transition-all fade-up">
      <div class="p-3 bg-primary/10 rounded-lg w-fit">
        <span class="material-symbols-outlined text-primary text-2xl">lan</span>
      </div>
      <h4 class="font-label text-[11px] text-on-surface-variant uppercase tracking-wider">Módulo Infraestructura</h4>
      <h3 class="font-headline text-xl font-bold text-on-surface">Redes y Cableado</h3>
      <p class="text-on-surface-variant text-sm">Diseño e implementación de redes de voz y datos, cableado estructurado, CCTV y control de acceso.</p>
      <a href="servicios.php" class="font-label text-[11px] text-primary uppercase tracking-wider hover:text-primary-container transition-colors">Ver detalle →</a>
    </div>

    <!-- Software e Ingeniería -->
    <div class="md:col-span-4 glass-panel rounded-xl p-6 space-y-4 hover:border-secondary/30 transition-all fade-up">
      <div class="p-3 bg-secondary/10 rounded-lg w-fit">
        <span class="material-symbols-outlined text-secondary text-2xl">terminal</span>
      </div>
      <h4 class="font-label text-[11px] text-on-surface-variant uppercase tracking-wider">Módulo Software</h4>
      <h3 class="font-headline text-xl font-bold text-on-surface">Software e Ingeniería</h3>
      <p class="text-on-surface-variant text-sm">Desarrollo de aplicaciones web, móviles y de escritorio a medida. Consultoría y documentación técnica.</p>
      <a href="servicios.php" class="font-label text-[11px] text-secondary uppercase tracking-wider hover:text-on-secondary-container transition-colors">Ver detalle →</a>
    </div>

    <!-- Hardware e Infraestructura -->
    <div class="md:col-span-4 glass-panel rounded-xl p-6 space-y-4 hover:border-tertiary/30 transition-all fade-up">
      <div class="p-3 bg-tertiary/10 rounded-lg w-fit">
        <span class="material-symbols-outlined text-tertiary text-2xl">dns</span>
      </div>
      <h4 class="font-label text-[11px] text-on-surface-variant uppercase tracking-wider">Módulo Hardware</h4>
      <h3 class="font-headline text-xl font-bold text-on-surface">Hardware e Infraestructura</h3>
      <p class="text-on-surface-variant text-sm">Provisión, integración y mantenimiento preventivo y correctivo de equipos de cómputo e impresión.</p>
      <a href="servicios.php" class="font-label text-[11px] text-tertiary uppercase tracking-wider hover:text-tertiary-container transition-colors">Ver detalle →</a>
    </div>

  </div>
</section>

<!-- ── POR QUÉ ELEGIRNOS ── -->
<section class="py-24 px-6 md:px-12 max-w-[1280px] mx-auto border-t border-outline-variant/20">
  <div class="mb-12 fade-up">
    <h2 class="font-headline text-3xl font-bold tracking-tight text-on-surface mb-2">¿Por qué elegirnos?</h2>
    <p class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase">Arquitectura de precisión y autoridad técnica</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="glass-panel rounded-xl p-8 text-center space-y-4 hover:border-primary/30 transition-all fade-up">
      <span class="material-symbols-outlined text-primary text-5xl">lightbulb</span>
      <h3 class="font-headline text-xl font-bold text-on-surface">Innovación</h3>
      <p class="text-on-surface-variant text-sm leading-relaxed">Utilizamos las últimas tecnologías para mantenerte a la vanguardia.</p>
    </div>
    <div class="glass-panel rounded-xl p-8 text-center space-y-4 hover:border-primary/30 transition-all fade-up">
      <span class="material-symbols-outlined text-primary text-5xl">security</span>
      <h3 class="font-headline text-xl font-bold text-on-surface">Seguridad</h3>
      <p class="text-on-surface-variant text-sm leading-relaxed">Protegemos tu información con los más altos estándares.</p>
    </div>
    <div class="glass-panel rounded-xl p-8 text-center space-y-4 hover:border-primary/30 transition-all fade-up">
      <span class="material-symbols-outlined text-primary text-5xl">support_agent</span>
      <h3 class="font-headline text-xl font-bold text-on-surface">Soporte</h3>
      <p class="text-on-surface-variant text-sm leading-relaxed">Acompañamiento continuo para garantizar el éxito de tu proyecto.</p>
    </div>
  </div>
</section>

<!-- ── CLIENTES ── -->
<section class="py-20 px-6 md:px-12 max-w-[1280px] mx-auto border-t border-outline-variant/20">
  <div class="text-center mb-10 fade-up">
    <span class="font-label text-[11px] tracking-widest text-on-surface-variant uppercase">Empresas que confían en nosotros</span>
  </div>
  <div class="glass-panel rounded-xl px-8 py-8 flex flex-wrap items-center justify-center gap-10 fade-up">
    <img src="assets/img/clients/LogoConsentido-01.png" alt="Consentido" class="h-10 w-auto object-contain grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
    <img src="assets/img/clients/LogoElParche.jpeg"     alt="El Parche"  class="h-10 w-auto object-contain grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
    <img src="assets/img/clients/LogoNasty.jpg"         alt="Nasty"      class="h-10 w-auto object-contain grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
    <img src="assets/img/clients/LogoOroyas.png"        alt="Oroyas"     class="h-10 w-auto object-contain grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
    <img src="assets/img/clients/LogoOveja.png"         alt="Oveja"      class="h-10 w-auto object-contain grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
  </div>
</section>

<!-- ── CTA ── -->
<section class="py-24 px-6 md:px-12 max-w-[1280px] mx-auto">
  <div class="glass-panel rounded-xl p-12 relative overflow-hidden fade-up">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/8 to-transparent"></div>
    <div class="scan-line absolute inset-0 opacity-10"></div>
    <div class="relative z-10 max-w-2xl space-y-6">
      <h2 class="font-headline text-4xl font-bold tracking-tight text-on-surface">¿Listo para transformar tu empresa?</h2>
      <p class="text-on-surface-variant text-lg leading-relaxed">Cuéntanos tu proyecto y encontremos juntos la solución tecnológica ideal para tu negocio.</p>
      <div class="flex flex-wrap items-center gap-6">
        <a href="contacto.php"
           class="bg-primary text-on-primary px-8 py-4 rounded-lg font-bold hover:scale-105 active:scale-95 transition-all shadow-lg shadow-primary/20">
          Iniciar Proyecto
        </a>
        <a href="servicios.php" class="font-label text-[12px] tracking-widest border-b border-primary text-primary hover:text-primary-container transition-colors uppercase">
          Ver todos los servicios
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
