@extends('layouts.master')

@section('content')

    <h1>Here's Your FrankenIpsum Text</h1>

    <div class='lorem'>

        <!-- Trying to get the array to show up -->
        <?php print_r($allParas); ?>

        <!-- @foreach  ($allParas as $paragraph) {
            <p>$paragraph</p>
        } -->
    </div>

@endsection
