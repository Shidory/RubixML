<?php

namespace Rubix\ML\Graph\Nodes;

class Cell extends BinaryNode
{
    /**
     * The number of training points in this cell.
     *
     * @var int
     */
    protected $n;

    /**
     * The isolation score.
     *
     * @var float
     */
    protected $score;

    /**
     * @param  float  $score
     * @return void
     */
    public function __construct(int $n, float $score)
    {
        $this->n = $n;
        $this->score = $score;
    }

    /**
     * Return the inumber of training points in this cell.
     *
     * @return int
     */
    public function n() : int
    {
        return $this->n;
    }

    /**
     * Return the isloation score.
     *
     * @return float
     */
    public function score() : float
    {
        return $this->score;
    }
}