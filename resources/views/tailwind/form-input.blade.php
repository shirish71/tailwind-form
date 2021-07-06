<div class="@if($type === 'hidden') hidden @else m-2 @endif ">
    <x-form-label :label="$label" :required="$required"/>

    <input {!! $attributes->merge([
            'class' => 'form-control' . $hasErrorAndShow($name)?'is-invalid':''
        ]) !!}
           @if($isWired())
           wire:model{!! $wireModifier() !!}="{{ $name }}"
           @else
           name="{{ $name }}"
           value="{{ $value }}"
           @endif
           type="{{ $type }}"/>

    @if($hasErrorAndShow($name))
        <x-form-error :name="$name"/>
    @endif
</div>
