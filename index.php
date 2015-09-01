<!DOCTYPE html>
<html>
    <head>
        <title>Hello i am testsThere</title>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="css/main.css">
         <script type="text/javascript">
            $( document ).ready(function() {

                      $(".container").on('click',".ofcitems", function(e){
                        e.preventDefault();
                        var dataid = $(this).attr("data-desc");
                        var data = {
                        "parent": dataid
                        };
                         $.ajax({
                          url: 'ajaxreq.php',
                          type: 'post',
                          data:data,
                          success: function(data, status) {
                            if(data) {
                              $('#officecontainer').html(data);

                            }
                          },
                          error: function(xhr, desc, err) {
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                          }
                        }); // end ajax call
                        

                    });
            });
         </script>
         <style>
             .portfolio-item{
                 background:#e4e4e4;
                 padding:20px;
                 height:100px;
                 border :5px solid white;
                 text-align: center;
                 text-decoration: underline;
                 font-weight: bolder;
                 font-size: 30px;
                }

         </style>
    </head>
    <body>
        <div class="container" id="officecontainer">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skype";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM t_offices";
$result = $conn->query($sql);
//$rows = $result->fetch_array(MYSQLI_NUM);
$total = $result->num_rows;
$data_per_row = 3;
$total_rows = ceil($total/$data_per_row);
$last_row = $total%$data_per_row;
$index = 0;
$span = 12/$data_per_row;
$result_array = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $result_array[$index] = $row;
      $index++;
    }
} else {
    echo "0 results";
}

for($i= 0;$i<$total_rows;$i++){
     echo ' <div class="row">';
    if(($total_rows-1) == $i){
     
        for($j =0 ;$j<$last_row;$j++){
            $row = $result_array[$i*$data_per_row+$j];
           // echo($i*$data_per_row+$j);
            echo ' <div class="col-md-'.$span.' portfolio-item"><a href="#" data-desc="'.$row["id"].'" class="ofcitems">'.$row["name"].'</a></div>';
        }
        for($j =0 ;$j<($data_per_row-$last_row);$j++){
           echo ' <div class="col-md-'.$span.'"></div>';
        }
        
    }
    else{
        
        for($j =0 ;$j<$data_per_row;$j++){
            //echo($i*$data_per_row+$j);
              $row = $result_array[$i*$data_per_row+$j];
              // echo($i*$data_per_row+$j);
              echo ' <div class="col-md-'.$span.' portfolio-item" ><a href="#" data-desc="'.$row["id"].'" class="ofcitems">'.$row["name"].'</a></div>';
        }
       
          
    }
    echo '</div>';
}


$conn->close();
?>


        </div>
    </body>
</html>

