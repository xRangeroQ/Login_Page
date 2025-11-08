<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page // xRangeroQ</title>

    <!-- Link Style -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container" id="konteyner1">
        <div id="title">
            <h2>Giriş Sayfası</h2>
        </div>
        <div class="items">
            <form action="#" method="post">
                <input type="hidden" name="log">
                <div class="userb">
                    <input type="text" name="username" id="usernames" placeholder="Kullanıcı Adı" minlength="3" maxlength="12" required> <img id="user" src="images/user.png" alt="icon3">
                </div>
                <div class="passb">
                    <input type="password" name="password" id="passwords" placeholder="Şifre" minlength="8" maxlength="16" required> <input type="checkbox" name="checkbox" id="showpass"> <img id="closed-eye" src="images/closed-eye.png" alt="icon1"> <img id="opened-eye" src="images/opened-eye.png" alt="icon2">
                </div>
                <div class="giris">
                    <input type="submit" value="Giriş Yapmak" id="giriss">
                </div>
                <div class="kayit">
                    <samp>Hesabın mı Yok? <a href="#" id="kayitoll">Kayıt Ol</a></samp>
                </div>
                <div class="out">
                    <label id="outtext"></label>
                </div>
            </form>
        </div>
    </div>
    <div class="container2" id="konteyner2">
        <div id="title2">
            <h2>Kayıt Sayfası</h2>
        </div>
        <div class="items2">
            <form action="#" method="post">
                <input type="hidden" name="reg">
                <div class="newuserb">
                    <input type="text" name="newuser" id="newuser" placeholder="Yeni Kullanıcı Adı" minlength="3" maxlength="12"> <img id="user" src="images/user.png" alt="icon3">
                </div>
                <div class="newpassb">
                    <input type="password" name="newpass" id="newpass" placeholder="Yeni Şifre" minlength="8" maxlength="16"> <input type="checkbox" name="checkbox" id="showpass2"> <img id="closed-eye2" src="images/closed-eye.png" alt="icon4"> <img id="opened-eye2" src="images/opened-eye.png" alt="icon5">
                </div>
                <div class="newpassc">
                    <input type="password" name="newpassc" id="newpassc" placeholder="E-Mail" required> <input type="checkbox" name="checkbox" id="showpass3"> <img id="closed-eye3" src="images/closed-eye.png" alt="icon6"> <img id="opened-eye3" src="images/opened-eye.png" alt="icon7">
                </div>
                <div class="signup">
                    <input type="submit" id="signupp" value="Kayıt Olmak">
                </div>
                <div class="girisss">
                    <samp>Hesabın Var mı? <a href="#" id="girisyapp">Giriş Yap</a></samp>
                </div>
                <div class="out">
                    <label id="outtext"></label>
                </div>
            </form>
        </div>
    </div>

<script src="script.js"></script>

    <?php
        $db=new SQLite3("database/database.db");

        $db->exec("CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY NOT NULL,
        username TEXT NOT NULL,
        password TEXT NOT NULL,
        email TEXT NOT NULL
        )");

        if($_SERVER['REQUEST_METHOD']=="POST") {
            if (isset($_POST["log"])) {
                echo "oldu log";
            } else if (isset($_POST["reg"]) and isset($_POST["newuser"]) and isset($_POST["newpass"]) and isset($_POST["newpassc"])) {
                $aus=$db->prepare("INSERT INTO users(username, password, email) VALUES (:unam, :upass, :email)");
                $aus->bindValue(":unam", $_POST["newuser"], SQLITE3_TEXT);
                $aus->bindValue(":upass", password_hash($_POST["upass"], PASSWORD_DEFAULT), SQLITE3_TEXT);
                $aus->bindValue(":email", $_POST["newpassc"], SQLITE3_TEXT);
                $aus->execute();
            }
        }
    ?>

</body>

</html>