<?php
namespace Interfaces;

interface IPeople{
    /*
     * проверка живой ли
     */
    public function IsLive();

    public function getName();
    /*
     * понижение хп при ударе
     */
    public function downHp($value);
}