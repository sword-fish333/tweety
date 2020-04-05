<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 4/5/20
 * Time: 4:31 PM
 */

namespace App;

trait Followable{

    public function follow(User $user){
        return $this->follows()->attach($user);
    }

    public function unfollow($user){
        return $this->follows()->detach($user);
    }
    public function follows(){
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }

    public function following($user){
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

    public function toggleFollow(User $user){
        if($this->following($user)){
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }
}