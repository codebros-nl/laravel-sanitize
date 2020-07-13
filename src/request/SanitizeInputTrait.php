<?php

namespace CodeBros\Request;

use Rees\Sanitizer\Sanitizer;

/**
 * Trait SanitizeInputTrait
 *
 * @package CodeBros\Request
 */
trait SanitizeInputTrait
{
    /**
     * Sanitize request data before validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->sanitize($this->sanitizers());
    }

    /**
     * Sanitize request data after validation will pass.
     *
     * @return void
     */
    protected function sanitizeAfterValidationPass(): void
    {
        $this->sanitize($this->afterSanitizers());
    }

    /**
     * Sanitize input data.
     *
     * @param array $sanitizers
     *
     * @return void
     */
    protected function sanitize(array $sanitizers): void
    {
        $data = $this->all();
        $inputs = (new Sanitizer)->sanitize($sanitizers, $data);
        $this->replace($inputs);
    }

    /**
     * Return the sanitizers to be applied to the data.
     *
     * @return array
     */
    protected function sanitizers(): array
    {
        if (property_exists($this, 'sanitizers')) {
            return $this->sanitizers;
        }

        return [];
    }

    /**
     * Return the sanitizers to be applied to the data after validation will pass.
     *
     * @return array
     */
    protected function afterSanitizers(): array
    {
        if (property_exists($this, 'afterSanitizers')) {
            return $this->afterSanitizers;
        }

        return [];
    }
}
