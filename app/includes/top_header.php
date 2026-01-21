<?php
$BASE = $BASE ?? '/PAGINAWEBMENDIETA'; // ajusta si tu carpeta cambia

$brand_href   = $brand_href   ?? ($BASE . "/");
$brand_logo   = $brand_logo   ?? ($BASE . "/assets/img/logo.webp"); // ojo: tu archivo es logo.webp
$brand_alt    = $brand_alt    ?? "Mendieta Estudio Contable";

$phone        = $phone        ?? "+51991943105";
$phone_text   = $phone_text   ?? "991 943 105";

$email        = $email        ?? "contadorgeneral@mscontables.com";
$login_url    = $login_url    ?? "https://clientes.mscontables.com/login.php";
$contact_href = $contact_href ?? "#contacto";

$current      = $current      ?? "";

$nav_items = $nav_items ?? [
  ["label" => "Nosotros",   "href" => $BASE . "/nosotros"],
  ["label" => "Servicios",  "href" => $BASE . "/servicios"],
  ["label" => "Funciones",  "href" => $BASE . "/funciones"],
  ["label" => "Portafolio", "href" => $BASE . "/portafolio"],
];

function is_active(string $href, string $current): bool {
  if ($current === "") return false;
  return $href === $current;
}
?>
<div class="site-header">

</div>
<!-- Topbar -->
<div class="topbar" role="banner">
  <div class="wrap topbar__inner">
    <div class="topbar__social" aria-label="Redes sociales">
      <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
    </div>

    <div class="topbar__contact">
      <a class="topbar__link" href="tel:<?= htmlspecialchars($phone) ?>" aria-label="Llamar">
        <i class="fa-solid fa-phone"></i>
        <?= htmlspecialchars($phone_text) ?>
      </a>

      <a class="topbar__link" href="mailto:<?= htmlspecialchars($email) ?>" aria-label="Correo">
        <i class="fa-solid fa-envelope"></i>
        <?= htmlspecialchars($email) ?>
      </a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="header" role="navigation" aria-label="Navegación principal">
  <div class="wrap header__inner">
    <a class="brand" href="<?= htmlspecialchars($brand_href) ?>" aria-label="Mendieta - Inicio">
      <img
        src="<?= htmlspecialchars($brand_logo) ?>"
        alt="<?= htmlspecialchars($brand_alt) ?>"
        class="brand__logo"
        width="180"
        height="48"
        loading="eager"
      />
    </a>

    <nav class="nav" aria-label="Menú principal">
      <?php foreach ($nav_items as $item): ?>
        <?php
          $href  = (string)($item["href"] ?? "#");
          $label = (string)($item["label"] ?? "Link");
          $active = is_active($href, $current) ? " is-active" : "";
        ?>
        <a class="<?= trim($active) ?>" href="<?= htmlspecialchars($href) ?>">
          <?= htmlspecialchars($label) ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <div class="header__actions">
      <a class="btn btn--outline btn--sm" target="_blank" href="<?= htmlspecialchars($login_url) ?>">
        <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i>
        Iniciar sesión
      </a>

      <a class="btn btn--primary btn--sm" href="<?= htmlspecialchars($contact_href) ?>">
        <i class="fa-solid fa-comments" aria-hidden="true"></i>
        Contáctanos
      </a>
    </div>

    <button class="hamb" id="hambBtn" aria-label="Abrir menú" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- Menú móvil (panel) -->
<div class="navPanel" id="navPanel" aria-hidden="true">
  <div class="navPanel__backdrop" data-close="1"></div>

  <aside class="navPanel__sheet" role="dialog" aria-modal="true" aria-label="Menú">
    <div class="navPanel__top">
      <strong class="navPanel__title">Menú</strong>
      <button class="navPanel__close" type="button" aria-label="Cerrar" data-close="1">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <nav class="navPanel__nav" aria-label="Menú móvil">
      <?php foreach ($nav_items as $item): ?>
        <a href="<?= htmlspecialchars((string)$item["href"]) ?>">
          <?= htmlspecialchars((string)$item["label"]) ?>
          <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        </a>
      <?php endforeach; ?>
    </nav>

    <div class="navPanel__actions">
      <a class="btn btn--outline btn--sm" target="_blank" href="<?= htmlspecialchars($login_url) ?>">
        <i class="fa-solid fa-right-to-bracket" aria-hidden="true"></i>
        Iniciar sesión
      </a>

      <a class="btn btn--primary btn--sm" href="<?= htmlspecialchars($contact_href) ?>">
        <i class="fa-solid fa-comments" aria-hidden="true"></i>
        Contáctanos
      </a>
    </div>
  </aside>
</div>
