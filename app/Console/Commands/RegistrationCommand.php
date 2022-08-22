<?php

namespace App\Console\Commands;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Validation\Rules;

class RegistrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:register';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a user securely';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Enter the user\'s name');
        $email = $this->ask('Enter user\'s email ID');
        $phone = $this->ask('Enter user\'s phone number');
        $role = $this->choice('Enter the role for user', [
            Role::ADMIN->value, Role::INSTITUTION->value, Role::VOLUNTEER->value
        ]);
        $password = $this->secret('Enter user\'s password');

        $validator = \Validator::make(compact('name', 'email', 'phone', 'role', 'password'), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'phone' => ['required', 'integer']
        ]);

        if ($validator->fails()) {
            $this->displayErrors($validator->errors()->all());
            return 1;
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'role' => Role::from($role),
            'password' => \Hash::make($password)
        ]);

        if ($user->save()) {
            $this->info('Registered user successfully');
            return 0;
        }

        $this->error('Could not register user');
        return 1;
    }

    public function displayErrors($errors)
    {
        foreach ($errors as $error) {
            $this->error($error);
        }
    }
}
