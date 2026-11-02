<?php

namespace Tests\Feature;

use Tests\TestCase;

class PipelineFailureTest extends TestCase
{
    public function test_pipeline_detects_a_failing_test(): void
    {
        $this->assertTrue(false);
    }
}