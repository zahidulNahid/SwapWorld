<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Users;
use App\Profile;
use App\Books;
use App\Electronics;
use App\Furniture;
use App\Vehicles;
use App\Property;
use App\Http\Requests\ElectronicsRequest;
use App\Http\Requests\VehiclesRequest;
use App\Http\Requests\BooksRequest;
use App\Http\Requests\PropertyRequest;
use App\Http\Requests\FurnitureRequest;

use DB;
use Validator;

class AdController extends Controller{

	public function postad_electronicsPage(Request $req){
		if($req->session()->has('id')){
            $id = $req->session()->get('id');

			$user_type = DB::table('users')
					->where('userId','=',$id)
					->first();
			// dd($user_type->type);
			if($user_type->type == 'Admin'){
				$user = Profile::where('userId','=',$id)->first();
			    return view('admin.postad_electronics', compact('user'));
			}else{
				$user = Profile::where('userId','=',$id)->first();
			    return view('user.postad_electronics', compact('user'));
			}
        }
        else{
            return redirect('/login');
        }
	}

	public function postad_vehiclesPage(Request $req){
		if($req->session()->has('id')){
            $id = $req->session()->get('id');

			$user_type = DB::table('users')
					->where('userId','=',$id)
					->first();
			//dd($user->type);
			if($user_type->type == 'Admin'){
				$user = Profile::where('userId','=',$id)->first();
			    return view('admin.postad_vehicles', compact('user'));
			}else{
				$user = Profile::where('userId','=',$id)->first();
			    return view('user.postad_vehicles', compact('user'));
			}
        }
        else{
            return redirect('/login');
        }
	}

	public function postad_booksPage(Request $req){
		if($req->session()->has('id')){
            $id = $req->session()->get('id');

			$user_type = DB::table('users')
					->where('userId','=',$id)
					->first();
			//dd($user->type);
			if($user_type->type == 'Admin'){
				$user = Profile::where('userId','=',$id)->first();
			    return view('admin.postad_books', compact('user'));
			}else{
				$user = Profile::where('userId','=',$id)->first();
			    return view('user.postad_books', compact('user'));
			}
        }
        else{
            return redirect('/login');
        }
	}

	public function postad_furniturePage(Request $req){
		if($req->session()->has('id')){
            $id = $req->session()->get('id');

			$user_type = DB::table('users')
					->where('userId','=',$id)
					->first();
			//dd($user->type);
			if($user_type->type == 'Admin'){
				$user = Profile::where('userId','=',$id)->first();
			    return view('admin.postad_furniture', compact('user'));
			}else{
				$user = Profile::where('userId','=',$id)->first();
			    return view('user.postad_furniture', compact('user'));
			}
        }
        else{
            return redirect('/login');
        }
	}

	public function postad_propertyPage(Request $req){
		if($req->session()->has('id')){
            $id = $req->session()->get('id');

			$user_type = DB::table('users')
					->where('userId','=',$id)
					->first();
			//dd($user->type);
			if($user_type->type == 'Admin'){
				$user = Profile::where('userId','=',$id)->first();
			    return view('admin.postad_property', compact('user'));
			}else{
				$user = Profile::where('userId','=',$id)->first();
			    return view('user.postad_property', compact('user'));
			}
        }
        else{
            return redirect('/login');
        }
	}

