<?php
/*
class shop_item
{
    public $name;
    public $price;
    public $quantity_on_stock;

    //Construction
    //Whenever an object is first created, it's __construct method is automatically called, if it exists.
    //In this function we can do any kind of setup that we want to do for a newly created object of this class.
    //public scope to make that variable/function available from anywhere, other classes and instances of the object.
    //private scope when you want your variable/function to be visible in its own class only.
    //protected scope when you want to make your variable/function visible in all classes that extend current class including the parent class.

/*
    public function __construct($item_id)
    {
        //database logic toload item data accordng to $item id
        //..
        $this ->name ="Red Shoes";
        $this ->price = 1200;
        $this ->quantity_on_stock = 5;

    }
}

$red_shoes = new shop_item(12345);

class document
{
    protected $page_title;
    protected $started_at=null;

    public function __construct($title)
    {
        $this ->page_title =$title;
        $this ->started_at =microtime(true);
    }

  */


class user
{
    public $id=null;
    public $username=null;
    public $name=null;
    public $password=null;
    public $number_of_posts=null;

//to your user class, add the __construct() method.
    public function __construct(&$next_user_id,$future_username)
    //Add a parameter $username to the __construct method of the user class.
    //Add a parameter $user_id to the __construct method of the blog_post class.
    {     // Inside the method:

        //import the global variable using the keyword global
        global $next_user_id;
        //set the id property of the object to it's value
        $this ->id = $next_user_id;
        //raise the value of the global variable it by 1.
        $next_user_id++;

        //Exercise3

        //Inside the method, use the parameter to set the username property of the object.
        $this ->username =$future_username;

        //Inside the method, use the parameter to set the user_id property of the object.
        //$this -> user_id;
        //Then change the lines of code where you are creating new objects so that you pass in the right values.

    }
    public function init()
    {
        $this ->time_of_construct = time();
        $this ->password =uniqid();

    }

    public function dumpMe()
    {
        var_dump($this);
    }
}

//Exercise1
//Declare a new global variable $next_user_id and initialize it at 0
$next_user_id =0;
$user1 = new user($next_user_id,'Steve');
$user2 = new user($next_user_id,'Bob');
$user3 = new user($next_user_id,'Tom');

echo 'user name is '.$user1->username.' and user id is '.$user1->id;



class blog_post
{
    public $id=null;
    public $headline=null;
    public $text=null;
    public $added_at=null;
    public $user_id=null;
    public $status='not published';

    public function publishPost()
    {
        $this->status ="published";
    }

    public function dumpMe()
    {
        var_dump($this);
    }

    //To your blog_post class, add the __construct() method.
    public function __construct( )
    {//Inside the method:
        //import the global variable using the keyword global
        global $next_post_id;
        //set the id property of the object to it's value
        $this->next_post_id = $id;
        //raise the value of the global variable it by 1.
        $next_post_id++;
        //new: set the value of added_at to the current date and time (use the function date from before)
        $this->added_at =date("Y-m-d H:i:s");
    }

}
//Then change the lines of code where you are creating new objects so that you pass in the right values.
$first_post= new blog_post($username);

//Exercise2
//Declare a new global variable $next_post_id and initialize it at 0
$next_post_id = 0;
