<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function FooterSetup(){
        $footer = Footer::first();
        return view('admin.footer.footer_setup', compact('footer'));
    }

    public function FooterUpdate(Request $request){
        $about_id = $request->id;

        Footer::findOrFail($about_id)->update([
            'footer_phone_number' => $request->footer_phone_number,
            'footer_short_description' => $request->footer_short_description,
            'footer_country' => $request->footer_country,
            'footer_address' => $request->footer_address,
            'footer_email' => $request->footer_email,
            'footer_social_title' => $request->footer_social_title,
            'footer_social_description' => $request->footer_social_description,
            'footer_social_facebook' => $request->footer_social_facebook,
            'footer_social_twitter' => $request->footer_social_twitter,
            'footer_social_behance' => $request->footer_social_behance,
            'footer_social_linkedin' => $request->footer_social_linkedin,
            'footer_social_instagram' => $request->footer_social_instagram,
            'footer_copyright' => $request->footer_copyright,
        ]);

        $notification = array(
            'message' => 'Footer Setup updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
