@extends('layouts.app')

@section('content')

@push('styles')
    @livewireStyles
@endpush
    
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 row m-0 p-0">
                @auth
                    @if (auth()->user()->role === 'author')
                        <livewire:article-form-card />
                    @endif
                @endauth

                @forelse ($articles as $article)
                    <livewire:article-card :article="$article" :wire:key="$article->id">
                @empty
                    
                @endforelse
            </div>
            {{-- <div class="col-sm-12 text-center">
                <img
                    src="{{ asset('images/page-img/page-load-loader.gif') }}"
                    alt="loader"
                    style="height: 100px"
                />
            </div> --}}
        </div>
    </div>
</div>

@endsection

@push('scripts')
    @livewireScripts
@endpush