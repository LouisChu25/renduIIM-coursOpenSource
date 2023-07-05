<?php

use PHPUnit\Framework\TestCase;
use Louis25\Scrappingrenduiim\Scrapping;

class ScrappingTest extends TestCase
{
    public function testGetMangaList()
    {
        $scrapping = new Scrapping();
        $mangaList = $scrapping->getMangaList();

        $expectedMangaCount = 12;

        $this->assertCount($expectedMangaCount, $mangaList);
    }
}
?>