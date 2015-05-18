# laravel-strings-examples
Laravel5 Strings Examples to help you grasp at once Laravel strings goodies

## ascii()

Transliterate a UTF-8 value to ASCII.

Method:
	
	public static function ascii($value);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::ascii('Με λένε Μάριο!')}}
	
Result:
	
	'Me lene Mario!'
	
Notes:

We use a simple phrase in greek and the `ascii()` method transforms every char in ascii.

## camel()

Convert a value to camel case.

Method:
	
	public static function camel($value);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::camel('Laravel is really awesome')}}
	
Result:
	
	'laravelIsReallyAwesome'
	
Equivalent Helper Function:

	camel_case($value);
	
Notes:

We use a simple string and the `camel()` method creates the camel case version of it.

## contains()

Determine if a given string contains a given substring.

Method:
	
	public static function contains($haystack, $needles);
	
Example 1:

	use \Illuminate\Support\Str;
	
	{{Str::contains('Laravel is really awesome', 'Laravel')}}
	
Result:
	
	true
	
Example 2:

	use \Illuminate\Support\Str;
	
	{{Str::contains('Laravel is really awesome', ['Laravel', 'is'])}}
	
Result:
	
	true
	
Example 3:

	use \Illuminate\Support\Str;
	
	{{Str::contains('Laravel is really awesome', ['laravel', 'is'])}}
	
Result:
	
	true
	
Example 4:

	use \Illuminate\Support\Str;
	
	{{Str::contains('Laravel is really awesome', ['laravel', 'his'])}}
	
Result:
	
	false
	
Equivalent Helper Function:

	str_contains($haystack, $needles);
	
Notes:

The second parameter can be a string or an array of strings. In case it is a string the method returns true or false accordingly by searching in a case-sensitive manner. In case we pass an array of strings then the method returns true as long as it has at least one match no matter how many strings the `$needles` array contains. So in our third example gave true after 1 of 2 matches while for our fourth example gave false for 0 matches.

## endsWith()

Determine if a given string ends with a given substring.

Method:
	
	public static function endsWith($haystack, $needles);
	
Example 1:

	use \Illuminate\Support\Str;
	
	{{Str::endsWith('Laravel is really awesome', 'awesome')}}
	
Result:
	
	true
	
Example 2:

	use \Illuminate\Support\Str;
	
	{{Str::endsWith('Laravel is really awesome', 'Awesome')}}
	
Result:
	
	false
	
Example 3:

	use \Illuminate\Support\Str;
	
	{{Str::endsWith('Laravel is really awesome', ['Awesome', 'awesome'])}}
	
Result:
	
	true
	
Equivalent Helper Function:

	ends_with($haystack, $needles);
	
Notes:

The second parameter can be a string or an array of strings. In case it is a string the method returns true or false accordingly by checking in a case-sensitive manner. In case we pass an array of strings then the method returns true as long as one of the strings is the correct one.

## finish()

Cap a string with a single instance of a given value.

Method:
	
	public static function finish($value, $cap);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::finish('Laravel is really awesome', ' and superb')}}
	
Equivalent Helper Function:

	str_finish($value, $cap);
	
Result:
	
	'Laravel is really awesome and superb'
	
## is()

Determine if a given string matches a given pattern.

Method:
	
	public static function is($pattern, $value);
	
Example 1:

	use \Illuminate\Support\Str;
	
	{{Str::is('Laravel', 'Laravel is really awesome')}}
	
Result:
	
	false
	
Example 2:

	use \Illuminate\Support\Str;
	
	{{Str::is('Laravel*', 'Laravel is really awesome')}}
	
Result:
	
	true
	
Example 3:

	use \Illuminate\Support\Str;
	
	{{Str::is('*is*', 'Laravel is really awesome')}}
	
Result:
	
	true

Equivalent Helper Function:

	str_is($pattern, $value);
	
Notes:

Use the asterisk to indicate that more chars are before or after the `$pattern` we are searching for so you can have a match.

## length()

Return the length of the given string.

Method:
	
	public static function length($value);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::length('Laravel is really awesome')}}
	
Result:
	
	25
	
## limit()

Limit the number of characters in a string.

Method:
	
	public static function limit($value, $limit = 100, $end = '...');
	
Example 1:

	use \Illuminate\Support\Str;
	
	{{Str::limit('Laravel is really awesome')}}
	
Result:
	
	'Laravel is really awesome'
	
Example 2:

	use \Illuminate\Support\Str;
	
	{{Str::limit('Laravel is really awesome', 7)}}
	
Result:
	
	'Laravel...'
	
Example 3:

	use \Illuminate\Support\Str;
	
	{{Str::limit('Laravel is really awesome', 7, '!!!')}}
	
Result:
	
	'Laravel!!!'
	
Equivalent Helper Function:

	str_limit($value, $limit = 100, $end = '...');
	
## lower()

Convert the given string to lower-case.

Method:
	
	public static function lower($value);	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::lower('Laravel is really awesome')}}
	
Result:
	
	'laravel is really awesome'
	
## words()

Limit the number of words in a string.

Method:
	
	public static function words($value, $words = 100, $end = '...');	
Example 1:

	use \Illuminate\Support\Str;
	
	{{Str::words('Laravel is really awesome')}}
	
