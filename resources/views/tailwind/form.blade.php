<form action="{{$action??'#'}}"
      method="{{ $spoofMethod ? 'POST' : $method }}"
      @if($file == 'true' || $files == 'true') enctype="multipart/form-data" @endif  {!! $attributes !!}>
    @unless(in_array($method, ['HEAD', 'GET', 'OPTIONS']))
        @csrf
    @endunless
    @if($spoofMethod)
        @method($method)
    @endif

    @if($errorMessage =='true')
        <x-form.error-message></x-form.error-message>
    @endif
    @if($successMessage =='true')
        <x-form.success-message></x-form.success-message>
    @endif
    <div class="my-3">
        {!! $slot !!}
    </div>
</form>
