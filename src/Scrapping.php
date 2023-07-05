<?php

namespace Louis25\Scrappingrenduiim;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelectorConverter;

class Scrapping {
    /**
     * @return array<string>
     */
    public function getMangaList(): array {
        $html = file_get_contents('https://mangatx.com/manga/');

        if ($html !== false) {
            $crawler = new Crawler();
            $crawler->addHtmlContent($html);
            
            $mangaTitles = [];

            $crawler->filter('div.page-item-detail.manga div.item-thumb.hover-details.c-image-hover a')->each(function (Crawler $node) use (&$mangaTitles) {
                $title = $node->attr('title');

                if ($title !== null) {
                    $mangaTitles[] = $title;
                }
            });
        } else {
            $mangaTitles = [];
        }

        return $mangaTitles;
    }
}