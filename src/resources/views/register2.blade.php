@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', '商品登録')

@section('content')
<form action="/register2" method="post">
  <table>
  @csrf
    <tr>
      <th>商品名</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>値段</th>
      <td><input type="text" name="price"></td>
    </tr>
 
    
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
 
    <tr>
      <th>商品説明</th>
      <td><input type="text" name="content"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>登録</button></td>
    </tr>
  </table>
</form>

    <form action="/products" method="POST">
      @csrf
      <button class="header-nav__button">戻る</button>
    </form>

@endsection
