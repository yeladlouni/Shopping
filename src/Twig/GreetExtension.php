<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use App\GreetingGenerator;
use Twig\TwigFilter;

class GreetExtension extends AbstractExtension {
    private $greetingGenerator;

    public function __construct(GreetingGenerator $greetingGenerator) {
        $this->greetingGenerator = $greetingGenerator;
    }

    public function getFilters() {
        return [
            new TwigFilter("table", [$this, "getTable"])
        ];
    }

    public function getTable() {
        $htmlTable = "<table>";
        $products = [['Désignation', 'Prix', 'Catégorie'], ['prd1', 230, 'IT'], ['prd2', 500, 'meube']];
        for($i = 0; $i < count($products); $i++) {
            for($j = 0; $j < $products[$i]; $j++) {
                $htmlTable = $htmlTable."";
            }
        }
        $htmlTable = "</table>";
        //$greeting = $this->greetingGenerator->getGenerator();
        //$htmlTable = "<table><tr><th>Nom</th></tr><tr><td>Test</td></tr></table>";
        return $htmlTable;
    }

    
}