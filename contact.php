<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>wakunosoto公式 | お問い合わせ</title>
  <link rel="stylesheet" href="./css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body class="onLoad">
  <?php
    $prm = $_GET['prm'];
  ?>
  <div id="wrapper">
    <header class="flex">
      <!-- <h1 class="logo"><img src="../materials/logo/logo.svg" alt="wakunosotoロゴマーク"></h1> -->
      <h1><a href="./index.html">wa<span class="dot">・</span>ku<span class="dot">・</span>no<span
            class="dot">・</span>so<span class="dot">・</span>to<br><span>ミュージアム</span></a></h1>
      <nav class="pc">
        <ul class="flex">
          <li><a href="./information.html">施設のご案内</a></li>
          <li><a href="./price.html">ご利用料金</a></li>
          <li><a href="./contact.php?prm=person">お問い合わせ</a></li>
          <ul class="sns flex">
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
          </ul>
        </ul>
      </nav>
        <nav class="sp">
          <ul class="humberger">
            <li class="humbergerBorder"></li>
            <li class="humbergerBorder"></li>
          </ul>
          <ul class="flex spNavi">
            <li><a href="./information.html">施設のご案内</a></li>
            <li><a href="./price.html">ご利用料金</a></li>
            <li><a href="./contact.php?prm=person">お問い合わせ</a></li>
            <ul class="sns flex">
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
          </ul>
        </nav>
    </header>
    <div id="barba-wrapper" aria-live="polite">
      <div class="barba-container">
        <!-- main -->
        <div class="contact">
        <?php if( isset ($prm) ): ?>
          <!-- URL: /?prm=php -->
          <?php if ( $prm == 'person' ): ?>
          <div class="tabContents tabContentsPerson">
            <h2>個人のお客様はこちらから</h2>
            <div class="formDescription">
              <p>下記フォームは全て埋めてください</p>
              <p>お電話でのお問い合わせも受け付けております　TEL：03-333-3344</p>
              <p>お問い合わせへのお返事は1~2営業日内にさせて頂きます</p>
            </div>            
            <form action="">
              <p class="sex">
                <input id="male" type="radio" name="sex" value="male">
                <label for="male">男</label>
              </p>
              <p class="sex">
                <input id="female" type="radio" name="sex" value="female">
                <label for="female">女</label>
              </p>
              <p>
                <label for="">ご連絡先メールアドレス</label>
                <input type="text">
              </p>
              <p>
                <label for="">ご用件内容</label>
                <textarea name="text" id="text" value="field" cols="30" rows="10"></textarea>
              </p>
              <button type="submit">送信する</button>
            </form>
          </div>   
          <?php endif; ?>
        <?php endif; ?>
        <?php if( isset ($prm) ): ?>
          <!-- URL: /?prm=php -->
          <?php if ( $prm == 'company' ): ?>
          <div class="tabContents tabContentsCorporate">
            <h2>法人様はこちらから</h2>
            <div class="formDescription">
              <p>下記フォームは全て埋めてください</p>
              <p>お電話でのお問い合わせも受け付けております。TEL：03-333-3344</p>
              <p>お問い合わせへのお返事は1~2営業日内にさせて頂きます</p>
            </div>
            <form action="">
              <p>
                <label for="">会社名 / 店舗名</label>
                <select name="company" id="company">
                  <option value="none">選択してください</option>
                  <option value="kabu">株式会社</option> 
                  <option value="yuugen">有限会社</option> 
                  <option value="other">その他</option> 
                </select>
                <i class="fas fa-caret-down"></i>
                <input type="text" id="companyName">
              </p>
              <p class="c-repName">
                <label for="">ご担当者名</label>
                <input type="text">
              </p>
              <p class="c-postalCode">
                <label for="">郵便番号</label>
                <input type="text">
              </p>
              <p class="c-address">
                <label for="">ご住所</label>
                <input type="text">
              </p>
              <p class="c-phone">
                <label for="">電話番号</label>
                <input type="text">
              </p>
              <p class="c-fax">
                <label for="">FAX番号</label>
                <input type="text">
              </p>
              <p class="c-mail">
                <label for="">メールアドレス</label>
                <input type="text">
                <label class="return" for="">確認用</label>
                <input type="text">
              </p>
              <p class="c-hp">
                <label for="">自社ホームページ</label>
                <input type="text">
              </p>
              <p class="c-industries">
                <label for="industries">業種</label>
                <select name="company" id="company">
                  <option value="none">選択してください</option>
                  <option value="kabu">美容</option>
                  <option value="yuugen">建築</option>
                  <option value="other">福祉</option>
                  <option value="other">デザイン</option>
                  <option value="other">広告・印刷</option>
                  <option value="other">映像</option>
                  <option value="other">メディア</option>
                  <option value="other">IT/WEB</option>
                  <option value="other">報道</option>
                  <option value="other">エンタメ</option>
                  <option value="other">百貨店</option>
                  <option value="other">その他</option>
                </select>
                <i class="fas fa-caret-down"></i>
                <!-- <input type="checkbox" id="beauty">
                <label for="beauty">美容</label>
                <input type="checkbox" id="architecture">
                <label for="architecture">建築</label>
                <input type="checkbox" id="welfare">
                <label for="welfare">福祉</label>
                <input type="checkbox" id="design">
                <label for="design">デザイン</label>
                <input type="checkbox" id="itweb">
                <label for="itweb">IT・WEB</label>
                <input type="checkbox" id="media">
                <label for="media">メディア</label>
                <input type="checkbox" id="entertainment">
                <label for="entertainment">エンタメ</label>
                <input type="checkbox" id="news">
                <label for="news">報道</label>
                <input type="checkbox" id="department">
                <label for="department">百貨店</label>
                <input type="checkbox" id="other">
                <label for="other">その他</label> -->
              </p>
              <p class="c-contactBox">
                <label for="">お問い合わせ内容<span>（出来るだけ具体的にご記入ください。）</span></label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
              </p>
                <button type="submit">送信する</button>
            </form>
          </div>          
          <?php endif; ?>
        <?php endif; ?>
        </div>
        <!-- honeEnd -->
      </div>
    </div>
    <footer>
      <small>©︎copyright wakunosotoミュージアム公式</small>
    </footer>
  </div>
  <!--endWrap-->
  <div class="shutter shutter-a"></div>
  <!-- <script src="./js/jquery-3.2.1.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>
  <script src="./js/barba-custom.js" type="text/javascript"></script>
  <script src="./js/main.js"></script>
</body>

</html>