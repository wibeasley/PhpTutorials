<!DOCTYPE html>
----
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Project 2</title>
    </head>
    <body>
        
    <?php 
    echo "ssss<br/>";
    $db = new mysqli("localhost", "phpTest", "o", "redcap");
    if($db->connect_error) {
        die("Connect Error ({$db->connect_errno}){$db->connect_error}");
    }
    /* $sql = "SELECT project_id, project_name, app_title FROM redcap.redcap_projects;"; */
    $sql = "SELECT * FROM redcap.redcap_projects;"; 
    $result = $db->query($sql);
    echo "eeewewew<br/>";
    
    echo $sql . "<br/>";
    ?>        
        
        break breakable<br/>
        <table cellSpacing="2" cellPaddin="6" align="center" border="1">
            <tr>
                <td colspan="3">
                    <h3 align="center">redcap_projects</h3>
                </td>
            </tr>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Title</td>
            </tr>

            <?php 
            while ($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row['project_id']; ?></td>
                    <td><?php echo $row['project_name']; ?></td>
                    <td><?php echo $row['app_title']; ?></td>
                </tr>
            <?php }
            ?>
        </table>
        <br/>
        
        
        <?php 
        function printCell($row, $columnName) {      
            $p = $row[$columnName];
            echo '<td>'.$p.'</td>';
        }
        ?>
        <table cellSpacing="2" cellPaddin="6" align="center" border="1">
            <tr>
                <td colspan="3">
                    <h3 align="center">redcap_projects2</h3>
                </td>
            </tr>
            <tr>
                <td>ID2</td>
                <td>Name2</td>
                <td>Title2</td>
            </tr>

            <?php 
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()) {?>
                <tr>
                    <?php
                    printCell($row, 'project_id');
                    printCell($row, 'project_name');
                    printCell($row, 'app_title');
                    ?>
                </tr>
            <?php } ?>
        </table>
        <br/>        
        
        
        
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
    
    <?php
    $creator = array(
        'Light bulb' => "Edison", //key => value
        'Rotary' => "Wankel",
        'EBDB' => "Taco");
    
    foreach ($creator as $key => $value) {
        echo "{$value} created the {$key}.<br/>";
    }
    
    asort($creator);
    foreach ($creator as $key => $value) {
        echo "{$value} created the {$key}.<br/>";
    }
    echo $creator ."<br/>"    
    ?>
    
    <?php
    
    ?>
    
    
    
    </body>
</html>
