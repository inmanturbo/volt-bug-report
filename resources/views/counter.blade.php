
<?php
 
use function Livewire\Volt\{state};
 
state(['count' => 0]);
 
$increment = fn () => $this->count++;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
</head>
<body>
@volt('mycomponent')
<div>
    @php
        $number = 3;
    @endphp
    <h1>{{ $number }}</h1>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>
@endvolt

@livewireScripts
</body>
</html>