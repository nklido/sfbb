<?php

namespace App\Parsers;

use DOMDocument;
use Symfony\Component\DomCrawler\Crawler;

class Parser
{
    public function __construct()
    {
    }

    public function initCrawler($html): Crawler
    {
        $doc = new DOMDocument();
        $doc->loadHTML($html ?: '<p></p>');
        $crawler = new Crawler();
        $crawler->addHTMLContent($html, 'UTF-8');
        return $crawler;
    }
}
