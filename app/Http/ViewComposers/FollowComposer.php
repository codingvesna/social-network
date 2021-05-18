<?php


namespace App\Http\ViewComposers;


use App\Models\User;

class FollowComposer
{
    protected $users;

//    public function __construct(User $users)
//    {
//        $this->users = $users;
//    }

    public function compose ($view){
        $view->with('users', User::where('id', '!=', auth()->id())->get()->sortByDesc('created_at' )->take(3));
    }
}
