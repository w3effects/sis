@extends('master')

@section('content')
{{ HTML::style('css/datepicker.css') }}
<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class=""></i>
                <h4>Create New Semister</h4>
            </div>
        </div>
        @include('partials/errors')
        <div class="panel-body">
            {{ Form::open(['route' => 'semisters.store']) }}
            <div class="form-group">

                {{ Form::label('name','Semister',['class'=>'control-label']) }}
                {{ Form::selectRange('name', 1, 8,null,['class'=>'form-control']); }}
            </div>

            {{ FormField::details(['type' => 'textarea']) }}
            <div class="form-group">
                {{ Form::label('Semister Dates') }}
                    <div class="row">
                        <div class="col-md-2">
                            {{ FormField::startDate(['id' => 'start_date','name'=>'start_date','size'=>5,'readonly','data-date-format'=>'dd-mm-yyyy'])}}
                        </div>
                        <div class="col-md-2">
                            {{ FormField::endDate(['id' => 'end_date','name'=>'end_date','size'=>5,'readonly','data-date-format'=>'dd-mm-yyyy'])}}
                        </div>
                    </div>
                {{ Form::hidden('departments_id',$department-> id) }}

            {{ Form::submit('Add Semister',['class' => 'btn btn-primary']) }}

        </div><!--/panel content-->
    </div><!--/panel-->
</div>

@stop
@section('extra-script')
{{ HTML::script('js/datepicker.js') }}
<script>
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#start_date').datepicker({
        onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#end_date')[0].focus();
    }).data('datepicker');
    var checkout = $('#end_date').datepicker({
        onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        checkout.hide();
    }).data('datepicker');
</script>
@stop
