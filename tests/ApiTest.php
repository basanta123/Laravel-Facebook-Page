<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ApiTest extends TestCase
{
    /**
     * testing the facebook page data
     *
     * @return void
     */
    public function testPage()
    {
       
        $response = $this->call('GET', '/api/v1/page');

        $this->assertTrue($response->isOk());

    }

     


}
