<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotozoneExample extends Controller
{
    // public function showExamples()
    // {
    //     $examples = [
    //         ['name' => 'Example1', 'image' => 'example-balloons.jpeg'],
    //         ['name' => 'Example2', 'image' => 'example-bg2.jpeg'],
    //         ['name' => 'Example3', 'image' => 'example-birthday3.jpeg'],
    //         ['name' => 'Example4', 'image' => 'example-flowers2.jpeg'],
    //         ['name' => 'Example5', 'image' => 'example-wedding3.jpeg'],
    //         ['name' => 'Example6', 'image' => 'example-people5.jpeg'],
    //     ];

    //     return view('dashboard', compact('examples'));
    // }

    public function showExamplesGallery()
    {
        $examplesGallery = [
            // ['name' => 'Example1', 'image' => 'example-balloons.jpeg'],
            // ['name' => 'Example2', 'image' => 'example-bg2.jpeg'],
            // ['name' => 'Example3', 'image' => 'example-birthday3.jpeg'],
            // ['name' => 'Example4', 'image' => 'example-flowers2.jpeg'],
            // ['name' => 'Example5', 'image' => 'example-wedding3.jpeg'],
            ['name' => 'Example6', 'image' => 'example-people5.jpeg'],
            // ['name' => 'Example7', 'image' => 'example-graduation.jpeg'],
            ['name' => 'Example8', 'image' => 'example-people1.jpeg'],
            // ['name' => 'Example9', 'image' => 'example-birthday.jpeg'],
            ['name' => 'Example10', 'image' => 'example-people2.jpeg'],
            // ['name' => 'Example11', 'image' => 'example-bg1.jpeg'],
            // ['name' => 'Example12', 'image' => 'example-wedding7.jpeg'],
            // ['name' => 'Example13', 'image' => 'example-wedding6.jpeg'],
            // ['name' => 'Example14', 'image' => 'example-flowers1.jpeg'],
            ['name' => 'Example15', 'image' => 'example-people3.jpeg'],
            // ['name' => 'Example16', 'image' => 'example-bg2.jpeg'],
            // ['name' => 'Example17', 'image' => 'example-birthday3.jpeg'],
            ['name' => 'Example18', 'image' => 'example-people.jpeg'],
            // ['name' => 'Example19', 'image' => 'example-wedding1.jpeg'],
            ['name' => 'Example20', 'image' => 'example-people4.jpeg'],
            // ['name' => 'Example21', 'image' => 'example-graduation.jpeg'],
            // ['name' => 'Example22', 'image' => 'example-balloons1.jpeg'],
            // ['name' => 'Example23', 'image' => 'example-wedding2.jpeg'],
            ['name' => 'Example24', 'image' => 'example-people6.jpeg'],
            // ['name' => 'Example25', 'image' => 'example-flowers.jpeg'],
            // ['name' => 'Example26', 'image' => 'example-bg.jpeg'],
            // ['name' => 'Example27', 'image' => 'example-wedding5.jpeg'],
            // ['name' => 'Example28', 'image' => 'example-wedding4.jpeg'],
            ['name' => 'Example29', 'image' => 'example-people7.jpeg'],
            // ['name' => 'Example30', 'image' => 'example-birthday1.jpeg'],
        ];

        return view('portfolio', compact('examplesGallery'));
    }
}
