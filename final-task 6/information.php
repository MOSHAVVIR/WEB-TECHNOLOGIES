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
if ( isset($_POST['update']) && isset($_POST['user_id']) ) {
    $sql = "UPDATE FROM users WHERE user_id = :zip";
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
<script>
            function validate() {
                var a = document.getElementById('id').value;
                
                var b = document.getElementById('username').value;
                 var c = document.getElementById('password').value;
                 var d = document.getElementById('email').value;
                 var e = document.getElementById('dob').value;
                


                if(a == "") {
                    document.getElementById('errorMsg').innerHTML = "id is empty";
                    document.getElementById('errorMsg').style.color = "red";
                    return false;   
                }
                if(b == "") {
                    document.getElementById('errorMsg').innerHTML = "username is empty";
                    document.getElementById('errorMsg').style.color = "red";
                    return false;   
                }
                if(c == "") {
                    document.getElementById('errorMsg').innerHTML = "password is empty";
                    document.getElementById('errorMsg').style.color = "red";
                    return false;   
                }
                if(d == "") {
                    document.getElementById('errorMsg').innerHTML = "email is empty";
                    document.getElementById('errorMsg').style.color = "red";
                    return false;   
                }
                if(e == "") {
                    document.getElementById('errorMsg').innerHTML = "dob is empty";
                    document.getElementById('errorMsg').style.color = "red";
                    return false;   
                }
                return true;
            }
        </script>
</table>
<h1> JS Form Validation </h1>
        
        <form name="jsForm" action="/wt/JSValidation.php" method="POST" onsubmit="return validate()">
            id: <input type="text" id="user_id" name="user_id">
            <br><br>
            username: <input type="text" id="userName" name="userName">
            <br><br>
            password: <input type="text" id="password" name="password">
            <br><br>
            email: <input type="text" id="email" name="email">
            <br><br>
            dob: <input type="text" id="dob" name="dob">
            <br><br>
            <input type="submit" value="Submit">
        </form>

        <p id="errorMsg"></p>
</form>
</body>