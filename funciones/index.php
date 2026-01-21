<?php
$BASE  = '/PAGINAWEBMENDIETA'; // exacto como en la URL
$ROOT  = $_SERVER['DOCUMENT_ROOT'] . $BASE; // ruta física para includes

$title   = 'Nosotros | Mendieta Estudio Contable';
$desc    = 'Conoce al equipo Mendieta y nuestro enfoque: claridad, orden y cumplimiento SUNAT.';
$current = '/funciones'; // para marcar activo en el header
?>
<!doctype html>
<html lang="es">
<head>
  <?php include $ROOT . '/includes/head.php'; ?>
</head>

<body>

<?php include $ROOT . '/includes/top_header.php'; ?>

 <section id="funciones" class="work" aria-label="Funciones">
      <div class="wrap work__grid">
        <div class="work__media">
          <img src="<?= $BASE ?>/assets/img/EQUIPO.JPEG" alt="Equipo trabajando en oficina" />
          <div class="work__badge">
            <i class="fa-solid fa-shield-check" aria-hidden="true"></i>
            Proceso claro, sin sorpresas
          </div>
        </div>

        <div class="work__content">
          <p class="work__kicker">FUNCIONES</p>
          <h2 class="work__title">Así trabajamos contigo</h2>
          <p class="work__lead">
            Un flujo simple y ordenado para que cumplas con SUNAT y tengas
            control real de tu negocio.
          </p>

          <ol class="work__steps">
            <li class="step">
              <div class="step__n">1</div>
              <div class="step__body">
                <strong>Agenda tu reunión</strong>
                <span>Coordinamos por WhatsApp o llamada (10–15 min).</span>
              </div>
            </li>

            <li class="step">
              <div class="step__n">2</div>
              <div class="step__body">
                <strong>Revisamos tu situación</strong>
                <span>RUC, régimen, ventas, planillas y pendientes.</span>
              </div>
            </li>

            <li class="step">
              <div class="step__n">3</div>
              <div class="step__body">
                <strong>Te damos un plan claro</strong>
                <span>Qué hacemos, fechas, entregables y responsables.</span>
              </div>
            </li>

            <li class="step">
              <div class="step__n">4</div>
              <div class="step__body">
                <strong>Ejecutamos y reportamos</strong>
                <span>Declaraciones, libros y reportes con seguimiento.</span>
              </div>
            </li>
          </ol>

          <div class="work__actions">
            <a class="btn btn--primary" href="#contacto">
              <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
              Agenda tu cita
            </a>
            <a class="btn btn--outline" href="#servicios">
              Ver servicios
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </section>


<?php include $ROOT . '/includes/footer.php'; ?>

<script src="/app/assets/js/top_header.js"></script>
</body>
</html>
