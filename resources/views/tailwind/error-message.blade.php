@if(session('success'))
    <x-form-alerts title="Notification" message="{{session('error')}}" type="error"></x-form-alerts>
@endif
