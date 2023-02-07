<?php 



class Qcm
{
    private $questions = [];

    private $appreciations = [];


    public function getQuestions()
    {
        return $this->questions;
    }

    public function addQuestion(Question $question)
    {
        array_push($this->questions, $question);
    }




    public function setAppreciation($apreciation) {
        array_push($this->appreciations, $apreciation);
    }
}