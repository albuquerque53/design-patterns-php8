<?php

/**
 * This class is responsible to 
 * manage the user, 
 * 
 * THIS IS THE User Facade
 */

require_once __DIR__ . '/../UserPictures.php';
require_once __DIR__ . '/../UserVideos.php';
require_once __DIR__ . '/../UserDocuments.php';
require_once __DIR__ . '/../UserMessages.php';

class User
{
    private $userPictures;
    private $userVideos;
    private $userDocuments;
    private $userMessages;
    
    public function __construct()
    {
        /** Must implement all the user
         *  subclasses to provide a interface 
         * to access this same classes 
         */
        $this->userPictures = new UserPictures;
        $this->userVideos = new UserVideos;
        $this->userDocuments = new UserDocuments;
        $this->userMessages = new UserMessages;
    }

    public function deleteUser()
    {
        /**
         * A example of a facade method,
         * this method is using all user classes
         * for one purpose.
         */
        $this->userPictures->deleteAll();
        $this->userVideos->deleteAll();
        $this->userDocuments->deleteAll();
        $this->userMessages->deleteAll();
    }
}