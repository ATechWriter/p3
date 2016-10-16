<?php

namespace DevsBFF\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function generate(Request $request)
    {
        $paraCount = $request->input('paraCount');

        define('__ROOT__', dirname(dirname(__FILE__)));

        $wordFile = (__ROOT__.'/Controllers/frankenWords.txt');
        $wordList = fopen($wordFile, 'r');
        $wordListRead = fread($wordList, filesize($wordFile));
        $wordArray = explode(PHP_EOL, $wordListRead);

        $paragraph = '';
        $sentenceCount = rand(4, 20);
        for ($i = $sentenceCount; $i > 0; $i--) {

            $sentence = '';
            $wordCount = rand(4, 9);
            for ($i = $wordCount; $i > 0; $i--) {
                $wordId = rand(0, 6965);
                $word = $wordArray[$wordId];
                $sentence = $sentence.$word;

                if ($i > 1) {
                    $sentence = $sentence.' ';
                } else {
                    $sentence = $sentence.'.';
                }

            }

            //echo $sentence;

            $paragraph = $paragraph.$sentence.' ';
        }
        echo $paragraph.'<br/>';
    }
}


# frakenWords.txt contains 6965 items
