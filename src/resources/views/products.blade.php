<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/products/{productsId}" method="post">
        @csrf

<a href="/products/{productsId}"><img src="src/public/storage/kiwi.png" alt="キウイ　¥800" border="0"></a>
<a href="/products/{productsId}"><img src="src/public/storage/strawberry.png" alt="ストロベリー　¥1200" border="0"></a>
<a href="/products/{productsId}"><img src="src/public/storage/orange.png" alt="オレンジ　¥850" border="0"></a>
<a href="/products/{productsId}"><img src="src/public/storage/watermelon.png" alt="スイカ　¥700" border="0"></a>
<a href="/products/{productsId}"><img src="src/public/storage/peach.png" alt="ピーチ　¥1000" border="0"></a>
<a href="/products/{productsId}"><img src="src/public/storage/muscat.png" alt="シャインマスカット　¥1400" border="0"></a>
];


   <div class="form__button">
    <form action="/products/register" method="post">
      @csrf
      <button class="header-nav__button">+商品を追加</button>
    </form>

   </div>

    </div>
  </main>
</body>


</html>
