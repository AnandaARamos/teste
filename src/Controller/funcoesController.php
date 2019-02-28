namespace App\Controller;

class funcoesController extends AppController
{

public function index()
{
$articles = $this->Articles->find('all');
$this->set(compact('articles'));
}
}