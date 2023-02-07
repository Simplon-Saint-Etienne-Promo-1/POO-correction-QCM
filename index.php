<?php 

require_once './config/autoload.php';

$qcm = new Qcm();

$question1 = new Question('POO signifie');
$question1->addAnswer(new Answer('Php Orienté Objet'));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée'));
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::$GOOD_ANSWER));
$question1->setExplication('Sans commentaires si vous avez eu faux :-°');

$qcm->addQuestion($question1);
 
$question2 = new Question('POO signifie 2');
$question2->addAnswer(new Answer('Php Orienté Objet'));
$question2->addAnswer(new Answer('ProgrammatiOn Orientée'));
$question2->addAnswer(new Answer('Programmation Orientée Objet', Answer::$GOOD_ANSWER));
$question2->setExplication('Sans commentaires si vous avez eu faux :-°');

$qcm->addQuestion($question2);




$qcm->setAppreciation(array('0-10' => 'Pas top du tout ...',  '10-20' => 'Très bien ...'));



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./process/process_qcm.php" method="post">

    <input type="text" name="test" value="test">

        <?php foreach ($qcm->getQuestions() as $key => $question) { ?>
    
            <p><?=$question->getQuestion()?></p>
            
            <?php foreach ($question->getAnswers() as $answer) { ?>
                <div>
                    <input type="radio" id="<?=$key?>" name="<?= $key ?>" value="<?=$answer->getAnswer()?>">
                    <label for="<?=$key?>"><?=$answer->getAnswer()?></label>
                </div>
            <?php } ?>
        <?php } ?>

        <button type="submit">envoyer le questionnaire</button>
    </form>

</body>
</html>
