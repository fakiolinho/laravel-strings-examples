# Strings
Laravel5 offers a great way to manipulate strings through the `Illuminate\Support\Str` class and its useful methods. We can manipulate strings with very little code which is awesome. Let's see a fast example for our blog posts:

	use Illuminate\Support\Str;

	$article = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
	
	{{Str::words($article, 5)}}
	
	'Lorem ipsum dolor sit amet...'
	
Great! We tackled the length of the post with ease so we provided a nice introductory text for our post. Let's create a slug from our article's title to provide later a SEF url:

	use Illuminate\Support\Str;
	
	$title = 'Laravel is great';
	
	$slug = Str::slug($title);
	
	$slug = 'laravel-is-great';

This was so fast and useful! So Laravel5 has prepared quite a few tools to help us manipulate long or ugly strings in so many ways.

Below every method of Str class is explained with some brief and declarative examples per method so you can grasp their functionality with ease.

## ascii()

Transliterate a UTF-8 value to ASCII.

**Method:**
	
	public static function ascii($value);
	
**Example:**

	use Illuminate\Support\Str;
	
	$str1 = 'Με λένε Μάριο!';
	
	$str2 = Str::ascii($str1);
	
**Result:**
	
	$str2 = 'Me lene Mario!';
	
**Notes:**

We use a simple phrase in greek and the `ascii()` method transforms every char in ascii.

## camel()

Convert a value to camel case.

**Method:**
	
	public static function camel($value);
	
**Example:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::camel($str1);
	
**Result:**
	
	$str2 = 'laravelIsReallyAwesome'
	
**Equivalent Helper Function:**

	camel_case($value);
	
**Notes:**

We use a simple string and the `camel()` method creates the camel case version of it.

## contains()

Determine if a given string contains a given substring.

**Method:**
	
	public static function contains($haystack, $needles);
	
**Parameters:**

The second parameter named $needles can be a string or an array of strings.  
	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::contains($str, 'Laravel');
	
**Result:**
	
	$result = true;
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::contains($str, ['Laravel', 'is']);
	
**Result:**
	
	$result = true
	
**Example 3:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::contains($str, ['laravel', 'is']);
	
**Result:**
	
	$result = true;
	
**Example 4:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::contains($str, ['laravel', 'his']);
	
**Result:**
	
	$result = false;
	
**Equivalent Helper Function:**

	str_contains($haystack, $needles);
	
**Notes:**

As i mentioned before the second parameter can be a string or an array of strings. In case it is a string the method returns true or false accordingly by searching in a case-sensitive manner. In case we pass an array of strings then the method returns true as long as it has at least one match no matter how many strings the `$needles` array contains. So in our third example the method returned true because there was 1 match while for in fourth example returned false because of 0 matches.

## endsWith()

Determine if a given string ends with a given substring.

**Method:**
	
	public static function endsWith($haystack, $needles);
	
**Parameters:**

The second parameter named $needles can be a string or an array of strings.  
	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::endsWith($str, 'awesome');
	
**Result:**
	
	$result = true;
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::endsWith($str, 'Awesome');
	
**Result:**
	
	$result = false;
	
**Example 3:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::endsWith($str, ['Awesome', 'awesome']);
	
**Result:**
	
	$result = true;
	
**Equivalent Helper Function:**

	ends_with($haystack, $needles);
	
**Notes:**

As i mentioned before the second parameter can be a string or an array of strings. In case it is a string the method returns true or false accordingly by checking in a case-sensitive manner. In case we pass an array of strings then the method returns true as long as one of the strings is the correct one.

## finish()

Cap a string with a single instance of a given value.

**Method:**
	
	public static function finish($value, $cap);
	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::finish($str1, ' and superb');
	
**Result:**
	
	'Laravel is really awesome and superb'
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str1 = 'http://home/';
	
	$str2 = Str::finish($str1, '/');
	
**Result:**
	
	$str2 = 'http://home/';
	
