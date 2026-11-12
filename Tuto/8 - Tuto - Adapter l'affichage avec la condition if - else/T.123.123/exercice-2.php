<?php
$montant = 923;

if ($montant >= 500) {
    $remise = 0.05;
} elseif ($montant >= 1000) {
    $remise = 0.10;
} elseif ($montant >= 2000) {
    $remise = 0.15;
}

$montantremise = $montant * $remise;
$montantapayer = $montant - $montantremise;

echo "le montant de remise: " . $montantremise."<br>";

echo "le montant a payer: " . $montantapayer;
?>