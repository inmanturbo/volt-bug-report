<?php
 
use function Livewire\Volt\{state};
 
state(['count' => 0]);
 
$increment = fn () => $this->count++;
 
?>
 
<div>
    @php
        $number = 3;
    @endphp
    <h1>{{ $number }}</h1>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>