**Equivalent Helper Function:**

	str_finish($value, $cap);
	
**Notes:**

If the cap already exists then nothing happens and the initial string is returned.
	
## is()

Determine if a given string matches a given pattern.

**Method:**
	
	public static function is($pattern, $value);
	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::is('Laravel', $str);
	
**Result:**
	
	$result = false;
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::is('Laravel*', $str);
	
**Result:**
	
	$result = true;
	
**Example 3:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::is('*is*', $str);
	
**Result:**
	
	$result = true;

**Equivalent Helper Function:**

	str_is($pattern, $value);
	
**Notes:**

Use the asterisk to indicate that more chars are before or after the `$pattern` we are searching for so you can have a match.

## length()

Return the length of the given string.

**Method:**
	
	public static function length($value);
	
**Example:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$length = Str::length($str);
	
**Result:**
	
	$length = 25;
	
## limit()

Limit the number of characters in a string.

**Method:**
	
	public static function limit($value, $limit = 100, $end = '...');
	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::limit($str1);
	
**Result:**
	
	$str2 = 'Laravel is really awesome';
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::limit($str1, 7);
	
**Result:**
	
	$str2 = 'Laravel...';
	
**Example 3:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::limit($str1, 7, '!!!');
	
**Result:**
	
	$str2 = 'Laravel!!!';
	
**Equivalent Helper Function:**

	str_limit($value, $limit = 100, $end = '...');
	
## lower()

Convert the given string to lower-case.

**Method:**
	
	public static function lower($value);	
**Example:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::lower($str1);
	
**Result:**
	
	$str2 = 'laravel is really awesome';

## plural()

Get the plural form of an English word.

**Method:**

	public static function plural($value, $count = 2);
	
**Example 1:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'test';
	
	$str2 = Str::plural($str1);
	
**Result:**

	$str2 = 'tests';
	
**Example 2:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'category';
	
	$str2 = Str::plural($str1);
	
**Result:**

	$str2 = 'categories';
	
**Example 3:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'money';
	
	$str2 = Str::plural($str1);
	
**Result:**

	$str2 = 'money';
	
**Equivalent Helper Function:**

	str_plural($value, $count = 2);
	
## random()

Generate a more truly "random" alpha-numeric string.

**Method:**

	public static function random($length = 16);
	
**Example 1:**
	
	use Illuminate\Support\Str;
	
	$random = Str::random();
	
**Result:**

	$random = 'Q7EPToH8la5M0SDh'; // 16 chars long random alphanumeric string
	
**Example 2:**
	
	use Illuminate\Support\Str;
	
	$random = Str::random(3);
	
**Result:**

	$random = 'w4G'; // 3 chars long random alphanumeric string
	
**Equivalent Helper Function:**

	str_random($length = 16);
	
**Notes:**

Uses php 5.3.0 `openssl_random_pseudo_bytes()` function to produce random strings. If we want a string strong and sufficient for cryptography this is the method we need.
	
## quickRandom()

Generate a "random" alpha-numeric string.

**Method:**

	public static function quickRandom($length = 16);
	
**Example 1:**
	
	use Illuminate\Support\Str;
	
	$random = Str::quickRandom();
	
**Result:**

	$random = 'Q7EPToH8la5M0SDh'; // 16 chars long random alphanumeric string
	
**Example 2:**
	
	use Illuminate\Support\Str;
	
	$random = Str::quickRandom(3);
	
**Result:**

	$random = 'w4G'; // 3 chars long random alphanumeric string
	
**Notes:**

Uses a pool which contains all alpha-numeric chars and picks some of them in random position to provide fast a random string. If we want a string sufficient for cryptography then we should use method `random()`.
	
## singular()

Get the singular form of an English word.

**Method:**

	public static function singular($value);
	
**Example 1:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'tests;
	
	$str2 = Str::singular($str1);
	
**Result:**

	$str2 = 'test';
	
**Example 2:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'categories;
	
	$str2 = Str::singular($str1);
	
