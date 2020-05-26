<?php


namespace Tests;


class NotificationTest extends TestCase
{
    /** @test */
    public function it_can_find_the_notification_route()
    {
        $this->get(route('cloudinary_notify'))->assertSuccessful();
    }
}