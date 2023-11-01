<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public $checkbox = true;

    public $input = 'John Doe';

    public $selected = '1';

    public $multipleSelected = ["1", "2"];

    public $textarea = "Some text";

    public $radio = "1";

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function toggleToggle()
    {
        $this->toggle = !$this->toggle;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
