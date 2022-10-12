<?php
    abstract class Question {}
    class Single extends Question {}
    class Multiple extends Question {}

    $input = '';
    // =============================================
    switch($input) {
        case 'single':
            $quetion = new Single();
            break;
        case 'multi':
            $quetion = new Multiple();
            break;
        default:
            throw new Exception(message: 'Ivalid question type');
    }
    // ==============================================
    var_dump($question);

    $question = match ($input) {
        'single' => new Single(),
        'multi' => new Multiple()
    };