Result:
	
	'Laravel is really awesome'
	
Example 2:

	use \Illuminate\Support\Str;
	
	{{Str::words('Laravel is really awesome', 3)}}
	
Result:
	
	'Laravel is really...'
	
Example 3:

	use \Illuminate\Support\Str;
	
	{{Str::words('Laravel is really awesome', 2, '###')}}
	
Result:
	
	'Laravel is###'
	
## parseCallback()

Parse a Class@method style callback into class and method.

Method:

	public static function parseCallback($callback, $default);
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::parseCallback('Test@tester', 1)}}
	
Result:

	['Test', 'tester']
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::parseCallback('Test', 1)}}
	
Result:

	['Test', 1]
	
Notes:

In case you refer to a class and its method like `Class@method` then with this method you can fast distinguish the class from its method and have an array with their names. If there is no `@` then the value of the callback is used as the name of the method in the array.

## plural()

Get the plural form of an English word.

Method:

	public static function plural($value, $count = 2);
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::plural('test')}}
	
Result:

	'tests'
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::plural('category')}}
	
Result:

	'categories'
	
Example 3:
	
	use \Illuminate\Support\Str;
	
	{{Str::plural('money')}}
	
Result:

	'money'
	
Equivalent Helper Function:

	str_plural($value, $count = 2);
	
## random()

Generate a more truly "random" alpha-numeric string.

Method:

	public static function random($length = 16);
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::random()}}
	
Result:

	'Q7EPToH8la5M0SDh' // 16 chars long random alphanumeric string
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::random(3)}}
	
Result:

	'w4G' // 3 chars long random alphanumeric string
	
Equivalent Helper Function:

	str_random($length = 16);
	
Notes:

Uses php 5.3.0 `openssl_random_pseudo_bytes ( int $length [, bool &$crypto_strong ] );` function to produce random strings.
	
## quickRandom()

Generate a "random" alpha-numeric string.

Method:

	public static function quickRandom($length = 16);
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::quickRandom()}}
	
Result:

	'Q7EPToH8la5M0SDh' // 16 chars long random alphanumeric string
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::quickRandom(3)}}
	
Result:

	'w4G' // 3 chars long random alphanumeric string
	
Notes:

Uses a pool which contains all alpha-numeric chars and picks some of them in random position.

## upper()

Convert the given string to upper-case.

Method:

	public static function upper($value);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::upper('Laravel is really awesome')}}
	
Result:
	
	'LARAVEL IS REALLY AWESOME'
	
## title()

Convert the given string to title case.

Method:

	public static function title($value);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::title('Laravel is really awesome')}}
	
Result:
	
	'Laravel Is Really Awesome'
	
## singular()

Get the singular form of an English word.

Method:

	public static function singular($value);
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::singular('tests')}}
	
Result:

	'test'
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::singular('categories')}}
	
Result:

	'category'
	
Example 3:
	
	use \Illuminate\Support\Str;
	
	{{Str::singular('money')}}
	
Result:

	'money'
	
Equivalent Helper Function:

	str_singular($value);
	
## slug()

Get the singular form of an English word.

Method:

	public static function slug($title, $separator = '-');
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::slug('Laravel is really awesome')}}
	
Result:

	'laravel-is-really-awesome'
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::slug('Laravel is really awesome', '_')}}
	
Result:

	'laravel_is_really_awesome'
	
Equivalent Helper Function:

	str_slug($title, $separator = '-');
	
## snake()

Convert a string to snake case.

Method:

	public static function snake($value, $delimiter = '_');
	
Example 1:
	
	use \Illuminate\Support\Str;
	
	{{Str::snake('Laravel is really awesome')}}
	
Result:

	'laravel_is_really_awesome'
	
Example 2:
	
	use \Illuminate\Support\Str;
	
	{{Str::slug('Laravel is really awesome', '-')}}
	
Result:

	'laravel-is-really-awesome'
	
Equivalent Helper Function:

	snake_case($value, $delimiter = '_');
	
## startsWith()

Determine if a given string starts with a given substring.

Method:
	
	public static function startsWith($haystack, $needles);
	
Example 1:

	use \Illuminate\Support\Str;
	
	{{Str::startsWith('Laravel is really awesome', 'laravel')}}
	
Result:
	
	false
	
Example 2:

	use \Illuminate\Support\Str;
	
	{{Str::startsWith('Laravel is really awesome', 'Laravel')}}
	
Result:
	
	false
	
Example 3:

	use \Illuminate\Support\Str;
	
	{{Str::startsWith('Laravel is really awesome', ['Laravel', 'laravel'])}}
	
Result:
	
	true
	
Equivalent Helper Function:

	starts_with($haystack, $needles);
	
Notes:

The second parameter can be a string or an array of strings. In case it is a string the method returns true or false accordingly by checking in a case-sensitive manner. In case we pass an array of strings then the method returns true as long as one of the strings is the correct one.

## studly()

Convert a value to studly caps case.

Method:
	
	public static function studly($value);
	
Example:

	use \Illuminate\Support\Str;
	
	{{Str::studly('Laravel is really awesome')}}
	
Equivalent Helper Function:
	
	function studly_case($value);
	
Result:
	
	'LaravelIsReallyAwesome'
