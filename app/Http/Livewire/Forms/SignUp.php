<?php

namespace App\Http\Livewire\Forms;

use App\Models\Role;
use Livewire\Component;
use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class SignUp extends Component
{

    public $roles = [];
    public string $name = '';
    public string $last_name = '';
    public string $email = '';
    public string $password = '';
    public int $role_id = 0;
    public int $code = -2; // 1 = error, 0 = success,  -1 = email already exists, -2 = no action

    public function mount(){
        $this->roles = Role::all();
    }

    public function submit(){
        $userCheck = User::where('email', $this->email)->first();

        if($userCheck){
            $this->code = -1;
        } else {
            $user = User::create([
                'name' => $this->name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'role_id' => $this->role_id,
            ]);
            if(!$user){
                $this->code = 1;
            } else {
                $this->code = 0;
                redirect()->route('signin');
            }
        }

    }

    public function render()
    {
        return view('livewire.forms.sign-up');
    }
}
