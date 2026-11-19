<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$allowed_langs = ['pt', 'en'];
$default_lang  = 'pt';

// 1. Check URL query parameter (?lang=en or ?lang=pt)
if ( isset( $_GET['lang'] ) && in_array( $_GET['lang'], $allowed_langs, true ) ) {
    $current_lang = $_GET['lang'];
    // Persist choice for 30 days
    setcookie( 'spbn_lang', $current_lang, time() + ( 86400 * 30 ), '/' );
} elseif ( isset( $_COOKIE['spbn_lang'] ) && in_array( $_COOKIE['spbn_lang'], $allowed_langs, true ) ) {
    // 2. Fall back to saved cookie
    $current_lang = $_COOKIE['spbn_lang'];
} else {
    // 3. Default to Portuguese
    $current_lang = $default_lang;
}

// Load the corresponding dictionary array
$translations = require ABSPATH . 'site-lang/' . $current_lang . '.php';

/**
 * Helper function to retrieve nested translation keys safely.
 * Example: t('hero.cta')
 */
function t( string $key, string $default = '' ): string {
    global $translations;
    $keys  = explode( '.', $key );
    $value = $translations;

    foreach ( $keys as $segment ) {
        if ( is_array( $value ) && array_key_exists( $segment, $value ) ) {
            $value = $value[ $segment ];
        } else {
            return $default ?: $key;
        }
    }

    return (string) $value;
}