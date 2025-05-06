<?php print_r($products) ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/{productId}.css') }}" />
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
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>商品一覧＞選択商品</h2>
      </div>
      <form class="form">
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">商品名</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">値段</th>
              <td class="confirm-table__text">
                <input type="price" name="price" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">商品画像</th>
              <td class="confirm-table__text">
                <input type="image" name="image" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">季節</th>
              <td class="confirm-table__text">
                <input type="season" name="season" value="サンプルテキスト" />
                <br>
              <input type="radio" name="choices" value="春" />春
              <input type="radio" name="choices" value="夏" />夏
              <input type="radio" name="choices" value="秋" />秋
              <input type="radio" name="choices" value="冬" />冬
                <br>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">商品説明</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="サンプルテキスト" />
              </td>
            </tr>
          </table>
        </div>

        <form action="/products" method="POST">
          @csrf
        <button class="header-nav__button">戻る</button>
        </form>


        <div class="form__button">
          <button class="form__button-submit" type="submit">変更を保存</button>
        </div>
      </form>

          <form action="/products" method="POST">
          @csrf
          <button class="header-nav__button">戻る</button>
        </form>

    </div>
  </main>
</body>

</html>
