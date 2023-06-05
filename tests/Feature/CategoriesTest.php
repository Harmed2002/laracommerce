<?php

use Inertia\Testing\AssertableInertia as Assert;

it('return a list of categories', function () {
    $this->get('/categories')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('Categories/Index')
            ->has('categories', 2, fn (Assert $page) => $page
                ->has('id')
                ->has('name')
                ->has('slug')
                ->has('description')
                ->has('created_at')
                ->has('updated_at')
            )
        );
});
