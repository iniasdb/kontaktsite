<?php

namespace iniasDB;

use Exception;

class EnvParser {

    protected $path;

    /**
     * 
     * constructor
     * set path to .env file
     * 
     * if .env file does not exist
     *   throw exception
     * 
     */
    public function __construct(string $path) {
        if(!file_exists($path)) {
            echo "File does not exist";
            throw new Exception("File does not exist");
        }
        $this->path = $path;
    }


    /**
     * 
     * load .env content into _ENV array
     * 
     * ignore new lines
     * ignore comments (lines starting with #)
     * 
     */
    public function loadIntoEnv() {

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {


            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line);
            $name = trim($name);
            $value = trim($value);

            putenv("$name=$value");
        }
    }
}
?>