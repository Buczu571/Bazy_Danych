use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Walidacja danych wejściowych
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Tworzenie nowego użytkownika
        User::create($request->all());

        return redirect()->route('users.index');
    }

    // Implementuj pozostałe metody kontrolera tak jak potrzebujesz
}
