<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $result;
    public function __construct($post)
    {
        $this->inputValue = $post['input-value'];
    }

    public function index(){
        $this->result =  str_word_count( $this->inputValue);
        return $this->result;
    }
}