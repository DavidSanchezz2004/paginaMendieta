<?php
$BASE  = '/PAGINAWEBMENDIETA'; // exacto como en la URL
$title = 'Mendieta Estudio Contable';
$desc  = 'Servicios contables en Lima para empresas y pymes.';
?>
<!doctype html>
<html lang="es">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>

<body>

<?php include __DIR__ . '/includes/top_header.php'; ?>

    <section class="hero" aria-label="Portada">
      <div class="hero__bg" aria-hidden="true"></div>
      <div class="wrap hero__inner">
        <div class="hero__content">
          <p class="eyebrow">
            Especialistas en servicios contables en Lima para empresas y pymes
          </p>

          <!-- H1 (SEO) -->
          <h1>Estudio contable en Lima para empresas y pymes</h1>

          <!-- Subtítulo corto (mejor UX) -->
          <p class="sub">
            Contabilidad, impuestos y planillas con enfoque SUNAT, procesos
            claros y atención rápida.
          </p>

          <!-- Bullets (escaneable y SEO suave) -->
          <ul class="bullets">
            <li>Contabilidad mensual y reportes</li>
            <li>Declaraciones SUNAT (PDT/PLAME)</li>
            <li>Libros electrónicos y planillas</li>
          </ul>

          <!-- CTA -->
          <div class="cta">
            <a class="btn btn--primary" href="#contacto">
              <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
              Solicitar asesoría
            </a>

            <a
              class="btn btn--ghost"
              href="https://wa.me/51991943105"
              target="_blank"
              rel="noopener"
            >
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
              Hablar con asesor
            </a>
          </div>
        </div>

        <!-- Aside corto (solo 1 card) -->
        <div class="lead-form">
          <h3>Consulta rápida</h3>
          <p>Te respondemos en minutos por WhatsApp o correo.</p>

          <form>
            <input type="text" placeholder="Nombre completo" required />

            <input type="tel" placeholder="Celular (WhatsApp)" required />

            <input type="email" placeholder="Correo electrónico" required />

            <input type="text" placeholder="RUC (opcional)" />

            <button type="submit">
              <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
              Enviar consulta
            </button>

            <small>
              Tus datos están protegidos. Solo los usaremos para responder tu
              consulta.
            </small>
          </form>
        </div>
      </div>
    </section>

    <section id="nosotros" class="about2" aria-label="Nosotros">
      <div class="wrap about2__grid">
        <!-- FOTO -->
        <figure class="about2__media">
        <img src="<?= $BASE ?>/assets/img/Julio.JPEG" alt="Julio Mendoza - CEO Estudio Contable Mendieta">

          <figcaption class="about2__badge">
            <i class="fa-solid fa-shield-check" aria-hidden="true"></i>
            Atención profesional y procesos claros
          </figcaption>
        </figure>

        <!-- CONTENIDO -->
        <div class="about2__content">
          <p class="about2__kicker">Sobre Mendieta</p>

          <h2 class="about2__title">
            Somos tu mejor aliado<br />
            <span>Estudio Contable en Lima</span>
          </h2>

          <p class="about2__lead">
            Más de 10 años ayudando a empresas y pymes con contabilidad,
            impuestos y planillas. Te guiamos con claridad, rapidez y
            cumplimiento.
          </p>

          <!-- mini métricas -->
          <div class="about2__stats" role="list">
            <div class="stat" role="listitem">
              <strong>+10</strong><span>Años de Experiencia</span>
            </div>
            <div class="stat" role="listitem">
              <strong>100%</strong><span>Enfoque Practico</span>
            </div>
          </div>

          <!-- bullets (más limpios) -->
          <ul class="about2__bullets">
            <li>
              <i class="fa-solid fa-circle-check"></i> Declaraciones, libros y
              planillas sin complicaciones.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i> Asesoría personalizada
              para tu rubro y tamaño de empresa.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i> Transparencia en cada
              entrega y reporte.
            </li>
          </ul>

          <!-- persona + acciones -->
          <div class="about2__footer">
            <div class="about2__person">
