<?php
declare(strict_types = 1);

namespace Tests\Meetup\Entity\Util;

use Meetup\Entity\Description;
use Meetup\Entity\Meetup;
use Meetup\Entity\Name;

class MeetupFactory
{
    public static function pastMeetup()
    {
        return Meetup::schedule(
            Name::fromString('Name'),
            Description::fromString('Description'),
            new \DateTimeImmutable('-5 days')
        );
    }

    public static function upcomingMeetup()
    {
        return Meetup::schedule(
            Name::fromString('Name'),
            Description::fromString('Description'),
            new \DateTimeImmutable('+5 days')
        );
    }

    public static function someMeetup()
    {
        return self::upcomingMeetup();
    }
}
