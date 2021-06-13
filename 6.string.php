<?php
    echo strlen('Syed Rakesh Uddin'); // String lenght
    echo '<br>';

    echo str_word_count('Syed Rakesh Uddin'); // word counter of string
    echo '<br>';

    echo strrev('Syed Rakesh Uddin'); // Reverse the string
    echo '<br>';

    echo strpos('Syed Rakesh Uddin', 'Rakesh'); // Starting position of Rakesh
    echo '<br>';

    echo str_replace('Rakesh', 'Rahat', 'Syed Rakesh Uddin');
    echo '<br>';

    echo addcslashes("I'm a good boy", "o"); // Add slashes on any specific character
    echo '<br>';

    echo addslashes("I'm a good boy"); // Add slashes on only when quatation found
    echo '<br>';

    echo $string = bin2hex("I'm a good boy"); // Converted to hexadecimal
    echo '<br>';

    echo pack("H*",$string); // Hexadecimal to string
    echo '<br>';

    $string1 = 'String1 1';
    echo chop($string1, '1'); // Chop from right side of the sentence
    echo '<br>';

    echo chr(52) . "<br>"; // Decimal value
    echo chr(052) . "<br>"; // Octal value
    echo chr(0x52) . "<br>"; // Hex value

    $string2 = 'String2 2';
    echo chunk_split($string2,1,'.').'<br>'; // Split character

    echo convert_cyr_string($string2,'w','m');
    echo '<br>';

    echo $string3 = convert_uuencode('String3 3');
    echo '<br>';

    echo convert_uudecode($string3);
    echo '<br>';

    $string4 = 'String4 4';
    echo count_chars($string4,3);
    echo '<br>';

    $string5 = 'String5 5';
    echo crc32($string5);
    echo '<br>';
    printf("%u\n",$string5);
    echo '<br>';

    $string6 = 'Syed Rakesh Uddin is a very good boy';
    print_r(explode(' ',$string6,-5));
    echo '<br>';

    $string7 = 123;
    $file = fopen("text.txt", "w");
    fprintf($file,$string7);
    fprintf($file,'%f',$string7); // %b, %c, %d, %+d, %e, %E, 5f, %F, %g, %G, %o, %s, %u, %x, %X, %X
    echo '<br>';

    print_r (get_html_translation_table(HTML_SPECIALCHARS));
    print_r (get_html_translation_table(HTML_ENTITIES));
    echo '<br>';

    echo hebrev("á çùåï äúùñâ");
    echo '<br>';

    echo hebrevc("� ���� �����\n� ���� �����");
    echo '<br>';

    echo hex2bin("48656c6c6f20576f726c6421");
    echo '<br>';

    $string8 = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
    echo html_entity_decode($string8);
    echo '<br>';

    $string9 = 'He &#34;will&#34; come';
    echo html_entity_decode($string9, ENT_COMPAT); // Will only convert double quotes
    echo '<br>';

    $string10 = "He &#39;will&#39; come";
    echo html_entity_decode($string10, ENT_QUOTES); // Converts double and single quotes
    echo '<br>';

    $string11 = 'He &#34;will&#34; come';
    echo html_entity_decode($string11, ENT_QUOTES); // Converts double and single quotes
    echo '<br>';

    $string12 = 'He &#34;will&#34; come';
    echo html_entity_decode($string12, ENT_NOQUOTES); // Does not convert any quotes
    echo '<br>';

    $string13 = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($string13);
    echo '<br>';

    $string14 = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
    echo htmlspecialchars_decode($string14);
    echo '<br>';

    $string15 = "This is some <b>bold</b> text.";
    echo htmlspecialchars($string15);
    echo '<br>';

    $string16 = array('Syed','Rakesh');
    echo implode(" ",$string16);
    echo '<br>';

    $string17 = array('Syed','Rakesh');
    echo join(" ",$string17);
    echo '<br>';

    echo lcfirst("SYEd Rakesh Uddin");
    echo '<br>';
	
	echo levenshtein("Hello World","ello World");
	echo "<br>";

	echo similar_text("Hello World","lll WHleoo");
	echo '<br>';
	
	$string18 = 'Syed Rakesh Uddin';
	echo var_dump(ltrim($string18,'Sy'));
	echo '<br>';
	
	$string19 = '123123.000000';
	echo md5($string19);
	echo '<br>';
	
	$filename = "text.txt";
	echo md5_file($filename);
	echo '<br>';
	
	echo metaphone("Assistance");
	echo '<br>';
	
	echo  nl2br("One line.\nAnother line.");
	echo '<br>';
	
	echo number_format("1000000")."<br>";
	echo number_format("1000000",2)."<br>";
	echo number_format("1000000",2,"<","!");
	echo '<br>';
	
	echo ord("h")."<br>";
	echo ord("hello")."<br>"; // ASCII value of first character of the string
	echo '<br>';
	
	parse_str("firstName=Peter&age=43");
	echo $firstName."<br>";
	echo $age;
	echo '<br>';
	
	print('My name is Joy.');
	echo '<br>';
	
	$color = "red";
	print "Roses are $color";
	print "<br>";
	print 'Roses are $color';
	echo '<br>';
	
	print "This text
	spans multiple
	lines.";
	echo '<br>';
	
	$age=array("Peter"=>"35");
	print "Peter is " . $age['Peter'] . " years old.";
	echo '<br>';
	
	echo "Peter is " . $age['Peter'] . " years old.";
	echo '<br>';
?>