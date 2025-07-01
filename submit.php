<?php
$secretKey = "6Ld-53MrAAAAAIfn4VTNB4DasMnY_qF1y0XoWpso";
$response = $_POST['g-recaptcha-response'];
$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response");
$resultJson = json_decode($result);

if ($resultJson->success) {
    echo "やった！人間だ！OK！";
} else {
    echo "あれ？ロボットかも？ダメだよ！";
}
?>
