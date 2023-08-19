<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//use DB;
 use App\Models\Job;
 use App\Models\Cate;
 use App\Models\User;
 use App\Mail\SignedUp;
 use App\Mail\Recovered;

class pagesController extends Controller
{
    public function __Construct(Job $job, Cate $cate, User $user) {

        $this->user = $user;
        $this->job = $job;
        $this->cate = $cate;

    }
   
    public function index() {

        //$jobs = DB::table('jobs')->limit(5)->get();
        //$cates = DB::table('cates')->get();

       // $jobs = Job::limit(5)->get();
        //$cates = Cate::get();
        // session()->flush();

        $jobs = $this->job->limit(5)->orderBy('timestamp','desc')->get();
        $cates = $this->cate->get();
        return view('index', compact('jobs','cates'));
        
    }
    public function find(Request $request) {
         
        $jobs = $this->job->where('cate',$request->input('cate'))->get();
       $cates = $this->cate->get();
       return view('index', compact('jobs','cates'));
   }

   public function signUpPage() {

       return view('signup');
   }

   public function signInPage() {

       return view('signin');
   }

   public function recover() {

       return view('recover');
   }

        //create cate page
     public function createCatePage() {
      if(session()->get('logged') != ''){
       
       return view('user.create_cate');
     } 
   }
 // create cate
     public function createCate(Request $request) {

            $cate = $request->input('cate');
           

    $create = $this->cate->insert(
                    ['cate' => $cate
                     
                    ]
     );


     if($create){
       $msg = "Category created!";
     }

      if(session()->get('logged') != ''){
     
       return view('user.create_cate', compact('msg'));
     } 
   }

   public function single($id) {

       $jobs = $this->job->where('id',$id)->get();
       $cates = $this->cate->get();
       return view('single',compact('cates','jobs'));
   }

   public function jobs($cate) {

       $jobs = $this->job->where('cate',$cate)->get();
       $cates = $this->cate->get();
       return view('jobs',compact('cates','jobs'));
   }

   public function signIn(Request $request) {

       $user = $this->user->where('username',$request->input('user'))->first();
       if($user){ //username exists , go for password test

           $hashed = md5($request->input('pass')); //hash the password

           $pass = $this->user->where([
               ["username",$request->input('user')],
               ["password",$hashed],
               ])->first();

           if($pass){ // return 'user found and password is correct';
              //session()->put('hash','moo'); session()->get('hash');
              session()->put('logged',$user->username);
              session()->put('fname',$user->fullname);
              session()->put('who',$pass->who);

              return view('user.index', compact('user'));


           }
           elseif(!$pass){

               $msg = "User found but password is not correct";
               return view('signin', compact('msg'));
           }
       }
       elseif(!$user){

           $msg = "Username does not exist!";
           return view('signin', compact('msg'));
       }

   }

    public function userIndex() {

    if(session()->get('logged') != ''){
      return view('user.index');
    }

   }

   public function userBio() {

     if(session()->get('logged') != ''){

      $details = $this->user->where('username',session()->get('logged'))->first();
      return view('user.user_bio', compact('details'));

     }


      //return redirect()->action('pagesController@index');

   }

  public function updateBio(Request $request) {

      $details = $this->user->where('username',session()->get('logged'))->first();

      $update = $this->user->where('username',session()->get('logged'))
                           ->update(['fullname' => $request->input('full'),
                                     'email' => $request->input('email'),
                                     'phone' => $request->input('phone')]
                         );
     if($update){
       $msg = 'Bio updated!';
       return view('user.user_bio', compact('details','msg'));
     }
     //
   }

   public function userPost() { //method to display user job post form

    if(session()->get('logged') != ''){

      $cates = $this->cate->get();
      return view('user.post',compact('cates'));
    }

   }



   public function post(Request $request) { //method to handle job posts

               $start = date('Y-m-d');
               $finish = date('Y-m-d', strtotime($start. ' + 30 days'));
               $timestamp = date('Y-m-d H:i:s');
               $post_id = substr(number_format(time() * rand(),0,'',''),0,5);

   $post = $this->job->insert(['title' => $request->input('title'),
                                     'cate' => $request->input('cate'),
                                     'location' => $request->input('location'),
                                     'url' => $request->input('url'),
                                     'short' => $request->input('short'),
                                     'post' => $request->input('post'),
                                     'start' => $start,
                                     'finish' => $finish,
                                     'timestamp' => $timestamp,
                                     'post_id' => $post_id,
                                     'accepted' => 'Y',
                                     'fname' => session()->get('fname'),
                                     'auth' => session()->get('logged')

                          ]);

     if($post){
       $msg = 'Work posted!';
       $cates = $this->cate->get();
       return view('user.post', compact('msg','cates'));
     }
     //
   }


    public function allPosts() {

    if(session()->get('logged') != ''){

      $jobs = $this->job->where('auth',session()->get('logged'))->get();
      return view('user.posts', compact('jobs'));
    }

   }

