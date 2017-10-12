@extends('backend.master')
@section('title', 'Thống kê người dùng | Kaober.com')
@section('titlePage', 'Thống kê người dùng')

@section('content')

<div class="row">
  <div class="col-xs-6 col-md-3 text-center">
    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

    <div class="knob-label">New Visitors</div>
  </div>
  <!-- ./col -->
  <div class="col-xs-6 col-md-3 text-center">
    <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

    <div class="knob-label">Bounce Rate</div>
  </div>
  <!-- ./col -->
  <div class="col-xs-6 col-md-3 text-center">
    <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90" data-height="90" data-fgColor="#00a65a">

    <div class="knob-label">Server Load</div>
  </div>
  <!-- ./col -->
  <div class="col-xs-6 col-md-3 text-center">
    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

    <div class="knob-label">Disk Space</div>
  </div>
  <!-- ./col -->
</div>

@endsection