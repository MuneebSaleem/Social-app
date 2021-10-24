<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Models\Countries;

use Illuminate\Http\Request;  
use Auth;    

class UserProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = UserProfile::latest()->paginate(5);
        // return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);

        $data['user_profiles'] = UserProfile::latest()->paginate(5);
        //dd($data['user_profiles']);
        return view('admin.user_profiles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Countries::get();
        // dd($countries);

        return view('admin.user_profiles.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'firstname' => 'required|min:3|regex:/^[a-zA-Z0-9 ]+$/',
            'lastname' => 'required|min:3|regex:/^[a-zA-Z0-9 ]+$/',
            'email' => 'required|email|unique:user_profiles,email',
            //'password' => ['required','confirmed',Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised(),],
            'password' => 'required',
            'phonenumber' => 'required|min:11|numeric',
            'username' => 'required|min:3|regex:/^[a-zA-Z0-9 ]+$/',
            'about' => 'required|min:3',
            'role_id' => 'required',
            'country_id' => 'required',
            'province_id' => 'required',
            'experience_id' => 'required',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg',

        
        ]);
       //$input->staus => 0;
       
        // $input = $request->all();


  
        if ($image = $request->file('profile_image')) {
            $destinationPath = 'upload/user_profile_image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_image'] = "$profileImage";
        }

        $input['firstname'] = trim($request->get('firstname'));
        $input['lastname'] = trim($request->get('lastname'));
        $input['email'] = trim($request->get('email'));
        $input['password'] = trim(bcrypt($request->get('password'))); 
        $input['phonenumber'] = trim($request->get('phonenumber'));
        $input['username'] = trim($request->get('username'));
        $input['about'] = trim($request->get('about'));
        $input['role_id'] = trim($request->get('role_id'));
        $input['country_id'] = trim($request->get('country_id'));
        $input['province_id'] = trim($request->get('province_id'));
        $input['experience_id'] = trim($request->get('experience_id'));
        $input['status'] = 1;


        // if(UserProfile::create($input)) {die;
        //     return redirect()->route('user_profiles.index')->with('success','User created successfully.');
        // }else{
        //     echo "fail";die;
        // }

        UserProfile::create($input);
     
        return redirect()->route('user_profiles.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        return view('admin.user_profiles.show',compact('userProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        return view('admin.user_profiles.edit',compact('userProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
         $request->validate([
            'firstname' => 'required|min:3|regex:/^[a-zA-Z0-9 ]+$/',
            'lastname' => 'required|min:3|regex:/^[a-zA-Z0-9 ]+$/',
            //'email' => 'required|email|unique:user_profiles,email',
            'phonenumber' => 'required|min:11|numeric',
            'username' => 'required|min:3|regex:/^[a-zA-Z0-9 ]+$/',
            'about' => 'required|min:3',
            'country_id' => 'required',
            'province_id' => 'required',
            'experience_id' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('profile_image')) {
            $destinationPath = 'upload/user_profile_image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_image'] = "$profileImage";
        }else{
            unset($input['profile_image']);
        }

        $input['firstname'] = trim($request->get('firstname'));
        $input['lastname'] = trim($request->get('lastname'));
        $input['email'] = trim($request->get('email'));
        $input['password'] = trim(bcrypt($request->get('password'))); 
        $input['phonenumber'] = trim($request->get('phonenumber'));
        $input['username'] = trim($request->get('username'));
        $input['about'] = trim($request->get('about'));
        //$input['role_id'] = trim($request->get('role_id'));
        $input['country_id'] = trim($request->get('country_id'));
        $input['province_id'] = trim($request->get('province_id'));
        $input['experience_id'] = trim($request->get('experience_id'));
        $input['status'] = trim($request->get('status'));
        
        $userProfile->update($input);
    
        return redirect()->route('user_profiles.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        $userProfile->delete();
     
        return redirect()->route('user_profiles.index')
                        ->with('success','User deleted successfully');
    }
}
