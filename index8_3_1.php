<?php

$sayfa = @$_GET["sayfa"];

switch ($sayfa) {
    case 'haqqimda':
        echo '<h1>Hakkimda</h1><p>Tezlikle</p>';
        break;
        case 'elaqa':
            echo '<h1>Elaqe</h1><p>Tezlikle</p>';
            break;
            case 'refernslar':
                echo '<h1>Referanslar</h1><p>Tezlikle</p>';
                break;
    
    default:
        echo '<h1>Xeta</h1><p>Bele seyfe yoxdur</p>';
        break;
}



?>