<?php

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase {

    /**
     * @test
     */
    
    public function empty_collection_returns_no_items() {

        $collection = new App\Support\Collection;

        $this->assertEmpty($collection->get());
    }

}
