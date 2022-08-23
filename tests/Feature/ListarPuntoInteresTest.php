<?php

namespace Tests\Feature;

use Tests\TestCase;

class ListarPuntoInteresTest extends TestCase
{
    public function test_getAll()
    {
        $response = $this->get('/api/PuntosInteres/farmacia');
        $response->assertStatus(200);
    }

    public function test_Pagination()
    {
        $response = $this->get('/api/PuntosInteres/farmacia');
        $response->assertJsonCount(10, "data");
        $response->assertJsonStructure(["next_page_url"]);
        $response->assertJsonStructure(["last_page_url"]);
        $response->assertJsonStructure(["current_page"]);
    }
}
