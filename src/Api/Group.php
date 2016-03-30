<?php

namespace Andinger\OpenLigaDbApi\Api;

class Group extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $groupName = null;

    /**
     * @var integer
     */
    protected $groupOrderID = null;

    /**
     * @var integer
     */
    protected $groupID = null;

    /**
     * create the group entity by an existing match entity
     *
     * @param Match $match
     * @return Group
     */
    public static function createFromMatch(Match $match)
    {
        $group = new self();
        $group->groupName = $match->getGroupName();
        $group->groupOrderID = $match->getGroupOrderID();
        $group->groupID = $match->getGroupID();

        return $group;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->groupName;
    }

    /**
     * @return integer
     */
    public function getOrderId()
    {
        return $this->groupOrderID;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->groupID;
    }

    public function isEmpty()
    {
        return (
            $this->groupName === null
            && $this->groupOrderID === null
            && $this->groupID === null
        );
    }

}