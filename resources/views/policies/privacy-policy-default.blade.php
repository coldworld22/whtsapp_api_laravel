@php
    $contentName = $contentName ?? 'privacy_policy';
    $contentTitle = $contentTitle ?? \Illuminate\Support\Str::title(str_replace('_', ' ', $contentName));
    $appName = $appName ?? getAppSettings('name');
    $supportEmail = $supportEmail ?? getAppSettings('support_email');
    $appUrl = $appUrl ?? getAppSettings('app_url');
    $businessAddress = $businessAddress ?? getAppSettings('business_address');

    $appName = $appName ?: (config('app.name') ?? 'Our Application');
    $supportEmail = $supportEmail ?: (config('mail.from.address') ?? 'support@example.com');
    $appUrl = $appUrl ?: config('app.url');
    $contactSuffix = $businessAddress ? ' or by mail at '.$businessAddress.'.' : '.';
@endphp

<p>
    {{ $appName }} ("we", "us", or "our") is committed to safeguarding the privacy of everyone who uses our
    services. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you
    access {{ $appName }}
    @if($appUrl)
        at <a href="{{ $appUrl }}" target="_blank" rel="noopener noreferrer">{{ $appUrl }}</a>
    @endif
    or otherwise interact with our products and support channels.
</p>

<h2>Information We Collect</h2>
<p>
    We collect information that you provide directly to us, such as account details, profile information, and
    communication preferences. We may also collect usage data, device information, and diagnostic logs to help us
    improve {{ $appName }} and maintain a secure experience.
</p>

<h2>How We Use Information</h2>
<p>
    We use the information we collect to operate and maintain {{ $appName }}, personalize the experience, communicate
    with you about updates and support, and fulfill our legal and contractual obligations. We may also analyze
    aggregated or anonymized data to enhance product performance and reliability.
</p>

<h2>Sharing and Disclosure</h2>
<p>
    We do not sell your personal information. We only share information with trusted partners when it is necessary to
    provide {{ $appName }}, comply with legal requirements, or protect the rights, property, or safety of our users
    and the public. Any third parties that process data on our behalf are obligated to protect your information in
    accordance with this Privacy Policy and applicable laws.
</p>

<h2>Data Retention</h2>
<p>
    We retain personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy
    and to comply with our legal obligations. When data is no longer required, we will delete or anonymize it in a secure
    manner.
</p>

<h2>Your Choices</h2>
<p>
    You may update your account details, communication preferences, and other personal information directly within
    {{ $appName }}. If you have any questions about how we handle your information or would like to exercise your data
    protection rights, please contact us at <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a>.
</p>

<h2>Contact Us</h2>
<p>
    If you have any questions or concerns about this Privacy Policy or our practices, you can reach us at
    <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a>{{ $contactSuffix }}
</p>

<p>
    We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated
    revision date. Your continued use of {{ $appName }} after any changes become effective constitutes your acceptance
    of the revised policy.
</p>
