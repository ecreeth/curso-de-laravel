<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Luis Miguel Alvarado">
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Página de contácto</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-5">
        		<h2>Enviar Mensaje</h2>
        		<form action="{{ route('contacto.store') }}" method="POST">
        			<div class="form-group">
        				<input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre" value="{{ old('nombre') }}">
        					{{ $errors->first('nombre') }}
        			</div>
        			<div class="form-group">
        				<input type="email" name="email" class="form-control" placeholder="Escribe tu email" value="{{ old('email') }}">
        				{{ $errors->first('email') }}
        			</div>
        			<div class="form-group">
        				<textarea name="mensaje" class="form-control" placeholder="Escribe tu mensaje aquí">{{ old('mensaje') }}</textarea>
        				{{ $errors->first('mensaje') }}
        			</div>
        			<div class="form-group">
        				<input type="submit" value="Enviar Formulario" class="btn btn-primary">
        			</div>

        			{{ csrf_field() }}
        		</form>
        	</div>
        </div>
    </div>
</body>
</html>    