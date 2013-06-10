<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
</head>
<body>
  <h2>Авторизация/регистрация</h2>
  
  <p>{{ $message }}</p>
  
  {{ Form::open(array('url' => 'secure/login', 'method' => 'POST')) }} 
    {{ Form::text('email', '', array('placeholder' => 'Email')) }}
    {{ Form::password('password', '', array('placeholder' => 'Пароль')) }}
    {{ Form::submit('Поехали') }}
  {{ Form::close() }}
  
</body>
</html>