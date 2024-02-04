<?php
include("inc/header.php");
?>

<head>
    <title>Gönüllü Kayıt Formu</title>
    <meta charset="utf-8" />
    <style type="text/css">
        body {
            background: #e5ffe5;
            font-size: 10px;
            font-family: Trebuchet MS;
        }

        #kayitFormu {

           display:flex;
           justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            background: #ffffff;
            width: 360px;
            margin: auto;
            margin-top: 20px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);;
        }

        #kayitFormu form {
            flex-grow: 1;
            padding: 10px;
        }

        input,
        button {
            border-radius: 5px;
            border: none;
            width: 300px;
            height: 50px;
            margin: 20px 0px 20px 0px;
            background: rgba(240, 240, 240, .5);
            padding-left: 15px;
            font-style: italic;

        }

        .btn {
            background: #76b852;
            color: white;
        }

        h3 {
            color: #333;
            text-transform: uppercase;
            font-size: 20px;
        }

        /* Form Animasyonları */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            animation: fadeInUp 1s ease;
            /* Animasyon adı, süre, geçiş fonksiyonu */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Ana Sayfa Animasyonları */
        body {
            background-color: #f8f9fa;
            animation: backgroundColorChange 5s infinite alternate;
            /* Sınırsız alternatif bir animasyon */
        }

        @keyframes backgroundColorChange {
            from {
                background-color: #343a40;
            }

            to {
                background-color: #ffc107;
            }
        }


        @keyframes rotateColor {
            0% {
                transform: rotate(0deg);
                color: #fff;
            }

            50% {
                transform: rotate(180deg);
                color: #ffc107;
            }

            100% {
                transform: rotate(360deg);
                color: #fff;
            }
        }

        #profilResmi {
            border-radius: 50%;
            overflow: hidden;
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        #profilResmi img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div id="kayitFormu">

        <form action="kayityap.php" method="get">
            <h3>Gönüllü Kayıt Formu</h3>
            <input type="text" name="adiniz" placeholder="Adınız ve Soyadınız" required maxlength="6" />
            <input type="email" name="eposta" placeholder="E-Mail adresiniz" required />
            <select class="form-control" id="exampleSelectGender" required>
                <option>Cinsiyetiniz</option>
                <option>Kadın</option>
                <option>Erkek</option>
                <option>Belirtmek İstemiyorum</option>
            </select>
            <input type="phonenumber" name="phonenumber" placeholder="Telefon numaranız" required pattern="[0-9a-zA-Z]{5}" />
            <input class="btn" type="submit" value="KAYIT OL" />
        </form>
    </div>
</body>