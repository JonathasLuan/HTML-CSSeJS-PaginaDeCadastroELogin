<?php
session_start(); // Inicia a sessão
session_unset(); // Limpa a sessão
session_destroy(); // Destrói a sessão

// Redireciona o usuário para a página de login
header("Location: index.php");
exit;
?>
