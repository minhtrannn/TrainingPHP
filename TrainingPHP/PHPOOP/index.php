<?php 

    // class User
    // {
        //Properties
    //     public $username;
    //     protected $email;
    //     public $role = 'member';
    //     public function __construct($username,$email)
    //     {
    //         $this->username = $username;
    //         $this->email = $email;
    //     }

    //     public function __destruct()
    //     {
    //         echo "Username $this->username has been removed" . '<br>';
    //     }

    //     public function __clone()
    //     {
    //         $this->username = $this->username . '(cloned) <br>';
    //     }

    //     public function addUser()
    //     {
    //         return "$this->username is added";
    //     }

    //     public function message()
    //     {
    //         return "$this->email send a message";
    //     }

    //     public function getEmail()
    //     {
    //         return $this->email;
    //     }

    //     public function setEmail($email)
    //     {
    //         if(strpos($email,'@') > -1)
    //         {
    //             $this->email = $email;
    //         }
    //     }

    //     public function getUsername()
    //     {
    //         return $this->username;
    //     }

    //     public function setUsername($username)
    //     {
    //         $this->username = $username;
    //     }
    // }

    // class UserAdmin extends User 
    // {
    //     public $level;
    //     public $role = 'admin';
    //     public function __construct($username,$email,$level)
    //     {
    //         $this->level = $level;
    //         parent::__construct($username,$email);
    //     }

    //     public function message()
    //     {
    //         return "$this->email, an admin send a message";
    //     }
    // }

    // $userOne = new User('minhtran','minhtran@gmail.com');
    // $userTwo = new User('thutrang','thutrang@gmail.com');
    // $userThree = new UserAdmin('admin','admin@gmail.com',5);
    // $userFour = clone($userOne);
    
    // echo $userFour->username;


    //get class name
    //echo get_class($userTwo);

    // echo $userOne->getUsername() . '<br>';
    // echo $userOne->setEmail('minhtrandeptrai@gmail.com');
    // echo $userOne->getEmail() . '<br>';
    // echo $userOne->email . '<br>';
    // echo $userOne->addUser() . '<br>';

    // $userTwo->username='thutrang';
    // $userTwo->email='thutrang@gmail.com';

    // echo $userTwo->getUsername() . '<br>';
    // echo $userTwo->setEmail('minhthu@gmail.com');
    // echo $userTwo->getEmail() . '<br>';
    // echo $userTwo->email . '<br>';
    // echo $userTwo->addUser() . '<br>';

    // echo $userThree->getUsername() . '<br>';
    // echo $userThree->getEmail() . '<br>';
    // echo $userThree->level . '<br>';

    // echo $userOne->role . '<br>';
    // echo $userOne->message() . '<br>';
    // echo $userThree->role . '<br>';
    // echo $userThree->message() . '<br>';

    class Weather
    {
        private static $tempCondition = ['cold','mild','warm'];

        public static function celsiusToFarenheit($c)
        {
            return $c * 9 / 5 + 32;
        }

        public static function determinTempCondition($f)
        {
            if($f<40)
            {
                return self::$tempCondition[0];
            } elseif($f<70)
            {
                return self::$tempCondition[1];
            }
            else 
            {
                return self::$tempCondition[2];
            }
        }
    }

    // print_r(Weather::$tempCondition);
    echo Weather::celsiusToFarenheit(20);
    echo Weather::determinTempCondition(70);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>