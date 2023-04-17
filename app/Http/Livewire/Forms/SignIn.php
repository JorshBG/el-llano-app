<?php

namespace App\Http\Livewire\Forms;

use App\Models\Category;
use App\Models\Presentation;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Livewire\Component;

class SignIn extends Component
{
    public string $email = '';
    public string $password = '';
    public int $valid = 4;
    public bool $process = false;

    public function save(){
        $this->process = true;
        $user = User::where('email', $this->email)->first();
        if($user){
            if($user->password === $this->password){
                $this->valid = 1;
                redirect()->route('dashboard');
            } else {
                $this->valid = 2;
            }
        } else {
            $this->valid = 2;
        }
        $this->process = false;
    }

    public function render()
    {
        return view('livewire.forms.sign-in');
    }
}
