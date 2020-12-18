<?php

class Curious implements \SplObserver
{
    public function __construct(public string $name)
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
        echo "\n\nSUBSCRIBER: Let me take a look...";
        print_r($this->latestNews);
    }
}
