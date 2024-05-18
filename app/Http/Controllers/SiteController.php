<?php

namespace App\Http\Controllers;

use App\Models\cms;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    //Site Settings Starts
    public function list_settings(Request $request)
    {
        $title = "Site Settings";
        $menu = "site_settings";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $siteSetting = SiteSettings::pluck('value', 'key');

        $data = compact('status', 'user', 'title', 'menu', 'siteSetting');
        return view('AdminPanel.SiteSettings.formlist', $data);
    }

    public function save_settings(Request $request)
    {
        $request->validate([
            'logo_image' => 'mimes:png,jpg'
        ]);

        if ($request->hasFile('logo_image')) {
            $siteSetting = SiteSettings::where('key', 'logo_image')->first();
            if ($siteSetting) {
                if (!empty($siteSetting->value)) {
                    Storage::delete('public/siteSettings/' . $siteSetting->value);
                }
                $image = $request->file('logo_image');
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "logo" . '.' . $image->extension();

                $store = $image->storeAs('public/siteSettings', $iname);
                if ($store) {
                    $siteSetting->update(['value' => $iname]);
                }
            } else {
                $image = $request->file('logo_image');
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "logo" . '.' . $image->extension();


                $image->move(public_path('images/uploads/logo/'), $iname);

                if ($image) {
                    $siteSetting = SiteSettings::create(['key' => 'logo_image', 'value' => $iname]);
                }
            }
        }
        foreach ($request->except(['_token', 'logo_image']) as $key => $value) {
            $siteSetting = SiteSettings::where('key', $key)->first();
            if ($siteSetting) {
                $siteSetting->update(compact('value'));
            } else {
                $siteSetting = SiteSettings::create(compact('key', 'value'));
            }
        }

        $request->session()->flash('msg', 'Updated...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_settings'));
    }

    public function ajaxDelete(Request $request)
    {
        $valid = validator($request->all(), [
            'key' => 'exists:site_settings,key'
        ])->validate();

        $key = $request->key;

        if ($valid) {
            $siteSettings = SiteSettings::where('key', $key)->first();
            if ($siteSettings) {
                if (!empty($siteSettings->value)) {
                    Storage::delete('public/siteSettings/' . $siteSettings->value);
                    $res = $siteSettings->update(['value' => null]);
                }
            }
            if ($res) {
                return json_encode(array('message' => 'Image Deleted', 'status' => true));
            } else {
                return json_encode(array('message' => 'No Image', 'status' => false));
            }
        }
    }
    //Site Settings Ends

    //CMS starts here
    public function list_cms(Request $request)
    {
        $title = "CMS";
        $menu = "cms";

        $cms = cms::pluck('value', 'key');

        $data = compact('title', 'menu', 'cms');
        return view('AdminPanel.cms.formlist', $data);
    }

    public function save_cms(Request $request)
    {
        $request->validate([
            'home_image' => 'mimes:png,jpg',
            'about_image' => 'mimes:png,jpg',
        ]);

        // dd($request);

        /* if ($request->hasFile('home_image')) {
             $cms = cms::where('key', 'home_image')->first();
             if ($cms) {
                 if (!empty($cms->value)) {
                     Storage::delete('public/cms/' . $cms->value);
                 }
                 $image = $request->file('home_image');
                 $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                 $store = $image->storeAs('public/cms', $iname);
                 if ($store) {
                     $cms->update(['value' => $iname]);
                 }
             } else {
                 $image = $request->file('home_image');
                 $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                 $store = $image->storeAs('public/cms', $iname);
                 if ($store) {
                     $cms = cms::create(['key' => 'home_image', 'value' => $iname]);
                 }
             }
         }*/
        if ($request->hasFile('home_image1')) {
            $cms = cms::where('key', 'home_image1')->first();
            if ($cms) {
                $image = $request->file('home_image1');
                $imageName = "home1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') .'/'. $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('home_image1');
                $imageName = "about"  . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'home_image1', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('home_image2')) {
            $cms = cms::where('key', 'home_image2')->first();
            if ($cms) {
                $image = $request->file('home_image2');
                $imageName = "home2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') .'/'. $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('home_image2');
                $imageName = "about"  . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'home_image2', 'value' => $imageName]);
                }
            }
        }


        /*        INDIVIDUAL TAX       */

        if ($request->hasFile('counselling1')) {
            $cms = cms::where('key', 'counselling1')->first();
            if ($cms) {
                $image = $request->file('counselling1');
                $imageName = "counselling1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('counselling1');
                $imageName = "counselling1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'counselling1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('counselling2')) {
            $cms = cms::where('key', 'counselling2')->first();
            if ($cms) {
                $image = $request->file('counselling2');
                $imageName = "counselling2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('counselling2');
                $imageName = "counselling2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'counselling2', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('preparation1')) {
            $cms = cms::where('key', 'preparation1')->first();
            if ($cms) {
                $image = $request->file('preparation1');
                $imageName = "preparation1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('preparation1');
                $imageName = "preparation1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'preparation1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('preparation2')) {
            $cms = cms::where('key', 'preparation2')->first();
            if ($cms) {
                $image = $request->file('preparation2');
                $imageName = "preparation2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('preparation2');
                $imageName = "preparation2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'preparation2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('selection1')) {
            $cms = cms::where('key', 'selection1')->first();
            if ($cms) {
                $image = $request->file('selection1');
                $imageName = "selection1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('selection1');
                $imageName = "selection1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'selection1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('selection2')) {
            $cms = cms::where('key', 'selection2')->first();
            if ($cms) {
                $image = $request->file('selection2');
                $imageName = "selection2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('selection2');
                $imageName = "selection2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'selection2', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('processing1')) {
            $cms = cms::where('key', 'processing1')->first();
            if ($cms) {
                $image = $request->file('processing1');
                $imageName = "processing1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('processing1');
                $imageName = "processing1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'processing1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('processing2')) {
            $cms = cms::where('key', 'processing2')->first();
            if ($cms) {
                $image = $request->file('processing2');
                $imageName = "processing2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('processing2');
                $imageName = "processing2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'processing2', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('usa1')) {
            $cms = cms::where('key', 'usa1')->first();
            if ($cms) {
                $image = $request->file('usa1');
                $imageName = "usa1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('usa1');
                $imageName = "usa1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'usa1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('usa2')) {
            $cms = cms::where('key', 'usa2')->first();
            if ($cms) {
                $image = $request->file('usa2');
                $imageName = "usa2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('usa2');
                $imageName = "usa2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'usa2', 'value' => $imageName]);
                }
            }
        }



        if ($request->hasFile('australia1')) {
            $cms = cms::where('key', 'australia1')->first();
            if ($cms) {
                $image = $request->file('australia1');
                $imageName = "australia1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('australia1');
                $imageName = "australia1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'australia1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('australia2')) {
            $cms = cms::where('key', 'australia2')->first();
            if ($cms) {
                $image = $request->file('australia2');
                $imageName = "australia2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('australia2');
                $imageName = "australia2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'australia2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('uae1')) {
            $cms = cms::where('key', 'uae1')->first();
            if ($cms) {
                $image = $request->file('uae1');
                $imageName = "uae1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('uae1');
                $imageName = "uae1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'uae1', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('uae2')) {
            $cms = cms::where('key', 'uae2')->first();
            if ($cms) {
                $image = $request->file('uae2');
                $imageName = "uae2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('uae2');
                $imageName = "uae2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'uae2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('japan1')) {
            $cms = cms::where('key', 'japan1')->first();
            if ($cms) {
                $image = $request->file('japan1');
                $imageName = "japan1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('japan1');
                $imageName = "japan1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'japan1', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('japan2')) {
            $cms = cms::where('key', 'japan2')->first();
            if ($cms) {
                $image = $request->file('japan2');
                $imageName = "japan2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('japan2');
                $imageName = "japan2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'japan2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('korea1')) {
            $cms = cms::where('key', 'korea1')->first();
            if ($cms) {
                $image = $request->file('korea1');
                $imageName = "korea1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('korea1');
                $imageName = "korea1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'korea1', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('korea2')) {
            $cms = cms::where('key', 'korea2')->first();
            if ($cms) {
                $image = $request->file('korea2');
                $imageName = "korea2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('korea2');
                $imageName = "korea2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'korea2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('europe1')) {
            $cms = cms::where('key', 'europe1')->first();
            if ($cms) {
                $image = $request->file('europe1');
                $imageName = "europe1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('europe1');
                $imageName = "europe1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'europe1', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('europe2')) {
            $cms = cms::where('key', 'europe2')->first();
            if ($cms) {
                $image = $request->file('europe2');
                $imageName = "europe2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('europe2');
                $imageName = "europe2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'europe2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('canada1')) {
            $cms = cms::where('key', 'canada1')->first();
            if ($cms) {
                $image = $request->file('canada1');
                $imageName = "canada1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('canada1');
                $imageName = "canada1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'canada1', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('canada2')) {
            $cms = cms::where('key', 'canada2')->first();
            if ($cms) {
                $image = $request->file('canada2');
                $imageName = "canada2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('canada2');
                $imageName = "canada2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'canada2', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('nz1')) {
            $cms = cms::where('key', 'nz1')->first();
            if ($cms) {
                $image = $request->file('nz1');
                $imageName = "nz1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('nz1');
                $imageName = "nz1" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'nz1', 'value' => $imageName]);
                }
            }
        }
        if ($request->hasFile('nz2')) {
            $cms = cms::where('key', 'nz2')->first();
            if ($cms) {
                $image = $request->file('nz2');
                $imageName = "nz2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('nz2');
                $imageName = "nz2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'nz2', 'value' => $imageName]);
                }
            }
        }

        /*--------------------------------------------------------*/

        if ($request->hasFile('about_image')) {
            $cms = cms::where('key', 'about_image')->first();
            if ($cms) {
                $image = $request->file('about_image');
                $imageName = "about" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('about_image');
                $imageName = "about" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/services/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'about_image', 'value' => $imageName]);
                }
            }
        }

        foreach ($request->except(['_token', 'home_image1', 'home_image2', 'about_image',
            'counselling1', 'counselling2','preparation1', 'preparation2',
            'selection1', 'selection2','processing1', 'processing2','usa1',
            'usa2','business_services_image3', 'europe1','europe2','uae1','uae2','japan1','japan2','korea1','korea2', 'europe1','europe2','australia1','australia2','nz1','nz2'

            ]) as $key => $value) {
            $cms = cms::where('key', $key)->first();
            if ($cms) {
                $cms->update(compact('value'));
            } else {
                $cms = cms::create(compact('key', 'value'));
            }
        }

        $request->session()->flash('msg', 'Updated...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_cms'));
    }

    public function cmsajaxDelete(Request $request)
    {
        $valid = validator($request->all(), [
            'key' => 'exists:cms,key'
        ])->validate();

        $key = $request->key;

        if ($valid) {
            $cms = cms::where('key', $key)->first();
            if ($cms) {
                if (!empty($cms->value)) {
                    Storage::delete('public/cms/' . $cms->value);
                    $res = $cms->update(['value' => null]);
                }
            }
            if ($res) {
                return json_encode(array('message' => 'Image Deleted', 'status' => true));
            } else {
                return json_encode(array('message' => 'No Image', 'status' => false));
            }
        }
    }
    //CMS ends here
}
