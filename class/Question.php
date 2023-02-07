<?php 

/**
 * Class Answer qui va nous permettre de créer des Questions
 */
class Question 
{

    private $id;
    private $question;
    private $explication;
    private $created_at;
    private $updated_at;

    private $answers = [];


    //initialisation de la question au moment de l'instanciation 
    public function __construct(string $question)
    {
        $this->setQuestion($question);
    }


    // GETTERS
    public function getId()
    {
        return $this->id;
    }
    
    public function getQuestion()
    {
        return $this->question;
    }
    
    public function getExplication()
    {
        return $this->explication;
    }
    
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    
    public function getCreateAt()
    {
        return $this->created_at;
    }



    // SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setQuestion($question)
    {
        $this->question = $question;
    }
    
    public function setExplication($explication)
    {
        $this->explication = $explication;
    }
    
    public function setUpdatedAt( $updated_at)
    {
        $this->updated_at =  $updated_at;
    }
    
    public function setCreateAt( $created_at)
    {
        $this->created_at =  $created_at;
    }




    // Other Methods
    public function addAnswer(Answer $answer)
    {
        array_push($this->answers, $answer);
    }
    public function getAnswers()
    {
        return $this->answers;
    }

}