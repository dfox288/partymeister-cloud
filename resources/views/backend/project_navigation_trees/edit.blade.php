@extends('motor-backend::layouts.backend')

@section('htmlheader_title')
    {{ trans('motor-backend::backend/global.home') }}
@endsection

@section('contentheader_title')
    {{ trans('backend/project_navigation_trees.edit') }}
    {!! link_to_route('backend.project_navigation_trees.index', trans('motor-backend::backend/global.back'), [], ['class' => 'pull-right btn btn-sm btn-danger']) !!}
@endsection

@section('main-content')
	@include('motor-backend::errors.list')
	@include('backend.project_navigation_trees.form')
@endsection