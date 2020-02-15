@if(Session::has('flag_message_suucess'))
<div class="alert alert-sm alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >X</button>
    <strong>{{ session('flag_message_suucess') }}</strong>
</div>
@endif