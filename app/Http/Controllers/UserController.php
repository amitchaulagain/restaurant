<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\MenuItem;
use App\Models\cms;
use App\Models\Facilities;
use App\Models\Gallary;
use App\Models\Post;
use App\Models\Property;
use App\Models\Reviews;
use App\Models\Service;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public $siteSetting;

    public function __construct()
    {
        $this->siteSetting = SiteSettings::pluck('value', 'key');
    }


    public function not_found()
    {
        $title = "Page Not Found";
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('errors.404', $data);
    }

    public function loginForm()
    {
        $title = "Log In";

        $data = compact('title');
        return view('User.UserLogIn', $data);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        // dd('error');

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            $id = $user->id;
            $user = User::with('Data', 'Reviews')->findOrFail($id);
            $request->session()->put('user', $user->toArray());
            return redirect(route('userHome'));
            // return redirect()->intended();
        } else {
            $request->validate([
                'password' => 'password'
            ]);
        }
    }

    //sending to sign up form
    public function signupForm()
    {
        $title = "Sign In";

        $data = compact('title');
        return view('User.UserSignUp', $data);
    }

    //signing up
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'conf_password' => 'required|same:password'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user_data = new UserData;
        $user_data->id = $user->id;
        $user_data->save();


        return redirect(route('UserLoginForm'));
    }

    //managing login logout
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        // $request->sessin()->flush();

        // return redirect(url(route('userHome')));
        return redirect()->back();
    }

    //User Profile Page
    public function userprofile(Request $request)
    {
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $user = User::with('Data')->findOrFail($userId);
        $title = $user->name . " | Profile";
        $menu = "none";

        $data = compact('title', 'menu', 'user');
        return view('User.Profile', $data);
    }

    //edit profile Page
    public function edituserprofile(Request $request)
    {
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $user = User::with('Data')->findOrFail($userId);
        $title = $user->name . " | Edit Profile";
        $menu = "none";

        $data = compact('title', 'menu', 'user');
        return view('User.editProfile', $data);
    }

    public function editeduserprofile(Request $request)
    {
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $userId . ',id',
            'image' => 'mimes:png,jpg'
        ]);
        $user = User::with('Data')->findOrFail($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        $user_data = UserData::find($user->id);
        if ($user_data === null) {
            $user_data = new UserData;
            $user_data->id = $user->id;
            $user_data->save();
        }
        $user_data->about = $request->about;
        if ($request->hasFile('image')) {
            Storage::delete('public/userdata/' . $user_data->image);
            $image = $request->file('image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/userdata', $iname);
            if ($store) {
                $user_data->image = $iname;
            }
        }
        $user->save();
        $user_data->save();
        $request->session()->put('user', $user);

        return redirect(route('UserProfile'));
    }

    //delete profile image using AJAX
    public function del_profile_img(Request $request)
    {
        if ($request->ajax()) {
            $userId = $request->session()->get('user')['id'];
            $user_data = UserData::find($userId);
            $res = Storage::delete('public/userdata/' . $user_data->image);
            if ($res) {
                $user_data->image = null;
                $user_data->save();
                $user = User::with('Data')->findOrFail($userId);
                $request->session()->put('user', $user->toArray());
                return true;
            } else {
                return false;
            }
        }
    }

    //Changing User's Password
    public function user_chng_password(Request $request)
    {
        // dd($request);
        $user = $request->session()->get('user');
        $userId = $user['id'];
        $title = $user['name'] . " | Change Password";
        $menu = "none";

        $data = compact('title', 'menu', 'user');
        return view('User.chngPassword', $data);
    }

    public function user_save_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);
        $id = $request->session()->get('user')['id'];
        $user = User::findOrFail($id);

        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->forget('user');

        return redirect()->back();
    }

    //sending home
    public function userHome(Request $request)
    {
        $title = "Home";
        $menu = "home";
        $featuredPro = Property::with('Cate', 'City')
            ->where('public', true)
            ->where('featured', true)
            ->latest()->limit(4)->get();
        $newlyAdded = Property::with('Cate', 'City')
            ->where('public', true)
            // ->where('featured', false)
            ->latest()->limit(6)->get();
        $showcate = Category::latest()->limit(6)->get();
        $catedata = Category::with('Pro')->latest()
            // ->limit(3)
            ->get();

        $data = compact('title', 'menu', 'featuredPro', 'newlyAdded', 'showcate', 'catedata');
        return view('frontend.home', $data);
    }

    //Showing Properties
    public function show(Request $request)
    {
        $show = Property::with('Cate', 'City')
            ->where('public', true)
            ->latest()
            ->paginate(10);
        $title = 'Properties';
        $menu = 'none';

        $data = compact('title', 'menu', 'show');
        if ($request->ajax()) {
            return view('frontend.showinitem', compact('show'));
        } else {
            return view('frontend.show', $data);
        }
    }

    public function show_category(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'cate' => 'exists:categories,slug_name'
        ])->validate();
        $cate_fltr = $request->route()->parameter('cate');
        $cate = Category::where('slug_name', '=', $cate_fltr)->first();
        $show = Property::with('Cate', 'City')
            ->where('public', true)
            ->where('category', '=', $cate->id)
            // ->where('featured', false)
            ->latest()
            // ->limit(6)
            ->paginate(10);
        // ->get();
        $title = $cate->name;
        $menu = 'category';

        $data = compact('title', 'menu', 'show', 'cate_fltr');
        return view('frontend.show', $data);
    }

    public function show_city(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'city' => 'exists:cities,slug_city'
        ])->validate();
        $city_fltr = $request->route()->parameter('city');
        $city = City::where('slug_city', '=', $city_fltr)->first();
        $show = Property::with('Cate', 'City')
            ->where('public', true)
            ->where('city', '=', $city->id)
            // ->where('featured', false)
            ->latest()
            // ->limit(6)
            ->paginate(10);
        // ->get();
        $title = $city->city;
        $menu = 'city';

        $data = compact('title', 'menu', 'show', 'city_fltr');
        return view('frontend.show', $data);
    }

    public function show_purpose(Request $request)
    {
        $purpose_fltr = $request->route()->parameter('purpose');
        $show = Property::with('Cate', 'City')
            ->where('public', true)
            ->where('purpose', '=', $purpose_fltr)
            // ->where('featured', false)
            ->latest()
            // ->limit(6)
            ->paginate(10);
        // ->get();
        $title = ucfirst($purpose_fltr);
        $menu = 'purpose';

        $data = compact('title', 'menu', 'show', 'purpose_fltr');
        return view('frontend.show', $data);
    }

    public function show_pro(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'pro' => 'exists:properties,title_slug'
        ])->validate();
        $pro = $request->route()->parameter('pro');
        $item = Property::with('Cate', 'City')
            ->where('title_slug', '=', $pro)
            ->first();
        $faci = [];
        $facis = json_decode($item->faci);
        if (!empty($facis)) {
            foreach ($facis as $key => $value) {
                $faci[$key] = Facilities::where('slug_faci', '=', $value)->first() ?? null;
            }
        }
        $gals = Gallary::with('Pro')->where('pro_id', '=', $item->id)->get();
        $userId = $request->session()->get('user')['id'] ?? null;
        $user_reviews = Reviews::where('u_id', $userId)->where('pro_id', $item->id)->latest()->get();
        $reviews = Reviews::with('Users')
            ->where('u_id', '!=', $userId)->where('pro_id', $item->id)
            ->latest()
            ->limit(10)
            ->get();
        // dd($reviews);
        $title = $item->title;
        $menu = 'none';

        $data = compact('title', 'menu', 'item', 'gals', 'faci', 'user_reviews', 'reviews');
        return view('frontend.property', $data);
    }

    //filter Property
    public function ajaxFilter(Request $request)
    {
        if ($request->ajax()) {
            // dd($request);
            $cate = $request->category;
            if ($cate == '*') {
                $cateS = ['category', '!=', null];
            } else {
                $cate = Category::where('slug_name', '=', $cate)->first();
                $cateS = ['category', '=', $cate->id];
            }
            $city = $request->city;
            if ($city == '*') {
                $cityS = ['city', '!=', null];
            } else {
                $city = City::where('slug_city', '=', $city)->first();
                $cityS = ['city', '=', $city->id];
            }
            $purpose = $request->purpose;
            if ($purpose == '*') {
                $purposeS = ['purpose', '!=', null];
            } else {
                $purposeS = ['purpose', '=', $purpose];
            }
            $search = stripslashes(strip_tags($request->search));
            $searchStr = ['title', 'LIKE', '%' . $search . '%'];
            $sort = $request->sort;
            switch ($sort) {
                case 'latest':
                    $sortW = 'created_at';
                    $sortS = 'desc';
                    break;
                case 'oldest':
                    $sortW = 'created_at';
                    $sortS = 'asc';
                    break;
                case 'phtl':
                    $sortW = 'price';
                    $sortS = 'desc';
                    break;
                case 'plth':
                    $sortW = 'price';
                    $sortS = 'asc';
                    break;
                case 'ahtl':
                    $sortW = 'area';
                    $sortS = 'desc';
                    break;
                case 'alth':
                    $sortW = 'area';
                    $sortS = 'asc';
                    break;
            }

            $show = Property::with('Cate', 'City')
                ->where('public', true)
                ->where([
                    $cateS,
                    $cityS,
                    $purposeS,
                    $searchStr,
                ])
                ->orderBy($sortW, $sortS)
                ->paginate(10);

            return view('frontend.showinitem', compact('show'));
        }
    }

    //search Property
    public function propSearch(Request $request)
    {
        $request->validate([
            'purpose' => 'required',
        ]);

        $SecStr = stripslashes(strip_tags($request->search));
        $searchStr = '%' . $SecStr . '%';
        $purpose = $request->purpose;
        if ($purpose == '*') {
            $purposeS = ['purpose', '!=', null];
        } else {
            $purposeS = ['purpose', '=', $purpose];
        }
        $show = Property::with('Cate', 'City')
            ->where('public', true)
            ->where([
                $purposeS,
                ['title', 'LIKE', $searchStr]
            ])
            ->latest()
            ->paginate(10);
        $title = 'Propeties';
        $menu = 'none';

        $data = compact('title', 'menu', 'show', 'SecStr', 'purpose');
        return view('frontend.show', $data);
    }

    //saving Property Ajax
    public function save_pro($pro, $id, Request $request)
    {
        if ($request->ajax()) {
            // dd($pro, $request);
            $res = true;
            $userId = $request->session()->get('user')['id'];
            $user_data = UserData::find($userId);
            if ($user_data === null) {
                $user_data = new UserData;
                $user_data->id = $userId;
                $user_data->save();
            }
            $saved = json_decode($user_data->saved, true);
            if ($saved == null) {
                $saved = array();
            }
            if (in_array($pro, $saved)) {
                unset($saved[$id]);
                $res = false;
            } else {
                $saved[$id] = $pro;
                $res = true;
            }
            $user = User::with('Data')->findOrFail($userId);
            $request->session()->put('user', $user->toArray());
            $user_data->saved = json_encode($saved, true);
            $user_data->save();

            return $res;
        }
    }

    public function show_saved_pro(Request $request)
    {
        $userId = $request->session()->get('user')['id'];
        $user_data = UserData::find($userId);
        $saved = json_decode($user_data->saved, true);
        $ids = [];
        foreach ($saved as $key => $save) {
            array_push($ids, $key);
        }
        $show = Property::with('Cate', 'City')
            ->whereIn('id', $ids)
            ->paginate(10);
        // dd($show);
        $title = 'Saved Properies';
        $menu = 'none';

        $data = compact('title', 'menu', 'show');
        return view('User.savedPro', $data);
    }

    //adding property review using ajax
    public function add_review(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'review_text' => 'required'
            ]);
            $userId = $request->session()->get('user')['id'];
            $review = new Reviews;
            $review->u_id = $request->u_id;
            $review->pro_id = $request->pro_id;
            $review->review = $request->review_text;
            $review->save();
            $user = User::with('Data')->findOrFail($userId);
            $request->session()->put('user', $user->toArray());

            $res = ['status' => true, 'review' => $review];
            return json_encode($res, true);
        }
    }

    //deleting review with ajax
    public function del_review($id, Request $request)
    {
        if ($request->ajax()) {
            $userId = $request->session()->get('user')['id'];
            $review = Reviews::FindOrFail($id);
            $review->delete();
            $user = User::with('Data')->findOrFail($userId);
            $request->session()->put('user', $user->toArray());

            $res = ['status' => true];
            return json_encode($res, true);
        }
    }

    //showing about page
    public function show_about(Request $request)
    {
        $title = 'About';
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('frontend.about', $data);
    }

    public function show_faq(Request $request)
    {
        $title = 'FAQ';
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('frontend.faq', $data);
    }

    public function show_terms(Request $request)
    {
        $title = 'Terms';
        $menu = 'none';

        $data = compact('title', 'menu');
        return view('frontend.terms', $data);
    }

    public function home(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.home', $data);
    }

    public function aboutus(Request $request)
    {
        $title = "About Us";
        $siteSetting = $this->siteSetting;
        $services = Service::all();
        // $cms = Cms::all();

        $data = compact('title', 'siteSetting', 'services');
        return view('edu-global.aboutus', $data);
    }

    public function services(Request $request)
    {
        $title = "Services";
        $siteSetting = $this->siteSetting;

        $services = Service::all();
        $data = compact('title', 'siteSetting', 'services');
        return view('accounting-master.services', $data);
    }

    public function contactus(Request $request)
    {
        $title = "Contact Us";
        $siteSetting = SiteSettings::pluck('value', 'key');
        $services = Service::all();

        $data = compact('title', 'siteSetting', 'services');
        return view('edu-global.contactus', $data);
    }
    public function book(Request $request)
    {
        $title = "Book A Table";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.book', $data);
    }
    public function menu(Request $request)
    {
        $title = "Menu";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();
        $menuItems = MenuItem::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms','menuItems');
        return view('edu-global.menu', $data);
    }


    public function cart(Request $request)
    {
        $title = "Menu";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();
        $menuItems = MenuItem::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms','menuItems');
        return view('edu-global.menu', $data);
    }

    public function checkout(Request $request)
    {
        $title = "Menu";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();
        $menuItems = MenuItem::all();

        $cart = session()->get('cart', []);


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms','menuItems','cart');
        return view('edu-global.checkout', $data);
    }




    public function single_service(Request $request)
    {
        $title = "Services ";
        $siteSetting = SiteSettings::pluck('value', 'key');
        $services = Service::all();

        $id = $request->input('id');

        $service = Service::findorfail($id);

        $data = compact('title', 'siteSetting', 'service', 'services');
        return view('accounting-master.service', $data);
    }

    public function single_blog(Request $request)
    {
        $title = "Blog ";
        $siteSetting = SiteSettings::pluck('value', 'key');
        $services = Service::all();

        $id = $request->input('id');

        $posts = Post::where('featured', true)
            ->get();

        $post = Post::findorfail($id);

        $data = compact('title', 'siteSetting', 'post', 'services','posts');
        return view('edu-global.blog', $data);
    }

    public function list_blogs(Request $request)
    {
        $title = "Blog ";
        $siteSetting = SiteSettings::pluck('value', 'key');
        $services = Service::all();

        $posts_tax_tips = Post::where('featured', true)
            ->where('excerpt', 'Tax Tips')
            ->get();

        $posts_investments = Post::where('featured', true)
            ->where('excerpt', 'Investment & Planning')
            ->get();

        $posts_insights = Post::where('featured', true)
            ->where('excerpt', 'Insights & Advice')
            ->get();

        $data = compact('title', 'siteSetting', 'posts_tax_tips','posts_investments','posts_insights', 'services');
        return view('edu-global.blogs', $data);
    }
    public function lodge_in_person(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.lodge-in-person', $data);
    }

    public function tax_review(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.tax-review', $data);
    }
    public function small_business(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.small-business', $data);
    }
    public function bas(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.bas', $data);
    }
    public function company_accounting(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.company-accounting', $data);
    }
    public function bookkeeping(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.bookkeeping', $data);
    }

    public function tax_return(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.tax-return', $data);
    }
    public function business_services(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.business-services', $data);
    }
    public function financial_services(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.financial-services', $data);
    }
    public function financial_planning(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.financial-planning', $data);
    }
    public function smsf(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.smsf', $data);
    }
    public function tax_calculator(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.tax-calculator', $data);
    }
    public function tax_checklist(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.tax-checklist', $data);
    }
    public function resources(Request $request)
    {
        $title = "Home";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('accounting-master.tax-calculator', $data);
    }

    public function australia(Request $request)
    {
        $title = "Australia";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.australia', $data);
    }

    public function canada(Request $request)
    {
        $title = "Canada";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.canada', $data);
    }
    public function europe(Request $request)
    {
        $title = "Europe";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.europe', $data);
    }
    public function korea(Request $request)
    {
        $title = "Korea";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.korea', $data);
    }
    public function nz(Request $request)
    {
        $title = "New Zealand";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.nz', $data);
    }
    public function uae(Request $request)
    {
        $title = "UAE";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.uae', $data);
    }

    public function usa(Request $request)
    {
        $title = "USA";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.usa', $data);
    }

    public function japan(Request $request)
    {
        $title = "USA";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.japan', $data);
    }
    public function tax(Request $request)
    {
        $title = "Taxation Service";
        $siteSetting = $this->siteSetting;
        $gal = Gallary::all();
        $services = Service::all();
        $cms = Cms::all();


        $data = compact('title', 'siteSetting', 'gal', 'services', 'cms');
        return view('edu-global.financial', $data);
    }


}
