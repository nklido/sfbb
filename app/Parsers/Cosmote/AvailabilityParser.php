<?php

namespace App\Parsers\Cosmote;

class AvailabilityParser extends \App\Parsers\Parser
{
    public function parse($html): array
    {
        $results = [];
        $crawler = $this->initCrawler($html);
        $crawler->filter('.available-programm-container.res')->each(function ($node, $index) use (&$results) {
            $results[] = $node->text();
        });

        return $results;
    }
}
