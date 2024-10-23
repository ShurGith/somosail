<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{

    public function __construct(
        public string $metaTitle = "Somos Dev" ,
        public string $metaDescription = "Lugar de encuentro para desarrolladores Web",
    ){}
    public function render(): View
    {
        return view('layouts.guest');
    }
}
