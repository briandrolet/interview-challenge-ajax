<?php

class App
{

    /**
     * The app version.
     *
     * @return float
     */
    public function getVersion()
    {
        return 1.2;
    }

    /**
     * Tries to get a request variable. If not set, returns null.
     *
     * @param $name
     * @return string
     */
    public function getRequestVar($name): ?string
    {
        if (isset($_REQUEST[$name])) {
            return $_REQUEST[$name];
        }

        return null;
    }
}
