<?php

namespace Andinger\OpenLigaDbApi\Api;

use Andinger\OpenLigaDbApi\Model\Checkable;

class ArrayOfMatchResults implements Checkable
{
    /**
     * indicates if the results were already sorted
     * @var bool
     */
    protected $resultsSorted = false;

    /**
     * @var MatchResult[]
     */
    protected $matchResult = null;

    /**
     * @return MatchResult[]
     */
    public function getMatchResults()
    {
        return $this->matchResult;
    }

    /**
     * returns the final result (i.e. the match result with the highest orderId)
     * 
     * @return MatchResult
     */
    public function getFinalResult()
    {
        if(!$this->resultsSorted) {
            usort($this->matchResult, function(MatchResult $a, MatchResult $b) {
                $idA = $a->getOrderID();
                $idB = $b->getOrderID();

                if($idA === $idB) return 0;

                return $idA < $idB ? -1 : 1;
            });
        }

        return $this->matchResult[sizeof($this->matchResult) - 1];
    }

    public function isEmpty()
    {
        return $this->matchResult === null;
    }

    public function isValid()
    {
        return is_array($this->matchResult);
    }


}