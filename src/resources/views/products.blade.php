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
        
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
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
