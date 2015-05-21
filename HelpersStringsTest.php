<?php

use Illuminate\Support\Str;

class HelpersStringsTest extends TestCase {

	public function testStringAscii()
	{
		$str1 = 'Με λένε Μάριο!';
		$str2 = Str::ascii($str1);
		$this->assertEquals($str2, 'Me lene Mario!');
	}

	public function testStringCamel()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::camel($str1);
		$this->assertEquals($str2, 'laravelIsReallyAwesome');
	}

	public function testStringContains()
	{
		$str = 'Laravel is really awesome';
		$result = Str::contains($str, 'Laravel');
		$this->assertEquals($result, true);

		$str = 'Laravel is really awesome';
		$result = Str::contains($str, ['Laravel', 'is']);
		$this->assertEquals($result, true);

		$str = 'Laravel is really awesome';
		$result = Str::contains($str, ['laravel', 'is']);
		$this->assertEquals($result, true);

		$str = 'Laravel is really awesome';
		$result = Str::contains($str, ['laravel', 'his']);
		$this->assertEquals($result, false);
	}

	public function testStringEndsWith()
	{
		$str = 'Laravel is really awesome';
		$result = Str::endsWith($str, 'awesome');
		$this->assertEquals($result, true);

		$str = 'Laravel is really awesome';
		$result = Str::endsWith($str, 'Awesome');
		$this->assertEquals($result, false);

		$str = 'Laravel is really awesome';
		$result = Str::endsWith($str, ['Awesome', 'awesome']);
		$this->assertEquals($result, true);
	}

	public function testStringFinish()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::finish($str1, ' and superb');
		$this->assertEquals($str2, 'Laravel is really awesome and superb');

		$str1 = 'http://home/';
		$str2 = Str::finish($str1, '/');
		$this->assertEquals($str2, 'http://home/');
	}

	public function testStringIs()
	{
		$str = 'Laravel is really awesome';
		$result = Str::is('Laravel', $str);
		$this->assertEquals($result, false);

		$str = 'Laravel is really awesome';
		$result = Str::is('Laravel*', $str);
		$this->assertEquals($result, true);

		$str = 'Laravel is really awesome';
		$result = Str::is('*is*', $str);
		$this->assertEquals($result, true);
	}

	public function testStringLength()
	{
		$str = 'Laravel is really awesome';
		$result = Str::length($str);
		$this->assertEquals($result, 25);
	}

	public function testStringLimit()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::limit($str1);
		$this->assertEquals($str2, 'Laravel is really awesome');

		$str1 = 'Laravel is really awesome';
		$str2 = Str::limit($str1, 7);
		$this->assertEquals($str2, 'Laravel...');

		$str1 = 'Laravel is really awesome';
		$str2 = Str::limit($str1, 7, '!!!');
		$this->assertEquals($str2, 'Laravel!!!');
	}

	public function testStringLower()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::lower($str1);
		$this->assertEquals($str2, 'laravel is really awesome');
	}

	public function testStringPlural()
	{
		$str1 = 'test';
		$str2 = Str::plural($str1);
		$this->assertEquals($str2, 'tests');

		$str1 = 'category';
		$str2 = Str::plural($str1);
		$this->assertEquals($str2, 'categories');

		$str1 = 'money';
		$str2 = Str::plural($str1);
		$this->assertEquals($str2, 'money');
	}

	public function testStringRandom()
	{
		$str1 = Str::random();
		$str2 = Str::length($str1);
		$this->assertEquals($str2, 16);

		$str1 = Str::random(3);
		$str2 = Str::length($str1);
		$this->assertEquals($str2, 3);
	}

	public function testStringQuickRandom()
	{
		$str1 = Str::quickRandom();
		$str2 = Str::length($str1);
		$this->assertEquals($str2, 16);

		$str1 = Str::quickRandom(3);
		$str2 = Str::length($str1);
		$this->assertEquals($str2, 3);
	}

	public function testStringSingular()
	{
		$str1 = 'tests';
		$str2 = Str::singular($str1);
		$this->assertEquals($str2, 'test');

		$str1 = 'categories';
		$str2 = Str::singular($str1);
		$this->assertEquals($str2, 'category');

		$str1 = 'money';
		$str2 = Str::singular($str1);
		$this->assertEquals($str2, 'money');
	}

	public function testStringSlug()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::slug($str1);
		$this->assertEquals($str2, 'laravel-is-really-awesome');

		$str1 = 'Laravel is really awesome';
		$str2 = Str::slug($str1, '_');
		$this->assertEquals($str2, 'laravel_is_really_awesome');
	}

	public function testStringSnake()
	{
		$str1 = 'LaravelRocks';
		$str2 = Str::snake($str1);
		$this->assertEquals($str2, 'laravel_rocks');

		$str1 = 'Laravel Rocks';
		$str2 = Str::snake($str1);
		$this->assertEquals($str2, 'laravel _rocks');

		$str1 = 'laravel rocks';
		$str2 = Str::snake($str1);
		$this->assertEquals($str2, 'laravel rocks');

		$str1 = 'LaravelRocks';
		$str2 = Str::snake($str1, '-');
		$this->assertEquals($str2, 'laravel-rocks');
	}

	public function testStringStartsWith()
	{
		$str = 'Laravel is really awesome';
		$result = Str::startsWith($str, 'laravel');
		$this->assertEquals($result, false);

		$str = 'Laravel is really awesome';
		$result = Str::startsWith($str, 'Laravel');
		$this->assertEquals($result, true);

		$str = 'Laravel is really awesome';
		$result = Str::startsWith($str, ['Laravel', 'laravel']);
		$this->assertEquals($result, true);
	}

	public function testStringStudly()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::studly($str1);
		$this->assertEquals($str2, 'LaravelIsReallyAwesome');
	}

	public function testStringTitle()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::title($str1);
		$this->assertEquals($str2, 'Laravel Is Really Awesome');
	}

	public function testStringUpper()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::upper($str1);
		$this->assertEquals($str2, 'LARAVEL IS REALLY AWESOME');
	}

	public function testStringStartsWords()
	{
		$str1 = 'Laravel is really awesome';
		$str2 = Str::words($str1);
		$this->assertEquals($str2, 'Laravel is really awesome');

		$str1 = 'Laravel is really awesome';
		$str2 = Str::words($str1, 3);
		$this->assertEquals($str2, 'Laravel is really...');

		$str1 = 'Laravel is really awesome';
		$str2 = Str::words($str1, 2, '###');
		$this->assertEquals($str2, 'Laravel is###');
	}
}
