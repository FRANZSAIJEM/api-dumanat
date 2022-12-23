<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index() {
        $samples = Sample::orderBy('name')
            ->orderBy('name')->get();

        return response()->json([
            'sample' => $samples
        ]);
    }

    public function show(Sample $samples) {
        $samples->load('samples');
        return response()->json($samples);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required',
            'format' => 'string|required',
            'size' => 'string|required',



        ]);

        $sample = sample::create($request->all());

        return response()->json($sample);
    }

    public function update(sample $sample, Request $request) {
        $sample->update($request->all());

        return response()->json($sample);
    }

    public function destroy(sample $sample) {
        $sample->delete();
        return response()->json(['message'=>'sample has been deleted.']);
    }
}
