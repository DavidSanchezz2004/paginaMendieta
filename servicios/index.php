<?php
$BASE  = '/PAGINAWEBMENDIETA'; // exacto como en la URL
$ROOT  = $_SERVER['DOCUMENT_ROOT'] . $BASE; // ruta física para includes

$title   = 'Nosotros | Mendieta Estudio Contable';
$desc    = 'Conoce al equipo Mendieta y nuestro enfoque: claridad, orden y cumplimiento SUNAT.';
$current = '/servicios'; // para marcar activo en el header
?>
<!doctype html>
<html lang="es">
<head>
  <?php include $ROOT . '/includes/head.php'; ?>
</head>

<body>

<?php include $ROOT . '/includes/top_header.php'; ?>



<?php include $ROOT . '/includes/footer.php'; ?>

<script src="<?= $BASE ?>/assets/js/top_header.js"></script>
</body>
</html>
