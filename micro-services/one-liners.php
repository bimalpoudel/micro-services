<?php
/**
 * Generates an one-liner joke.
 *
 * A sample micro-service example for WordPress Power-Box Widget URL Example
 *
 * You may use your database driven scripting while hosting a realtime micro-service.
 *
 * Below quotes were seen at: http://www.laughfactory.com/jokes/word-play-jokes/
 */

$one_liners = array(
	'Q: Why was six scared of seven?<br />A: Because seven "ate" nine.',
	'Q: What is the difference between snowmen and snowwomen?<br />A: Snowballs.',
	'Q: What did the blanket say when it fell of the bed?<br />A: "Oh sheet!"',
	'Why is it that your nose runs, but your feet smell?',
	'Q: What starts with E, ends with E, and has only 1 letter in it?<br />A: Envelope.',
	'Q: What did the big chimney say to the little chimney?<br />A: "You\'re too young to smoke."',
	'Q: What is the tallest building in the entire world?<br />A: The library, because it has so many stories.',
	'Q: How do trees access the internet?<br />A: They log in.',
);

echo $one_liners[array_rand($one_liners, 1)];
