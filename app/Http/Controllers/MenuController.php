<?php 
namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Retrieve all menu items
        $menuItems = MenuItem::all();
        return view('edu-global.menu.index', compact('menuItems'));
    }
}
