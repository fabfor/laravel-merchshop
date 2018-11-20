<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinWord implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      if(sizeof(explode(' ',$value)) < 5){
        return false;
      }
      else
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Non ci sono abbastanza parole';
    }
}