<img src="<?= $BASE ?>/assets/img/JulioMendoza.webp" alt="Julio Mendoza">
              <div>
                <strong>Julio Mendoza</strong>
                <span>CEO - Estudio Contable Mendieta</span>
              </div>
            </div>

            <div class="about2__actions">
              <a class="btn btn--primary" href="#contacto">
                <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                Agenda tu cita
              </a>
              <a class="about2__link" href="#servicios">
                Ver servicios
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mv2" aria-label="Principios Mendieta">
      <div class="wrap mv2__grid">
        <!-- Columna izquierda -->
        <div class="mv2__intro">
          <p class="mv2__kicker">Nuestro enfoque</p>
          <h2 class="mv2__title">Trabajamos claro, cumplimos a tiempo.</h2>
          <p class="mv2__lead">
            En Mendieta priorizamos lo simple: orden, comunicación directa y
            cero sorpresas. Lo contable puede ser fácil cuando el proceso es
            claro.
          </p>

          <div class="mv2__tags" aria-label="Principios">
            <span class="mv2__tag">Claridad</span>
            <span class="mv2__tag">Cumplimiento con la SUNAT</span>
            <span class="mv2__tag">Atención rápida</span>
          </div>
        </div>

        <!-- Columna derecha -->
        <div class="mv2__cards">
          <article class="mv2__card">
            <h3>Misión</h3>
            <p>
              Ordenar tu contabilidad y ayudarte a cumplir con SUNAT sin
              complicarte, con reportes claros y acompañamiento cercano.
            </p>
          </article>

          <article class="mv2__card mv2__card--soft">
            <h3>Visión</h3>
            <p>
              Ser el estudio contable en Lima al que recomiendan por su
              seriedad, rapidez y confianza en cada entrega.
            </p>
          </article>
        </div>
      </div>
    </section>
    <section id="servicios" class="services" aria-label="Servicios">
      <div class="wrap">
        <header class="services__head">
          <p class="services__kicker">Servicios</p>
          <h2 class="services__title">Nuestros servicios incluyen</h2>
          <p class="services__sub">
            Soluciones contables, tributarias y laborales para empresas y pymes
            en Lima. Elegimos procesos claros y cumplimiento.
          </p>
        </header>

        <div class="services__grid">
          <!-- Destacado -->
          <article class="svc svc--featured">
            <div class="svc__top">
              <span class="svc__icon" aria-hidden="true">
                <i class="fa-solid fa-file-invoice-dollar"></i>
              </span>
              <span class="svc__tag">Más solicitado</span>
            </div>

            <h3 class="svc__title">Servicios Contables</h3>
            <p class="svc__desc">
              Contabilidad mensual, reportes y orden financiero para que tu
              empresa cumpla y crezca.
            </p>

            <ul class="svc__bullets">
              <li><i class="fa-solid fa-check"></i> Reportes mensuales</li>
              <li><i class="fa-solid fa-check"></i> Libros electrónicos</li>
              <li><i class="fa-solid fa-check"></i> Soporte por WhatsApp</li>
            </ul>

            <a class="svc__link" href="#contacto">
              Leer Mas
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>

          <article class="svc">
            <span class="svc__icon" aria-hidden="true"
              ><i class="fa-solid fa-scale-balanced"></i
            ></span>
            <h3 class="svc__title">Consultoría Tributaria</h3>
            <p class="svc__desc">
              Cumplimiento SUNAT y estrategias para optimizar tu carga
              tributaria, con sustento.
            </p>
            <a class="svc__link" href="#contacto">
              Leer Mas
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>

          <article class="svc">
            <span class="svc__icon" aria-hidden="true"
              ><i class="fa-solid fa-chart-line"></i
            ></span>
            <h3 class="svc__title">Consultoría de Costos</h3>
            <p class="svc__desc">
              Analizamos tus costos para mejorar rentabilidad, precios y control
              del negocio.
            </p>
            <a class="svc__link" href="#contacto">
              Leer Mas
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>

          <article class="svc">
            <span class="svc__icon" aria-hidden="true"
              ><i class="fa-solid fa-briefcase"></i
            ></span>
            <h3 class="svc__title">Asesoría para Negocios</h3>
            <p class="svc__desc">
              Acompañamiento financiero y contable para decisiones seguras y
              crecimiento.
            </p>
            <a class="svc__link" href="#contacto">
              Leer Mas
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>

          <article class="svc">
            <span class="svc__icon" aria-hidden="true"
              ><i class="fa-solid fa-clipboard-check"></i
            ></span>
            <h3 class="svc__title">Proyectos e Inversión</h3>
            <p class="svc__desc">
              Evaluación de viabilidad y números reales para invertir con
              criterio.
            </p>
            <a class="svc__link" href="#contacto">
              Leer Mas
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>

          <article class="svc">
            <span class="svc__icon" aria-hidden="true"
              ><i class="fa-solid fa-people-group"></i
            ></span>
            <h3 class="svc__title">Consultoría Laboral</h3>
            <p class="svc__desc">
              Planillas, contratos y obligaciones laborales con seguridad y
              cumplimiento.
            </p>
            <a class="svc__link" href="#contacto">
              Leer Mas
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>
        </div>

        <div class="services__cta">
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
    <section id="funciones" class="process" aria-label="Cómo trabajamos">
      <div class="wrap process__grid">
        <!-- Imagen -->
        <figure class="process__media">
         <img src="<?= $BASE ?>/assets/img/equipo.JPEG" alt="Equipo Mendieta asesorando a un cliente" loading="lazy">

          <figcaption class="process__badge">
            <i class="fa-solid fa-shield-check" aria-hidden="true"></i>
            Proceso claro y acompañamiento real
          </figcaption>
        </figure>

        <!-- Contenido -->
        <div class="process__content">
          <p class="process__kicker">Nuestro proceso</p>

          <h2 class="process__title">
            Nosotros trabajamos de<br />
            esta forma
          </h2>

          <p class="process__lead">
            Tu contabilidad no admite errores. Por eso trabajamos con un proceso
            claro, ordenado y probado para que cumplas con SUNAT y tomes
            decisiones con tranquilidad.
          </p>

          <div class="process__steps" role="list">
            <article class="step" role="listitem">
              <div class="step__num" aria-hidden="true">01</div>
              <div class="step__body">
                <h4>Agenda tu reunión</h4>
                <p>
                  Coordinamos una llamada o reunión virtual según tu horario.
                </p>
              </div>
            </article>

            <article class="step" role="listitem">
              <div class="step__num" aria-hidden="true">02</div>
              <div class="step__body">
                <h4>Cuéntanos tu situación</h4>
                <p>
                  Revisamos tu rubro, ventas, planillas y obligaciones actuales.
                </p>
              </div>
            </article>

            <article class="step" role="listitem">
              <div class="step__num" aria-hidden="true">03</div>
              <div class="step__body">
                <h4>Recibe asesoría personalizada</h4>
                <p>
                  Te proponemos una estrategia contable y tributaria con
                  sustento.
                </p>
              </div>
            </article>

            <article class="step step--active" role="listitem">
              <div class="step__num" aria-hidden="true">04</div>
              <div class="step__body">
                <h4>Implementamos juntos</h4>
                <p>
                  Ejecutamos el plan y te acompañamos mes a mes con reportes
                  claros.
                </p>
              </div>
            </article>
          </div>

          <div class="process__actions">
            <a class="btn btn--primary" href="#contacto">
              <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
              Consigue tu cita gratuita
            </a>

            <a
              class="process__link"
              href="https://wa.me/51991943105"
              target="_blank"
              rel="noopener"
            >
              Hablar por WhatsApp
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="portafolio" class="clients" aria-label="Clientes">
      <div class="wrap">
        <header class="clients__head">
          <p class="clients__kicker">Clientes</p>
          <h2 class="clients__title">Empresas que trabajan con nosotros</h2>
          <p class="clients__sub">
            Algunas marcas que confían en Mendieta para su contabilidad,
            impuestos y cumplimiento.
          </p>
        </header>

        <div class="clients__grid" role="list">
          <!-- Logo 1 -->
          <div class="client" role="listitem" aria-label="Hamann">
