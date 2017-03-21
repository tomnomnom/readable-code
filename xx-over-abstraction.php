<?php
// Abstraction trades an increase in real complexity for a decrease in
// perceived complexity. That isn't always a win.
//     - John Carmack 

// If this doesn't work...
$user = Users::fromArray([
	'id'   => 123,
	'name' => 'Tom'
]);

// Do I look here?
class Users extends MySQLModel {}

// Or do I look here?
class MySQLModel extends DBModel {}

// How about in here?
class DBModel extends AbstractModel {}

// It's probably going to be in here, isn't it?
abstract class AbstractModel {}

// Have you ever used a Haynes manual?
