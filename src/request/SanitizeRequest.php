<?php

namespace CodeBros\Request;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SanitizeRequest
 *
 * @package CodeBros\Request
 */
class SanitizeRequest extends FormRequest
{
    use SanitizeInputTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        if (property_exists($this, 'authorize')) {
            return $this->authorize;
        }

        return false;
    }

    /**
     * Return list of validation rules.
     *
     * @return array
     */
    public function rules(): array
    {
        if (property_exists($this, 'rules')) {
            return $this->rules;
        }

        return [];
    }
}
