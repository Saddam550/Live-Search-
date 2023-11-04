<script src="js/jquery.min.js"></script>

<ul>
    <?php



    $host = "localhost";
    $user = "student_commend_chash";
    $password = "student_commend_chas";
    $database = "madrasah";
// Create connection
    $con =  mysqli_connect($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    if (isset($_POST["input"])) {
        $name = $_POST["input"];




        if ($name == "") {
            exit();
            // Query to get all list items from the database
            $select = "SELECT * FROM live_search WHERE name LIKE'%$name%'";
        } else {
            $select = "SELECT * FROM live_search WHERE name LIKE'%$name%'";

            $query = mysqli_query($con, $select);


            if ($query) {
                  // Output each row as a list item
                while ($show = mysqli_fetch_assoc($query)) {

                    echo "<li id='click'>";
                    echo $show["name"];
                    echo "</li>";
                }
            } else {
                echo "<script>
        alert('not')
        </script>";
            };
        }
    }
    ?>


</ul>