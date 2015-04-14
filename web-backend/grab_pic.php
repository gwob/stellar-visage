<?php 
            $servername = "localhost";
            $username = "root";
            $password = "spaceapps";
            $dbName = "spaceapps";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);
            $query = "SELECT * from artwork WHERE 'planet' LIKE '" . $_POST['planet'] . "'";
            $query_result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($query_result);
            mysqli_close($conn);
        ?>