<img src="<?= $BASE ?>/assets/img/Hamman.webp" alt="Hamann" loading="lazy">
          </div>

          <!-- Logo 2 -->
          <div class="client" role="listitem" aria-label="Grupo Eidos">
<img src="<?= $BASE ?>/assets/img/GrupoEidos.webp" alt="Grupo Eidos" loading="lazy">
          </div>

          <!-- Logo 3 -->
          <div class="client" role="listitem" aria-label="Prave">
<img src="<?= $BASE ?>/assets/img/Prave.webp" alt="Prave" loading="lazy">
          </div>

          <!-- Logo 4 -->
          <div class="client" role="listitem" aria-label="Seguridad EDM">
<img src="<?= $BASE ?>/assets/img/Seguridad-EPM.webp" alt="Seguridad EPM" loading="lazy">
          </div>

          <!-- Card texto -->
          <div class="client client--note" role="listitem">
            <strong>Algunos de nuestros clientes</strong>
            <span
              >Confianza construida con orden, claridad y cumplimiento.</span
            >
          </div>
        </div>

        <div class="clients__cta">
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
    <section class="data" aria-label="Decisiones con datos reales">
      <div class="wrap">
        <div class="data__card">
          <div class="data__grid">
            <!-- Texto -->
            <div class="data__content">
              <p class="data__kicker">Reportes & dashboards</p>
              <h2 class="data__title">Decisiones con<br />Datos Reales</h2>

              <p class="data__lead">
                Te entregamos un dashboard con indicadores clave para tomar
                decisiones rápidas sin depender de hojas de cálculo.
              </p>

              <ul class="data__list">
                <li class="data__item">
                  <span class="data__icon"
                    ><i class="fa-solid fa-chart-pie"></i
                  ></span>
                  <div>
                    <strong>KPI personalizados</strong>
                    <span
                      >Ventas, rentabilidad, liquidez, flujo de caja y
                      más.</span
                    >
                  </div>
                </li>

                <li class="data__item">
                  <span class="data__icon"
                    ><i class="fa-solid fa-rotate"></i
                  ></span>
                  <div>
                    <strong>Actualización automática</strong>
                    <span
                      >Sin copiar/pegar ni actualizar Excel manualmente.</span
                    >
                  </div>
                </li>

                <li class="data__item">
                  <span class="data__icon"
                    ><i class="fa-solid fa-file-lines"></i
                  ></span>
                  <div>
                    <strong>Reportes claros</strong>
                    <span
                      >Tableros simples para compartir con gerencia o
                      equipo.</span
                    >
                  </div>
                </li>

                <li class="data__item">
                  <span class="data__icon"
                    ><i class="fa-solid fa-handshake"></i
                  ></span>
                  <div>
                    <strong>Soporte estratégico</strong>
                    <span
                      >Te ayudamos a interpretar resultados y decidir con
                      sustento.</span
                    >
                  </div>
                </li>
              </ul>

              <div class="data__actions">
                <a class="btn btn--primary" href="#contacto">
                  <i class="fa-solid fa-calendar-check"></i> Ver demo / Agendar
                </a>
                <a class="btn btn--outline" href="#servicios">
                  Ver servicios <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>

            <!-- Imagen -->
            <figure class="data__media">
            <img src="<?= $BASE ?>/assets/img/EQUIPOREUNION.JPEG" alt="Reunión de análisis con dashboard" loading="lazy">
              <figcaption class="data__badge">
                <i class="fa-solid fa-bolt"></i> Dashboard mensual
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="auto" aria-label="Automatización contable">
      <div class="wrap auto__grid">
        <figure class="auto__media">
          <span class="auto__badge">
            <i class="fa-solid fa-bolt" aria-hidden="true"></i>
            Automatización (n8n + Google)
          </span>

