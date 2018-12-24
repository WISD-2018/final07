@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="content-head">
	@if($hw->id > 10)
	[補交]
	@endif
	@yield('title')評語
	<div class="content-head-btn">
		<a href="{{ url('home') }}" class="std-button-primary">返回</a>
	</div>
</div>
@if (session('status'))
    <div class="alert-success" role="alert">{{ session('status') }}</div>
@endif
@if($hw->id < count($hws)+1)
		<td><div style="color: #34495e;">成績 :<br /><font size="5">{!! $hws[$hw->id] !!} 分</font></td>
		@else
		<td>0分</td>
		@endif
		
	<div style="color: #34495e;">評語 : <br /><font size="5">{!! $hwc[$hw->id] !!}</font></div>

@endsection
