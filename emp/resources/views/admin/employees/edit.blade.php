@extends('admin.layouts.app')
@section('content')
	<br>
	<div class="row">
		<div class="well col-md-8 col-md-offset-2">
		{!! Form::model($user, [
		'method' => 'PATCH',
		'route' => ['employees.update', $user->id],
		'enctype'=>'multipart/form-data'
		]) !!}
			{!! Form::label('fname', 'First Name:') !!}
			{!! Form::text('fname', $user->employee->fname, ['class'=>'form-control']) !!}
			<br>
			{!! Form::label('lname', 'Last Name:') !!}
			{!! Form::text('lname', $user->employee->lname, ['class'=>'form-control']) !!}
			<br>
			{!! Form::label('job', 'Job Desc:') !!}
			{!! Form::textarea('job', $user->employee->job, ['class'=>'form-control','style'=>'resize:none;']) !!}
			<br>
			<img src="{{Storage::url($user->employee->image)}}" alt="" class="img-responsive" style="width:15%;height:15%;border-radius:7.5%"	>
       		 <br>
				{!! Form::file('image', null) !!}
				<br>
				<input type="hidden" name="location" value="{{$user->employee->location}}" id="mlocation">
				<center>
					<div id="map" style="width:250px;height:250px;" ></div>
					<br>
			{!! Form::submit('Submit', ['class'=>'btn btn-warning']) !!}
			</center>
			
		{!! Form::close() !!}
		</div>
	</div>
@endsection