<?php

class Curious implements \SplObserver
{
    /** 
     * PHP 8 Feature: 
     * Constructor Property Promotion 
     * RFC: https://wiki.php.net/rfc/constructor_promotion
     */
    public function __construct(
        public string $name,
        protected ?array $latestNews = []
    )
    {
        //
    }
    
    public function update(\SplSubject $techNews): void
    {
        echo "\nSUBSCRIBER [{$this->name}]: Uhaa, I just received my tech news!";
        $this->latestNews = $techNews->state;
    }

    public function readNews():void
    {
        echo "\n\nSUBSCRIBER: Let me take a look...\n";
        print_r($this->latestNews);
    }
}
