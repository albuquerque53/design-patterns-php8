<?php

class InterestingDeveloper implements \SplObserver
{
    protected $latestNews;

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
        echo "\n\nSUBSCRIBER [{$this->name}]: Let me take a look...\n";
        print_r($this->latestNews);
    }
}