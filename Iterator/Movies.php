<?php
class Movies implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $list = [];

    /**
     * add a movie to the movies collection
     *
     * @param Movie $movie
     */
    public function add(Movie $movie): void
    {
        $this->list[] = $movie;
    }

    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator(): iterable
    {
        return new MoviesIterator($this->list);
    }

    /**
     * returns an instance of MoviesIterator with reverse order of movies
     * @return MoviesIterator
     */
    public function getReverseIterator(): iterable
    {
        return new MoviesIterator($this->list, true);
    }

    /**
     * returns a traversable collection of movies with specified rating
     * @param float $rating
     * @return MoviesIterator
     */
    public function getRatedIterator(float $rating): iterable
    {
        $filteredMovies = array_filter($this->list, function (Movie $movie) use ($rating) {
            return $movie->rating() === $rating;
        });

        //reindex filteredMovies from zero
        $filteredMovies = array_values($filteredMovies);

        return new MoviesIterator($filteredMovies);
    }
}