**Result:**

	$str2 = 'category';
	
**Example 3:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'money;
	
	$str2 = Str::singular($str1);
	
**Result:**

	$str2 = 'money';
	
**Equivalent Helper Function:**

	str_singular($value);
	
## slug()

Get the singular form of an English word.

**Method:**

	public static function slug($title, $separator = '-');
	
**Example 1:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::slug($str1);
	
**Result:**

	$str2 = 'laravel-is-really-awesome';
	
**Example 2:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::slug($str1, '_');
	
**Result:**

	$str2 = 'laravel_is_really_awesome';
	
**Equivalent Helper Function:**

	str_slug($title, $separator = '-');
	
**Note:**

A fast way to create SEF urls for your application.
	
## snake()

Convert a string from camel case format to snake case.

**Method:**

	public static function snake($value, $delimiter = '_');
	
**Example 1:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'LaravelRocks';
	
	$str2 = Str::snake($str1);
	
**Result:**

	$str2 = 'laravel_rocks';
	
**Example 2:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'Laravel Rocks';
	
	$str2 = Str::snake($str1);
	
**Result:**

	$str2 = 'laravel _rocks';
	
**Example 3:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'laravel rocks';
	
	$str2 = Str::snake($str1);
	
**Result:**

	$str2 = 'laravel rocks';
	
**Example 4:**
	
	use Illuminate\Support\Str;
	
	$str1 = 'LaravelRocks';
	
	$str2 = Str::snake($str1, '-');
	
**Result:**

	$str2 = 'laravel-rocks';
	
**Equivalent Helper Function:**

	snake_case($value, $delimiter = '_');
	
**Notes:**

Be careful this works great for camel case strings only and not for other formats, check examples 2 & 3.
	
## startsWith()

Determine if a given string starts with a given substring.

**Method:**
	
	public static function startsWith($haystack, $needles);
	
**Parameters:**

The second parameter named $needles can be a string or an array of strings.  	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::startsWith($str, 'laravel');
	
**Result:**
	
	$result = false;
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::startsWith($str, 'Laravel');
	
**Result:**
	
	$result = true;
	
**Example 3:**

	use Illuminate\Support\Str;
	
	$str = 'Laravel is really awesome';
	
	$result = Str::startsWith($str, ['Laravel', 'laravel']);
	
**Result:**
	
	$result = true;
	
**Equivalent Helper Function:**

	starts_with($haystack, $needles);
	
**Notes:**

The second parameter can be a string or an array of strings. If it is a string the method returns true or false accordingly by checking in a case-sensitive manner. In case we pass an array of strings then the method returns true as long as one of the strings is the correct one.

## studly()

Convert a value to studly caps case.

**Method:**
	
	public static function studly($value);
	
**Example:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::studly($str1);
	
**Result:**
	
	$str2 = 'LaravelIsReallyAwesome';
	
**Equivalent Helper Function:**
	
	function studly_case($value);
	
## title()

Convert the given string to title case.

**Method:**

	public static function title($value);
	
**Example:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::title($str1);
	
**Result:**
	
	$str2 = 'Laravel Is Really Awesome';
	
## upper()

Convert the given string to upper-case.

**Method:**

	public static function upper($value);
	
**Example:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::upper($str1);
	
**Result:**
	
	$str2 = 'LARAVEL IS REALLY AWESOME';
	
## words()

Limit the number of words in a string.

**Method:**
	
	public static function words($value, $words = 100, $end = '...');	
**Example 1:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::words($str1);
	
**Result:**
	
	$str2 = 'Laravel is really awesome';
	
**Example 2:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::words($str1, 3);
	
**Result:**
	
	$str2 = 'Laravel is really...';
	
**Example 3:**

	use Illuminate\Support\Str;
	
	$str1 = 'Laravel is really awesome';
	
	$str2 = Str::words($str1, 2, '###');
	
**Result:**
	
	$str2 = 'Laravel is###';
	
**Notes:**

Very useful to provide an introductory part of your content.
