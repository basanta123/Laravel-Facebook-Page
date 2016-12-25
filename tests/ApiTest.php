<?php


class ApiTest extends TestCase
{
    /**
     * testing the facebook page data.
     *
     * @return void
     */
    public function testPage()
    {
        $response = $this->call('GET', '/api/v1/page');

        $this->assertEquals(200, $response->status());
    }

    /**
     * testing the posts made by page.
     *
     * @return void
     */
    public function testPosts()
    {
        $response = $this->call('GET', '/api/v1/posts');

        $this->assertEquals(200, $response->status());
    }
}
