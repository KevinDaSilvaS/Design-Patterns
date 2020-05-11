<?php
require_once('Model.php');

require_once('Look.php');

$look = new Look("white tshirt","jeans","allstars");

$sigrid = $look->getModel();

for ($i=0; $i < 4; $i++) { 
    var_dump("Sigrid is dressing her " . $sigrid->current());
    $sigrid->next();
    $sigrid->isDressed();
}
?>