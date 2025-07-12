<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = uniqid();
    $date = date("Y-m-d H:i:s");
    $ticket = "ID: $id\nDate: $date\nNom: {$_POST['nom']}\nSujet: {$_POST['sujet']}\nMessage:\n{$_POST['message']}\n";

    file_put_contents("tickets/$id.txt", $ticket);
}
?>
<h2>Formulaire de support</h2>
<form method="post">
    <input name="nom" placeholder="Votre nom" required><br><br>
    <input name="sujet" placeholder="Sujet" required><br><br>
    <textarea name="message" placeholder="Décrivez votre problème..." required></textarea><br><br>
    <button type="submit">Envoyer</button>
</form>
<a href="login.php">Espace admin</a>
