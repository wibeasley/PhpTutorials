 <!-- Working through example of *Programming PHP* by Kevin Tatroe, Peter MacIntyre, and Rasmus Lerdorf -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>mysqli Example 1</title>
    </head>
    <body>

        <?php
        echo "about to establish connection<br/>";

        $mysqli = new mysqli("localhost", "phpTest", "o", "redcap");
        
        echo 'established connection.<br/>';
        echo "This is a sample ticket opened by the API<br/>with a carriage return.<br/>";
        
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        echo $mysqli->host_info;
        echo '<br/>d---<br/>';

        /* Create table doesn't return a resultset */
        //if ($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
        //    printf("Table myCity successfully created.\n");
        //}

        /* Select queries return a resultset */
        if ($result = $mysqli->query("SELECT * FROM redcap.redcap_projects")) {
            printf("Select returned %d rows.\n", $result->num_rows);
            
            echo "a", "b<br/>";
            echo "<table border=\"1\">";
                echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>Name</td>";
                    echo "<td>Title</td>";
                echo "</tr>";               
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>", $row['project_id'], " </td>";
                    echo "<td>", $row['project_name'], " </td>";
                    echo "<td>", $row['app_title'], " </td>";
                echo "</tr>";
            }
            echo "</table>";
            
            /* free result set */
            $result->close();
        }
        
        $mysqli->close();
        

        
        ?>
    </body>
</html>
