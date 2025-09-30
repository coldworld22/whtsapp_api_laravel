@extends('layouts.app', ['class' => 'main-content-has-bg'])

@section('content')
@include('layouts.headers.guest')
@php
    $policyHtml = trim((string) getAppSettings('privacy_policy'));
@endphp
<div class="container lw-guest-page-container-block pb-2">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="card shadow border-0">
                <h1 class="card-header text-center">
                    {{ __tr('Privacy Policy') }}
                </h1>
                <div class="card-body px-lg-5 py-lg-5 p lw-ws-pre-line">
                    @if($policyHtml !== '')
                        {!! $policyHtml !!}
                    @else
                        <p>{{ __tr(':appName is committed to protecting your privacy. This page explains what information we collect, how we use it, and the choices you have about your personal data.', ['appName' => config('app.name')]) }}</p>
                        <p>{{ __tr('We only collect the information that is necessary to deliver and improve our services. This may include contact details, account credentials, and usage data that helps us keep the platform secure and reliable.') }}</p>
                        <p>{{ __tr('Any information you share with us is handled responsibly. We never sell your personal data, and we only share it with trusted partners when it is essential to operate or comply with the law.') }}</p>
                        <p>{{ __tr('If you have questions about this policy or would like to exercise your privacy rights, please contact us through the support options provided in the application.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
