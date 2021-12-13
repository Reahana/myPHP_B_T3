<?php
namespace App\classes;

class Counting
{   
    public $myString;
    public $wordCount;
    public $charCount;
    public $total;
    public function __construct($data)
    {
        $this->myString = $data['my_string'];
    }
    public function index()
    {
     $this->charCount=strlen($this->myString);
      $this->wordCount =str_word_count($this->myString);
      $this->total = 'total word:' . $this->wordCount.' '.'total character'.$this->charCount;
      return $this->total;
    }
}