<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @livewireStyles
    <title>Livewire</title>
</head>
<body class="antialiased">
<h1>LiveWire</h1>
@livewire('hello')
@livewire('hello2', ['name2' => 'Neverov'])

<livewire:counter />

@livewireScripts
</body>
</html>
