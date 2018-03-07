@extends('home.layouts.layout')

@section('content')
@include('home.public.menu')
<div class="i_bg bg_color">
	<div class="i_ban_bg">
@include('home.public.banner')

@include('home.public.newslist')

@include('home.public.wst_ads')

@include('home.public.activity')

@include('home.public.goods')
@endsection