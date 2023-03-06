<?php

use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase{
    public function testProductsCanBeSet(){
        //setup
        $mockRepo = $this->createMock(\App\ProductRepository::class);

        $inventory = new \App\Inventory($mockRepo);
        

        $mockProductsArray = [
            ['id' => 1, 'name' => 'Acme Radio Knobs'],
            ['id' => 2, 'name' => 'Apple iPhone'],
        ];

        $mockRepo->method('fetchProducts')->willReturn($mockProductsArray);

        $inventory->setProducts();

        $this->assertEquals('Acme Radio Knobs', $inventory->getProducts()[0]['name']);
        $this->assertEquals('Apple iPhone', $inventory->getProducts()[1]['name']);
    }
}