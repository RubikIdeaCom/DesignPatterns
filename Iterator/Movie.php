<?php
class Movie
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $rating;

    /**
     * Movie constructor.
     * @param string $title
     * @param float $rating
     */
    public function __construct(string $title, float $rating)
    {
        $this->title = $title;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function rating()
    {
        return $this->rating;
    }
}