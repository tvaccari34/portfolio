<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function AboutPage(){
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutpage'));
    }

    public function updateAbout(Request $request){
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(523,605)->save('upload/about_page/'.$name_gen);

            $save_url = 'upload/about_page/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Page updated with image successfully',
                'alert-type' => 'success'
            );


        } else {
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);

            $notification = array(
                'message' => 'About Page updated without image successfully',
                'alert-type' => 'success'
            );
        }

        return redirect()->back()->with($notification);
    }

    public function HomeAbout(){
        $aboutpage = About::find(1);
        return view('frontend.about_page', compact('aboutpage'));
    }

    public function AboutMultiImage(){
        $aboutmultiimage = About::find(1);
        return view('admin.about_page.multiimage', compact('aboutmultiimage'));
    }

    public function StoreMultiImage(Request $request){

        $aboutmultiimage_id = $request->id;

        $images = $request->file('multi_image');

        foreach ($images as $image) {
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(220, 220)->save('upload/multi/'.$name_gen);

            $save_url = 'upload/about_page/'.$name_gen;

            MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

        }
        
        $notification = array(
            'message' => 'Multi Images stored successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
