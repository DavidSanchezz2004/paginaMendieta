<?php
$BASE  = '/PAGINAWEBMENDIETA'; // exacto como en la URL
$ROOT  = $_SERVER['DOCUMENT_ROOT'] . $BASE; // ruta física para includes

$title   = 'Nosotros | Mendieta Estudio Contable';
$desc    = 'Conoce al equipo Mendieta y nuestro enfoque: claridad, orden y cumplimiento SUNAT.';
$current = '/nosotros'; // para marcar activo en el header
?>
<!doctype html>
<html lang="es">
<head>
  <?php include $ROOT . '/includes/head.php'; ?>
</head>

<body>

<?php include $ROOT . '/includes/top_header.php'; ?>

 <section class="aboutPageHero" aria-label="Nosotros">
      <div class="wrap aboutPageHero__grid">
        <div class="aboutPageHero__copy">
          <p class="kicker">NOSOTROS</p>
          <h1 class="aboutPageHero__title">
            Un equipo compacto, <span>enfocado en claridad y cumplimiento</span>
          </h1>
          <p class="aboutPageHero__lead">
            En Mendieta trabajamos con procesos claros: ordenamos tu
            contabilidad, te guiamos en SUNAT y planillas, y te damos reportes
            para decidir mejor.
          </p>

          <div class="aboutPageHero__trust" role="list">
            <div class="pill" role="listitem">
              <i class="fa-solid fa-bolt" aria-hidden="true"></i> Respuesta
              rápida
            </div>
            <div class="pill" role="listitem">
              <i class="fa-solid fa-shield-check" aria-hidden="true"></i>
              Enfoque SUNAT
            </div>
            <div class="pill" role="listitem">
              <i class="fa-solid fa-handshake" aria-hidden="true"></i>
              Acompañamiento
            </div>
          </div>

          <div class="aboutPageHero__actions">
            <a class="btn btn--primary" href="#contacto">
              <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
              Agendar asesoría
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

        <figure class="aboutPageHero__media">
        <img src="<?= $BASE ?>/assets/img/Julio.JPEG" alt="Julio Mendoza - CEO Estudio Contable Mendieta">
          <figcaption class="aboutPageHero__badge">
            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
            Atención profesional y procesos claros
          </figcaption>
        </figure>
      </div>
    </section>

    <!-- ENFOQUE (3 BLOQUES) -->
    <section class="aboutFocus" aria-label="Nuestro enfoque">
      <div class="wrap">
        <header class="sectionHead">
          <p class="kicker">NUESTRO ENFOQUE</p>
          <h2 class="h2">Trabajamos claro, <span>cumplimos a tiempo</span></h2>
          <p class="sub">
            Menos enredos, más orden. Te decimos qué sigue, qué falta y cuándo
            se entrega.
          </p>
        </header>

        <div class="focusGrid">
          <article class="focusCard">
            <div class="focusIcon">
              <i class="fa-solid fa-diagram-project"></i>
            </div>
            <h3>Proceso definido</h3>
            <p>
              Checklist mensual, fechas, responsables y evidencia. Todo
              trazable.
            </p>
          </article>
          <article class="focusCard">
            <div class="focusIcon">
              <i class="fa-solid fa-file-signature"></i>
            </div>
            <h3>Cumplimiento SUNAT</h3>
            <p>Declaraciones, libros y soporte con sustento. Sin improvisar.</p>
          </article>
          <article class="focusCard">
            <div class="focusIcon"><i class="fa-solid fa-headset"></i></div>
            <h3>Atención rápida</h3>
            <p>Canal directo por WhatsApp y correo. Respuesta y seguimiento.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- MISIÓN & VISIÓN (CORTO, HUMANO, NO “IA”) -->
    <section class="mv" aria-label="Misión y Visión">
      <div class="wrap mv__grid">
        <article class="mv__card">
          <div class="mv__top">
            <span class="mv__icon"><i class="fa-solid fa-compass"></i></span>
            <h2 class="mv__title">Misión</h2>
          </div>
          <p class="mv__text">
            Ordenar tu contabilidad y ayudarte a cumplir con SUNAT y planillas
            sin complicarte, con reportes claros y acompañamiento cercano.
          </p>
          <ul class="mv__bullets">
            <li><i class="fa-solid fa-check"></i> Procesos claros</li>
            <li><i class="fa-solid fa-check"></i> Reportes entendibles</li>
            <li><i class="fa-solid fa-check"></i> Comunicación directa</li>
          </ul>
        </article>

        <article class="mv__card mv__card--tint">
          <div class="mv__top">
            <span class="mv__icon"><i class="fa-solid fa-flag"></i></span>
            <h2 class="mv__title">Visión</h2>
          </div>
          <p class="mv__text">
            Ser el estudio contable que recomiendan por seriedad, rapidez y
            confianza, aportando orden y decisiones con sustento a empresas en
            Lima y a nivel nacional.
          </p>
          <ul class="mv__bullets">
            <li><i class="fa-solid fa-check"></i> Calidad constante</li>
            <li><i class="fa-solid fa-check"></i> Mejora continua</li>
            <li><i class="fa-solid fa-check"></i> Relación a largo plazo</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- EQUIPO (3 PERSONAS) -->
    <section class="team3" aria-label="Nuestro equipo">
      <div class="wrap">
        <header class="sectionHead">
          <p class="kicker">EQUIPO</p>
          <h2 class="h2">
            Somos 3, pero <span>te damos soporte completo</span>
          </h2>
          <p class="sub">
            Contabilidad + supervisión + digitalización. Un equipo compacto y
            rápido.
          </p>
        </header>

        <div class="team3__grid">
          <!-- CEO destacado -->
          <article class="member member--featured">
            <div class="member__tag">CEO</div>
            <img
              class="member__avatar"
              src="<?= $BASE ?>/assets/img/JulioMendoza.webp"
              alt="Julio Mendoza"
            />
            <h3 class="member__name">Julio Mendoza</h3>
            <p class="member__role">Contador · +10 años</p>
            <p class="member__bio">
              Te guiamos con claridad, cumplimiento y orden financiero.
            </p>
            <a
              class="member__link"
              href="#"
              aria-label="LinkedIn Julio Mendoza"
            >
              <i class="fa-brands fa-linkedin"></i> Ver LinkedIn
            </a>
          </article>

          <article class="member">
            <img
              class="member__avatar"
               src="<?= $BASE ?>/assets/img/Christian-EstudioContableMendieta.webp"
              alt="Cristhian Velasquez"
            />
            <h3 class="member__name">Cristhian Velasquez</h3>
            <p class="member__role">Supervisor contable</p>
            <p class="member__bio">
              Orden documental, control mensual y seguimiento de entregas.
            </p>
            <a
              class="member__link"
              href="#"
              aria-label="LinkedIn Cristhian Velasquez"
            >
              <i class="fa-brands fa-linkedin"></i> Ver LinkedIn
            </a>
          </article>

          <article class="member">
            <img
              class="member__avatar"
               src="<?= $BASE ?>/assets/img/David-EstudioContableMendieta.webp"
              alt="David Sanchez"
            />
            <h3 class="member__name">David Sanchez</h3>
            <p class="member__role">Sistemas y automatización</p>
            <p class="member__bio">
              Digitalización para una gestión más ágil y eficiente.
            </p>
            <a
              class="member__link"
              href="#"
              aria-label="LinkedIn David Sanchez"
            >
              <i class="fa-brands fa-linkedin"></i> Ver LinkedIn
            </a>
          </article>
        </div>
      </div>
    </section>

    <!-- CÓMO TRABAJAMOS (pasos) -->
    <section class="how" aria-label="Cómo trabajamos">
      <div class="wrap how__grid">
        <figure class="how__media">
          <img src="<?= $BASE ?>/assets/img/EQUIPOREUNION.JPEG" alt="Equipo Mendieta en reunión" />
        </figure>

        <div class="how__content">
          <p class="kicker">PROCESO</p>
          <h2 class="h2">Nosotros trabajamos <span>de esta forma</span></h2>
          <p class="sub">
            Te pedimos lo justo, ordenamos rápido y te acompañamos en cada
            entrega.
          </p>

          <ol class="how__steps">
            <li>
              <span class="stepNum stepNum--icon" aria-hidden="true">
                <i class="fa-solid fa-calendar-check"></i>
              </span>
              <div>
                <strong>Agenda tu reunión</strong>
                <span
                  >Coordinamos por WhatsApp o llamada en el horario que
                  prefieras.</span
                >
              </div>
            </li>

            <li>
              <span class="stepNum stepNum--icon" aria-hidden="true">
                <i class="fa-solid fa-comments"></i>
              </span>
              <div>
                <strong>Cuéntanos tu situación</strong>
                <span
                  >Rubro, tipo de empresa, obligaciones y lo que necesitas
                  ordenar.</span
                >
              </div>
            </li>

            <li>
              <span class="stepNum stepNum--icon" aria-hidden="true">
                <i class="fa-solid fa-clipboard-list"></i>
              </span>
              <div>
                <strong>Recibe un plan claro</strong>
                <span
                  >Te decimos qué haremos, tiempos y entregables (sin letras
                  chiquitas).</span
                >
              </div>
            </li>

            <li>
              <span class="stepNum stepNum--icon" aria-hidden="true">
                <i class="fa-solid fa-handshake"></i>
              </span>
              <div>
                <strong>Implementamos juntos</strong>
                <span
                  >Ejecutamos y damos seguimiento mensual con reportes y
                  soporte.</span
                >
              </div>
            </li>
          </ol>

          <div class="how__actions">
            <a class="btn btn--primary" href="#contacto">
              <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
              Consigue tu cita gratuita
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CLIENTES / LOGOS -->
    <section class="clients" aria-label="Clientes">
      <div class="wrap">
        <header class="sectionHead sectionHead--center">
          <p class="kicker">CLIENTES</p>
          <h2 class="h2">Empresas que <span>trabajan con nosotros</span></h2>
          <p class="sub">Algunos clientes que confían en nuestro trabajo.</p>
        </header>

        <div class="clients__grid" role="list">
          <div class="logoCard" role="listitem">
            <img src="<?= $BASE ?>/assets/img/Hamman.webp" alt="Hamann" />
          </div>
          <div class="logoCard" role="listitem">
            <img src="<?= $BASE ?>/assets/img/GrupoEidos.webp" alt="Grupo Eidos" />
          </div>
          <div class="logoCard" role="listitem">
            <img src="<?= $BASE ?>/assets/img/Prave.webp" alt="Prave" />
          </div>
          <div class="logoCard" role="listitem">
            <img src="<?= $BASE ?>/assets/img/Seguridad-EPM.webp" alt="Seguridad EPM" />
          </div>
          <div class="logoCard logoCard--more" role="listitem">
            <strong>+ más</strong><span>clientes en crecimiento</span>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA FINAL -->
    <section class="aboutCta" aria-label="Cierre">
      <div class="wrap aboutCta__card">
        <div>
          <h2>¿Listo para ordenar tu contabilidad?</h2>
          <p>Te orientamos en minutos y te proponemos un plan claro.</p>
        </div>
        <div class="aboutCta__actions">
          <a class="btn btn--primary" href="#contacto">
            <i class="fa-solid fa-calendar-check"></i> Agendar asesoría
          </a>
          <a
            class="btn btn--outline"
            href="https://wa.me/51991943105"
            target="_blank"
            rel="noopener"
          >
            <i class="fa-brands fa-whatsapp"></i> WhatsApp
          </a>
        </div>
      </div>
    </section>

<?php include $ROOT . '/includes/footer.php'; ?>

<script src="<?= $BASE ?>/assets/js/top_header.js"></script>
</body>
</html>
