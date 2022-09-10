<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modules</title>
</head>
<body>
    <p> je suis la page des modules</p>
    @if($modules->count() > 0)
        @foreach($modules as $module)
            <h2><a href="{{ route('module.show', ['id'=> $module ->id]) }}">{{ $module->name }}</a></h2>
        @endforeach
    @else
        <snap>aucun module dans la base de données</snap>
    @endif
</body>
</html>