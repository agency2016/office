<?php
if($_POST['parent']) {
  /**
   * we can pass any action like block, follow, unfollow, send PM....
   * if we get a 'follow' action then we could take the user ID and create a SQL command
   * but with no database, we can simply assume the follow action has been completed and return 'ok'
  **/
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

$sql = "SELECT * FROM t_offices WHERE parent_id = ".$_POST['parent'];
$result = $conn->query($sql);
//$rows = $result->fetch_array(MYSQLI_NUM);
$total = $result->num_rows;
$data_per_row = 3;
$total_rows = ceil($total/$data_per_row);
$last_row = $total%$data_per_row;
$index = 0;
$span = 12/$data_per_row;
$result_array = array();
$html='';
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
     $html .=  ' <div class="row">';
    if(($total_rows-1) == $i){

        for($j =0 ;$j<$last_row;$j++){
            $row = $result_array[$i*$data_per_row+$j];
           // echo($i*$data_per_row+$j);
            $html .= ' <div class="col-md-'.$span.' portfolio-item"><a href="#" data-desc="'.$row["id"].'" class="ofcitems">'.$row["name"].'</a></div>';
        }
        for($j =0 ;$j<($data_per_row-$last_row);$j++){
           $html .= ' <div class="col-md-'.$span.'"></div>';
        }

    }
    else{

        for($j =0 ;$j<$data_per_row;$j++){
            //echo($i*$data_per_row+$j);
              $row = $result_array[$i*$data_per_row+$j];
              // echo($i*$data_per_row+$j);
              $html .= ' <div class="col-md-'.$span.' portfolio-item" ><a href="#" data-desc="'.$row["id"].'" class="ofcitems">'.$row["name"].'</a></div>';
        }


    }
    $html .= '</div>';
}


$conn->close();



  echo $html;
}
?>
