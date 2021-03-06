@extends('layouts.backend')
	@section('content')
	@include('orders.top_menu')
		<!--begin::Portlet-->
	<div class="m-content"> 	
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							New Load 
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
				{{ Form::model($orderBasicInfo, ['route'=>['order.updateBasicinfo', request()->id],'class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed'])  }}
					@include('orders.basicinfo_form')
				{{ Form::close()  }}
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
@endsection