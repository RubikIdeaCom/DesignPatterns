<?php
require 'Movie.php';
require 'Movies.php';
require 'MoviesIterator.php';
// movies
$movie1 = new Movie('Movie1', 2.5);
$movie2 = new Movie('Movie2', 7);
$movie3 = new Movie('Movie3', 8);
$movie4 = new Movie('Movie4', 7);
$movie5 = new Movie('Movie5', 9.5);
$movie6 = new Movie('Movie6', 7);

//movie collection
$movieCollection = new Movies();
//add movies to collection
$movieCollection->add($movie1);
$movieCollection->add($movie2);
$movieCollection->add($movie3);
$movieCollection->add($movie4);
$movieCollection->add($movie5);
$movieCollection->add($movie6);

foreach ($movieCollection as $movie) {
    echo '-' . $movie->title() . '<br/>';
}

//reverse order
echo '<br/>' . 'movies in reverse order' . '<br/>';
foreach ($movieCollection->getReverseIterator() as $movie) {
    echo '-' . $movie->title() . '<br/>';
}

//movies with rate 7 only
echo '<br/>' . 'movies with rating =7 only' . '<br/>';
foreach ($movieCollection->getRatedIterator(7) as $movie) {
    echo '-' . $movie->title() . '<br/>';
}
