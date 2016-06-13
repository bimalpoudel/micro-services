<?php
/**
 * Random text generator
 */
class lorem
{
	/**
	 * How do the sentences end?
	 */
	public function punctuate()
	{
		$punctuations = array('.', '!', '?');
		
		return $punctuations[mt_rand(0, count($punctuations)-1)];
	}
	
	/**
	 * Get a random alphabet
	 */
	public function letter()
	{
		$ascii = mt_rand(ord('a'), ord('z'));
		$letter = chr($ascii);
		return $letter;
	}
	
	/**
	 * Build a word with random number of letters
	 */
	public function word()
	{
		$counter = mt_rand(2, 15);
		
		$letters = array();
		for($l=0; $l<$counter; ++$l)
		{
			$letters[] = $this->letter();
		}
		$word = implode('', $letters);
		return $word;
	}
	
	/**
	 * Build a sentence with random number of words
	 */
	public function sentence()
	{
		$counter = mt_rand(4, 15);
		
		$words = array();
		for($w=0; $w<$counter; ++$w)
		{
			$words[] = $this->word();
		}
		$words[0] = ucfirst($words[0]);
		$sentence = implode(' ', $words). $this->punctuate();
		
		return $sentence;
	}
	
	/**
	 * Build a paragraph with random numer of sentences
	 */
	public function paragraph()
	{
		$counter = mt_rand(3, 10);
		
		$sentences = array();
		for($s=0; $s<$counter; ++$s)
		{
			$sentences[] = $this->sentence();
		}
		
		$paragraph = implode(' ', $sentences);
		
		return $paragraph;
	}
}
