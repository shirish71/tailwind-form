@props([
'title'=>'',
'message'=>'',
'type'=>'success',
])
<div class="alert alert_{{$type}} mt-5">
    <strong class="uppercase">{{$title}}</strong>
    {{$message}}
    <button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
</div>
