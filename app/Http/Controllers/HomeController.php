<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\feature_courses;

use App\Models\free_courses;

use App\Models\news;



class HomeController extends Controller
{

       // function for homepage and fetch feature courses
    public function index()
    {
        $feature_courses=feature_courses::all();
            $free_courses=free_courses::all();
            $news=news::all();
        return view('home.homepage',compact('feature_courses','free_courses','news'));
    }


 


        // function for course_overview_page
        public function course_overview_page($id)
        {
            return view('home.course_overview_page');
        }

        
 

        // function for courses
        public function courses()
        {
            $feature_courses=feature_courses::all();
            $free_courses=free_courses::all();
            $news=news::all();

            return view('home.courses',compact('feature_courses','free_courses','news'));
        }


        // function for about-sabiha-page
        public function FAQ_page()
        {
            return view('home.FAQ_page');
        }
    
      
        // function for about-sabiha-page
        public function about_sabiha_page()
        {
            return view('home.about_sabiha_page');
        }

        // function for contact_us_page
        public function contact_us_page()
        {
            return view('home.contact_us_page');
        }






    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }
}
