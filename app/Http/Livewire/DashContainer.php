<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
// use Livewire\Response;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Exceptions\HttpResponseException;

use function PHPUnit\Framework\throwException;

class DashContainer extends Component
{
    public string $name_component = 'components.content.home';
    public bool $checked = true;

    public function setName(string $name_component){

        $this->name_component = 'components.content.' . $name_component;

        $this->checked = view()->exists($this->name_component);

        if(!($this->checked)){
            redirect('/notFound', 404);
        }

    }

    public function render()
    {
        return view('livewire.dash-container');
    }
}
