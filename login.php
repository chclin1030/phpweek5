<?php
    session_start();

    if(isset($_COOKIE["iID"])){
        $cookieID = $_COOKIE["iID"];
        echo "歡迎".$cookieID."再度光臨";
    }
    else{
        echo "歡迎初次來本系統!!!";
    }
?>

<html>
    <head>
        <title>login</title>
        <link rel="icon" href="/img/sunny.png" type="image/x-icon" />
    </head>
    <body>
        <?php
            echo "<body bgcolor='#faf0e6'>"
        ?>

        <h2>使用者登入</h2>
        <form method="post">
            <p>帳號： <input type="text" name="uaccount" placeholder="帳號"></p>
            <p>密碼： <input type="password" name="upasswd" placeholder="密碼"></p> 
            <br><input type="submit" value="登入">
        </form>

        <?php
            $aID = "admin";
            $aPWD = "123";
            $uID = "user";
            $uPWD = "123";

            if(isset($_POST["uaccount"])){
                if($_POST["uaccount"] != null){
                    $iID = $_POST["uaccount"];
                    $iPWD = $_POST["upasswd"];
                    if($aID == $iID && $aPWD == $iPWD){
                        $_SESSION["login"]="Yes";
                        //echo "登入成功";
                        setcookie("iID",$iID,time()+17280);
                        header('Location: /hw2/admin.php');
                    }
                    if($uID == $iID && $uPWD == $iPWD){
                        $_SESSION["login"]="Yes";
                        //echo "登入成功";
                        setcookie("iID",$iID,time()+17280);
                        header('Location: /hw2/register.php');
                    }
                    else{
                        echo "帳號或密碼輸入錯誤";
                    }
                }
                else{
                    echo "您尚未輸入帳號或密碼";
                }
            }
            else{
                echo "歡迎登入，請輸入帳號密碼";
            }
        
        ?>

    </body>
</html>