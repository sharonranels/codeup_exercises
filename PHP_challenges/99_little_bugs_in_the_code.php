<?php



$bugs = 99;

do {
	if ($bugs > 1) {
		if ($bugs2 > 1) {
			echo "$bugs little bugs in the code, $bugs little bugs.\n Take one out, patch it about, $bugs2 little bugs in the code.\n";
				} elseif ($bugs2 == 1) {
				echo "$bugs little bugs in the code, $bugs little bugs.\n Take one out, patch it about, $bugs2 little bug in the code.\n";
				} else {
					echo "$bugs little bugs in the code, $bugs little bugs.\n Take one out, patch it about, $bugs2 little bugs in the code - GO HAVE A BEER!.\n";
				}
		} elseif ($bugs == 1) {
			if ($bugs2 > 1) {
			echo "$bugs little bug in the code, $bugs little bug.\n Take one out, patch it about, $bugs2 little bugs in the code.\n";
			} elseif ($bugs2 == 1) {
				echo "$bugs little bugs in the code, $bugs little bugs.\n Take one out, patch it about, $bugs2 little bug in the code.\n";
			} else {
				echo "$bugs little bugs in the code, $bugs little bugs.\n Take one out, patch it about, $bugs2 little bugs in the code - GO HAVE A BEER!.\n";
			}
		}

	$bugs = $bugs2;
	$bugs2 = mt_rand(0,117);
} while (($bugs2 > 0) || ($bugs > 0));

?>