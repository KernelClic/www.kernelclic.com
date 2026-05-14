<?php include 'header.php'; ?>

<!-- ── PAGE HEADER ── -->
<header class="pt-16 pb-12 px-6 md:px-12 max-w-[1280px] mx-auto relative overflow-hidden">
  <div class="scan-line absolute inset-0 opacity-10"></div>
  <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-tertiary/8 rounded-full blur-[120px] -z-10"></div>
  <div class="relative z-10 max-w-4xl">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-tertiary-container/20 border border-tertiary/30 text-tertiary font-label text-[11px] tracking-widest uppercase mb-6">
      <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
      <span>PORTAFOLIO DE PRODUCTOS</span>
    </div>
    <h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight text-on-surface mb-4">Nuestros Productos</h1>
    <p class="text-on-surface-variant text-lg max-w-2xl leading-relaxed">
      Herramientas especializadas desarrolladas por KernelClic para optimizar la gestión y administración en diferentes sectores.
    </p>
  </div>
</header>

<main class="px-6 md:px-12 pb-24 max-w-[1280px] mx-auto">

  <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

    <!-- SIG — Destacado -->
    <div class="md:col-span-8 glass-panel rounded-xl overflow-hidden group hover:border-primary/30 transition-all fade-up">
      <div class="h-[280px] relative overflow-hidden">
        <img src="assets/img/BAi8zTJtQWFF1a1JONz9dfWn_mtv5i7g.jpg" alt="SIG"
             class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-90 transition-all duration-700 scale-105 group-hover:scale-100">
        <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-transparent to-transparent"></div>
        <div class="absolute bottom-5 left-6 right-6 flex justify-between items-end">
          <div>
            <div class="flex gap-2 mb-2">
              <span class="bg-primary/10 text-primary px-2 py-1 rounded font-label text-[10px] border border-primary/20 uppercase">Sector Educativo</span>
              <span class="bg-green-500/10 text-green-400 px-2 py-1 rounded font-label text-[10px] border border-green-500/20 uppercase">Activo</span>
            </div>
            <h3 class="font-headline text-2xl font-bold text-white">SIG Establecimientos Educativos</h3>
          </div>
        </div>
      </div>
      <div class="p-6">
        <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
          Sistema de Información y Gestión para instituciones educativas. Administra matrículas, notas, asistencia y reportes académicos de manera eficiente y centralizada.
        </p>
        <div class="flex items-center justify-between flex-wrap gap-4 border-t border-outline-variant/30 pt-5">
          <div class="flex gap-3">
            <div class="flex items-center gap-1.5 text-on-surface-variant text-sm">
              <span class="material-symbols-outlined text-primary text-base">school</span>
              <span class="font-code text-[12px]">Gestión Académica</span>
            </div>
            <div class="flex items-center gap-1.5 text-on-surface-variant text-sm border-l border-outline-variant/30 pl-3">
              <span class="material-symbols-outlined text-primary text-base">bar_chart</span>
              <span class="font-code text-[12px]">Reportes Automáticos</span>
            </div>
          </div>
          <a href="contacto.php?producto=SIG" class="flex items-center gap-2 text-primary font-bold text-sm hover:gap-3 transition-all">
            Solicitar Demo <span class="material-symbols-outlined text-base">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Sistema COVID -->
    <div class="md:col-span-4 glass-panel rounded-xl overflow-hidden hover:border-primary/30 transition-all group fade-up">
      <div class="h-48 relative overflow-hidden">
        <img src="assets/img/premium_photo-1678565999332-1cde462f7b24.jpeg" alt="Sistema COVID"
             class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
        <div class="absolute inset-0 bg-surface-container-lowest/50"></div>
      </div>
      <div class="p-6 space-y-4">
        <div class="flex gap-2">
          <span class="bg-secondary/10 text-secondary px-2 py-1 rounded font-label text-[10px] border border-secondary/20 uppercase">Salud</span>
        </div>
        <h3 class="font-headline text-xl font-bold text-on-surface">Sistema COVID</h3>
        <p class="text-on-surface-variant text-sm leading-relaxed">
          Plataforma para el seguimiento y control de protocolos de bioseguridad y registro del estado de salud en organizaciones.
        </p>
        <a href="contacto.php?producto=COVID" class="flex items-center gap-2 text-primary font-bold text-sm hover:gap-3 transition-all">
          Solicitar Demo <span class="material-symbols-outlined text-base">arrow_forward</span>
        </a>
      </div>
    </div>

    <!-- SIAMOT -->
    <div class="md:col-span-4 glass-panel rounded-xl overflow-hidden hover:border-tertiary/30 transition-all group fade-up">
      <div class="h-48 relative overflow-hidden">
        <img src="assets/img/Sistema-de-almacenamiento-y-servidores.jpg" alt="SIAMOT"
             class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
        <div class="absolute inset-0 bg-surface-container-lowest/50"></div>
      </div>
      <div class="p-6 space-y-4">
        <div class="flex gap-2">
          <span class="bg-tertiary/10 text-tertiary px-2 py-1 rounded font-label text-[10px] border border-tertiary/20 uppercase">Hospitalidad</span>
        </div>
        <h3 class="font-headline text-xl font-bold text-on-surface">SIAMOT</h3>
        <p class="text-on-surface-variant text-sm leading-relaxed">
          Sistema integral para la gestión y administración de moteles. Control de habitaciones, inventarios y facturación en tiempo real.
        </p>
        <a href="contacto.php?producto=SIAMOT" class="flex items-center gap-2 text-tertiary font-bold text-sm hover:gap-3 transition-all">
          Solicitar Demo <span class="material-symbols-outlined text-base">arrow_forward</span>
        </a>
      </div>
    </div>

    <!-- SIADSE -->
    <div class="md:col-span-8 glass-panel rounded-xl overflow-hidden hover:border-secondary/30 transition-all group fade-up">
      <div class="flex flex-col md:flex-row h-full">
        <div class="md:w-2/5 relative min-h-[220px] overflow-hidden">
          <img src="assets/img/Low code screen_banner_desktop.webp" alt="SIADSE"
               class="w-full h-full object-cover grayscale-[40%] group-hover:grayscale-0 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-r from-transparent to-surface-container/60"></div>
        </div>
        <div class="md:w-3/5 p-8 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="flex gap-2">
              <span class="bg-secondary/10 text-secondary px-2 py-1 rounded font-label text-[10px] border border-secondary/20 uppercase">Sector Público</span>
              <span class="bg-green-500/10 text-green-400 px-2 py-1 rounded font-label text-[10px] border border-green-500/20 uppercase">Producción</span>
            </div>
            <h3 class="font-headline text-2xl font-bold text-on-surface">SIADSE</h3>
            <p class="text-on-surface-variant text-sm leading-relaxed">
              Sistema de Información y Administración de Datos del Sector Educativo. Herramienta robusta para secretarías de educación, con gestión centralizada de datos e indicadores.
            </p>
            <div class="flex gap-2 flex-wrap">
              <span class="bg-surface-container-high px-2 py-1 rounded font-code text-[11px] text-on-surface-variant">SECTOR PÚBLICO</span>
              <span class="bg-surface-container-high px-2 py-1 rounded font-code text-[11px] text-on-surface-variant">DATOS ABIERTOS</span>
            </div>
          </div>
          <a href="contacto.php?producto=SIADSE" class="mt-6 flex items-center gap-2 text-primary font-bold text-sm hover:gap-3 transition-all">
            Solicitar Demo <span class="material-symbols-outlined text-base">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>

  </div>

  <!-- Arsenal técnico -->
  <section class="mt-16 py-12 border-y border-outline-variant/20 fade-up">
    <div class="font-label text-[11px] text-center text-on-surface-variant uppercase tracking-[0.2em] mb-10">Arsenal Técnico</div>
    <div class="flex flex-wrap justify-center gap-x-12 gap-y-8 opacity-50">
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">deployed_code</span>
        <span class="font-code text-sm">PHP / MySQL</span>
      </div>
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">terminal</span>
        <span class="font-code text-sm">Python / Django</span>
      </div>
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">cloud</span>
        <span class="font-code text-sm">Cloud Native</span>
      </div>
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">psychology</span>
        <span class="font-code text-sm">IA / NLP</span>
      </div>
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">storage</span>
        <span class="font-code text-sm">PostgreSQL</span>
      </div>
      <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">security</span>
        <span class="font-code text-sm">OAuth 2.0</span>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="mt-16 glass-panel rounded-xl p-12 text-center relative overflow-hidden fade-up">
    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[100px] -mr-32 -mt-32"></div>
    <div class="relative z-10 max-w-2xl mx-auto space-y-6">
      <h2 class="font-headline text-3xl font-bold text-on-surface">¿Listo para optimizar tu operación?</h2>
      <p class="text-on-surface-variant text-sm leading-relaxed">Nuestros ingenieros están listos para presentarte el producto que mejor se adapte a las necesidades de tu organización.</p>
      <div class="flex flex-col md:flex-row justify-center gap-4">
        <a href="contacto.php" class="bg-primary text-on-primary px-10 py-4 rounded-lg font-bold hover:brightness-110 active:scale-95 transition-all electric-glow">
          Solicitar Demo
        </a>
        <a href="servicios.php" class="border border-outline-variant/50 text-on-surface px-10 py-4 rounded-lg font-bold hover:bg-surface-variant/30 transition-all">
          Ver Servicios
        </a>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>
