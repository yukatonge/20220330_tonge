<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ - 確認</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-2 mb-5">内容確認</h1>
    <div class="container">
      {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
      {{ csrf_field() }}
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前<span>※</span></p></p>
        <div class='col-sm-8'>
          {{ $inputs['name']}}
        </div>
      </div>
      <input type="hidden" name="name" value="{{ $inputs['name'] }}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">性別<span>※</span></p>
        <div class="col-sm-8">
          {{ $inputs['gender'] }}
        </div>
      </div>
      <input type="hidden" name="gender" value="{{ $inputs['gender']}}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス<span>※</span></p>
        <div class="col-sm-8">
          {{ $inputs['email'] }}
        </div>
      </div>
      <input type="hidden" name="email" value="{{ $inputs['email']}}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">郵便番号<span>※</span></p>
        <div class="col-sm-8">
          {{ $inputs['zipcode'] }}
        </div>
      </div>
      <input type="hidden" name="zipcode" value="{{ $inputs['zipcode']}}">
      
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">住所<span>※</span></p>
        <div class="col-sm-8">
          {{ $inputs['address'] }}
        </div>
      </div>
      <input type="hidden" name="address" value="{{ $inputs['address']}}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">建物名</p>
        <div class="col-sm-8">
          {{ $inputs['building'] }}
        </div>
      </div>
      <input type="hidden" name="building" value="{{ $inputs ['building']}}">

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">ご意見</p>
        <div class="col-sm-8">
          {{ $inputs['contents']}}
        </div>
      </div>
      <input type="hidden" name="contents" value="{{ $inputs['contents']}}">

      <div class="text-center">
        <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
        <button name="action" type="submit" value="return" class="btn btn-dark">修正する</button>
      </div>
    {!! Form::close() !!}
    </div>
  </div>
  
</body>
</html>