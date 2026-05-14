<?php include 'header.php'; ?>

<!-- ── PAGE HEADER ── -->
<header class="pt-16 pb-12 px-6 md:px-12 max-w-[1280px] mx-auto relative overflow-hidden">
  <div class="scan-line absolute inset-0 opacity-10"></div>
  <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-primary/8 rounded-full blur-[120px] -z-10"></div>
  <div class="relative z-10 max-w-4xl">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/20 border border-primary/30 text-primary font-label text-[11px] tracking-widest uppercase mb-6">
      <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
      <span>PERFIL CORPORATIVO</span>
    </div>
    <h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight text-on-surface mb-4">Nosotros</h1>
    <p class="text-on-surface-variant text-lg max-w-2xl leading-relaxed">
      Conoce la misión, visión y valores que guían cada decisión tecnológica en KernelClic SAS.
    </p>
  </div>
</header>

<main class="px-6 md:px-12 pb-24 max-w-[1280px] mx-auto space-y-4">

  <!-- Quiénes somos -->
  <section class="glass-panel rounded-xl overflow-hidden group fade-up">
    <div class="flex flex-col md:flex-row">
      <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center space-y-6">
        <div class="font-label text-[11px] text-primary uppercase tracking-widest">QUIÉNES SOMOS</div>
        <h2 class="font-headline text-3xl font-bold text-on-surface tracking-tight">KernelClic SAS</h2>
        <p class="text-on-surface-variant text-sm leading-relaxed">
          KernelClic SAS es una empresa líder en el sector tecnológico, comprometida con el desarrollo y la implementación de soluciones que optimizan los procesos de nuestros clientes. Contamos con un equipo multidisciplinario de expertos apasionados por la tecnología.
        </p>
        <div class="flex flex-wrap gap-2 pt-2">
          <span class="px-3 py-1 bg-surface-variant/40 rounded font-code text-[11px] text-on-surface-variant border border-outline-variant/30">COLOMBIA</span>
          <span class="px-3 py-1 bg-primary/10 rounded font-code text-[11px] text-primary border border-primary/30">5+ AÑOS</span>
          <span class="px-3 py-1 bg-surface-variant/40 rounded font-code text-[11px] text-on-surface-variant border border-outline-variant/30">50+ PROYECTOS</span>
        </div>
      </div>
      <div class="md:w-1/2 relative min-h-[300px] overflow-hidden">
        <img src="assets/img/GettyImages-1356581284_NfIqD97.original-1024x576-1.webp"
             alt="Equipo KernelClic"
             class="w-full h-full object-cover grayscale-[40%] group-hover:grayscale-0 transition-all duration-700">
        <div class="absolute inset-0 bg-gradient-to-r from-surface-container via-transparent to-transparent"></div>
      </div>
    </div>
  </section>

  <!-- Misión y Visión -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <section class="glass-panel rounded-xl p-8 space-y-5 fade-up">
      <div class="p-3 bg-primary/10 rounded-lg w-fit">
        <span class="material-symbols-outlined text-primary text-3xl">rocket_launch</span>
      </div>
      <div class="font-label text-[11px] text-primary uppercase tracking-widest">MISIÓN</div>
      <h3 class="font-headline text-2xl font-bold text-on-surface">Nuestra Misión</h3>
      <p class="text-on-surface-variant text-sm leading-relaxed">
        Proveer soluciones tecnológicas innovadoras y de alta calidad que impulsen el crecimiento y la eficiencia de nuestros clientes, fomentando el desarrollo social y empresarial.
      </p>
    </section>

    <section class="glass-panel rounded-xl p-8 space-y-5 fade-up">
      <div class="p-3 bg-secondary/10 rounded-lg w-fit">
        <span class="material-symbols-outlined text-secondary text-3xl">visibility</span>
      </div>
      <div class="font-label text-[11px] text-secondary uppercase tracking-widest">VISIÓN</div>
      <h3 class="font-headline text-2xl font-bold text-on-surface">Nuestra Visión</h3>
      <p class="text-on-surface-variant text-sm leading-relaxed">
        Ser reconocidos a nivel nacional como un referente en soluciones tecnológicas integrales, destacándonos por nuestra excelencia, compromiso y capacidad de innovación constante.
      </p>
    </section>
  </div>

  <!-- Valores -->
  <section class="glass-panel rounded-xl p-8 md:p-10 fade-up">
    <div class="mb-8">
      <div class="font-label text-[11px] text-on-surface-variant uppercase tracking-widest mb-2">VALORES CORPORATIVOS</div>
      <h2 class="font-headline text-2xl font-bold text-on-surface">Los principios que nos guían</h2>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4">

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">handshake</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Honestidad</p>
      </div>

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">verified</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Compromiso</p>
      </div>

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">school</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Conocimiento</p>
      </div>

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">workspace_premium</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Calidad</p>
      </div>

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">lightbulb</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Innovación</p>
      </div>

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">trending_up</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Desarrollo</p>
      </div>

      <div class="bg-surface-container-low rounded-xl p-5 text-center space-y-3 border border-outline-variant/20 hover:border-primary/40 transition-all group">
        <span class="material-symbols-outlined text-primary text-3xl group-hover:scale-110 transition-transform inline-block">groups</span>
        <p class="font-label text-[11px] text-on-surface-variant uppercase tracking-wide">Impacto Social</p>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="glass-panel rounded-xl p-10 relative overflow-hidden fade-up">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/8 to-transparent"></div>
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="space-y-3">
        <h2 class="font-headline text-2xl font-bold text-on-surface">¿Quieres trabajar con nosotros?</h2>
        <p class="text-on-surface-variant text-sm">Hablemos sobre cómo nuestras soluciones pueden optimizar tu operación.</p>
      </div>
      <a href="contacto.php"
         class="shrink-0 bg-primary text-on-primary px-8 py-4 rounded-lg font-bold hover:scale-105 active:scale-95 transition-all electric-glow">
        Contactar Ahora
      </a>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>
