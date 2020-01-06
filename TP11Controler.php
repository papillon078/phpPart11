<?php
//ouverture d'une session pour conserver les infos du tableau "result"
session_start();
function calculate() {
    //detection du debut de l'utilisation des touches
    if (isset($_GET)) {
        //detection d'appui sur une touche
        if (isset($_GET['one'])) {
            //ajout de la valeur de la touche appuyée au tableau de calcul
            $_SESSION['result'][] = 1;
            //affichage en direct de la touche appuyée
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['two'])) {
            $_SESSION['result'][] = 2;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['three'])) {
            $_SESSION['result'][] = 3;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['four'])) {
            $_SESSION['result'][] = 4;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['five'])) {
            $_SESSION['result'][] = 5;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['six'])) {
            $_SESSION['result'][] = 6;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['seven'])) {
            $_SESSION['result'][] = 7;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['height'])) {
            $_SESSION['result'][] = 8;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['nine'])) {
            $_SESSION['result'][] = 9;
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['zero'])) {
            //vérification de la division par zero
            if (isset($_SESSION['result']) && !empty($_SESSION['result'])) {
                if ($_SESSION['result'][count($_SESSION['result']) - 1] != '/') {
                    $_SESSION['result'][] = 0;
                    $return = join($_SESSION['result']);
                } else {
                    $return = 'division par Zero impossible';
                    $_SESSION['result'] = array();
                }
            } else {
                $_SESSION['result'][] = 0;
                $return = join($_SESSION['result']);
            }
        } elseif (isset($_GET['openPar'])) {
            $_SESSION['result'][] = '(';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['closePar'])) {
            $_SESSION['result'][] = ')';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['division'])) {
            $_SESSION['result'][] = '/';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['multiplication'])) {
            $_SESSION['result'][] = '*';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['soustraction'])) {
            $_SESSION['result'][] = '-';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['addition'])) {
            $_SESSION['result'][] = '+';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['dot'])) {
            $_SESSION['result'][] = '.';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['minus'])) {
            $_SESSION['result'][] = '-';
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['ac'])) {
            //effacement du tableau de calcul
            $_SESSION['result'] = array();
            $return = join($_SESSION['result']);
        } elseif (isset($_GET['result']) && !empty($_SESSION['result'])) {
            //concatenation de toutes les entrées du tableau de calcul
            $finalResult = join($_SESSION['result']);
            //on effectue le calcul et on affecte le resultat à une variable 
            //apres avoir transformé la chaine de caractere du tableau en code php
            eval("\$return =$finalResult;");
            //effacement du tableau de calcul apres avoir affiché le resultat
            $_SESSION['result'] = array();
        }
    }
    //affichage seulement si on a commencé à taper
    if (isset($return)) {
        return $return;
    }
}
?>