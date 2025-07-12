<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['admin'] === 'admin' && $_POST['pass'] === '1234') {
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $erreur = "Identifiants incorrects.";
    }
}
?>
<h2>Connexion Admin</h2>
<form method="post">
    <input name="admin" placeholder="Identifiant" required><br><br>
    <input name="pass" type="password" placeholder="Mot de passe" required><br><br>
    <button type="submit">Connexion</button>
    <?php if (isset($erreur)) echo "<p style='color:red;'>$erreur</p>"; ?>
</form>
<a href="formulaire.php">Retour au formulaire</a>
