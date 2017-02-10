<?php 

namespace App\Http\Controllers;

/**
* 
*/
class PagesController extends Controller
{
	
	public function getIndex()
	{
		# process variable data or params
		# talk to the model
		# receive from the model
		# compile or process data from the model if needed
		# pass that data to the correct view
		return view('pages.welcome');
	}

	public function getAbout()
	{
		#$first 	= "Mahmoud";
		#$last 	= "El Kotoury";
		#$full 	= $first." ". $last;
		#$email 	= "melkotoury@gmail.com";
		#$data 	= [];
		#$data["full"] 	= $full;
		#$data["email"]	= $email;
		#return view('pages.about')->with("fullname",$full);
		#return view('pages.about')->withFullname($full);
		#return view('pages.about')->withFullname($full)->withEmail($email);
		#return view('pages.about')->withData($data);
		return view('pages.about');

	}

	public function getContact()
	{
		return view('pages.contact');
	}

}