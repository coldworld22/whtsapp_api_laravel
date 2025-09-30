<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPolicyTest extends TestCase
{
    /**
     * Ensure the privacy policy page is accessible without parameters.
     */
    public function test_privacy_policy_page_is_accessible(): void
    {
        config()->set('__settings.autoload_exceptions', []);
        config(['__flash_cached__.app_setting_all' => []]);

        $response = $this->get('/privacy-policy');

        $response->assertOk();
        $response->assertSee('Privacy Policy');
    }
}
