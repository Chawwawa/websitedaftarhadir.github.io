<?php
include "koneksi.php";
$tampil = mysqli_query($mysqli, "SELECT * FROM data_reservasi order by id");
$dataArr = array();
    while ($data = mysqli_fetch_array($tampil)){
        $dataArr[] = array(
            'id'=>$data['id'],
            'title'=>$data['title'],
            'star'=>$data['star_event'],
            'end'=>$data['end_event'],
        );
    }
    echo json_encode($dataArr);
?>