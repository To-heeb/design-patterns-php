<?php


namespace Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod;

interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;

    public function deletePost($postId): void;
}
