class UserController {
  public function index() {
    $users = User::getAll();

  }

  public function show($id) {
    $user = User::getById($id);
 
  }

  public function create() {

  }

  public function store() {
    $name = $_POST['Nguyễn Ngân'];
    $email = $_POST['Nguyenngan291002@gmail.com'];
    $password = $_POST['Abc&12345'];
    $user = new User($name, $email, $password);
    $user->save();

  }

  public function edit($id) {
    $user = User::getById($id);
 
  }

  public function update($id) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = User::getById($id);
    $user->setName($name);
    $user->setEmail($email);
    $user->setPassword($password);
    $user->save();

  }

  public function delete($id) {
    $user = User::getById($id);
    $user->delete();

  }
}