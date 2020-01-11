<?php

namespace App;

use Psr\Log\LoggerInterface;

class GreetingGenerator {
    private $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }
    public function getGenerator() {
        $greetings = ['Helloo', 'السلام عليكم', 'Salut'];
        $this->logger->warning(join(" ", $greetings));
        return $greetings[array_rand($greetings)];
    }
}
