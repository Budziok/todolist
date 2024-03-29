<?php 

declare(strict_types=1);

namespace App;

class Request
{
    private array $get =[];
    private array $post =[];

    public function __construct(array $get, array $post)
    {
        $this->get = $get;
        $this->post = $post;
    }
    public function hasPost() : bool
    {
        return (!empty($this->post));
    }
    public function getParam(string $name, $default = null) // do pobierania danych z get
    {
        return $this->get[$name] ?? $default;
    }

    public function postParam(string $name, $default = null) // do pobierania danych z post
    {
        return $this->post[$name] ?? $default;
    }
}