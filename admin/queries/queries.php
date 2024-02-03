<?php


include('database/connection.php');

function getAllData($table) {
    global $baglanti;

    $sql = "SELECT * FROM $table";
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

function insertSlider($name, $desc, $active, $uid) {
    global $baglanti;
    $date=date("Y-m-d");
    // Diğer sütunları ekleyin...
	
    $query = "INSERT INTO slider (Name, Description,IsActive,ImagePath,CreatedDate) VALUES ('$name', '$desc','$active','$uid','$date')";
    $result=$baglanti->prepare($query);
    $result->execute();
    if ($result) {
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

