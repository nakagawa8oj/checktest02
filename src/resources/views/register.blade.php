<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>商品登録</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header class="header">

  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品名</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="商品名を入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">値段</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="値段を入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        
        <div class="form__group">
          <div class="form__group-title">      
            <span class="form__label--item">季節</span>
            <span class="form__label--required">必須  複数選択可</span>
            <br>
              <input type="radio" name="choices" value="春" />春
              <input type="radio" name="choices" value="夏" />夏
              <input type="radio" name="choices" value="秋" />秋
              <input type="radio" name="choices" value="冬" />冬
            <br>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="商品の説明を入力"></textarea>
            </div>
          </div>
        </div>
      
        <form action="/products" method="post">
         @csrf
         <button class="header-nav__button">戻る</button>
        </form>
      
        <div class="form__button">
          <button class="form__button-submit" type="submit">登録</button>
        </div>
      
      </form>
    </div>

    <form action="/products" method="post">
      @csrf
      <button class="header-nav__button">戻る</button>
    </form>

  </main>
</body>

</html>