	public function withoutLoggedAdView(Request $req){

			$electronics_data = DB::table('electronics')
								->where('deal_done','=','0')
								->paginate(1);

			$books_data  = DB::table('books')
							->where('deal_done','=','0')
							->paginate(1);

			$vehicles_data = DB::table('vehicles')->where('deal_done','=','0')->paginate(1);
			$furniture_data = DB::table('furniture')->where('deal_done','=','0')->paginate(1);

			$locationwise1 = Electronics::get()->where('location','=','Dhaka')->count('location');
			$locationwise2 = Vehicles::get()->where('location','=','Dhaka')->count('location');
			$locationwise3 = Furniture::get()->where('location','=','Dhaka')->count('location');
			$locationwise4 = Books::get()->where('location','=','Dhaka')->count('location');
			
			$locationwise = $locationwise1+$locationwise2+$locationwise3+$locationwise4;
			//dd($locationwise);

			$locationwise_ctg1 = Electronics::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg2 = Vehicles::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg3 = Furniture::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg4 = Books::get()->where('location','=','Chattogram')->count('location');
			
			$locationwise_ctg = $locationwise_ctg1+$locationwise_ctg2+$locationwise_ctg3+$locationwise_ctg4;

			$locationwise_syl1 = Electronics::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl2 = Vehicles::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl3 = Furniture::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl4 = Books::get()->where('location','=','Sylhet')->count('location');
			
			$locationwise_syl = $locationwise_syl1+$locationwise_syl2+$locationwise_syl3+$locationwise_syl4;

			$locationwise_rng1 = Electronics::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng2 = Vehicles::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng3 = Furniture::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng4 = Books::get()->where('location','=','Rangpur')->count('location');
			
			$locationwise_rng = $locationwise_rng1+$locationwise_rng2+$locationwise_rng3+$locationwise_rng4;

			$locationwise_raj1 = Electronics::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj2 = Vehicles::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj3 = Furniture::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj4 = Books::get()->where('location','=','Rajshahi')->count('location');
			
			$locationwise_raj = $locationwise_raj1+$locationwise_raj2+$locationwise_raj3+$locationwise_raj4;

			$locationwise_bar1 = Electronics::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar2 = Vehicles::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar3 = Furniture::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar4 = Books::get()->where('location','=','Barishal')->count('location');
			
			$locationwise_bar = $locationwise_bar1+$locationwise_bar2+$locationwise_bar3+$locationwise_bar4;

			$locationwise_jes1 = Electronics::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes2 = Vehicles::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes3 = Furniture::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes4 = Books::get()->where('location','=','Jessore')->count('location');
			
			$locationwise_jes = $locationwise_jes1+$locationwise_jes2+$locationwise_jes3+$locationwise_jes4;

			$locationwise_khu1 = Electronics::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu2 = Vehicles::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu3 = Furniture::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu4 = Books::get()->where('location','=','Khulna')->count('location');
			
			$locationwise_khu = $locationwise_khu1+$locationwise_khu2+$locationwise_khu3+$locationwise_khu4;

			$total_locationwise = $locationwise+$locationwise_khu+$locationwise_rng+$locationwise_jes+$locationwise_raj+$locationwise_bar+$locationwise_ctg+$locationwise_syl;

			$total_electronics = Electronics::get()->count('pid');
			//dd($total_electronics);
			$total_vehicles = Vehicles::get()->count('pid');
			$total_books = Books::get()->count('pid');
			$total_furniture = Furniture::get()->count('pid');

			$total_ad = $total_vehicles+$total_electronics+$total_furniture+$total_books;
			$max_page = max(array($total_electronics, $total_vehicles, $total_books,$total_furniture));
			
			
    		return View('allAds',compact('electronics_data','furniture_data','books_data','vehicles_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','max_page'));
	}


	public function searchByLocation($location_name,Request $req){
        //dd($location_name);
			$electronics_data = DB::table('electronics')
								->where('location','=',$location_name)
								->where('deal_done','=','0')
								->paginate(1);

			$books_data  = DB::table('books')
							->where('location','=',$location_name)
							->where('deal_done','=','0')
							->paginate(1);

			$vehicles_data = DB::table('vehicles')
								->where('location','=',$location_name)
								->where('deal_done','=','0')
								->paginate(1);

			$furniture_data = DB::table('furniture')
								->where('location','=',$location_name)
								->where('deal_done','=','0')
								->paginate(1);

								
;
		$location = $location_name;
 		

		return view('location',compact('location','electronics_data','vehicles_data','books_data','furniture_data'))->with('location_name',$location_name);

    }


