<?php

// class tanımlama
class HomeController
{
    private $number = 100; // sadece bu classta kullanılır
    protected $string = ''; // sadece ben ve kalıtım yoluyla ilişkili olduklarım kullanır
    public $array = []; // her yerde kullanılabilir
    // method tanımlama
    public function index(): void
    {
        $title = 'Ana Sayfam';


        require_once APP_ROOT . '/view/start.php';
    }
}
