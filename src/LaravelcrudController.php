<?php 
 
namespace Oulkadi\Laravelcrud;
 
use App\Http\Controllers\Controller;

 
class LaravelcrudController extends Controller
{
 
    public function index()
    {
        return view('laravelcrud::create');
    }
 
}