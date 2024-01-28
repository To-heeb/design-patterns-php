<?php

namespace Toheeb\DesignPatternPhp\Factory\Example2\SocialNetworkPosterFactoryMethod;

class LinkedInConnector implements SocialNetworkConnector
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password on LinkedIn \n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user with email $this->email\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post {$content} in LinkedIn timeline.\n";
    }

    public function deletePost($postId): void
    {
        echo "Send HTTP API requests to delete post with id{$postId} in LinkedIn timeline.\n";
    }
}
