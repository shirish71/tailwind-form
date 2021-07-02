@if(session('success'))
    <x-form-alerts title="Notification" message="{{session('success')}}" type="success"></x-form-alerts>
@endif
