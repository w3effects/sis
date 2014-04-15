@if(Session::has('success_message'))
<div class="flash_msg fsuccess alert">
    <p> <i class="fa fa-bullhorn"></i> {{Session::get('success_message') }} </p>
</div>
@endif

@if(Session::has('error_message'))
<div class="flash_msg alert">
    <p> <i class="fa fa-bullhorn"></i> {{Session::get('error_message') }} </p>
</div>
@endif