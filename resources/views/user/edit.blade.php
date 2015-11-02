@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-md-4">
        @include('user.elements.info_tab')
    </div>
    <div class="col-md-8">
        @include('user.elements.skills_tab')
    </div>

</div>

@stop