<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="課題21の提出">
    <title>課題21の提出</title>
</head>
<body>
    <h2>入力内容をご確認ください</h2>
    <table>
        <tr>
            <td>お名前:<?php echo $_POST['user_name'];?></td>
        </tr>
        <tr>
            <td>性別:<?php echo $_POST['user_gender'];?></td>
        </tr>
        <tr>
            <td>メールアドレス:<?php echo $_POST['email'];?></td>
        </tr>
    </table>
</body>
</html>