<?php
$BASE  = '/PAGINAWEBMENDIETA'; // exacto como en la URL
$ROOT  = $_SERVER['DOCUMENT_ROOT'] . $BASE; // ruta física para includes

$title   = 'Nosotros | Mendieta Estudio Contable';
$desc    = 'Conoce al equipo Mendieta y nuestro enfoque: claridad, orden y cumplimiento SUNAT.';
$current = '/portafolio'; // para marcar activo en el header
?>
<!doctype html>
<html lang="es">
<head>
  <?php include $ROOT . '/includes/head.php'; ?>
</head>

<body>

<?php include $ROOT . '/includes/top_header.php'; ?>

<section id="portafolio" class="portfolio" aria-label="Portafolio">
      <div class="wrap">
        <header class="portfolio__head">
          <p class="portfolio__kicker">Portafolio</p>
          <h2 class="portfolio__title">Casos y resultados</h2>
          <p class="portfolio__sub">
            Ejemplos del tipo de orden y control que ayudamos a lograr en
            negocios reales.
          </p>
        </header>

        <div class="portfolio__grid">
          <!-- Caso 1 -->
          <article class="case">
            <div class="case__top">
              <span class="case__tag">
                <i class="fa-solid fa-file-invoice-dollar"></i> Cumplimiento
                tributario
              </span>
              <span class="case__pill">IGV</span>
            </div>

            <h3 class="case__title">De multas S/ 30,000+ a cero</h3>

            <p class="case__desc">
              Orden fiscal y sustento correcto para reducir contingencias y
              optimizar IGV (<strong>S/ 20,000</strong>/mes).
            </p>

            <ul class="case__bullets">
              <li>
                <i class="fa-solid fa-check"></i> Crédito fiscal sustentado
              </li>
              <li><i class="fa-solid fa-check"></i> Control compras/ventas</li>
              <li>
                <i class="fa-solid fa-check"></i> Compensaciones aplicadas
              </li>
            </ul>

            <a class="case__link" href="#contacto">
              Ordenar mi IGV <i class="fa-solid fa-arrow-right"></i>
            </a>
          </article>

          <!-- Caso 2 -->
          <article class="case">
            <div class="case__top">
              <span class="case__tag">
                <i class="fa-solid fa-chart-line"></i> Rentabilidad
              </span>
              <span class="case__pill">Costos</span>
            </div>

            <h3 class="case__title">Utilidad: S/ 30,000 → S/ 100,000</h3>

            <p class="case__desc">
              Ajuste de precios, costos reales y procesos para mejorar margen y
              control.
            </p>

            <ul class="case__bullets">
              <li>
                <i class="fa-solid fa-check"></i> Costeo y márgenes claros
              </li>
              <li><i class="fa-solid fa-check"></i> KPI’s de seguimiento</li>
              <li><i class="fa-solid fa-check"></i> Reporte mensual</li>
            </ul>

            <a class="case__link" href="#contacto">
              Mejorar mi rentabilidad <i class="fa-solid fa-arrow-right"></i>
            </a>
          </article>

          <!-- Caso 3 (destacado) -->
          <article class="case case--featured">
            <div class="case__top">
              <span class="case__tag">
                <i class="fa-solid fa-shield-halved"></i> Plan tributario
              </span>
              <span class="case__pill">Estrategia</span>
            </div>

            <h3 class="case__title">Pagar impuestos sobre el 40% (no 100%)</h3>

            <p class="case__desc">
              Planeamiento para pagar lo justo y cuidar el flujo:
              <strong>29.5%</strong>
              aplicado eficientemente + aplazamientos.
            </p>

            <ul class="case__bullets">
              <li>
                <i class="fa-solid fa-check"></i> Base imponible eficiente
              </li>
              <li><i class="fa-solid fa-check"></i> Calendario tributario</li>
              <li>
                <i class="fa-solid fa-check"></i> Aplaz./fracc. sin ahogar caja
              </li>
            </ul>

            <a class="case__link" href="#contacto">
              Quiero un plan <i class="fa-solid fa-arrow-right"></i>
            </a>
          </article>
        </div>

        <div class="portfolio__cta">
          <a class="btn btn--primary" href="#contacto">
            <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
            Agenda una asesoría
          </a>
          <a
            class="btn btn--outline"
            href="https://wa.me/51991943105"
            target="_blank"
            rel="noopener"
          >
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            Hablar por WhatsApp
          </a>
        </div>
      </div>
    </section>


<?php include $ROOT . '/includes/footer.php'; ?>

<script src="<?= $BASE ?>/assets/js/top_header.js"></script>
</body>
</html>
