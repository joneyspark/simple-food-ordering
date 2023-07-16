@extends('layouts.master')
@section('pagetitle', 'Dashboard')
@section('content')


@if (auth()->user()->type == 'admin')
    @include('components.super-admin')
@else
@include('components.customer-dashboard')
@endif
 
@endsection
