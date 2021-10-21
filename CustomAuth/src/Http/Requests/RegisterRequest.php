<?php

namespace DevinGray\CustomAuth\Http\Requests;

use DevinGray\CustomAuth\Classes\CustomRegister;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return CustomRegister::validationRules();
    }
}
