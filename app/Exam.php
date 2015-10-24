<?php

namespace EthioShare;

use EthioShare\User;
use EthioShare\Paper;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
	protected $fillable = [
		'subject',
		'description',
		'level',
		'year',
		'school',
		'accessibility'
	];

	public function addPaper(Paper $paper)
	{
		return $this->papers()->save($paper);
	}
	
    public function papers()
    {
    	return $this->hasMany(Paper::class);
    }

    public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function ownedBy(User $user)
    {
    	return $this->user_id == $user->id;
    }
}