<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulletin
 * @package App
 */
class Bulletin extends Model
{
    /**
     * @var string
     */
    protected $table = 'bulletins';

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'requires',
            'image' => 'required|mimes:jpg',
            'price' => 'required'
        ];
    }

    protected $fillable =  ['title', 'description', 'price', 'image', 'status', 'user_id', 'created_at', 'updated_at'];
}
