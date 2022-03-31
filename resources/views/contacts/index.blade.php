<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <style>
 
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">お問い合わせ</h1>
    <div class="container">
        {!! Form::open(['route' => 'confirm', 'method' => 'post']) !!}
          {{ csrf_field() }}
           <div class="form-group row">
             <p class="col-sm-4 col-form-lavel">お名前<span>※</span></p>
             <div class="col-sm-8">
               {{ Form::text('name', null, ['class' => 'form-control']) }}
             </div>
           </div>
           @if ($errors->has('name'))
            <p class="alert alert-danger">{{ $errors->first('name')}}</p>
           @endif

          <div class="form-group row">
            <p class="col-sm-4 col-form-label">性別<span>※</span></p>
            <div class="col-sm-8">
              <label>{{ Form::radio('gender', "1", true)}}1.男性</label>
              <label>{{ Form::radio('gender', "2")}}2.女性</label>
            </div>
          </div>
          @if ($errors->has('gender'))
            <p class="alert alert-danger">{{$errors->first('gender')}}</p>
          @endif

          <div class="form-group row">
            <p class="col-sm-4 col-form-label">メールアドレス<span>※</span></p>
            <div class="col-sm-8">
              {{ Form::text('email', null, ['class' => 'form-control'])}}
            </div>
          </div>
          @if ($errors->has('email'))
            <p class="alert alert-danger">{{ $errors->first('email')}}</p>
          @endif
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">郵便番号<span>※</span></p>
            <div class="col-sm-8">
              <label>〒{{ Form::text('zipcode', null, ['class' => 'form-control']) }}</label>
            </div>
          </div>
          @if ($errors->has('zipcode'))
            <p class="alert alert-danger">{{ $errors->first('zipcode')}}</p>
          @endif
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">住所<span>※</span></p>
            <div class="col-sm-8">
              {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>
          </div>
          @if ($errors->has('address'))
            <p class="alert alert-danger">{{ $errors->first('address')}}</p>
          @endif

          <div class="form-group row">
            <p class="col-sm-4 col-form-label">建物名</p>
            <div class="col-sm-8">
              {{ Form::text('building', null, ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">ご意見<span>※</span></p>
            <div class="col-sm-8">
              {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
            </div>
          </div>
          @if ($errors->has('contents'))
            <p class="alert alert-danger">{{ $errors->first('contents')}}</p>
            @endif

          <div class="text-center">
            {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
          </div>
        {!! Form::close() !!}
    </div>
  </div>
</body>
</html>