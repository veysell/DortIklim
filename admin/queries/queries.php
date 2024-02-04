<?php

//$sql = "SELECT * FROM tablo_adi LIMIT 0, 4";
include('database/connection.php');

function getAllData($table)
{
    global $baglanti;

    $sql = "SELECT * FROM $table order by  CreatedDate desc";
    $query = $baglanti->prepare($sql);
    $query->execute();
    $data = array();

    if ($query->rowCount() > 0) {
        while ($row = $query->fetch()) {
            $data[] = $row;
        }
    }

    return $data;
}

function deleteById($id, $table)
{
    global $baglanti;

    $sql = "DELETE FROM $table WHERE Id = :id";


    $query = $baglanti->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);

    $result = $query->execute();

    return $result;
}


function getById($id, $table)
{
    global $baglanti;

    $sql = "SELECT * FROM $table WHERE Id = :id";
    $query = $baglanti->prepare($sql);

    $query->bindParam(':id', $id, PDO::PARAM_INT);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function updateSlider($id, $name, $desc, $active, $url)
{
    global $baglanti;
    if ($url == "null") {
        $sql = "UPDATE slider SET Name=:name, Description=:desc, IsActive=:active WHERE Id = :id";
    } else {
        $sql = "UPDATE slider SET Name=:name, Description=:desc, ImagePath=:url, IsActive=:active WHERE Id = :id";
    }

    $query = $baglanti->prepare($sql);

    // Parametreleri bind et
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':name', $name);
    $query->bindParam(':desc', $desc);
    if ($url != "null") {
        $query->bindParam(':url', $url);
    }
    $query->bindParam(':active', $active, PDO::PARAM_INT);

    $result = $query->execute();
    return $result;

}
function insertSlider($name, $desc, $active, $uid)
{
    global $baglanti;
    $date = date("Y-m-d H:i:s");
    // Diğer sütunları ekleyin...

    $query = "INSERT INTO slider (Name, Description,IsActive,ImagePath,CreatedDate) VALUES ('$name', '$desc','$active','$uid','$date')";
    $result = $baglanti->prepare($query);
    $result->execute();
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function getUserInfo($userName, $password)
{
    global $conn;
    echo $conn;
    echo $userName . "--" . $password . "";
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

function insertBlog($name, $desc, $active, $uid, $date, $title)
{
    global $baglanti;
    $createdDate = date("Y-m-d H:i:s");
    // Diğer sütunları ekleyin...

    $query = "INSERT INTO blog (AuthorName,IsActive,Title,ImagePath,CreatedDate,Description,Date) VALUES ('$name','$active','$title','$uid','$createdDate','$desc','$date')";
    $result = $baglanti->prepare($query);
    $result->execute();
    if ($result) {
        return true;
    } else {
        return false;
    }
}


function updateBlog($id, $desc, $active, $url, $date, $title)
{
    global $baglanti;

    $sql = "UPDATE blog SET Description=:desc,Date=:date ,Title=:title, ImagePath=:url, IsActive=:active WHERE Id = :id";


    $query = $baglanti->prepare($sql);

    // Parametreleri bind et
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':desc', $desc);
    $query->bindParam(':active', $active);
    $query->bindParam(':url', $url);
    $query->bindParam(':date', $date);
    $query->bindParam(':title', $title);

    $query->bindParam(':active', $active, PDO::PARAM_INT);

    $result = $query->execute();
    return $result;
}

function insertBanner($name, $desc, $active, $url)
{
    global $baglanti;

    $createdDate = date("Y-m-d H:i:s");
    // Diğer sütunları ekleyin...
    $query = "INSERT INTO banner (Name,IsActive,ImagePath,CreatedDate,Description) VALUES ('$name','$active','$url','$createdDate','$desc')";
    $result = $baglanti->prepare($query);
    $result->execute();
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function updateBanner($id, $name, $desc, $active, $url)
{
    global $baglanti;

    $sql = "UPDATE banner SET Description=:desc, Name=:name, ImagePath=:url, IsActive=:active WHERE Id = :id";


    $query = $baglanti->prepare($sql);

    // Parametreleri bind et
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':desc', $desc);
    $query->bindParam(':name', $name);
    $query->bindParam(':active', $active);
    $query->bindParam(':url', $url);


    $query->bindParam(':active', $active, PDO::PARAM_INT);

    $result = $query->execute();
    return $result;
}