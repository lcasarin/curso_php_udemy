<?php
// Aqui com esse comando ele fica regenerando os id quando atualiza a pagina
// mesmo que voce passe a session do usuario o navegador muda por seguranca
require_once("config.php");
session_id('eef80501214670c42edea8a62eaf4960');
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
?>
