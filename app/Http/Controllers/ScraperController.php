<?php

namespace DevsBFF\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ScraperController extends Controller
{
    /**
    * Show two forms
    *
    * @return Illuminate\Http\Response
    */

    public function first()
    {
        return 'Hi from the scraper controller';
    }
}
