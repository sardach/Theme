<?php

namespace Foolz\Theme;

class Props
{
	/**
	 * Array of stings containing the elements of which the title is composed
	 *
	 * @var array
	 */
	protected $title = [];

	/**
	 * The separator between the elements of which the title is composed
	 *
	 * @var string
	 */
	protected $title_separator = ' » ';

	/**
	 * Array of arrays of <meta>. The content of the internal array are tag => value
	 *
	 * @var array
	 */
	/*
	protected $meta_tags = [
		['charset' => 'utf8'],
	];

	public function getHeader()
	{
		$string = ""
		."<!doctype html>\n"
		."  <html>\n"
		."      <head>\n";

		foreach ($this->meta_tags as $meta)
		{
			$string .= "            <meta";
			foreach ($meta as $tag => $value)
			{
				$string .= ' '.$tag.'="'.htmlspecialchars($value).'"';
			}
			$string .= ">\n";
		}

		$string .= "            <title>".htmlspecialchars($this->getTitle())."</title>";

		foreach ()

		return $string;
	}

	public function getFooter()
	{

	}
	*/

	/**
	 * Set the entire array of the title. Empties the title if no parameter is given
	 *
	 * @param  array  $title  The array of elements of which the title is composed
	 *
	 * @return  \Foolz\Theme\Props  The current object
	 */
	public function setTitle(array $title = [])
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Adds an element to the title
	 *
	 * @param  string  $title  The element to add to the title
	 *
	 * @return  \Foolz\Theme\Props  The current object
	 */
	public function addTitle($title)
	{
		$this->title[] = $title;

		return $this;
	}

	/**
	 * Sets a string to use as separator between the elements of the title. It must contain eventual spaces around it
	 *
	 * @param  string  $separator  The separator string
	 *
	 * @return  \Foolz\Theme\Props  The current object
	 */
	public function setTitleSeparator($separator)
	{
		$this->title_separator = $separator;

		return $this;
	}

	/**
	 * Returns the compiled title, NOT ESCAPED
	 *
	 * @return  string  The compiled title
	 */
	public function getTitle()
	{
		return implode($this->title_separator, $this->title);
	}


}
