<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DashContainer extends Component
{
    public string $name_component = 'components.content.home';
    public bool $checked = true;
    public string $name = '';
    public $data = null;

    public function setName(string $name_component)
    {

        $this->name_component = 'components.content.' . $name_component;
        // separate the name_component by dots
        $router = explode('.', $name_component);
        // get the last child of the array
        $prefix = end($router);


        $this->checked = view()->exists($this->name_component);

        if (!($this->checked)) {
            redirect('/notFound', 404);
        }

        $response = Http::get(env('APP_URL') .  $prefix . '/get');
        if ($response->ok()) {
            $this->data = $response->json();
        } else {
            $this->data = null;
        }
    }

    public function render()
    {
        $this->name = session('name');
        return view('livewire.dash-container');
    }
}
