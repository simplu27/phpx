<?php

// Heredoc test
// http://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc

$name = "Roxana";
$age = 31;

$string = <<<EOT
	<p>Your name is {$name} and you are $age age old!</p>
EOT;
// Must be a line after heredoc

echo $string;

echo "<hr>";

$userName = 'Ramona';
$userEmail = 'ramonax@gmail.com';
$scor = 50;
$totalIntrebari = 68;
$successRate = 80;
$level = 'Pre-intermediate (A2-B1)';
$data_trimiterii = '08.01.2017';
// $userIp = long2ip(1371823474);
$userIp = 1371823474;
$filesave = 20170108224737;
$stringMessage = <<<MES
<ul>
	<li>Can express simple opinions or requirements in a familiar context.</li>
	<li>Can understand information within a known area, such as on products and signs and simple textbooks or reports.</li>
	<li>Can complete forms and write short simple letters or postcards related to personal information.</li>
	<li>Can understand routine information and articles, and the general meaning of non-routine information.</li>
</ul>
MES;

$body_mesaj = <<<OUTPUT
	<div style="width: auto; display: block; font-family: Arial, sans-serif; font-size: 16px; margin: 20px auto; max-width: 600px; box-sizing: border-box; padding: 20px;">

		<h2 style="color: #2A91E0; font-size: 26px; font-weight: normal; margin-left: 20px; margin-bottom: 10px;">English Test Result</h2>
		<p style="padding-left: 20px; color: #464646;">Completed by <a style="color: #3C5496; font-weight: bold; text-decoration: none;" href="mailto:{$userEmail}">{$userName}</a href="mailto:{$userEmail}"> Date: {$data_trimiterii}</p>

		<div style="width: 100%; background: #2888DA; color: #FFFFFF; font-size: 120%; padding: 5px 20px; box-sizing: border-box; margin-bottom: 10px;">
			<h3><span style="font-weight: normal;">Your score:</span> {$scor} <span style="font-weight: normal;">out of</span> {$totalIntrebari}</h3>
		</div>

		<div style="width: 100%; background: #62B721; color: #FFFFFF; font-size: 120%; padding: 5px 20px; box-sizing: border-box; margin-bottom: 10px;">
			<h3><span style="font-weight: normal;">Your success rate:</span> {$successRate} %</h3>
		</div>

		<div style="width: 100%; background: #CB0446; color: #FFFFFF; font-size: 120%; padding: 5px 20px; box-sizing: border-box; margin-bottom: 0px;">
			<h3><span style="font-weight: normal;">Your level:</span> {$level}</h3>
		</div>

		<div class="test-result-list" style="width: 100%; background: #F2F2F9; color: #333; font-size: 14px; padding: 20px 20px 20px 5px; box-sizing: border-box; margin-bottom: 10px; line-height: 1.6;">
			{$stringMessage}
		</div>

		<p style="font-size: 13px; color: #8F8F8F; display: inline-block; margin: 20px; line-height: 1.6;">Test completed by <strong>{$userName}</strong> Date: <strong>{$data_trimiterii}</strong><br>Email: <strong>{$userEmail}</strong> Reference: {$userIp}</br>
		Test details: <a style="color: #3C5496; text-decoration: none;" href="http://www.aliceperca.com/english-test/archive/?id={$filesave}" target="_blank">{$filesave}</a></p>
	</div>
OUTPUT;

echo $body_mesaj;