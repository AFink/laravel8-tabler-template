@extends('errors::layout')

@section('code', '401')
@section('title', __('Unauthorized'))
@section('message_title', __('Oops… You are not allowed to go here'))
@section('message_subtitle', __('We are sorry but the page you are looking for requires authentication'))
