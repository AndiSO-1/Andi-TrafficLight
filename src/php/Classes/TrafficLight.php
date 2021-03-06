<?php

/**
 * Class TrafficLight
 */
class TrafficLight{
    public $state = 0;
    public $red = false;
    public $yellow = false;
    public $green = false;
    public $pause = false;

    /**
     * Set the traffic light state
     *
     * @param $state
     */
    function setState($state)
    {
        $this->state = $state;
        // State choose which light turn on
        switch($state)
        {
            // State 0, Light: red
            default:
            case 0:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                $this->pause = false;
                break;
            // State 1, Light: red, yellow
            case 1:
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                $this->pause = false;
                break;
            // State 2, Light: green
            case 2:
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                $this->pause = false;
                break;
            // State 3, Light: yellow
            case 3:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                $this->pause = false;
                break;
            // State 4, Light: yellow -> blinks
            case 4:
                $this->red = false;
                $this->yellow = false;
                $this->green = false;
                $this->pause = true;
                break;
        }
    }

    /**
     * Get the traffic light state
     *
     * @return int
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * Change the traffic light state to the next one
     */
    function next()
    {
        if ($this->state == 4)
            $this->state = 0;
        else
            $this->state = ++$this->state % 4;
    }

    /**
     * Set the traffic light in pause state
     */
    function pause()
    {
        if ($this->state == 0 || $this->state == 2)
            $this->state = 4;
    }
}

?>