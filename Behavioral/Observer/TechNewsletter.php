<?php

//use \SplObjectStorage;

class TechNewsletter implements SplSubject
{
    public function __construct(
        public array $state = [],
        private ?SplObjectStorage $observers = null
    )
    {
        $this->observers = new SplObjectStorage;
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
        echo "\nPUBLISHER: {$observer->name} subscribed in TechNewsletter!";
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "\nPUBLISHER: {$observer->name} don't want to receive more news :/";
    }

    public function notify(): void
    {
        echo "\nPUBLISER: Sending the latest news to developers...\n";
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getNews(): void
    {
        echo "\nPUBLISHER: Getting news from API...";
        $this->state = [
            ['title' => 'Github will remove the passwords support'],
            ['title' => '51% of Docker images has critical vulnerabilities'],
            ['title' => 'RDP Attacks creases 242% around the world!']
        ];
        $this->notify();
    }
}