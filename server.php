<!-- Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->
<?php

include __DIR__.'/data.php';

header('Content-Type: application/json');

echo json_encode($dischi);



?>