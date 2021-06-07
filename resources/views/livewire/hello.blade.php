<div>
{{--    <h2>{{ $greeting }}Привет, Ливваер {{ $name }}!!!</h2>--}}
    <h2>{{ implode(', ', $greeting) }} Привет, Ливваер {{ strtoupper($name) }}!!!</h2>
{{--    <input wire:model.debounce.2000ms="name" type="text">--}}
    <input wire:model.lazy="name" type="text">
    <input wire:model="ok" type="checkbox">
{{--    <select wire:model="greeting">--}}
        <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye!</option>
        <option>Adios</option>
    </select>

    @if($ok)
    <h2>Show is true</h2>
@endif
{{--    <h2 v-if="ok">Show is true</h2>--}}
</div>
