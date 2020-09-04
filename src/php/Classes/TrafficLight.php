<?php

/**
 * Class TrafficLight
 */
class TrafficLight{
    public $red = false;
    public $yellow = false;
    public $green = false;

    /**
     * @param int $state
     */
    function setState($state = 0)
    {
        // State choose which light turn on
        switch($state)
        {
            // State 0, Light: red
            default:
            case 0:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                break;
            // State 1, Light: red, yellow
            case 1:
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                break;
            // State 2, Light: green
            case 2:
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                break;
            // State 3, Light: yellow
            case 3:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                break;
        }
    }

    /**
     * @param int $state
     * @return int
     */
    function nextState($state = 0)
    {
        return ++$state % 4;
    }
}

?>