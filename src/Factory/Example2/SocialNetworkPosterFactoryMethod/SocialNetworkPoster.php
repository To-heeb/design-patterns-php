<?php


namespace Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }


    public function deletePost($postId): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->deletePost($postId);
        $network->logOut();
    }
}
