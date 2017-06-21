<?
//1
// function foo() {
  // static $a = 0;
  // echo $a . '<br>';
  // $a = $a + 1 ;
// }


// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0
// foo(); // 0


































//2

// class A {
	// private $_id;
	// function __construct($id){
		// $this->_id = $id;
	// }
  // public function foo() {
    // static $x = 0;
    // echo '<br>' . ++$x;
	// var_dump( $this->_id);
  // }
// }

// $a1 = new A(1);
// $a2 = new A(2);

// $a1->foo(); // 1
// $a2->foo(); // 2
// $a1->foo(); // 3
// $a2->foo(); // 4





























//3
// class A {
  // public static $x = 'foo';
  // public static function test() {
    // return 42;
  // }
  
  // public static function showX(){
	  // return self::$x;
  // }
// }

//echo A::$x; // 'foo'
//echo A::test(); // 42

//$obj = new A;
//echo $obj->showX();
//echo A::showX();

//echo A::showX();



















//4 
class Model {
  public static $table = 'table';
  public static function getTable() {
    //return static::$table; 
    return self::$table; 
  }
}

class User extends Model {
  public static $table = 'users';
  public static function getTable() {
    //return static::$table; 
    //return parent::$table; 
    //return selt::$table; 
  }
}

echo User::getTable(); // 'table'
















