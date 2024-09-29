<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
{
    Validator::make($input, [
        'name' => 'required|string|max:255',
        'apellido' => 'required|string|max:50', // Asegúrate de que este campo esté presente
        'email' => 'required|string|email|max:255|unique:users',
        'telefono' => 'required|string|max:20',
        'direccion' => 'required|string|max:255',
        'password' => $this->passwordRules(),
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    ])->validate();

    return User::create([
        'name' => $input['name'],
        'apellido' => $input['apellido'], // Asegúrate de que este campo tenga un valor
        'email' => $input['email'],
        'telefono' => $input['telefono'],
        'direccion' => $input['direccion'],
        'tipo_usuario' => 'cliente', // Asignando el valor por defecto
        'verificado' => 0, // Asignando el valor por defecto
        'password' => Hash::make($input['password']),
    ]);
}

}
