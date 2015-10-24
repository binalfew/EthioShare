<?php

namespace EthioShare;

use File;
use EthioShare\Exam;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Paper extends Model
{
	protected $table = 'exam_papers';

	protected $fillable = ['path', 'name'];

	public function setNameAttribute($name)
	{
		$this->attributes['name'] = $name;

		$this->path = $this->baseDir() . '/' . $name;
	}

    public function exam()
    {
    	return $this->belongsTo(Exam::class);
    }

    public function baseDir()
    {
    	return 'uploaded/papers';
    }

    public function delete()
    {
        File::delete([$this->path]);

        parent::delete();
    }
}