<?php
namespace Interfaces;

interface IBattle {
    /*
     * полуить массив людей
     */
    public function listPeople(IPeople $people);
}