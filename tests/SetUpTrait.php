<?php

namespace OnePilot\ClientBundle\Tests;

if (version_compare(phpversion(), '7.1', '<')) {
    trait SetUpTrait
    {
        protected function setUp()
        {
            $this->internalSetUp();
        }
    }
} else {
    trait SetUpTrait
    {
        protected function setUp(): void
        {
            $this->internalSetUp();
        }
    }
}
