<?php
$BASE = $BASE ?? '/PAGINAWEBMENDIETA';

// branding
$footer_logo = $footer_logo ?? ($BASE . "/assets/img/logo_mendieta.webp");
$footer_alt  = $footer_alt  ?? "Mendieta Estudio Contable";
$footer_tagline = $footer_tagline ?? "Contabilidad, impuestos y planillas con enfoque SUNAT. Procesos claros y atención rápida.";

// oficina + contacto
$address_text = $address_text ?? "Av. Tomás Marsano 368 - Surquillo";

$phones = $phones ?? [
  ["href" => "tel:+51991943105", "text" => "+51 991-943-105"],
  ["href" => "tel:+51946699764", "text" => "+51 946-699-764"],
];

$about_text = $about_text ?? "En Mendieta Servicios Contables ayudamos a empresas y emprendedores como Estudio Contable en Lima, ofreciendo soluciones tributarias y financieras confiables.";

// links legales
$privacy_href = $privacy_href ?? "#politica-privacidad";
$terms_href   = $terms_href   ?? "#politicas-uso";

// menú (puede reutilizar el mismo $nav_items si lo pasas)
$footer_menu = $footer_menu ?? [
  ["label" => "Nosotros",   "href" => $BASE . "/nosotros"],
  ["label" => "Servicios",  "href" => $BASE . "/servicios"],
  ["label" => "Funciones",  "href" => $BASE . "/funciones"],
  ["label" => "Portafolio", "href" => $BASE . "/portafolio"],
];


// mini links
$login_url    = $login_url    ?? "https://clientes.mscontables.com/login.php";
$contact_href = $contact_href ?? "#contacto";

// redes
$social_links = $social_links ?? [
  ["href" => "#", "label" => "Facebook",  "icon" => "fa-brands fa-facebook-f"],
  ["href" => "#", "label" => "TikTok",    "icon" => "fa-brands fa-tiktok"],
  ["href" => "#", "label" => "LinkedIn",  "icon" => "fa-brands fa-linkedin-in"],
  ["href" => "#", "label" => "Instagram", "icon" => "fa-brands fa-instagram"],
];

$back_to_top = $back_to_top ?? "#top";
?>

<footer class="footer" id="footer" aria-label="Pie de página">
  <div class="wrap footer__grid">
    <!-- Brand -->
    <div class="footer__brand">
      <a class="footer__logo" href="<?= htmlspecialchars($back_to_top) ?>" aria-label="Mendieta - Inicio">
        <img src="<?= htmlspecialchars($footer_logo) ?>" alt="<?= htmlspecialchars($footer_alt) ?>" loading="lazy">
      </a>

      <p class="footer__tagline">
        <?= htmlspecialchars($footer_tagline) ?>
      </p>

      <div class="footer__social" aria-label="Redes sociales">
        <?php foreach ($social_links as $s): ?>
          <a href="<?= htmlspecialchars((string)$s["href"]) ?>" aria-label="<?= htmlspecialchars((string)$s["label"]) ?>">
            <i class="<?= htmlspecialchars((string)$s["icon"]) ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Oficina -->
    <div class="footer__col">
      <h3 class="footer__title">Oficina</h3>

      <ul class="footer__list">
        <li class="footer__item">
          <span class="footer__icon"><i class="fa-solid fa-location-dot"></i></span>
          <span><?= htmlspecialchars($address_text) ?></span>
        </li>
      </ul>

      <h3 class="footer__title footer__title--mt">Teléfonos</h3>
      <ul class="footer__list">
        <?php foreach ($phones as $p): ?>
          <li class="footer__item">
            <span class="footer__icon"><i class="fa-solid fa-phone"></i></span>
            <a class="footer__link" href="<?= htmlspecialchars((string)$p["href"]) ?>">
              <?= htmlspecialchars((string)$p["text"]) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Nosotros -->
    <div class="footer__col">
      <h3 class="footer__title">Nosotros</h3>

      <p class="footer__text">
        <?= htmlspecialchars($about_text) ?>
      </p>

      <ul class="footer__list footer__list--links">
        <li>
          <a class="footer__link" href="<?= htmlspecialchars($privacy_href) ?>">
            <i class="fa-solid fa-lock"></i> Política de Privacidad
          </a>
        </li>
        <li>
          <a class="footer__link" href="<?= htmlspecialchars($terms_href) ?>">
            <i class="fa-solid fa-lock"></i> Políticas de Uso
          </a>
        </li>
      </ul>
    </div>

    <!-- Menú -->
    <div class="footer__col">
      <h3 class="footer__title">Menú</h3>

      <ul class="footer__menu">
  <?php foreach ($footer_menu as $item): ?>
    <li>
      <a class="footer__link" href="<?= htmlspecialchars($item['href']) ?>">
        <?= htmlspecialchars($item['label']) ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

    </div>
  </div>

  <!-- Bottom bar -->
  <div class="footer__bottom" style="text-align: center;">
    <div class="wrap footer__bottomInner">
      <small>© <?= date('Y') ?> Mendieta Estudio Contable. Todos los derechos reservados.</small>
    </div>
  </div>
</footer>
