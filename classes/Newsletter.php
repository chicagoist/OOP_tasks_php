<?php

namespace test;

require_once 'classes/UserRepository.php';

use test\UserRepository;

class Newsletter extends UserRepository
{
    public $newsletter_class;


    public function __construct()
    {
    }



    public function send(): void
    {
        $this->newsletter_class = new UserRepository();


        // foreach ($this->newsletter_class->getUsers() as $key => $value) {


        //     echo '$value = ';
        //     echo "<pre>";
        //     print_r($value);
        //     echo "</pre>";
        //     printf("\n");
        // }


        foreach ($this->newsletter_class->getUsers() as $key => $value) {

            if (
                !empty($value['device_id']) && $value['device_id'] != "..." &&
                !empty($value['name']) && $value['name'] != "..."
            ) {


                print_r("Push notification has been sent to user {$value['name']} with device_id {$value['device_id']}");
                echo "<br>";
            }
        }

        foreach ($this->newsletter_class->getUsers() as $key => $value) {

            if (
                !empty($value['email']) && $value['email'] != "..." &&
                !empty($value['name']) && $value['name'] != "..."
            ) {

                print_r("Email {$value['email']} has been sent to user {$value['name']}");
                echo "<br>";
            }
        }

        echo "<br>";
    }
}