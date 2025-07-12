<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Tickets reçus</h2>";
foreach (glob("tickets/*.txt") as $ticket) {
    echo "<pre>".htmlspecialchars(file_get_contents($ticket))."</pre><hr>";
}
?>
<a href="logout.php">Déconnexion</a>
