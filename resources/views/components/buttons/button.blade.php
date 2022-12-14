@props([
    'href',
    'name',
])

{{-- <a href={{$href  ?? '#'}} class="btn btn-primary">
    {{$name ?? 'teste button'}}
</a> --}}

<button type="{{$type ?? null}}" class="btn btn-primary">{{$slot}}</button>
