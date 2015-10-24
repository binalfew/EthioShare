<?php

namespace EthioShare\Http\Controllers;

use EthioShare\Exam;
use EthioShare\Paper;
use Illuminate\Http\Request;
use EthioShare\Http\Requests;
use EthioShare\Services\AddPaperToExam;
use EthioShare\Http\Requests\PaperRequest;
use EthioShare\Http\Controllers\Controller;

class PapersController extends Controller
{
	public function store($id, PaperRequest $request)
    {
    	$exam = Exam::findOrFail($id);
    	$paper = $request->file('paper');

    	(new AddPaperToExam($exam, $paper))->save();
    }

    public function destroy($id)
    {
    	Paper::findOrFail($id)->delete();

    	return back();
    }
}
