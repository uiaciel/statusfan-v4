<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    protected $table = 'rf_blogs';
    protected $guarded = ['id', 'created_at'];


    /*
     * Request/User many-to-one relationship
     */

    public function category()
    {
         return $this->belongsTo('App\Kategori', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /*
     * Belongs to current User scope
     */
    public function scopeMine($query)
    {
        return $query->where('user_id', Auth::id());
    }

    public function viewer()  {

    // assume you have a clicks  field in your DB

     $this->viewer = $this->viewer + 1;
     $this->save();

   }

   public function stripped()
    {
        return strip_tags(\Str::limit($this->content, 400));
      }

}
