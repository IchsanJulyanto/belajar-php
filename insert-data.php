<?php 
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUES
    (
        '1',
        'Ichsan',
        'Student',
        'Full time',
        '18',
        'Makassar',
        '2',
        'ichsanjulyanto09@gmail.com'
    )";

    if($koneksi->query($sql) === TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>