<?php
require_once "pdo.php";

if ( isset($_POST['id']) && isset($_POST['username'])  && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['dob']))
{
    $sql = "INSERT INTO users (id, username, password, email, dob)  VALUES (:id, :username, :password, :email, :dob)";
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':id' => $_POST['id'],
        ':username' => $_POST['username'],
        ':password' => $_POST['password'],
        ':email' => $_POST['email'],
        ':dob' => $_POST['dob']));
}

if ( isset($_POST['delete']) && isset($_POST['user_id']) ) {
    $sql = "DELETE FROM users WHERE user_id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['user_id']));
}

$stmt = $pdo->query("SELECT  username, password, email, dob, user_id FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head></head><body><table border="1">
<?php
foreach ( $rows as $row ) {
    echo "<tr><td>";
    echo($row['id']);
    echo("</td><td>");
    echo($row['username']);
    echo("</td><td>");
    echo($row['password']);
    echo("</td><td>");
    echo($row['email']);
    echo("</td><td>");
    echo($row['dob']);
    echo("</td><td>");
    echo('<form method="post"><input type="hidden" ');
    echo('name="user_id" value="'.$row['user_id'].'">'."\n");
    echo('<input type="submit" value="Del" name="delete">');
    echo("\n</form>\n");
    echo("</td></tr>\n");
}
?>
</table>
<p>Add User Information</p>
<form method="post">
<p>User Id:
<input type="text" name="id" ></p>    
<p>User Name:
<input type="text" name="username" size="40"></p>
<p>Password:
<input type="password" name="password"></p>
<p>Email:
<input type="text" name="email"></p>
<p>DOB:
<input type="text" name="dob"></p>

<p><input type="submit" value="Add New"/></p>
</form>
</body>
