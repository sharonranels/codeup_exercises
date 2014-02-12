<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
function list_items($list) {
    $todos = "";
    foreach ($list as $key => $item) {
        $temp_key = $key + 1;
        // Display each item and a newline
        $todos .= "[{$temp_key}] {$item}\n";
    }
    return $todos;
    

}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
// DEFAULT = ($upper = FALSE) in THIS CASE
function get_input($upper = FALSE) {
    $input = trim(fgets(STDIN));
    
    if ($upper == TRUE) {
       $input = strtoupper($input);
    }
    
    return $input;
}

// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);
    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(true);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $rkey = get_input();
        $rkey = $rkey - 1;
        // Remove from array
        unset($items[$rkey]);
        $items = array_values($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
?>