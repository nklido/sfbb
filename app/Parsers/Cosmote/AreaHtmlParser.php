<?php

namespace App\Parsers\Cosmote;

use App\Parsers\Parser;

class AreaHtmlParser extends Parser
{
    public function parse($html): array
    {
        $crawler = $this->initCrawler($html);
        $areas = [];
        $crawler->filter('li > a')->each(function ($node, $index) use (&$areas) {
            if ($index > 0) {
                $areas[] = $node->text();
            }
        });
        return $areas;
    }
}
