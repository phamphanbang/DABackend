<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeOfPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_parts')->insert([[
            'id' => 1,
            'type_of_test' => '1',
            'name' => 'Photographs',
            'description' => 'Four short statements regarding a photograph will be spoken only one time. The statements will not be printed. Of these four statements, select the one that best describes the photograph and mark your answer on the answer sheet.',
            'number_of_question' => 6,
        ],[
            'id' => 2,
            'type_of_test' => '1',
            'name' => 'Question-Response',
            'description' => 'Three responses to one question or statement will be spoken only one time. They will not be printed. Select the best response for the question, and mark your answer on the answer sheet.',
            'number_of_question' => 25,
        ],[
            'id' => 3,
            'type_of_test' => '1',
            'name' => 'Conversations',
            'description' => 'Conversations between two or three people will be spoken only one time. They will not be printed. Listen to each conversation and read the questions printed in the test book (the questions will also be spoken), select the best response for the question, and mark your answer on the answer sheet. Some questions may require responses related to information found in diagrams,etc. printed on the test book as well as what you heard in the conversations. There are three questions for each conversation.',
            'number_of_question' => 39,
        ],[
            'id' => 4,
            'type_of_test' => '1',
            'name' => 'Talks',
            'description' => 'Short talks such as announcements or narrations will be spoken only one time. They will not be printed. Listen to each talk and read the questions printed in the test book (the questions will also be spoken), select the best response for the question, and mark your answer on the answer sheet. Some questions may require responses related to information found in diagrams, etc. printed on the test book as well as what you heard in the talks. There are three questions for each talk.',
            'number_of_question' => 30,
        ],[
            'id' => 5,
            'type_of_test' => '2',
            'name' => 'Incomplete Sentences',
            'description' => 'Select the best answer of the four choices to complete the sentence, and mark your answer on the answer sheet.',
            'number_of_question' => 30,
        ],[
            'id' => 6,
            'type_of_test' => '2',
            'name' => 'Text Completion',
            'description' => 'Select the best answer of the four choices (words, phrases, or a sentence) to complete the text, and mark your answer on the answer sheet. There are four questions for each text.',
            'number_of_question' => 16,
        ],[
            'id' => 7,
            'type_of_test' => '2',
            'name' => 'Single Passages',
            'description' => 'A range of different texts will be printed in the test book. Read the questions, select the best answer of the four choices, and mark your answer on the answer sheet. Some questions may require you to select the best place to insert a sentence within a text. There are multiple questions for each text.',
            'number_of_question' => 29,
        ],[
            'id' => 8,
            'type_of_test' => '2',
            'name' => 'Multiple Passages',
            'description' => 'A range of different texts will be printed in the test book. Read the questions, select the best answer of the four choices, and mark your answer on the answer sheet. Some questions may require you to select the best place to insert a sentence within a text. There are multiple questions for each text.',
            'number_of_question' => 25,
        ]]);
    }
}
