<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/random.css">
    <title>Document</title>
</head>
<body>
    <h1 class="title">ランダム</h1>
    <div class="random">
    <h4>抽選する個数</h4>
    <div class="num">
    <input type="number" name="ran_num" class="ran_num">
    </div>
    <h4>メーカー</h4>
    <div class="maker">
    <select name="maker" class="maker_box">
        <option value=""></option>
        <option value="">ロッテ</option>
        <option value="">カルビー</option>
        <option value="">明治</option>
        <option value="">小池屋</option>
        <option value="">おやつカンパニー</option>
    </select>
    </div>
    <h4>ジャンル</h4>
    <div class="genre">
    <select name="genre" class="genre_box">
        <option value=""></option>
        <option value="">チョコレート</option>
        <option value="">チップス</option>
        <option value="">食玩</option>
        <option value="">おつまみ</option>
        <option value="">ラムネ</option>
    </select>
    </div>
    <p></p>
    <div class="ser_button">
    <button class="search_button">抽選する！</button>
    </div>
   <p></p>
   <div class="re_button">
    <button class="reset_button">条件のリセット</button> 
    </div>
</div>
</body>
</html>