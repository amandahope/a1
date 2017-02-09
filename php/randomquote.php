<?php

//Each quote in the array is an array which includes author and title as well as text of quote
$quoteArray =
[
  ['author' => 'Louise Glück',
   'title' => 'October',
   'quote' => '<em>you are not alone,</em> the poem said, in the dark tunnel.'
  ],

  ['author' => 'Lucie Brock-Broido',
   'title' => 'Domestic Mysticism',
   'quote' => 'I will betray as a god betrays, with tenderheartedness.'
  ],

  ['author' => 'Ada Limón',
   'title' => 'Downhearted',
   'quote' => 'What the heart wants? The heart wants her horses back.'
  ]
];

//Picks a random quote from the array
$selectedQuote = $quoteArray[array_rand($quoteArray, 1)];

//Assigns the quote text, author, and title to variables for easy use in the web page.
$author = $selectedQuote['author'];
$title = $selectedQuote['title'];
$quote = $selectedQuote['quote'];
