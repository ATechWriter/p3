<?php

namespace DevsBFF\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    public function generate(Request $request)
    {
        # Get the number of paragraphs the user requested
        $paraCount = $request->input('paraCount');

        # Turn the word list into an array
        include_once 'Constants.php';
        $wordFile = (__ROOT__.'/Controllers/frankenWords.txt');
        $wordList = fopen($wordFile, 'r');
        $wordListRead = fread($wordList, filesize($wordFile));
        $wordArray = explode(PHP_EOL, $wordListRead);

        # Create as many paragraphs as the user requested
        for ($p = $paraCount; $p > 0; $p--) {

            $paragraph = '';
            $allParas = array('');

            # Determine the number of sentences in the paragraph
            $sentenceCount = rand(4, 20);

            for ($s = $sentenceCount; $s > 0; $s--) {

                $sentence = '';

                # Determine the number of words in the sentence
                $wordCount = rand(4, 9);

                for ($w = 1; $w <= $wordCount; $w++) {

                    # Pick an arbitrary word from the arrayified list
                    $wordId = rand(0, 6965);
                    $word = $wordArray[$wordId];

                    # If it's the first in the sentence, capitalize
                    if ($w == 1) {
                        $word = ucfirst($word);
                    }

                    # Join words onto sentence each time through
                    $sentence = $sentence.$word;

                    # Add spaces after words and a period at end of sentence
                    if ($w == $wordCount) {
                        $sentence = $sentence.'.';
                    } else {
                        $sentence = $sentence.' ';
                    }

                }

                # Join sentences into paragraphs
                $paragraph = $paragraph.$sentence.' ';
                if ($s == 0) {
                    $paragraph = $paragraph.'</p>';
                }

            }

            # Join paragraphs together
            $allParas = array_push($allParas, $paragraph);

            // # Return each paragraph as a lorem-classed <p> element
            // $lorem = '<p class="lorem">'.$paragraph.'</p>';

        }

        # Send it to a view
        return view('lorem')->with('allParas', $allParas);
    }
}
