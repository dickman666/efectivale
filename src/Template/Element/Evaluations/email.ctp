<?php 
    foreach ($questions as $key => $question) {
        echo ($question->count > 0)? $question->count.'.-' : '';
        echo $question->name;
        echo '<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: '.( ($question->answer)? $question->answer->answer : 'Sin respuesta');

        echo '<br><br>';
    }
?>