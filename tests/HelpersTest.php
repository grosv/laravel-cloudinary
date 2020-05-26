<?php


namespace Tests;


class HelpersTest extends TestCase
{
    /** @test */
    public function it_can_load_helpers()
    {
        $this->assertIsString(cloudinary('happy.jpg', 'thumbnail'));
    }
}