    public function searchByCategory($category_name,Request $req){
    	if($req->session()->has('id')){
    		$id = $req->session()->get('id');
 			//dd($category_name);
 			$user = DB::table('profile')
					->where('userId','=',$id)
					->first();
			$user_type = DB::table('users')
						->where('userId','=',$id)
						->first();
			if($user_type->type == 'Admin'){
				$ad_data = DB::table($category_name)
 							->paginate(2);

 				//dd($ad_data);
 				return view('admin.categorywise',compact('user','ad_data'))->with('category_name',$category_name);
			}else{
				$ad_data = DB::table($category_name)
 							->paginate(2);

 				//dd($ad_data);
 				return view('user.categorywise',compact('user','ad_data'))->with('category_name',$category_name);
			}
    	}else{
 			$ad_data = DB::table($category_name)
 							->paginate(2);

 			//dd($ad_data);
 			return view('categorywise',compact('ad_data'))->with('category_name',$category_name);
    	}

    }

    public function loggedUserSearchByLocation_user($location_name,Request $req){
 		if($req->session()->has('id')){

 			$id = $req->session()->get('id');
			$user = DB::table('profile')
					->where('userId','=',$id)
					->first();
			$location = $location_name;

			$electronics_data = DB::table('electronics')
								->where('location','=',$location_name)
								->paginate(1);

			$books_data  = DB::table('books')
							->where('location','=',$location_name)
							->paginate(1);

			$vehicles_data = DB::table('vehicles')
								->where('location','=',$location_name)
								->paginate(1);

			$location = $location_name;
 
				
			return view('user.location',compact('user','location','electronics_data','vehicles_data','books_data','result_number'))->with('location_name',$location_name);
 		}
 		else{
 			return redirect('/');
 		}

    }

    public function loggedUserSearchByLocation_admin($location_name,Request $req){
 		if($req->session()->has('id')){

 			$id = $req->session()->get('id');
			$user = DB::table('profile')
					->where('userId','=',$id)
					->first();
			$location = $location_name;

			$electronics_data = DB::table('electronics')
								->where('location','=',$location_name)
								->paginate(1);

			$books_data  = DB::table('books')
							->where('location','=',$location_name)
							->paginate(1);

			$vehicles_data = DB::table('vehicles')
								->where('location','=',$location_name)
								->paginate(1);

			$location = $location_name;
 
				
			return view('admin.location',compact('user','location','electronics_data','vehicles_data','books_data','result_number'))->with('location_name',$location_name);
 		}
 		else{
 			return redirect('/');
 		}

    }

