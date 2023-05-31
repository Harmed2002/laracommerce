<?php

namespace Tests;

use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(TestCase::class, RefreshDatabase::class)->in('Feature');
