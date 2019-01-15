<?php
function sortList(){
    include "list.php";

    foreach($movies as $key){
        echo "<h4><option>". $key['name'] . "</option></h4>";
    }
}
function getDescription(){
    include "list.php";
    if(isset($_POST['submit'])){
        $selected = $_POST['dropdown'];
        foreach($movies as $key){
            if($selected == $key['name']){
                echo $key['description'];
            }
        }
    }
}
?>