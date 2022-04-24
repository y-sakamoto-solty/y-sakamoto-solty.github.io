<?php
    echo = "応募完了しました！！";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>応募フォーム（キャリア採用）</title>
        <body>
            <h1>応募フォーム（キャリア採用）</h1>
            <form action="" method="post">
                <div class="item">
                    <label for="onamae">お名前：</label> <input id="onamae" type="text" name="yourname">
                </div>
                
                <p>性別を選択</p>
                <div class="item">
                    <input id="male" type="radio" name="sex" value="male"> <label for="mail">男性</label>
                    <input id="female" type="radio" name="sex" value="female"> <label for="female">女性</label>
                </div>
                
                <div class="item">
                    <label for="yubinbango">郵便番号：</label> <input id="yubinbango" type="number" name="postnum">
                </div>
                
                <div class="item">
                    <label for="gojusho">ご住所：</label> <input id="gojusho" type="text" name="adress">
                </div>
                
                <div class="item">
                    <label for="tel">TEL(携帯可)：</label> <input id="tel" type="number" name="telnum">
                </div>
                
                <div class="item">
                    <label for="emailadress">E-mailアドレス：</label> <input id="emailadress" type="email" name="email">
                </div>
                
                <p>ご質問等：</p>
                <div class="item">
                    <textarea class="inputs" name="comment"></textarea>
                </div>
                
                <div class="item">
                    <label class="label">応募規約について</label> <input id="doi" type="checkbox" value="doi"> <label for="doi">同意</label>
                </div>
                
                <div class="item">
                    <input type="submit" value="送信"> <input type="reset" value="リセット">
                </div>
            </form>
        </body>
    </head>
</html>