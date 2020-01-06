<?php

function calculate() {
    if (isset($_GET['chiffre1'])) {
        if (isset($_GET['addition']) && is_numeric($_GET['chiffre1']) && is_numeric($_GET['chiffre2'])) {
            return $result = $_GET['chiffre1'] + $_GET['chiffre2'];
        } elseif (isset($_GET['soustraction']) && is_numeric($_GET['chiffre1']) && is_numeric($_GET['chiffre2'])) {
            return $result = $_GET['chiffre1'] - $_GET['chiffre2'];
        } elseif (isset($_GET['multiplication']) && is_numeric($_GET['chiffre1']) && is_numeric($_GET['chiffre2'])) {
            return $result = $_GET['chiffre1'] * $_GET['chiffre2'];
        } elseif (isset($_GET['division']) && $_GET['chiffre2'] != 0 && is_numeric($_GET['chiffre1']) && is_numeric($_GET['chiffre2'])) {
            return $result = floor($_GET['chiffre1'] / $_GET['chiffre2']);
        } else {
            return 'error';
        }
    } else {
        return '';
    }
}
?>