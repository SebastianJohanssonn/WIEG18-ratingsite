<?php
function sortList(){
    include "list.php";

    foreach(array_keys($movies) as $key){
        echo "<h4><option>". $key . "</option></h4>";
    }
}
function getDescription(){
    include "list.php";
    if(isset($_POST['submit'])){
        $selected = $_POST['dropdown'];
        foreach($movies as $key => $value){
            if($key == $selected){
                echo $value;
            }
        }
    }
}
?>