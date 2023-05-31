<?php

it('has categories page', function () {
    $response = $this->get('/categories');

    $response->assertStatus(200);
});
