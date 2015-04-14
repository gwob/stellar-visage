<html>
    <head>
        <title>Upload Artwork</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "spaceapps";
            $dbName = "spaceapps";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);
            $query = "SELECT * from artwork";
            $query_result = mysqli_query($conn, $query);
            
        ?>
    </head>
    <body>
        <div id="fileUploaderDiv">
            <form action="uploader.php" method="post" enctype="multipart/form-data">
                <p><strong>First name:</strong> <input type="text" name="firstName"></p>
                <p><strong>Last Name:</strong> <input type="text" name="lastName"></p>
                <p><strong>Planet Name:</strong> 
                <select name="planet" id="planet">
                    <option value="Sun">Sun</option>
                    <option value="Mercury">Mercury</option>
                    <option value="Venus">Venus</option>
                    <option value="Earth">Earth</option>
                    <option value="Mars">Mars</option>
                    <option value="Jupiter">Jupiter</option>
                    <option Value="Saturn">Saturn</option>
                    <option value="Uranus">Uranus</option>
                    <option value="Neptune">Neptune</option>
                    <option value="Pluto">Pluto</option>
                    <option value="Ceres">Ceres</option>
                </select></p>
                <p><strong>Stellar Artwork:</strong> <input type="file" name="fileToUpload" id="fileToUpload"></p>
                <p><input type="submit" value="Upload Image" name="submit"></p>
            </form>
            <?php
            /*
                if (mysqli_num_rows($query_result) > 0) {
                    echo "<table width=\"100%\">";
                    echo "<tr class=\"tableHeaderRow\">";
                    echo "<td>Picture ID</td><td>Picture</td><td>First Name</td><td>Last Name</td>";
                    echo "</tr>";
                // output data of each row
                    function data_uri($file, $mime) 
                        {  
                            $contents = file_get_contents($file);
                            $base64 = base64_encode($contents); 
                            return ('data:' . $mime . ';base64,' . $base64);
                        }
                
                
                    while($row = mysqli_fetch_assoc($query_result)) {
                        $image = $row["file"];
                        
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td><td><img src=\"data:image/jpeg;base64,'" . base64_encode( $row['file'] ) . " /></td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                */
            ?>
      </div>
      
    </body>
</html>
