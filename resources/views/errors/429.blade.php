@extends('errors::layout')

@section('code', '429')
@section('title', __('Too Many Requests'))
@section('message_title', __('Oops… You are here quite often'))
@section('message_subtitle', __('We are sorry but you are making too many requests to our servers'))
