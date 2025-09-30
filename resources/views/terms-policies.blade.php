@extends('layouts.app', ['class' => 'main-content-has-bg'])
@section('content')
@include('layouts.headers.guest')
<div class="container lw-guest-page-container-block pb-2 lw-terms-and-conditions-page">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="card shadow border-0">
                <h1 class="card-header text-center">
                    {{  str_replace('_',' ', \Illuminate\Support\Str::title($validItems[$contentName])) }}
                </h1>
                @php
                    $rawContent = getAppSettings($contentName);
                    $content = is_string($rawContent) ? trim($rawContent) : '';
                @endphp
                <div class="card-body px-lg-5 py-lg-5 p lw-ws-pre-line">
                    @if($content !== '')
                        {!! $rawContent !!}
                    @elseif($contentName === 'privacy_policy')
                        @include('policies.privacy-policy-default', [
                            'contentName' => $contentName,
                            'contentTitle' => $validItems[$contentName] ?? null,
                        ])
                    @else
                        <p class="text-muted mb-0">{{ __('This content will be available soon.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
