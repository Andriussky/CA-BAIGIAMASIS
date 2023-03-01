<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PersonalCode implements Rule
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
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!preg_match('/^\d{11}$/', $value)) {
            return false;
        }

        return preg_match('/^[3-6]\d{10}$/', $value) === 1;
    }
//  toliau nezinau kaip parasyt bet tikriausiai galimetu 3-6 if pakeist i toki kuris skaiciuoja
//  pagal amziu  if 1st number <=1 return false nes tai butu zmogus is 19a
// gal dar imano paziuret ar data validi if 5th number>= 3 return false nes tai butu 13 menuo
// panasiai galima padaryti su diena, bet tada reiketu kazkaip patikrinti abu skaicius
//


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Asmens kodas turi turet 11 skaitmenu ir prasidet skaiciais 3-6.';
    }
}
