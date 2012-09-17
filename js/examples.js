/* topics:
- jQuery and libraries
- terminal/command line and version control (git)
- deploying the site
- responsive design
- optimization
     -minifying, concat, sprites, etc
- cross browser testing and compatibility
 */

/*
	Javascript Examples for Kira
 */

// Variables, weakly-typed (float, int, string, array, object), scope (local/global) and Window

/*
	integers: (int) 1 10 23 2401
	floats: (float) 1.0 2.425 10.59125
	strings: (string) "hello" "poop" "my name is kira"
	array: [1,2,3]
	object: {
		name: "Fido",
		breed: "mutt",
		age: 12,
		owner: "Kira"
	}
*/

// Integers
var myInt = 10;

// Floats
var myFloat = 10.1;

// Strings
var myString = "hello world";
myString + " how are you?"; // prints "hello world how are you?"

// Arrays
var myArray = [ myInt, myFloat, myString ];
myArray.length; // prints 3
myArray[2];		// prints "hello world"
myArray.indexOf( myFloat );	// prints 1
myArray.push( 'hey there' );	// returns new myArray.length, and adds 'hey there' to the end of the array
myArray.pop( myArray.length - 1 ); // removes and returns the last element in myArray

// Objects
var doggy = {
	name: "Fido",
	breed: "mutt",
	age: 12,
	owner: "Kira"
}
doggy.name;		// prints "Fido"
doggy["name"];	// prints "Fido"

// Casting
var myNumString = "10";
myNumString + 2;	// prints "102"
parseInt(myNumString) + 2; // prints 12

// Conditionals
// boolean: true or false
// booleans can be inversed by putting "!" before them
var myNum = 10;
if ( myNum == 10 ) {
	console.log('it was true!');
} else if ( myNum > 10 ) {
	console.log('myNum was greater than 10');
} else {
	console.log('it was false');
}
myNum == 10;	// returns true
myNum !== 10;	// returns false
!myNum == 10; // returns false
myNum > 10;		// return false
myNum < 10;		// returns false
myNum >= 10;	// returns true
myNum <= 10;	// returns true

// The Ternary operator
// A way of condensing a conditional into a single line
// if myNum is 10, we want myCond to be 100, if not, we just want it to be 0
// conditional ? if true : if false
var myCond = myNum == 10 ? 100 : 0;


// For loops
var forArray = [1,2,3,4,5];

var outsideVariable = "hi there";
for (var i = 0; i < forArray.length; i++ ) {
	console.log( forArray[i] );
}

// Declaring functions
function combineStuff( aNumber, aString ) {
	console.log( aNumber + aString );
}
combineStuff( 10, "my kira" );
combineStuff( 1204124, "blah" );



/*
	jQuery
	x- Event binding/live
	x- hiding/showing/fading/toggle
	x- adding/removing/toggling classes
	x- accessing attributes
	x- find/parent/children/closest
	x- append/prepend
	x- css/animate
 */

// Anonymous function that calls when jQuery is ready

$(function() {

	$('.button').live( 'click', function() {
		$('.square').animate({
			marginLeft: '500px',
			width: '200px',
			marginTop: '200px'
		}, 500);
	});

});





























