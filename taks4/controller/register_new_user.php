<?php
require_once "../pdo.php";

if ( isset($_POST['id']) && isset($_POST['password']) 
     && isset($_POST['balance'])) {
    $sql = "INSERT INTO users_table (id, pass, balance) 
              VALUES (:id, :pass, :balance)";
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':id' => $_POST['id'],
        ':pass' => $_POST['pass'],
        ':balance' => $_POST['balance']));
}
?>