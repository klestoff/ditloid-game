<?php
	setlocale(LC_CTYPE, "ru_RU.UTF8");
	setlocale(LC_TIME, "ru_RU.UTF8");
	mb_internal_encoding('UTF-8');

	$phrasesList =
		array_map( 
			'trim',
			explode(
				"\n", 
				file_get_contents(
					dirname(__FILE__).'/phrases.txt'
				)
			)
		);

	$questionList	= array();
	$answerList		= array();

	foreach ($phrasesList as $phrase) {
		$phrase 		= explode("\t", $phrase);
		$questionList[]	= reset($phrase);
		$answerList[]	= md5(mb_strtolower(trim(end($phrase))));
	}

	echo 
		'var questionList = [\''.implode('\',\'', $questionList).'\'],'.PHP_EOL
		.'answerList = [\''.implode('\',\'', $answerList).'\'];'.PHP_EOL.PHP_EOL;
?>
