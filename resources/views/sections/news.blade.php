@extends('layouts.app')
@section('title', __('messages.news_title'))
@section('meta_description', __('messages.news_meta_description'))
@section('canonical', route('news'))
@section('content')
<main class="main">
    <!-- News Section -->
    <section id="news" class="news section">
        <div class="container section-title" data-aos="fade-up">
            <span>Our News<br></span>
            <h2>News</h2>
        </div>

    </section>
    <!-- /News Section -->
</main>
@endsection