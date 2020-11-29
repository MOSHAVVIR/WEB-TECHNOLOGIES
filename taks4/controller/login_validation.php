<?php
require_once "../pdo.php";

if ( isset($_POST['id']) && isset($_POST['password'])  ) {
    echo("<p>Handling POST data...</p>\n");
    $i = $_POST['id'];
    $p = $_POST['password'];

    $sql = "SELECT id FROM users_table
       WHERE id = '$i'
       AND pass = '$p'";

    echo "<p>$sql</p>\n";

    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($row);
    echo "-->\n";
    if ( $row === FALSE ) {
       echo "<h1>Login incorrect.</h1>\n";
    } else {
       echo "<p>Login success.</p>\n";
    }
}
?>