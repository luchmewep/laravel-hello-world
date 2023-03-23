<?php

it('has models/greeting page', function () {
    $response = $this->get('/models/greeting');

    $response->assertStatus(200);
});
