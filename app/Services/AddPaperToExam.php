<?php

namespace EthioShare\Services;

use EthioShare\Exam;
use EthioShare\Paper;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddPaperToExam {

	protected $exam;

	protected $file;

	public function __construct(Exam $exam, UploadedFile $file)
	{
		$this->exam = $exam;
		$this->file = $file;
	}

	public function save()
	{
		$paper = $this->exam->addPaper($this->makePaper());

		$this->file->move($paper->baseDir(), $paper->name);
	}

	protected function makePaper()
	{
		return new Paper(['name' => $this->makeFileName()])	;
	}

	protected function makeFileName()
	{
		$name = sha1(time() . $this->file->getClientOriginalName());
		
    	$extenstion = $this->file->getClientOriginalExtension();

    	return "{$name}.{$extenstion}";
	}
}