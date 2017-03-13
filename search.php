<?php
include 'config.php';
include 'Database.php';
$db = new Database();
$search = $_POST['search'];

    $query = "select * from tbl_search where search_word like '%$search%'";
    $result = $db->select_data($query);

if($result){
    while($output = $result->fetch_assoc()){
        echo '<li>'.$output['search_word'] .'</li>';
    }

}else{
    echo '';
}

