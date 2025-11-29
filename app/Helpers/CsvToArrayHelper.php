<?php

namespace App\Helpers;

class CsvToArrayHelper
{
    protected string $filename;

    protected string $delimiter;

    public function __construct($filename = '', $delimiter = ',')
    {
        $this->filename = $filename;
        $this->delimiter = $delimiter;
    }

    public function handle(): false|array
    {
        if (! file_exists($this->filename) || ! is_readable($this->filename)) {
            return false;
        }

        $header = null;
        $data = [];
        if (($handle = fopen($this->filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $this->delimiter)) !== false) {
                if (! $header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }
}
