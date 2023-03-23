<?php

it('has http/controllers/blogcontroller page', function () {
    $response = $this->get('/http/controllers/blogcontroller');

    $response->assertStatus(200);
});
