?php

namespace App\Http\Controller
use illuminate\Http\Request
use App\Models\User

class UserController extends Controller
{
    function index():view {
        $users = User::all();
        $data['users'] = $users;
        return view(view: 'user.index' , data: ['user' => $users]);


    }
}
