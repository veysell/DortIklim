<?php
$host = '127.0.0.1'; //localhost dbip
$dbname = 'dortiklimdb'; 
$username = 'root';
$password = '';
$charset = 'utf8';
//$collate = 'utf8_unicode_ci';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];
try {
    $baglanti = new PDO($dsn, $username, $password, $options);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
    exit;
}


function frontGetAllData($table){
    global $baglanti;
    $sql = "SELECT * FROM $table where IsActive=1 order by CreatedDate desc";
    $query = $baglanti->prepare($sql);
    $query->execute();
    $data = array();
    
    if ($query->rowCount() > 0) {
        while($row = $query->fetch()) {
            $data[] = $row;
        }
    }

    return $data;
}