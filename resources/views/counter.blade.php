
<?php

use function Livewire\Volt\{state};

state('count', 0);

?>

<div>
@volt('mycomponent')
    <div>
    @php
        $number = 3;
    @endphp
    <div>
        {{ $number }}
    </div>
    </div>
@endvolt