	public function withLoggedAdView(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = DB::table('profile')
				->where('userId','=',$id)
				->first();

			//dd($user);

			$electronics_data = DB::table('electronics')
								->where('deal_done','=','0')
								->paginate(1);

			$books_data  = DB::table('books')
							->where('deal_done','=','0')
							->paginate(1);

			$vehicles_data = DB::table('vehicles')->where('deal_done','=','0')->paginate(1);
			$furniture_data = DB::table('furniture')->where('deal_done','=','0')->paginate(1);

			$locationwise1 = Electronics::get()->where('location','=','Dhaka')->count('location');
			$locationwise2 = Vehicles::get()->where('location','=','Dhaka')->count('location');
			$locationwise3 = Furniture::get()->where('location','=','Dhaka')->count('location');
			$locationwise4 = Books::get()->where('location','=','Dhaka')->count('location');
			
			$locationwise = $locationwise1+$locationwise2+$locationwise3+$locationwise4;
			//dd($locationwise);

			$locationwise_ctg1 = Electronics::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg2 = Vehicles::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg3 = Furniture::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg4 = Books::get()->where('location','=','Chattogram')->count('location');
			
			$locationwise_ctg = $locationwise_ctg1+$locationwise_ctg2+$locationwise_ctg3+$locationwise_ctg4;

			$locationwise_syl1 = Electronics::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl2 = Vehicles::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl3 = Furniture::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl4 = Books::get()->where('location','=','Sylhet')->count('location');
			
			$locationwise_syl = $locationwise_syl1+$locationwise_syl2+$locationwise_syl3+$locationwise_syl4;

			$locationwise_rng1 = Electronics::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng2 = Vehicles::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng3 = Furniture::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng4 = Books::get()->where('location','=','Rangpur')->count('location');
			
			$locationwise_rng = $locationwise_rng1+$locationwise_rng2+$locationwise_rng3+$locationwise_rng4;

			$locationwise_raj1 = Electronics::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj2 = Vehicles::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj3 = Furniture::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj4 = Books::get()->where('location','=','Rajshahi')->count('location');
			
			$locationwise_raj = $locationwise_raj1+$locationwise_raj2+$locationwise_raj3+$locationwise_raj4;

			$locationwise_bar1 = Electronics::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar2 = Vehicles::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar3 = Furniture::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar4 = Books::get()->where('location','=','Barishal')->count('location');
			
			$locationwise_bar = $locationwise_bar1+$locationwise_bar2+$locationwise_bar3+$locationwise_bar4;

			$locationwise_jes1 = Electronics::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes2 = Vehicles::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes3 = Furniture::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes4 = Books::get()->where('location','=','Jessore')->count('location');
			
			$locationwise_jes = $locationwise_jes1+$locationwise_jes2+$locationwise_jes3+$locationwise_jes4;

			$locationwise_khu1 = Electronics::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu2 = Vehicles::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu3 = Furniture::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu4 = Books::get()->where('location','=','Khulna')->count('location');
			
			$locationwise_khu = $locationwise_khu1+$locationwise_khu2+$locationwise_khu3+$locationwise_khu4;

			$total_locationwise = $locationwise+$locationwise_khu+$locationwise_rng+$locationwise_jes+$locationwise_raj+$locationwise_bar+$locationwise_ctg+$locationwise_syl;

			$total_electronics = Electronics::get()->count('pid');
			//dd($total_electronics);
			$total_vehicles = Vehicles::get()->count('pid');
			$total_books = Books::get()->count('pid');
			$total_furniture = Furniture::get()->count('pid');

			$total_ad = $total_vehicles+$total_electronics+$total_furniture+$total_books;
			$max_page = max(array($total_electronics, $total_vehicles, $total_books,$total_furniture));
			
    		return View('user.allAds',compact('user','electronics_data','books_data','vehicles_data','furniture_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','max_page'));
		}else{
			return redirect('/login');
		}

	}
	
	public function index(Request $req){
	    if($req->session()->has('id')){
            $id = $req->session()->get('id');

			$user = DB::table('profile')
			->where('userId','=',$id)
			->first();

			$locationwise1 = Electronics::get()->where('location','=','Dhaka')->count('location');
			$locationwise2 = Vehicles::get()->where('location','=','Dhaka')->count('location');
			$locationwise3 = Furniture::get()->where('location','=','Dhaka')->count('location');
			$locationwise4 = Books::get()->where('location','=','Dhaka')->count('location');
			
			$locationwise = $locationwise1+$locationwise2+$locationwise3+$locationwise4;
			//dd($locationwise);

			$locationwise_ctg1 = Electronics::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg2 = Vehicles::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg3 = Furniture::get()->where('location','=','Chattogram')->count('location');
			$locationwise_ctg4 = Books::get()->where('location','=','Chattogram')->count('location');
			
			$locationwise_ctg = $locationwise_ctg1+$locationwise_ctg2+$locationwise_ctg3+$locationwise_ctg4;

			$locationwise_syl1 = Electronics::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl2 = Vehicles::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl3 = Furniture::get()->where('location','=','Sylhet')->count('location');
			$locationwise_syl4 = Books::get()->where('location','=','Sylhet')->count('location');
			
			$locationwise_syl = $locationwise_syl1+$locationwise_syl2+$locationwise_syl3+$locationwise_syl4;

			$locationwise_rng1 = Electronics::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng2 = Vehicles::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng3 = Furniture::get()->where('location','=','Rangpur')->count('location');
			$locationwise_rng4 = Books::get()->where('location','=','Rangpur')->count('location');
			
			$locationwise_rng = $locationwise_rng1+$locationwise_rng2+$locationwise_rng3+$locationwise_rng4;

			$locationwise_raj1 = Electronics::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj2 = Vehicles::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj3 = Furniture::get()->where('location','=','Rajshahi')->count('location');
			$locationwise_raj4 = Books::get()->where('location','=','Rajshahi')->count('location');
			
			$locationwise_raj = $locationwise_raj1+$locationwise_raj2+$locationwise_raj3+$locationwise_raj4;

			$locationwise_bar1 = Electronics::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar2 = Vehicles::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar3 = Furniture::get()->where('location','=','Barishal')->count('location');
			$locationwise_bar4 = Books::get()->where('location','=','Barishal')->count('location');
			
			$locationwise_bar = $locationwise_bar1+$locationwise_bar2+$locationwise_bar3+$locationwise_bar4;

			$locationwise_jes1 = Electronics::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes2 = Vehicles::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes3 = Furniture::get()->where('location','=','Jessore')->count('location');
			$locationwise_jes4 = Books::get()->where('location','=','Jessore')->count('location');
			
			$locationwise_jes = $locationwise_jes1+$locationwise_jes2+$locationwise_jes3+$locationwise_jes4;

			$locationwise_khu1 = Electronics::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu2 = Vehicles::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu3 = Furniture::get()->where('location','=','Khulna')->count('location');
			$locationwise_khu4 = Books::get()->where('location','=','Khulna')->count('location');
			
			$locationwise_khu = $locationwise_khu1+$locationwise_khu2+$locationwise_khu3+$locationwise_khu4;

			$total_locationwise = $locationwise+$locationwise_khu+$locationwise_rng+$locationwise_jes+$locationwise_raj+$locationwise_bar+$locationwise_ctg+$locationwise_syl;

			$total_electronics = Electronics::get()->count('pid');
			//dd($total_electronics);
			$total_vehicles = Vehicles::get()->count('pid');
			$total_books = Books::get()->count('pid');
			$total_furniture = Furniture::get()->count('pid');

			$total_ad = $total_vehicles+$total_electronics+$total_furniture+$total_books;
			
    		return View('user.selectType',compact('user','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad'));

            // return view('user.selectType', compact('user'));

        }
        else{
            return redirect('/login');
        }
	}

	public function postad_electronics_data(Request $req,ElectronicsRequest $a){
          if($req->session()->has('id')){
          	$id = $req->session()->get('id');
          	$user_type = Users::where('userId','=',$id)->first();

          	if($user_type->type == 'Admin'){
          		$photo="";
          		if($req->hasFile('image'))
            		{

                		$destinationPath = "productPicture/electronics";
                		$file = $req->file('image');
                		$extension=$file->getClientOriginalExtension();
                		$fileName = rand(0,100).".".$extension;
                		$file->move($destinationPath,$fileName);
                		$photo = $fileName;
            		}
            	else
            		{
                		dd('Error uploading file');
            		}

				$ad = new Electronics();
				$ad->userId = $id;
				$ad->image = $photo;

				$ad->location = $a->location;
				$ad->device_type = $a->device_type;
				$ad->product_name = $a->product_name;
				$ad->brand = $a->brand;
				$ad->model = $a->model;
				$ad->used_time = $a->used_time;
				$ad->description = $a->description;
				$ad->price_range = $a->price_range;
				$ad->deal_done = '0';
				$ad->prefer_device = $a->prefer_device;
				$ad->prefer_brand = $a->prefer_brand;
				$ad->prefer_model = $a->prefer_model;

	
				$ad->save();


				return redirect('/admin/home');
          	}else{
          		$photo="";
          		if($req->hasFile('image'))
            		{

                		$destinationPath = "productPicture/electronics";
                		$file = $req->file('image');
                		$extension=$file->getClientOriginalExtension();
                		$fileName = rand(0,100).".".$extension;
                		$file->move($destinationPath,$fileName);
                		$photo = $fileName;
            		}
            	else
            		{
                		dd('Error uploading file');
            		}

				$ad = new Electronics();
				$ad->userId = $id;
				$ad->image = $photo;

				$ad->location = $a->location;
				$ad->device_type = $a->device_type;
				$ad->product_name = $a->product_name;
				$ad->brand = $a->brand;
				$ad->model = $a->model;
				$ad->used_time = $a->used_time;
				$ad->description = $a->description;
				$ad->price_range = $a->price_range;
				$ad->deal_done = '0';
				$ad->prefer_device = $a->prefer_device;
				$ad->prefer_brand = $a->prefer_brand;
				$ad->prefer_model = $a->prefer_model;

	
				$ad->save();


				return redirect('/user/home');
          	}
          }
          else{
          	return redirect('/login');
          }
          
	}

	public function postad_vehicles_data(Request $req,VehiclesRequest $a){
          if($req->session()->has('id')){
          	$id = $req->session()->get('id');
          	$user_type = Users::where('userId','=',$id)->first();

          	if($user_type->type == 'Admin'){
          		$photo="";
          		if($req->hasFile('image'))
            	{

                	$destinationPath = "productPicture/vehicles";
                	$file = $req->file('image');
                	$extension=$file->getClientOriginalExtension();
                	$fileName = rand(0,100).".".$extension;
                	$file->move($destinationPath,$fileName);
                	$photo = $fileName;
            	}
            	else
            	{
                	dd('Error uploading file');
            	}

				$ad = new Vehicles();
				$ad->userId = $id;
				$ad->image = $photo;

				$ad->location = $a->location;
				$ad->vehicle_type = $a->vehicle_type;
				$ad->brand = $a->brand;
				$ad->model_year = $a->model_year;
				$ad->fuel_type = $a->fuel_type;
				$ad->kilometers_run = $a->kilometers_run;
				$ad->description = $a->description;
				$ad->deal_done = '0';
				$ad->prefer_device_type = $a->prefer_device_type;
				$ad->prefer_brand = $a->prefer_brand;

	
				$ad->save();


				return redirect('/admin/home');
          	}else{
          		$photo="";
          		if($req->hasFile('image'))
            	{

                	$destinationPath = "productPicture/vehicles";
                	$file = $req->file('image');
                	$extension=$file->getClientOriginalExtension();
                	$fileName = rand(0,100).".".$extension;
                	$file->move($destinationPath,$fileName);
                	$photo = $fileName;
            	}
            	else
            	{
                	dd('Error uploading file');
            	}

				$ad = new Vehicles();
				$ad->userId = $id;
				$ad->image = $photo;

				$ad->location = $a->location;
				$ad->vehicle_type = $a->vehicle_type;
				$ad->brand = $a->brand;
				$ad->model_year = $a->model_year;
				$ad->fuel_type = $a->fuel_type;
				$ad->kilometers_run = $a->kilometers_run;
				$ad->description = $a->description;
				$ad->deal_done = '0';
				$ad->prefer_device_type = $a->prefer_device_type;
				$ad->prefer_brand = $a->prefer_brand;

	
				$ad->save();


				return redirect('/user/home');
          	}
          }else{
          	return redirect('/login');
          }
	}	

	public function postad_books_data(Request $req,BooksRequest $a){
    	if($req->session()->has('id')){
    		$id = $req->session()->get('id');
    		$user_type = Users::where('userId','=',$id)->first();

    		if($user_type->type == 'Admin'){
    			$photo="";
          		if($req->hasFile('image'))
            	{

                	$destinationPath = "productPicture/books";
                	$file = $req->file('image');
                	$extension=$file->getClientOriginalExtension();
                	$fileName = rand(0,100).".".$extension;
                	$file->move($destinationPath,$fileName);
                	$photo = $fileName;
            	}
            	else
            	{
                	dd('Error uploading file');
            	}

				$ad = new Books();
				$ad->userId = $id;
				$ad->image = $photo;

				$ad->location = $a->location;
				$ad->book_name = $a->book_name;
				$ad->writer_name = $a->writer_name;
				$ad->category = $a->category;
				$ad->edition = $a->edition;
				$ad->description = $a->description;
				$ad->deal_done = '0';
				$ad->prefer_category = $a->prefer_category;

	
				$ad->save();


				return redirect('/admin/home');
    		}else{
    			$photo="";
          		if($req->hasFile('image'))
            	{

                	$destinationPath = "productPicture/books";
                	$file = $req->file('image');
                	$extension=$file->getClientOriginalExtension();
                	$fileName = rand(0,100).".".$extension;
                	$file->move($destinationPath,$fileName);
                	$photo = $fileName;
            	}
            	else
            	{
                	dd('Error uploading file');
            	}

				$ad = new Books();
				$ad->userId = $id;
				$ad->image = $photo;

				$ad->location = $a->location;
				$ad->book_name = $a->book_name;
				$ad->writer_name = $a->writer_name;
				$ad->category = $a->category;
				$ad->edition = $a->edition;
				$ad->description = $a->description;
				$ad->deal_done = '0';
				$ad->prefer_category = $a->prefer_category;

	
				$ad->save();


				return redirect('/user/home');
    		}
    	}else{
    		return redirect('/login');
    	}   
	}

	public function postad_furniture_data(Request $req,FurnitureRequest $a){
          
          $photo="";
          if($req->hasFile('image'))
            {

                $destinationPath = "productPicture/furniture";
                $file = $req->file('image');
                $extension=$file->getClientOriginalExtension();
                $fileName = rand(0,100).".".$extension;
                $file->move($destinationPath,$fileName);
                $photo = $fileName;
            }
            else
            {
                dd('Error uploading file');
            }

        $id = $req->session()->get('id');
        //dd($id);
		$ad = new Furniture();
		$ad->userId = $id;
		$ad->image = $photo;

		$ad->location = $a->location;
		$ad->product_name = $a->product_name;
		$ad->furniture_type = $a->furniture_type;
		$ad->description = $a->description;
		$ad->price_range = $a->price_range;
		$ad->used_time = $a->used_time;
		$ad->deal_done = '0';
		$ad->prefer_furniture_type = $a->prefer_furniture_type;

	
		$ad->save();


		return redirect('/user/home');
	}

	public function postad_property_data(Request $req,PropertyRequest $a){
          
          $photo="";
          if($req->hasFile('image'))
            {

                $destinationPath = "productPicture/property";
                $file = $req->file('image');
                $extension=$file->getClientOriginalExtension();
                $fileName = rand(0,100).".".$extension;
                $file->move($destinationPath,$fileName);
                $photo = $fileName;
            }
            else
            {
                dd('Error uploading file');
            }


        $prefer_number = $req->prefer_number;
        $prefer_unit = $req->prefer_unit;

        $prefer_landSize = $prefer_number+' '+$prefer_unit;
        

        $id = $req->session()->get('id');
        dd($id);
		$ad = new Property();
		$ad->userId = $id;
		$ad->image = $photo;

		$ad->location = $a->location;
		$ad->address = $a->address;
		$ad->land_type = $a->land_type;
		$ad->land_size = $a->land_size;
		$ad->unit = $a->unit;
		$ad->description = $a->description;
		$ad->price_range = $a->price_range;
		$ad->prefer_location = $a->prefer_location;
		$ad->prefer_land_size = $a->prefer_landSize;

	
		$ad->save();


		return redirect('/user/home');
	}

}
