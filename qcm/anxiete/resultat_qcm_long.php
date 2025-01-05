<?php
// Récupérer les réponses
$q1 = isset($_POST['q1']) ? (int)$_POST['q1'] : 0;
$q2 = isset($_POST['q2']) ? (int)$_POST['q2'] : 0;
$q3 = isset($_POST['q3']) ? (int)$_POST['q3'] : 0;
$q4 = isset($_POST['q4']) ? (int)$_POST['q4'] : 0;
$q5 = isset($_POST['q5']) ? (int)$_POST['q5'] : 0;
$q6 = isset($_POST['q6']) ? (int)$_POST['q6'] : 0;
$q7 = isset($_POST['q7']) ? (int)$_POST['q7'] : 0;
$q8 = isset($_POST['q8']) ? (int)$_POST['q8'] : 0;
$q9 = isset($_POST['q9']) ? (int)$_POST['q9'] : 0;
$q10 = isset($_POST['q10']) ? (int)$_POST['q10'] : 0;

// Calculer le score total
$score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10;

// Déterminer la difficulté en fonction du score
if ($score >= 7) {
    $difficulte = "Hard";
    $message = "Vous semblez anxieux. Niveau de difficulté : Hard";
} else {
    $difficulte = "Normal";
    $message = "Vous semblez être dans un état normal. Niveau de difficulté : Normal";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat QCM Anxiété - Long</title>
</head>
<body>
    <h1>Résultat du Questionnaire Long - Anxiété</h1>
    <p><?php echo $message; ?></p>
    <a href="index.html">Retour à l'accueil</a>
</body>
</html>
