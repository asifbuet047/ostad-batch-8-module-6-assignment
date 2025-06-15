<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    echo "Original String: $string, ";
    $vowelCount = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        switch (strtolower($string[$i])) {
            case 'a':
                $vowelCount++;
                break;
            case 'e':
                $vowelCount++;
                break;
            case 'i':
                $vowelCount++;
                break;
            case 'o':
                $vowelCount++;
                break;
            case 'u':
                $vowelCount++;
                break;
        }
    }
    echo "Vowel Count: $vowelCount, ";
    $reversedString = "";
    for ($i = strlen($string); $i > 0; $i--) {
        $reversedString[strlen($string) - $i] = $string[$i - 1];
    }
    echo "Reversed String: $reversedString\n";
}
