<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを受け取り
    $name = $_POST["name"];
    $email = $_POST["e-mail"];
    $subject = $_POST["subject"];

    // 送信先のメールアドレス
    $to = "takuto3014@gmail.com";

    // メールの本文
    $message = "お名前: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "お問い合わせ内容:\n$subject";

    // メール送信
    $headers = "From: $email";
    mail($to, "お問い合わせフォームからのメッセージ", $message, $headers);

    // 送信後のリダイレクトやメッセージ表示などの処理を追加することができます
    header("Location: success.html"); // 送信成功後に success.html にリダイレクトする例
    exit();
}
?>