<img src="<?= $BASE ?>/assets/img/n8n.png" alt="Flujo de automatización contable" loading="lazy">
        </figure>

        <div class="auto__content">
          <p class="auto__kicker">Automatización</p>

          <h2 class="auto__title">Automatiza tus procesos contables</h2>

          <p class="auto__lead">
            Reduce errores y ahorra horas cada mes. Registramos y ordenamos tus
            comprobantes, y te dejamos reportes listos para decidir rápido.
          </p>

          <ul class="auto__bullets">
            <li>
              <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
              Ahorra tiempo: tareas repetitivas se ejecutan solas.
            </li>
            <li>
              <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
              Menos errores: registros y reportes con consistencia.
            </li>
            <li>
              <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
              Orden y control: dashboard mensual con indicadores clave.
            </li>
          </ul>

          <div class="auto__actions">
            <a class="btn btn--primary" href="#contacto">
              <i class="fa-solid fa-robot" aria-hidden="true"></i>
              Quiero automatizar
            </a>
            <a class="auto__link" href="#funciones">
              Ver ejemplos
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band" aria-label="Llamado a la acción">
      <div class="wrap cta-band__inner">
        <h3>
          Tú enfócate en tu negocio, <br />
          nosotros nos encargamos de la contabilidad.
        </h3>

        <a class="btn btn--outline" href="#contacto">
          <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
          Consigue tu Cita Gratuita
        </a>
      </div>
    </section>

    <section id="faq" class="faq3" aria-label="Preguntas frecuentes">
      <div class="wrap">
        <header class="faq3__head">
          <p class="faq3__kicker">FAQ</p>
          <h2 class="faq3__title">Preguntas frecuentes</h2>
          <p class="faq3__sub">
            Respuestas claras y al grano. Si prefieres, te orientamos por
            WhatsApp en minutos.
          </p>

          <!-- trust strip -->
          <div class="faq3__trust" role="list">
            <div class="trust" role="listitem">
              <i class="fa-solid fa-bolt" aria-hidden="true"></i>
              <span>Respuesta rápida</span>
            </div>
            <div class="trust" role="listitem">
              <i class="fa-solid fa-shield-check" aria-hidden="true"></i>
              <span>Enfoque directo con la SUNAT</span>
            </div>
            <div class="trust" role="listitem">
              <i class="fa-solid fa-handshake" aria-hidden="true"></i>
              <span>Primera orientación</span>
            </div>
          </div>
        </header>

        <div class="faq3__grid">
          <!-- LISTA -->
          <div class="faq3__list">
            <details class="faq3__item" open>
              <summary>
                <span
                  >¿Qué servicios ofrecen en su Estudio Contable en Lima?</span
                >
                <span class="faq3__toggle" aria-hidden="true"></span>
              </summary>
              <div class="faq3__answer">
                Brindamos asesoría contable, tributaria y laboral para empresas
                y pymes. También apoyamos en costos, proyectos e inversión y
                reportes para una gestión ordenada.
              </div>
            </details>

            <details class="faq3__item">
              <summary>
                <span>¿Atienden solo en Lima o en todo el Perú?</span>
                <span class="faq3__toggle" aria-hidden="true"></span>
              </summary>
              <div class="faq3__answer">
                Atendemos en Lima y también de forma remota a nivel nacional.
                Coordinamos por WhatsApp, correo y videollamada.
              </div>
            </details>

            <details class="faq3__item">
              <summary>
                <span>¿Puedo solicitar una reunión gratuita?</span>
                <span class="faq3__toggle" aria-hidden="true"></span>
              </summary>
              <div class="faq3__answer">
                Sí. Te damos una primera orientación para entender tu caso y
                recomendarte el mejor camino (sin compromiso).
              </div>
            </details>

            <details class="faq3__item">
              <summary>
                <span>¿Cómo agendo una cita?</span>
                <span class="faq3__toggle" aria-hidden="true"></span>
              </summary>
              <div class="faq3__answer">
                Déjanos tus datos en “Consulta rápida” o escríbenos por
                WhatsApp. Te proponemos horarios y confirmamos.
              </div>
            </details>

            <details class="faq3__item">
              <summary>
                <span>¿La automatización reemplaza al contador?</span>
                <span class="faq3__toggle" aria-hidden="true"></span>
              </summary>
              <div class="faq3__answer">
                No. Automatiza lo repetitivo; el contador aporta criterio,
                estrategia y cumplimiento para evitar riesgos y optimizar.
              </div>
            </details>
          </div>

          <!-- CTA -->
          <aside class="faq3__cta">
            <div class="faq3__ctaCard">
              <div>
                <h3>¿Quieres que lo veamos en 10 minutos?</h3>
                <p>
                  Te orientamos según tu rubro y tus obligaciones. Sin vueltas.
                </p>

                <!-- (NUEVO) para que tenga “peso” visual -->
                <ul class="faq3__ctaList">
                  <li>
                    <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                    Respuesta en menos de 10 min.
                  </li>
                  <li>
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                    Atención directa con contador.
                  </li>
                  <li>
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                    Enfoque SUNAT y orden.
                  </li>
                  <li>
                    <i class="fa-solid fa-handshake" aria-hidden="true"></i>
                    Primera orientación sin compromiso.
                  </li>
                </ul>
              </div>

              <div>
                <div class="faq3__ctaBtns">
                  <a class="btn btn--primary btn--full" href="#contacto">
                    <i
                      class="fa-solid fa-calendar-check"
                      aria-hidden="true"
                    ></i>
                    Agendar asesoría
                  </a>

                  <a
                    class="btn btn--outline btn--full"
                    href="https://wa.me/51991943105"
                    target="_blank"
                    rel="noopener"
                  >
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Hablar por WhatsApp
                  </a>
                </div>

                <div class="faq3__mini">
                  <i class="fa-solid fa-lock" aria-hidden="true"></i>
                  <span>Tus datos se usan solo para responderte.</span>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>


<script src="<?= $BASE ?>/assets/js/top_header.js"></script>

</body>
</html>
