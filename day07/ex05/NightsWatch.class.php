<?php
class NightsWatch implements IFighter  // This function returns an array with the names of the interfaces that the given class and its parents implement.
{
    private $arr;  //the property or method can ONLY be accessed within the class
    public function recruit($s)
    {
        $this->arr[] = $s;
    }
    function fight()
    {
        foreach ($this->arr as $s) {
            if (method_exists(get_class($s), 'fight'))
                $s->fight();
        }
    }
}
?>
