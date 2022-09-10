@extends('layouts.app')
@section('title', __('woocommerce::lang.api_settings'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('woocommerce::lang.api_settings')</h1>
</section>

<!-- Main content -->
<section class="content">
    {!! Form::open(['action' => '\Modules\Woocommerce\Http\Controllers\WoocommerceController@updateSettings', 'method' => 'post']) !!}
    <div class="row">
        <div class="col-xs-12">
           <!--  <pos-tab-container> -->
            <div class="col-xs-12 pos-tab-container">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pos-tab-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item text-center active">@lang('woocommerce::lang.instructions')</a>
                        <a href="#" class="list-group-item text-center">@lang('woocommerce::lang.api_settings')</a>
                        <a href="#" class="list-group-item text-center">@lang('woocommerce::lang.product_sync_settings')</a>
                        <a href="#" class="list-group-item text-center">@lang('woocommerce::lang.webhook_settings')</a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pos-tab">
                    @include('woocommerce::woocommerce.partials.api_instructions')
                    @include('woocommerce::woocommerce.partials.api_settings')
                    @include('woocommerce::woocommerce.partials.product_sync_settings')
                    @include('woocommerce::woocommerce.partials.webhook_settings')
                </div>
            </div>

            <div class="col-xs-12">
                <p class="help-block"><i>{!! __('woocommerce::lang.version_info', ['version' => $module_version]) !!}</i></p>
            </div>
            <!--  </pos-tab-container> -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group pull-right">
            {{Form::submit('update', ['class'=>"btn btn-danger"])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</section>
@stop
@section('javascript')
<script>
        $(document).ready(function(){
		$('#change_lang').change( function(){
		window.location = "{{'api-settings'}}?lang=" + $(this).val();
		});
	});
</script>
@endsection