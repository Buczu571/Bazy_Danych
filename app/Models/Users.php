use App\Models\User;

class UserController extends Controller
{
    public function showDeleteConfirmation($userId)
    {
        $user = User::findOrFail($userId);
        return view('users.delete', compact('user'));
    }
}
