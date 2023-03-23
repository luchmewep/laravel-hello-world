<?php

it('has models/blog page', function () {
    $response = $this->get('/models/blog');

    $response->assertStatus(200);
});
