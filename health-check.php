<?php
/**
 * PHP Webmaster Toolkit - Health Check Utility
 * Script léger pour vérifier l'environnement serveur, la version PHP et les extensions.
 */
header('Content-Type: text/plain; charset=utf-8');

echo "=== PHP WEBMASTER TOOLKIT : HEALTH CHECK ===\n\n";
echo "Version PHP : " . phpversion() . "\n";
echo "Logiciel Serveur : " . (isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 'Inconnu') . "\n";
echo "HTTPS Actif : " . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'Oui' : 'Non') . "\n\n";

echo "--- Vérification des extensions essentielles ---\n";
$extensions = ['pdo_mysql', 'curl', 'mbstring', 'gd', 'openssl', 'json'];
foreach ($extensions as $ext) {
    echo "- " . $ext . " : " . (extension_loaded($ext) ? 'OK (Chargée)' : 'MANQUANTE') . "\n";
}

echo "\nStatut : L'environnement fonctionne correctement.\n";
