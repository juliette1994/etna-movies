<?php
function	puts($text='')
{
	echo $text ."\n";
}

function	ask_validate($prompt, $validator)
{
	while (true)
	{
		puts($prompt);
		$answer = readline('> ');
		if ($validator($answer))
			return ($answer);
		puts('Invalid answer.');
	}
}