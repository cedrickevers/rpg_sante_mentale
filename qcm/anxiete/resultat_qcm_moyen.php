<?php
// Récupérer les réponses
$q1 = isset($_POST['q1']) ? (int)$_POST['q1'] : 0;
$q2 = isset($_POST['q2']) ? (int)$_POST['q2'] : 0;
$q3 = isset($_POST['q3']) ? (int)$_POST['q3'] : 0;
$q4 = isset($_POST['q4']) ? (int)$_POST['q4'] : 0;
$q5 = isset($_POST['q5']) ? (int)$_POST['q5'] : 0;

// Calculer le score total
$score = $q1 + $q2 + $q3 + $q4 + $q5;

// Déterminer la difficulté en fonction du score
if ($score >= 4) {
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
    <title>Résultat QCM Anxiété - Moyen</title>
</head>
<body>
    <h1>Résultat du Questionnaire Moyen - Anxiété</h1>
    <p><?php echo $message; ?></p>
    <a href="index.html">Retour à l'accueil</a>
</body>
</html>
