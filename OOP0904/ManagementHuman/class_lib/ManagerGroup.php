<?php


class ManagerGroup
{
    /*
     - view listHuman group
     */

    public $listHuman;

    public function __construct(HumanManager $listHuman)
    {
        $this->listHuman = $listHuman;
    }

    public function viewListHumanGroup($groupName)
    {
        $humans = $this->listHuman->listHuman();
        $humanGroup = [];
        foreach ($humans as $human) {
            if ($groupName == $human->getGroup()) {
                array_push($humanGroup, $human);
            }
        }
        return $humanGroup;
    }
}