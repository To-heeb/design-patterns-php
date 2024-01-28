<?php

declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod;

class TwitterPoster extends SocialNetworkPoster
{

    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new TwitterConnector($this->email, $this->password);
    }
}
