<?php

$quoteArray =
[
  ['author' => 'Louise Gluck', 'title' => 'October', 'quote' => '<em>you are not alone,</em> the poem said, in the dark tunnel.'],
  ['author' => 'Lucie Brock-Broido', 'title' => 'Domestic Mysticism', 'quote' => 'I will betray as a god betrays, with tenderheartedness.'],
  ['author' => 'Ada Limon', 'title' => 'Downhearted', 'quote' => 'What the heart wants? The heart wants her horses back.']
];

$selectedQuote = $quoteArray[array_rand($quoteArray, 1)];

$author = $selectedQuote['author'];
$title = $selectedQuote['title'];
$quote = $selectedQuote['quote'];
