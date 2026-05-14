<?php include 'header.php'; ?>

<!-- ── PAGE HEADER ── -->
<header class="pt-16 pb-12 px-6 md:px-12 max-w-[1280px] mx-auto relative overflow-hidden">
  <div class="scan-line absolute inset-0 opacity-10"></div>
  <div class="relative z-10 max-w-4xl">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/20 border border-primary/30 text-primary font-label text-[11px] tracking-widest uppercase mb-6">
      <span class="mr-1">ESTADO DEL SISTEMA: OPTIMIZADO</span>
      <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
    </div>
    <h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight text-on-surface mb-4">Nuestros Servicios</h1>
    <p class="text-on-surface-variant text-lg max-w-2xl leading-relaxed">
      Cerramos la brecha entre la complejidad arquitectónica y la ejecución empresarial. Soluciones integrales adaptadas a las necesidades de tu empresa.
    </p>
  </div>
</header>

<!-- ── BENTO GRID ── -->
<main class="px-6 md:px-12 pb-24 max-w-[1280px] mx-auto space-y-4">

  <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

    <!-- MÓDULO 01: Software e Ingeniería -->
    <section class="md:col-span-8 glass-panel rounded-xl p-8 relative overflow-hidden group fade-up">
      <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
        <span class="material-symbols-outlined text-[110px]" style="font-variation-settings:'FILL' 1;">speed</span>
      </div>
      <div class="flex flex-col h-full">
        <div class="mb-8">
          <div class="font-label text-[11px] text-primary uppercase tracking-widest mb-2">MÓDULO 01</div>
          <h2 class="font-headline text-2xl font-bold text-on-surface">Software e Ingeniería a Medida</h2>
          <div class="h-1 w-16 bg-primary mt-4"></div>
        </div>
        <p class="text-on-surface-variant text-sm leading-relaxed mb-8 max-w-xl">
          Desarrollo de aplicaciones web, móviles y de escritorio. Arquitectura de sistemas distribuidos, consultoría técnica y documentación especializada.
        </p>
        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 font-code text-sm">
          <li class="flex items-center gap-3 text-on-surface">
            <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings:'FILL' 1;">dataset</span> Desarrollo Web y Móvil
          </li>
          <li class="flex items-center gap-3 text-on-surface">
            <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings:'FILL' 1;">memory</span> Microservicios y APIs
          </li>
          <li class="flex items-center gap-3 text-on-surface">
            <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings:'FILL' 1;">lan</span> Software Libre y Open Source
          </li>
          <li class="flex items-center gap-3 text-on-surface">
            <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings:'FILL' 1;">hub</span> Servicios en la Nube
          </li>
        </ul>
      </div>
    </section>

    <!-- MÓDULO 02: Redes y Cableado -->
    <section class="md:col-span-4 glass-panel rounded-xl p-8 flex flex-col justify-between fade-up">
      <div>
        <div class="font-label text-[11px] text-secondary uppercase tracking-widest mb-2">MÓDULO 02</div>
        <h2 class="font-headline text-2xl font-bold text-on-surface">Redes y Cableado</h2>
        <p class="text-on-surface-variant text-sm mt-4 leading-relaxed">
          Diseño e implementación de redes de voz y datos, cableado estructurado, CCTV y sistemas de control de acceso.
        </p>
      </div>
      <div class="mt-8 space-y-3">
        <div class="bg-surface-container-low p-4 rounded border border-outline-variant/30">
          <div class="flex justify-between font-label text-[11px] text-on-surface-variant mb-2 uppercase">
            <span>Disponibilidad</span><span>99.9%</span>
          </div>
          <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
            <div class="bg-secondary h-full w-[99%]"></div>
          </div>
        </div>
        <div class="flex items-center gap-2 font-label text-[11px] text-on-secondary-container uppercase">
          <span class="material-symbols-outlined text-sm">check_circle</span> CERTIFICACIÓN CAT 6A
        </div>
        <ul class="space-y-2 pt-2">
          <li class="flex items-center gap-2 text-on-surface-variant text-sm"><span class="material-symbols-outlined text-secondary text-base">wifi</span> Redes de voz y datos</li>
          <li class="flex items-center gap-2 text-on-surface-variant text-sm"><span class="material-symbols-outlined text-secondary text-base">videocam</span> CCTV</li>
          <li class="flex items-center gap-2 text-on-surface-variant text-sm"><span class="material-symbols-outlined text-secondary text-base">lock</span> Control de acceso</li>
        </ul>
      </div>
    </section>

    <!-- MÓDULO 03: Hardware -->
    <section class="md:col-span-6 glass-panel rounded-xl p-8 border-l-4 border-l-primary fade-up">
      <div class="flex items-start gap-6">
        <div class="p-4 bg-primary/10 rounded-lg shrink-0">
          <span class="material-symbols-outlined text-primary text-3xl">dns</span>
        </div>
        <div>
          <div class="font-label text-[11px] text-primary uppercase tracking-widest mb-2">MÓDULO 03</div>
          <h2 class="font-headline text-2xl font-bold text-on-surface mb-4">Hardware e Infraestructura</h2>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Venta, soporte y mantenimiento preventivo y correctivo de equipos de cómputo e impresión. Integración de infraestructura para empresas.
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 bg-surface-variant/40 rounded font-code text-[11px] text-on-surface-variant border border-outline-variant/30">PREVENTIVO</span>
            <span class="px-2 py-1 bg-surface-variant/40 rounded font-code text-[11px] text-on-surface-variant border border-outline-variant/30">CORRECTIVO</span>
            <span class="px-2 py-1 bg-surface-variant/40 rounded font-code text-[11px] text-on-surface-variant border border-outline-variant/30">PROVISIÓN</span>
          </div>
        </div>
      </div>
    </section>

    <!-- MÓDULO 04: Cloud / SaaS general -->
    <section class="md:col-span-6 glass-panel rounded-xl p-8 group fade-up">
      <div class="flex items-start gap-6">
        <div class="p-4 bg-secondary/10 rounded-lg shrink-0">
          <span class="material-symbols-outlined text-secondary text-3xl">cloud</span>
        </div>
        <div>
          <div class="font-label text-[11px] text-secondary uppercase tracking-widest mb-2">MÓDULO 04</div>
          <h2 class="font-headline text-2xl font-bold text-on-surface mb-4">Cloud Ops y Escala</h2>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Gestión de infraestructura en la nube, automatización de escalado, monitoreo continuo y parches de seguridad para entornos de alto tráfico.
          </p>
          <ul class="space-y-2 text-sm text-on-surface">
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-base">search</span> Auditoría de Infraestructura</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-base">security</span> Hardening y Seguridad</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-base">analytics</span> Monitoreo de Rendimiento</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- MÓDULO 05: MeritoIA — SaaS destacado -->
    <section class="md:col-span-12 glass-panel rounded-xl overflow-hidden group border border-primary/25 fade-up">
      <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2 p-8 md:p-10 flex flex-col justify-center">
          <div class="font-label text-[11px] text-primary uppercase tracking-widest mb-2">MÓDULO 05 · SAAS</div>
          <h2 class="font-headline text-3xl font-bold text-on-surface mb-4">MeritoIA</h2>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Plataforma inteligente para evaluar, gestionar y reconocer el mérito y desempeño del talento humano. Especializada en análisis semántico de hojas de vida para concursos de carrera administrativa en Colombia, con alineación a requisitos de la CNSC.
          </p>
          <div class="flex flex-wrap items-center gap-3 mb-6">
            <span class="px-4 py-2 bg-primary/10 rounded border border-primary/30 font-code text-primary text-[12px]">NLP / PYTHON</span>
            <span class="px-4 py-2 bg-surface-variant/40 rounded border border-outline-variant/30 font-code text-on-surface-variant text-[12px]">CNSC_ALIGNMENT</span>
            <span class="px-4 py-2 bg-surface-variant/40 rounded border border-outline-variant/30 font-code text-on-surface-variant text-[12px]">IA · 99.8%</span>
          </div>
          <ul class="space-y-2 text-sm text-on-surface mb-8">
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Evaluaciones de desempeño con IA</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Análisis de mérito y competencias</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Planes de mejora personalizados</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Integración con sistemas de RRHH</li>
          </ul>
          <a href="contacto.php?servicio=MeritoIA"
             class="inline-flex bg-primary text-on-primary px-8 py-3 rounded-lg font-bold text-sm hover:brightness-110 transition-all electric-glow w-fit">
            Solicitar Demo
          </a>
        </div>
        <div class="md:w-1/2 relative min-h-[320px] overflow-hidden">
          <img src="assets/img/GettyImages-1356581284_NfIqD97.original-1024x576-1.webp"
               alt="MeritoIA — Análisis con IA"
               class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-700">
          <div class="absolute inset-0 bg-gradient-to-r from-surface-container via-transparent to-transparent"></div>
          <div class="scan-line absolute inset-0 opacity-20"></div>
        </div>
      </div>
    </section>

    <!-- MÓDULO 06: SIAMOT — SaaS destacado -->
    <section class="md:col-span-12 glass-panel rounded-xl overflow-hidden group border border-tertiary/25 fade-up">
      <div class="flex flex-col md:flex-row-reverse">
        <div class="md:w-1/2 p-8 md:p-10 flex flex-col justify-center">
          <div class="font-label text-[11px] text-tertiary uppercase tracking-widest mb-2">MÓDULO 06 · SAAS</div>
          <h2 class="font-headline text-3xl font-bold text-on-surface mb-4">SIAMOT</h2>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-6">
            Sistema Integral de Administración, Monitoreo y Operación de Tareas. Plataforma SaaS para centralizar la gestión operacional de tu empresa con monitoreo en tiempo real, trazabilidad de tareas y reportes de desempeño.
          </p>
          <div class="flex flex-wrap items-center gap-3 mb-6">
            <span class="px-4 py-2 bg-tertiary/10 rounded border border-tertiary/30 font-code text-tertiary text-[12px]">TIEMPO REAL</span>
            <span class="px-4 py-2 bg-surface-variant/40 rounded border border-outline-variant/30 font-code text-on-surface-variant text-[12px]">DASHBOARDS</span>
            <span class="px-4 py-2 bg-surface-variant/40 rounded border border-outline-variant/30 font-code text-on-surface-variant text-[12px]">ALERTAS AUTO</span>
          </div>
          <ul class="space-y-2 text-sm text-on-surface mb-8">
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Monitoreo de operaciones en tiempo real</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Gestión y trazabilidad de tareas</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Panel de control centralizado</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-tertiary text-base" style="font-variation-settings:'FILL' 1;">check_circle</span> Reportes y dashboards de desempeño</li>
          </ul>
          <a href="contacto.php?servicio=SIAMOT"
             class="inline-flex bg-tertiary-container text-on-tertiary-container px-8 py-3 rounded-lg font-bold text-sm hover:brightness-110 transition-all w-fit"
             style="box-shadow: 0 0 22px -4px rgba(192,193,255,0.3);">
            Solicitar Demo
          </a>
        </div>
        <div class="md:w-1/2 relative min-h-[320px] overflow-hidden">
          <img src="assets/img/Sistema-de-almacenamiento-y-servidores.jpg"
               alt="SIAMOT — Infraestructura"
               class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-700">
          <div class="absolute inset-0 bg-gradient-to-l from-surface-container via-transparent to-transparent"></div>
        </div>
      </div>
    </section>

  </div>

  <!-- Formulario terminal -->
  <section class="mt-20 max-w-4xl mx-auto glass-panel rounded-xl overflow-hidden border border-primary/20 fade-up">
    <div class="px-8 py-3 bg-primary/10 border-b border-primary/20 flex items-center justify-between">
      <div class="font-label text-[11px] text-primary uppercase tracking-widest">INICIALIZACION_NUEVO_PROYECTO.SH</div>
      <div class="flex gap-2">
        <div class="w-3 h-3 rounded-full bg-surface-variant"></div>
        <div class="w-3 h-3 rounded-full bg-surface-variant"></div>
        <div class="w-3 h-3 rounded-full bg-primary/50"></div>
      </div>
    </div>
    <div class="p-8 md:p-12">
      <div class="grid md:grid-cols-2 gap-12">
        <div>
          <h2 class="font-headline text-2xl font-bold text-on-surface mb-4">¿Necesitas una solución personalizada?</h2>
          <p class="text-on-surface-variant text-sm leading-relaxed mb-8">Nuestro equipo de ingenieros analizará tus requerimientos y propondrá la arquitectura ideal para tu empresa.</p>
          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <span class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30">
                <span class="material-symbols-outlined text-primary text-base">mail</span>
              </span>
              <span class="font-code text-sm text-on-surface">info@kernelclic.com</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30">
                <span class="material-symbols-outlined text-primary text-base">schedule</span>
              </span>
              <span class="font-code text-sm text-on-surface">Respuesta en &lt; 24h</span>
            </div>
          </div>
        </div>
        <div class="text-center flex flex-col justify-center items-center gap-4">
          <span class="material-symbols-outlined text-primary text-5xl">rocket_launch</span>
          <p class="text-on-surface-variant text-sm">Completa el formulario en nuestra página de contacto</p>
          <a href="contacto.php"
             class="bg-primary text-on-primary px-8 py-3 rounded-lg font-bold text-sm hover:brightness-110 transition-all electric-glow w-full text-center">
            Ir a Contacto
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>
