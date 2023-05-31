<?php

it('has products page', function () {
    $response = $this->get('/products');

    $response->assertStatus(200);
});
