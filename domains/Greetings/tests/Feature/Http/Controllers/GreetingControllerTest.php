<?php

it('has http/controllers/greetingcontroller page', function () {
    $response = $this->get('/http/controllers/greetingcontroller');

    $response->assertStatus(200);
});
