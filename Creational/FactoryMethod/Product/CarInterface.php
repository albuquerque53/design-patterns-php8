<?php

interface CarInterface
{
    public function start(string $key);
    public function accelerate(): string;
}