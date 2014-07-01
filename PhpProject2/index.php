<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    $db = new mysqli("localhost", "phpTest", "o", "redcap");
    if($db->connect_error) {
        die("Connect Error ({$db->connect_errno}){$db->connect_error}");
    }
    $sql = "SELECT project_id, project_name, app_title FROM redcap.redcap_projects;";
    $result = $db->query($sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php Project 2</title>
    </head>
    <body>
        afjlkfadfdsafdsa
        <table cellSpacing="2" cellPaddin="6" align="center" border="1">
            <tr>
                <td colspan="4">
                    <h3 align="center">Header2</h3>
                </td>
            </tr>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Title</td>
            </tr>
            <?php while($row = $result->fetch_assoc()) {  ?>
                <tr>
                    <td><?php echo $row['project_id']; ?></td>
                    <td><?php echo $row['project_name']; ?></td>
                    <td><?php echo stripslashes($row['app_title']); ?></td>

                </tr>
            <?php}?>

        </table>

        
        <?php if(!empty($_POST['participantID'])) {
            echo "Greetings, Participant {$_POST['participantID']}, and welcome.";
        } ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              Enter your name: <input type="text" name="participantID" />
            <input type="submit" />
        </form>
    <p>
    Expected properties are:
    <ul>
        <li>id</li>
        <li>priority</li>
        <li>created_on</li>
        <li>due_on</li>
        <li>last_modified_on</li>
        <li>title</li>
        <li>description</li>
        <li>comment</li>
        <li>status</li>
        <li>deleted</li>
    </ul>
    </body>
</html>
