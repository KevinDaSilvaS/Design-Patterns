<?php 
require_once('LongView.php');
require_once('BookResource.php');
require_once('Book.php');
require_once('NatureResource.php');
require_once('NaturalPhenomena.php');

$book = new Book("Pinocchio",
"Pinocchio is a fictional character and the protagonist of the 
children's novel The Adventures of Pinocchio. 
Pinocchio was carved by a woodcarver named Geppetto in a Tuscan village. 
He was created as a wooden puppet but he dreams of becoming a real boy.",
"img.jpg","https://en.wikipedia.org/wiki/Pinocchio");

$bookResource = new BookResource($book);

$longView = new LongView($bookResource);

$longView->show();

echo "-----------------------------------";

$nature = new NaturalPhenomena("Aurora Borealis",
"An aurora sometimes referred to as polar lights, 
northern lights (aurora borealis), or southern lights (aurora australis), 
is a natural light display in the Earth's sky, 
predominantly seen in the high-latitude regions (around the Arctic and Antarctic).",
"aurora.jpg","https://en.wikipedia.org/wiki/Aurora");

$natureResource = new NatureResource($nature);

$longView = new LongView($natureResource);

$longView->show();

?>