<?php include 'header.php'; ?>

<!-- ── PAGE HEADER ── -->
<header class="pt-16 pb-12 px-6 md:px-12 max-w-[1280px] mx-auto relative overflow-hidden">
  <div class="scan-line absolute inset-0 opacity-10"></div>
  <div class="absolute top-[-10%] left-[-5%] w-[400px] h-[400px] bg-primary/8 rounded-full blur-[120px] -z-10"></div>
  <div class="relative z-10 max-w-4xl">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/20 border border-primary/30 text-primary font-label text-[11px] tracking-widest uppercase mb-6">
      <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
      <span>CANAL DE COMUNICACIÓN ACTIVO</span>
    </div>
    <h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight text-on-surface mb-4">Contáctanos</h1>
    <p class="text-on-surface-variant text-lg max-w-2xl leading-relaxed">
      Estamos listos para escuchar tus necesidades y construir la solución tecnológica que tu empresa necesita.
    </p>
  </div>
</header>

<main class="px-6 md:px-12 pb-24 max-w-[1280px] mx-auto space-y-4">

  <!-- Formulario terminal -->
  <section class="glass-panel rounded-xl overflow-hidden border border-primary/20 fade-up">
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

        <!-- Información de contacto -->
        <div class="space-y-8">
          <div>
            <h2 class="font-headline text-2xl font-bold text-on-surface mb-3">Información de Contacto</h2>
            <p class="text-on-surface-variant text-sm leading-relaxed">Ponte en contacto con nosotros a través de cualquiera de nuestros canales. Respondemos en menos de 24 horas.</p>
          </div>

          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <span class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30 shrink-0">
                <span class="material-symbols-outlined text-primary text-lg">phone</span>
              </span>
              <div>
                <div class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider mb-1">Teléfono</div>
                <a href="tel:+573147259648" class="font-code text-sm text-on-surface hover:text-primary transition-colors">+57 314 725 9648</a>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <span class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30 shrink-0">
                <span class="material-symbols-outlined text-primary text-lg">mail</span>
              </span>
              <div>
                <div class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider mb-1">Email</div>
                <a href="mailto:info@kernelclic.com" class="font-code text-sm text-on-surface hover:text-primary transition-colors">info@kernelclic.com</a>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <span class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30 shrink-0">
                <span class="material-symbols-outlined text-primary text-lg">public</span>
              </span>
              <div>
                <div class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider mb-1">Sitio Web</div>
                <span class="font-code text-sm text-on-surface">www.kernelclic.com</span>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <span class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30 shrink-0">
                <span class="material-symbols-outlined text-primary text-lg">location_on</span>
              </span>
              <div>
                <div class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider mb-1">Ubicación</div>
                <span class="font-code text-sm text-on-surface">Colombia</span>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <span class="w-11 h-11 rounded-full bg-surface-container flex items-center justify-center border border-outline-variant/30 shrink-0">
                <span class="material-symbols-outlined text-primary text-lg">schedule</span>
              </span>
              <div>
                <div class="font-label text-[10px] text-on-surface-variant uppercase tracking-wider mb-1">Tiempo de Respuesta</div>
                <span class="font-code text-sm text-on-surface">&lt; 24 horas</span>
              </div>
            </div>
          </div>

          <div class="flex gap-3 pt-2">
            <a href="#" class="w-10 h-10 glass-panel rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all">
              <span class="material-symbols-outlined text-base">share</span>
            </a>
            <a href="#" class="w-10 h-10 glass-panel rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all">
              <span class="material-symbols-outlined text-base">hub</span>
            </a>
            <a href="#" class="w-10 h-10 glass-panel rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all">
              <span class="material-symbols-outlined text-base">code</span>
            </a>
          </div>
        </div>

        <!-- Formulario -->
        <form id="contactForm" action="#" method="POST" class="space-y-5">
          <div class="space-y-2">
            <label class="font-label text-[11px] text-on-surface-variant uppercase tracking-widest block">NOMBRE_COMPLETO</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre completo..."
                   class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-3 font-code text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none text-on-surface placeholder-on-surface-variant/40 transition-colors">
          </div>

          <div class="space-y-2">
            <label class="font-label text-[11px] text-on-surface-variant uppercase tracking-widest block">CORREO_ELECTRONICO</label>
            <input type="email" id="email" name="email" required placeholder="tu@email.com"
                   class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-3 font-code text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none text-on-surface placeholder-on-surface-variant/40 transition-colors">
          </div>

          <div class="space-y-2">
            <label class="font-label text-[11px] text-on-surface-variant uppercase tracking-widest block">EMPRESA</label>
            <input type="text" id="empresa" name="empresa" placeholder="Nombre de tu empresa..."
                   class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-3 font-code text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none text-on-surface placeholder-on-surface-variant/40 transition-colors">
          </div>

          <div class="space-y-2">
            <label class="font-label text-[11px] text-on-surface-variant uppercase tracking-widest block">TIPO_DE_SERVICIO</label>
            <select name="servicio"
                    class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-3 font-code text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none text-on-surface transition-colors">
              <option value="">Selecciona un servicio...</option>
              <option>Software e Ingeniería a Medida</option>
              <option>Redes y Cableado</option>
              <option>Hardware e Infraestructura</option>
              <option>MeritoIA — Evaluación con IA</option>
              <option>SIAMOT — Gestión Operacional</option>
              <option>SIG Establecimientos Educativos</option>
              <option>SIADSE</option>
              <option>Consultoría General</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="font-label text-[11px] text-on-surface-variant uppercase tracking-widest block">MENSAJE</label>
            <textarea id="mensaje" name="mensaje" rows="4" required placeholder="Describe tu proyecto o necesidad técnica..."
                      class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-3 font-code text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none text-on-surface placeholder-on-surface-variant/40 transition-colors resize-none"></textarea>
          </div>

          <button type="submit"
                  class="w-full bg-primary text-on-primary py-4 rounded-lg font-bold text-sm hover:brightness-110 active:scale-[0.98] transition-all uppercase tracking-widest electric-glow">
            Enviar Mensaje
          </button>
        </form>

      </div>
    </div>
  </section>

  <!-- Mapa -->
  <section class="glass-panel rounded-xl overflow-hidden fade-up">
    <div class="px-6 py-3 border-b border-outline-variant/20 flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-base">location_on</span>
      <span class="font-label text-[11px] text-on-surface-variant uppercase tracking-wider">Ubicación · Colombia</span>
    </div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.923456789!2d-74.0!3d4.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM!5e0!3m2!1ses!2sco!4v1600000000000!5m2!1ses!2sco"
      width="100%" height="360" style="border:0; filter:invert(90%) hue-rotate(180deg);" allowfullscreen loading="lazy">
    </iframe>
  </section>

</main>

<?php include 'footer.php'; ?>
