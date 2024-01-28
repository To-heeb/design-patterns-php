<?php

declare(strict_types=1);

require_once '../../../../vendor/autoload.php';


use Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod\SocialNetworkPoster;
use Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod\FacebookPoster;
use Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod\LinkedInPoster;
use Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod\TwitterPoster;



function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
$facebookPoster = new FacebookPoster("john_smith", "******");
clientCode($facebookPoster);
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));

echo "Testing ConcreteCreator3:\n";
clientCode(new TwitterPoster("john_smith@example.com", "******"));
