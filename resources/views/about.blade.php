@extends('layouts.master')

@push('meta')
<meta property="og:title" content="About {{ $meta['title'] ?? config('services.meta.site_name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:description"
    content="A little bit about {{ $meta['description'] ?? config('services.meta.mantra') }}" />
@endpush

@section('body')

<h1>About Me</h1>

<img src="{{ asset('/img/logo.svg')}}" alt="About image"
    class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

<p class="mb-6">Hallo, nama saya Ahmad Naufal Hilmy</p>

<p class="mb-6">
    Website ini merupakan wadah untuk saya bercerita mengenai kehidupan dan pengalaman yang saya pelajari. Hal yang
    berada pada web ini merupakan opini dari saya pribadi,
    dimohon untuk tidak mengutip atau menjadikan landasan apapun.
</p>

<p class="mb-6">
    Apabila kamu merasa tulisan disini bermanfaat, silahkan untuk menyebarluaskan tulisan tersebut kepada orang lain.
</p>

<p class="mb-6">
    Keep writing keep inspiring! Sharing is important, so dont be afraid to share what you have!
</p>

@endsection

@section('newsletter')
<section role="main" class="flex-auto w-full container max-w-4xl mx-auto px-6">
    {{-- @include('components.newsletter-signup') --}}
</section>
@endsection