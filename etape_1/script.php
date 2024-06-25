<?php
// conversion des erreurs en exceptions
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

try {
    // ouvre un fichier qui n'existe pas
    $file = fopen("fichier_inexistant.txt", "r");
} catch (ErrorException $e) {
    // si l'exception est levée, affiche un message d'erreur
    echo "Erreur lors de l'ouverture du fichier : " . $e->getMessage();
} finally {
    // restaure le gestionnaire d'erreurs
    restore_error_handler();
}

?>
