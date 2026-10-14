@extends('layouts.app')
@section('title', __('messages.contact_title'))
@section('meta_description', __('messages.contact_meta_description'))
@section('canonical', route('contact'))
@section('content')
    <main class="main" id="main-content">
        @include('sections.partials.contact', ['isH1' => true])
    </main>
@endsection