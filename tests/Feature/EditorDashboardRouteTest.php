<?php

namespace Tests\Feature;

use Tests\TestCase;

class EditorDashboardRouteTest extends TestCase
{
    public function test_dashboard_route_is_accessible(): void
    {
        $this->get('/editor/dashboard')->assertStatus(200);
        $this->get('/Editor/dashboard')->assertStatus(200);
    }
}
