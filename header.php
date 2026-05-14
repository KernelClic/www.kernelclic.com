<!DOCTYPE html>
<html class="dark" lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KernelClic — Soluciones Tecnológicas</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet">
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "surface":                "#0f131c",
        "surface-dim":            "#0f131c",
        "surface-bright":         "#353943",
        "surface-container-lowest":"#0a0e17",
        "surface-container-low":  "#181b25",
        "surface-container":      "#1c1f29",
        "surface-container-high": "#262a34",
        "surface-container-highest":"#31353f",
        "surface-variant":        "#31353f",
        "on-surface":             "#dfe2ef",
        "on-surface-variant":     "#bec7d4",
        "outline":                "#88919d",
        "outline-variant":        "#3f4852",
        "primary":                "#98cbff",
        "on-primary":             "#003354",
        "primary-container":      "#00a3ff",
        "on-primary-container":   "#00375a",
        "primary-fixed":          "#cfe5ff",
        "primary-fixed-dim":      "#98cbff",
        "on-primary-fixed":       "#001d33",
        "secondary":              "#b9c5ef",
        "on-secondary":           "#232f51",
        "secondary-container":    "#3c486b",
        "on-secondary-container": "#abb7e1",
        "secondary-fixed-dim":    "#b9c5ef",
        "tertiary":               "#c0c1ff",
        "tertiary-container":     "#8f92ff",
        "on-tertiary-container":  "#160bae",
        "inverse-surface":        "#dfe2ef",
        "inverse-on-surface":     "#2c303a",
        "background":             "#0f131c",
        "on-background":          "#dfe2ef",
      },
      fontFamily: {
        headline: ["Inter","sans-serif"],
        body:     ["Inter","sans-serif"],
        label:    ["JetBrains Mono","monospace"],
        code:     ["JetBrains Mono","monospace"],
      },
      borderRadius: {
        DEFAULT: "0.5rem",
        lg: "0.75rem",
        xl: "1rem",
        full: "9999px",
      },
    }
  }
}
</script>
<style>
  body { background-color: #0a0e17; color: #dfe2ef; -webkit-font-smoothing: antialiased; }
  .glass-panel {
    background: rgba(28,31,41,0.55);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.08);
    box-shadow: inset 0 1px 1px rgba(255,255,255,0.05);
  }
  .scan-line {
    background: linear-gradient(to bottom, transparent 50%, rgba(152,203,255,0.02) 50%);
    background-size: 100% 4px;
    pointer-events: none;
  }
  .electric-glow { box-shadow: 0 0 22px -4px rgba(152,203,255,0.35); }
  .material-symbols-outlined { font-variation-settings: 'FILL' 0,'wght' 300,'GRAD' 0,'opsz' 24; }

  /* Scroll animations */
  .fade-up { opacity:0; transform:translateY(24px); transition:opacity .6s ease, transform .6s ease; }
  .fade-up.visible { opacity:1; transform:translateY(0); }

  /* Mobile nav drawer */
  #mobile-menu { transition: left 0.3s ease; }

  /* Stat counter */
  .stat-num { font-variant-numeric: tabular-nums; }
</style>
</head>
<body class="font-body text-on-surface selection:bg-primary/30">

<header class="fixed top-0 w-full z-50 backdrop-blur-xl border-b border-outline-variant/30"
        style="background:rgba(10,14,23,0.85);">
  <div class="flex justify-between items-center px-6 md:px-12 py-4 max-w-[1280px] mx-auto">

    <a href="index.php" class="flex items-center gap-3 shrink-0">
      <img src="assets/img/LogoKernelclic.png" alt="KernelClic" class="h-9 w-auto">
    </a>

    <nav class="hidden md:flex items-center gap-8 font-body text-sm" id="nav-menu">
      <a href="index.php"    class="nav-link text-on-surface-variant hover:text-primary transition-colors duration-200">Inicio</a>
      <a href="nosotros.php" class="nav-link text-on-surface-variant hover:text-primary transition-colors duration-200">Nosotros</a>
      <a href="servicios.php"class="nav-link text-on-surface-variant hover:text-primary transition-colors duration-200">Servicios</a>
      <a href="productos.php"class="nav-link text-on-surface-variant hover:text-primary transition-colors duration-200">Productos</a>
    </nav>

    <div class="flex items-center gap-3">
      <a href="contacto.php"
         class="hidden md:inline-flex bg-primary text-on-primary px-5 py-2 rounded-lg text-sm font-semibold hover:brightness-110 active:scale-95 transition-all electric-glow">
        Contacto
      </a>
      <button id="mobile-toggle" class="md:hidden text-on-surface-variant hover:text-primary p-1">
        <span class="material-symbols-outlined text-2xl" id="menu-icon">menu</span>
      </button>
    </div>
  </div>

  <!-- Mobile drawer -->
  <nav id="mobile-menu" class="fixed top-[65px] left-[-100%] w-full h-[calc(100vh-65px)] md:hidden z-40 flex flex-col items-center justify-center gap-8"
       style="background:rgba(10,14,23,0.97); backdrop-filter:blur(20px);">
    <a href="index.php"    class="text-2xl font-semibold text-on-surface hover:text-primary transition-colors" onclick="closeMobile()">Inicio</a>
    <a href="nosotros.php" class="text-2xl font-semibold text-on-surface hover:text-primary transition-colors" onclick="closeMobile()">Nosotros</a>
    <a href="servicios.php"class="text-2xl font-semibold text-on-surface hover:text-primary transition-colors" onclick="closeMobile()">Servicios</a>
    <a href="productos.php"class="text-2xl font-semibold text-on-surface hover:text-primary transition-colors" onclick="closeMobile()">Productos</a>
    <a href="contacto.php" class="text-2xl font-semibold text-primary border-b-2 border-primary pb-1 transition-colors" onclick="closeMobile()">Contacto</a>
  </nav>
</header>

<main class="pt-[65px]">
