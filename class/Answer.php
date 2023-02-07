<?php


/**
 * Class Answer qui va nous permettre de créer des réponses
 */
class Answer 
{

    private $id;
    private $question_id;
    private $answer;
    private $good_answer = false;
    private $created_at;
    private $updated_at;

    public static $GOOD_ANSWER = true;


    public function __construct(string $answer, $isTrue=null)
    {
        if ($isTrue) {
            $this->setGoodAnswer($isTrue);
        }
        $this->answer = $answer;
    }


    // GETTERS
    public function getId()
    {
        return $this->id;
    }
    public function getQuestionId()
    {
        return $this->question_id;
    }

    public function getAnswer()
    {
        return $this->answer;
    }
    public function getGoodAnswer()
    {
        return $this->good_answer;
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
    public function setQuestionId($question_id)
    {
        $this->question_id = $question_id;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }
    public function setGoodAnswer($good_answer)
    {
        $this->good_answer = $good_answer;
    }
    public function setUpdatedAt( $updated_at)
    {
        $this->updated_at =  $updated_at;
    }
    
    public function setCreateAt( $created_at)
    {
        $this->created_at =  $created_at;
    }
}