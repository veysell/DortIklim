<?php
// admin/inc/queries.php

include_once('database/connection.php');

function getAllData() {
    global $conn;

    $sql = "SELECT * FROM tablo_adı";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

function insertData($data) {
    global $conn;

    $column1 = $data['column1'];
    $column2 = $data['column2'];
    // Diğer sütunları ekleyin...

    $sql = "INSERT INTO tablo_adı (column1, column2) VALUES ('$column1', '$column2')";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function getUserInfo($userName, $password) {
    global $conn;
    echo $conn;
    echo $userName."--".$password."";
    // Önce kullanıcının adını kullanarak veritabanından bilgileri çekelim
    $stmt = $conn->prepare("SELECT * FROM user WHERE Name = ?");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Kullanıcı adı doğru, şimdi şifreyi kontrol edelim
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['userPass'])) {
            // Şifre doğru, kullanıcı girişini başlat
            session_start();
            $_SESSION["Oturum"] = 6789;
            $_SESSION["username"] = $userName;
            $_SESSION["role"] = $user["role"];
            header("location: index");
        } else {
            return false;
        }
    } else {
        return false;
    }

    $stmt->close();
}

// Diğer CRUD işlemleri için fonksiyonları ekleyebilirsiniz.