   public function editPage($id) {

    if(session()->get('logged') != ''){

      $jobs = $this->job->where('id',$id)->get();
      return view('user.edit', compact('jobs'));
    }


   }

   public function editPost($id, Request $request) {

    if(session()->get('logged') != ''){

          $post = $this->job->where('id',$id)->update(['title' => $request->input('title'),

                                     'location' => $request->input('location'),
                                     'url' => $request->input('url'),
                                     'short' => $request->input('short'),
                                     'post' => $request->input('post')

                          ]);

     if($post){
      $msg = 'Post Edited!';
      $jobs = $this->job->where('id',$id)->get();
      return view('user.edit', compact('jobs','msg'));
    }
    }

 }

     public function deletePage($id) {

    if(session()->get('logged') != ''){

      $jobs = $this->job->where('id',$id)->get();
      return view('user.delete', compact('jobs'));
     }
   }

     public function deletePost($id) {

    if(session()->get('logged') != ''){

      $this->job->where('id',$id)->delete(); //run delete
      $jobs = $this->job->where('auth',session()->get('logged'))->get(); //fetch jobs
      return view('user.posts', compact('jobs')); // return all jobs view
     }
   }

   public function signUp(Request $request) {

    $username = $request->input('user');
    $email = $request->input('email');
    $who = $request->input('who');
    $user_id = substr(number_format(time() * rand(),0,'',''),0,5);
    $pass = "pass8008!";
    $hash_pass = md5($pass);
    $secret = substr(number_format(time() * rand(),0,'',''),0,6);
    $hash_secret = md5($secret);

    if($who == "I am a Creative"){
    $user = 'creative';
   }
   elseif($who == "I want to hire") {
   $user = 'user';
   }

    $create = $this->user->insert(['username' => $username,
                                   'email' => $email,
                                   'who' => $user,
                                   'password' => $hash_pass,
                                   'user_id' => $user_id,
                                   'secret' => $secret,
                                   'hash_secret' => $hash_secret

                    ]);



     if($create){
       \Mail::to($request->input('email'))->send(new SignedUp);
       $msg = "Account created! See your email.";
     }

    return view('signup', compact('msg')); // return signup view

 }

      public function pass() {

    if(session()->get('logged') != ''){
      return view('user.pass');
    }

   }


      public function changePass(Request $request) {

    if(session()->get('logged') != ''){

        $newpass = md5($request->input('newpass'));


        $change = $this->user->where('username',session()->get('logged'))
                             ->update(['password' => $newpass ]);
        if($change){
          $msg = "Password changed!";
          return view('user.pass', compact('msg'));
        }
    }

   }


   public function profilePage() {

 if(session()->get('logged') != ''){

   $bio = $this->user->where('username',session()->get('logged'))->first();
   return view('user.profile', compact('bio'));
 }

}

   public function updateProfile(Request $request) {

  if(session()->get('logged') != ''){

    $post = $this->user->where('username',session()->get('logged'))
                       ->update(['cate' => $request->input('title'),
                                 'fullname' => $request->input('fname'),
                                 'email' => $request->input('email'),
                                 'me' => $request->input('me'),
                                 'fb' => $request->input('fb'),
                                 'twitter' => $request->input('twitter'),
                                 'linkedin' => $request->input('ln')

                    ]);

     if($post){

    $msg = "Bio Updated!";
    $bio = $this->user->where('username',session()->get('logged'))->first();
    return view('user.profile',compact('msg','bio'));
   }
  }

}


public function avatarPage() {

if(session()->get('logged') != ''){

return view('user.avatar');
 }
}


public function postAvatar(Request $request)

{
  if(session()->get('logged') != ''){

    $this->validate($request, [

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);


    $image = $request->file('image');

    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

    $destinationPath = public_path('/photos');

    $image->move($destinationPath, $input['imagename']);


    $attach = $this->user->where('username',session()->get('logged'))
               ->update(['photo_id' => $input['imagename']

 ]);

   if($attach){
     $msg = "Avatar attached!";
     return view('user.avatar',compact('msg'));
    }
  }
}

public function slash($user) {

   $me = $this->user->where('username',$user)->first();
   if(!$me){
      exit; 
   }else{
   return view('slash', compact('me'));

   }
}

public function recoverPass(Request $request) {

  //get podt data

  $pass = substr(number_format(time() * rand(),0,'',''),0,5);

    $user = $this->user->where('username',$request->input('user'))->first();
    if($user){ //username exists , go for secret password test

        $hashed_secret = md5($request->input('secret')); //hash the secret password

        $testpass = $this->user->where([
            ["username",$request->input('user')],
            ["hash_secret",$hashed_secret],
            ])->first();

        if($testpass){ // insert new temporary pass

           $recover = $this->user->where('username',$request->input('user'))
                           ->update(['password' => md5($pass), 'passcode' => $pass ]);
           
           
           
            if($recover){
                
           \Mail::to($request->input('email'))->send(new Recovered);    
           $msg = "Password recovered. See your email!";
           return view('recover', compact('msg'));
         } 
         //else{return view('index');}

        }

    }


}

 }


    