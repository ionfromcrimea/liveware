<div>
    <h2 wire:mouseover="$set('name2', 'Хитрый жук')">{{ $name2 }}</h2>
{{--    <h2>{{ $name2 }}</h2>--}}
    <form wire:submit.prevent="$set('name2', 'New Value')" action="#">
        <input wire:model="name2" type="text">
{{--            <button wire:click="resetName('Monkey {{ strtolower($name3) }}')">Reset input</button>--}}
{{--            <button wire:click="$set('name2', 'New Value')">Reset input</button>--}}
        <button>Submit!</button>
    </form>
</div>
