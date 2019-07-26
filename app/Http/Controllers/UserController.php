<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;
use App\Users;
use App\Profile;
use App\Vehicles;
use App\Electronics;
use App\Furniture;
use App\Books;
use App\Property;
use App\Messages;
use App\Notification;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\SearchRequest;
use DB;
use Validator;

class UserController extends Controller{
	
	 public function index(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = DB::table('profile')
				->where('userId','=',$id)
				->first();

			//dd($user);

			$electronics_data = DB::table('electronics')
								->where('deal_done','=','0')
								->paginate(1);

			// dd($electronics_data);
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
			// dd($total_electronics);
			$total_vehicles = Vehicles::get()->count('pid');
			$total_books = Books::get()->count('pid');
			$total_furniture = Furniture::get()->count('pid');

			$max_page = max(array($total_electronics, $total_vehicles, $total_books,$total_furniture));
			
			// dd($max_page);


			$total_ad = $total_vehicles+$total_electronics+$total_furniture+$total_books;
			
    		return View('user.index',compact('user','electronics_data','books_data','vehicles_data','furniture_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','max_page'));
		}else{
			return redirect('/login');
		}

	}

	public function result_not_found(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');

			$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
			$type = DB::table('users')
						->where('userId','=',$id)
						->first();
			if($type->type == 'Admin'){
				return view('admin.notFound',compact('user'));
			}else{
				return view('user.notFound',compact('user'));
			}
		}else{
			return redirect('/login');
		}
	}

	public function searchBox(Request $req){

		if($req->session()->has('id')){
			$id = $req->session()->get('id');

			$user = DB::table('users')
						->where('userId','=',$id)
						->first();
			if($user->type == 'Admin'){
				$var = $req->search;
				// dd($var);

				switch ($var) {
					case 'mobile':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'laptop':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'computer':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'Mobile':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'MOBILE':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'Laptop':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'Computer':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'car':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'Car':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'honda':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'motorcycle':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'cycle':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'book':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'books']);
						break;
					case 'Book':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'books']);
						break;
					case 'furniture':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'furniture']);
						break;
					default:
						return redirect('/admin/result-not-found');
						break;
			}
		}else{
				$var = $req->search;
				// dd($var);

				switch ($var) {
					case 'mobile':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'laptop':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'computer':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'Mobile':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'MOBILE':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'Laptop':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'Computer':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'car':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'Car':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'honda':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'motorcycle':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'electronics']);
						break;
					case 'cycle':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'vehicles']);
						break;
					case 'book':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'books']);
						break;
					case 'Book':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'books']);
						break;
					case 'furniture':
						return redirect()->route('Ad.searchByCategory',['category_name'=>'furniture']);
						break;
					default:
						return redirect('/user/result-not-found');
						break;
			}
		
		}
	}else{
			return redirect('/login');
	}
}

	public function getProfile(Request $req){

	    if($req->session()->has('id')){
            $id = $req->session()->get('id');

            $data_type = Users::where('userId','=',$id)->first();
            //dd($data->type);
            if(($data_type->type) == 'Admin'){
            	$user = Profile::where('userId',$id)->first();
            	$data = Profile::where('userId',$id)->get();
            	//dd($data);
            	return view('admin.profile', compact('data','data'));
            }else{
            	$user = Profile::where('userId',$id)->first();
            	$data = Profile::where('userId',$id)->get();
            	return view('user.profile', compact('data','user'));
            }

        }
        else{
            return redirect('/login');
        }
	}

	public function editProfile($user_name,Request $req){
	    if($req->session()->has('id')){
            $id = $req->session()->get('id');

            $data_type = Users::where('userId','=',$id)->first();
            //dd($data_type->type);
            if(($data_type->type) == 'Admin'){
            	$data = Profile::where('userId',$id)->get();
            	//dd($data);
            	return view('admin.editProfile', compact('data'))->with('user_name',$user_name);
            }else{
            	$data = Profile::where('userId',$id)->get();
            	return view('user.editProfile', compact('data'))->with('user_name',$user_name);
            }
        }
        else{
            return redirect('/login');
        }
	}

	public function updateProfile(Request $req){
		if($req->session()->has('id')){
			$userId = $req->session()->get('id');
			//dd($userId);
			$data_type = Users::where('userId','=',$userId)->first();
            //dd($data->type);
            if(($data_type->type) == 'Admin'){
            	$data = Profile::find($userId);
				$data->fullName = $req->fullName;
				$data->phone = $req->phone;
				$data->password = $req->password;
				$data->confirmPass = $req->confirmPass;
				//dd($data);
				$data->save();

				$pass = Users::find($userId);
				$pass->password = $req->password;
				$pass->save();

				return redirect('/admin/profile');
            }else{
            	$data = Profile::find($userId);
				$data->fullName = $req->fullName;
				$data->phone = $req->phone;
				$data->password = $req->password;
				$data->confirmPass = $req->confirmPass;
				//dd($data);
				$data->save();

				$pass = Users::find($userId);
				$pass->password = $req->password;
				$pass->save();

				return redirect('/user/profile');
            }
		}else{
			return redirect('/login');
		}

    }
	public function viewProductForElectronics($product_id,Request $req){
		if($req->session()->has('id')){

			$id = $req->session()->get('id');
			$user_type = Users::where('userId','=',$id)->first();

			if($user_type->type == 'Admin'){
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('electronics')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('electronics','profile.userId','=','electronics.userId')
						->where('electronics.pid','=',$product_id)
						->get();

    			return View('admin.viewProductForElectronics',compact('user','userData','user_type'))->with('product_id',$product_id);
			}else{
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('electronics')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('electronics','profile.userId','=','electronics.userId')
						->where('electronics.pid','=',$product_id)
						->get();

    			return View('user.viewProductForElectronics',compact('user','userData','user_type'))->with('product_id',$product_id);
			}
    	}else{
    		$adData = DB::table('electronics')
							->where('pid','=',$product_id)
							->get();

			$userData = DB::table('profile')
						->join('electronics','profile.userId','=','electronics.userId')
						->where('electronics.pid','=',$product_id)
						->get();

    	return View('viewProductForElectronics',compact('userData'))->with('product_id',$product_id);
    	}
	}

	public function deal_done($product_id,Request $req){
		$id = $req->session()->get('id');
		$pid = $product_id;
		// dd($pid);
		$table_name = $req->table_name;

		//dd($table_name);

		$data_update = DB::table($table_name)
							->where('pid','=',$pid)
							->update(['deal_done'=>1]);


    	return redirect('/user/all-ads');
	}

	public function viewProductForVehicles($product_id,Request $req){
		if($req->session()->has('id')){

			$id = $req->session()->get('id');
			$user_type = Users::where('userId','=',$id)->first();

			if(($user_type->type) == 'Admin'){
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('vehicles')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('vehicles','profile.userId','=','vehicles.userId')
						->where('vehicles.pid','=',$product_id)
						->get();

    			return View('admin.viewProductForVehicles',compact('user','userData','user_type'))->with('product_id',$product_id);
			}else{
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('vehicles')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('vehicles','profile.userId','=','vehicles.userId')
						->where('vehicles.pid','=',$product_id)
						->get();

    			return View('user.viewProductForVehicles',compact('user','userData'))->with('product_id',$product_id);
			}
			
    	}else{
    		$adData = DB::table('vehicles')
							->where('pid','=',$product_id)
							->get();

			$userData = DB::table('profile')
						->join('vehicles','profile.userId','=','vehicles.userId')
						->where('vehicles.pid','=',$product_id)
						->get();

    	return View('viewProductForVehicles',compact('userData'))->with('product_id',$product_id);
    	}
	}

	public function viewProductForBooks($product_id,Request $req){
		if($req->session()->has('id')){

			$id = $req->session()->get('id');
			$user_type = Users::where('userId','=',$id)->first();

			if(($user_type->type) == 'Admin'){
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('books')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('books','profile.userId','=','books.userId')
						->where('books.pid','=',$product_id)
						->get();

    			return View('admin.viewProductForBooks',compact('user','userData','user_type'))->with('product_id',$product_id);
			}else{
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('books')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('books','profile.userId','=','books.userId')
						->where('books.pid','=',$product_id)
						->get();

    			return View('user.viewProductForBooks',compact('user','userData'))->with('product_id',$product_id);
			}
			
    	}else{
    		$adData = DB::table('books')
							->where('pid','=',$product_id)
							->get();

			$userData = DB::table('profile')
						->join('books','profile.userId','=','books.userId')
						->where('books.pid','=',$product_id)
						->get();

    	return View('viewProductForBooks',compact('userData'))->with('product_id',$product_id);
    	}
    }

    public function viewProductForFurniture($product_id,Request $req){
		if($req->session()->has('id')){

			$id = $req->session()->get('id');
			$user_type = Users::where('userId','=',$id)->first();

			if(($user_type->type) == 'Admin'){
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('furniture')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('furniture','profile.userId','=','furniture.userId')
						->where('furniture.pid','=',$product_id)
						->get();

    			return View('admin.viewProductForFurniture',compact('user','userData','user_type'))->with('product_id',$product_id);
			}else{
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();
				//dd($user);

				$adData = DB::table('furniture')
							->where('pid','=',$product_id)
							->get();

				$userData = DB::table('profile')
						->join('furniture','profile.userId','=','furniture.userId')
						->where('furniture.pid','=',$product_id)
						->get();

    			return View('user.viewProductForFurniture',compact('user','userData'))->with('product_id',$product_id);
			}
			
    	}else{
    		$adData = DB::table('furniture')
							->where('pid','=',$product_id)
							->get();

			$userData = DB::table('profile')
						->join('furniture','profile.userId','=','furniture.userId')
						->where('furniture.pid','=',$product_id)
						->get();

    	return View('viewProductForFurniture',compact('userData'))->with('product_id',$product_id);
    	}
    }


	public function withoutLoggedViewProduct($product_id,Request $req){

		$adData = Ad::get()->where('pid',$product_id);
		$preferData = PreferProduct::get()->where('pid',$product_id);

		$userData = DB::select('select * from ad,profile WHERE ad.userId = profile.userId and ad.pid=:pid',['pid' => $product_id]);

		//dd($userData);

    	return View('withoutLoggedViewProduct',compact('adData','preferData','userData'))->with('product_id',$product_id);
	}

	public function notification(Request $req){
	    if($req->session()->has('id')){
            $id = $req->session()->get('id');

            $user = DB::table('profile')
					->where('userId','=',$id)
					->first();

			$notification_for_deleted_ad = Notification::where('user_id','=',$id)->get();
			// dd(count($notification_for_deleted_ad));

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


            $electronics_notification = Electronics::get()->where('userId',$id);
            $vehicles_notification = Vehicles::get()->where('userId',$id);
            $books_notification = Books::get()->where('userId',$id);

            $total_notification = 0;
            	$e_noti = DB::select("(SELECT * FROM electronics WHERE userId != $id AND brand=(select prefer_brand FROM electronics WHERE userId=$id))");
            	//dd($e_noti);
            	$count_enoti = count($e_noti);
            	$total_notification += count($e_noti);
            	$v_noti = DB::select("(SELECT * FROM vehicles WHERE userId != $id AND brand=(select prefer_brand FROM vehicles WHERE userId=$id))");
            	//dd($v_noti);
            	$count_vnoti = count($v_noti);
            	$total_notification += count($v_noti);
            	$b_noti = DB::select("(SELECT * FROM books WHERE userId != $id AND category=(select prefer_category FROM books WHERE userId=$id))");
            	
            	$count_bnoti = count($b_noti);
            	$total_notification += count($b_noti);
            	$total_notification += count($notification_for_deleted_ad);
            	//dd($total_notification);

            return view('user.notification',compact('user','notification_for_deleted_ad','e_noti','v_noti','b_noti','count_enoti','count_vnoti','count_bnoti','total_notification','electronics_data','books_data','vehicles_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad'));

        }

        else{
            return redirect('/login');
        }
	}

	public function allMessage(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$data = Users::where('userId',$id)->first();

			if(($data->type)=='Admin'){
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();

				$all_message = DB::table('messages')
							->where('sender_userId','=',$id)
							->get();
				//dd($all_message);

				$msg_data = DB::select("(SELECT sender_userId,reader_userId FROM messages WHERE sender_userId = $id or reader_userId = $id GROUP BY sender_userId,reader_userId ORDER BY sending_time DESC)");
				//dd($msg_data);
				if(count($msg_data) == 0){
					return view('admin.all_message',compact('user','msg_data'));
				}else{
					foreach ($msg_data as $key => $value) {
						$screen_name = DB::table('profile')
								->select('fullName','profilePicture','userId')
								->where('userId','=',$value->reader_userId)
								->get();
			
					}
					//dd($screen_name);

					foreach ($msg_data as $key => $value) {
						$message = DB::table('messages')
								->where('sender_userId','=',$value->sender_userId)
								->where('reader_userId','=',$value->reader_userId)
								->orderBy('sending_time','desc')
								->first();
					}
					return view('admin.all_message',compact('user','screen_name','message','msg_data'));
				}
				
			}
			else{
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();

				$all_message = DB::table('messages')
							->where('sender_userId','=',$id)
							->get();
				//dd($all_message);

				$msg_data = DB::select("(SELECT sender_userId AS msgid FROM `messages` WHERE sender_userId=$id or reader_userId=$id) UNION (SELECT reader_userId AS msgid FROM `messages` WHERE sender_userId=$id or reader_userId=$id)");
				// dd($msg_data);

				if(count($msg_data) == 0){
					return view('user.all_message',compact('user','msg_data'));
				}else{
					$screen_name = array();
					foreach ($msg_data as $key => $value) {
						$get_data = DB::table('profile')
								->select('fullName','profilePicture','userId')
								->where('userId','=',$value->msgid)
								->where('userId','<>',$id)
								->get();
						array_push($screen_name,$get_data);
					}
					//dd($screen_name);
					//dd($m_data);
					// foreach ($msg_data as $key => $value) {
					// 	$message[$key] = DB::table('messages')
					// 			->where('sender_userId','=',$id)
					// 			->orWhere('sender_userId','=',$value->reader_userId)
					// 			->where('reader_userId','=',$value->reader_userId)
					// 			->orWhere('reader_userId','=',$id)
					// 			->orderBy('sending_time','desc')
					// 			->first();
					// 	$q = DB::select("(SELECT * FROM messages where sender_userId=$id and reader_userId=$value->reader_userId ORDER BY sending_time desc)");
					// }
					// //dd($q);
					return view('user.all_message',compact('user','screen_name','msg_data'));
				}
			}
		}else{
			return redirect('/login');
		}
	}

	public function message($user_id,Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$data = Users::where('userId',$id)->first();

			if(($data->type) == 'Admin'){
				$user = DB::table('profile')
				->where('userId','=',$id)
				->first();
				//dd($user);

				$reader_data = DB::table('profile')
							->where('userId','=',$user_id)
							->first();

				//dd($reader_data->userId);


				$previous_msg = DB::table('messages')
							->where('reader_userId','=',$reader_data->userId)
							->where('sender_userId','=',$user->userId)
							->get();
				//dd($previous_msg);


    			return View('admin.message',compact('user','reader_data','previous_msg'));
			}else{
				$user = DB::table('profile')
				->where('userId','=',$id)
				->first();
				//dd($user);

				$reader_data = DB::table('profile')
							->where('userId','=',$user_id)
							->first();

				//dd($reader_data->userId);

				$previous_msg = DB::select("(SELECT * FROM messages WHERE sender_userId=$reader_data->userId AND reader_userId=$id or sender_userId=$id AND reader_userId=$reader_data->userId)");
				// dd($previous_msg);

    			return View('user.message',compact('user','reader_data','previous_msg'));
			}
		}else{
			return redirect('/login');
		}

	}


	public function send_message($user_id,Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = DB::table('profile')
				->where('userId','=',$id)
				->first();

			$data = Users::where('userId',$id)->first();	
			if(($data->type) == 'Admin'){
				$reader_data = DB::table('profile')
							->where('userId','=',$user_id)
							->first();


				$previous_msg = DB::table('messages')
							->where('reader_userId','=',$user_id)
							->get();
				//dd($previous_msg);

				$msg = new Messages();
				$msg->sender_userId = $id;
				$msg->msg = $req->msg;
				$msg->reader_userId = $user_id;

				$msg->save();
				//dd($msg);

    			// return View('admin.message',compact('user','reader_data','previous_msg'));
    			return redirect()->back()->with('user','reader_data','previous_msg');
			}else{
				$reader_data = DB::table('profile')
							->where('userId','=',$user_id)
							->first();

				//dd($reader_data->userId);

				$previous_msg = DB::select("(SELECT * FROM messages WHERE sender_userId=$reader_data->userId AND reader_userId=$id or sender_userId=$id AND reader_userId=$reader_data->userId)");
				// dd($previous_msg);

				$msg = new Messages();
				$msg->sender_userId = $id;
				$msg->msg = $req->msg;
				$msg->reader_userId = $user_id;

				$msg->save();
				// dd($msg);

    			// return View('user.message',compact('user','reader_data','previous_msg'));
    			return redirect()->back()->with('user','reader_data','previous_msg');
			}
		}else{
			return redirect('/login');
		}

	}

	public function see_my_ad($fullName,Request $req){
		if($req->session()->has('id')){

			$id = $req->session()->get('id');
			$data = Users::where('userId',$id)->first();
			if(($data->type) == 'Admin'){
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();

				$my_ad_for_electronics = DB::table('electronics')
											->where('deal_done','=','0')
											->where('userId','=',$id)
											->get();
				$my_ad_for_books = DB::table('books')
									->where('userId','=',$id)
									->where('deal_done','=','0')
									->get();

				$my_ad_for_vehicles = DB::table('vehicles')
									->where('userId','=',$id)
									->where('deal_done','=','0')
									->get();
				$my_ad_for_electronics_deleted = DB::table('electronics')
											->where('deal_done','=','1')
											->where('userId','=',$id)
											->get();
				$my_ad_for_books_deleted = DB::table('books')
									->where('userId','=',$id)
									->where('deal_done','=','1')
									->get();
				$my_ad_for_vehicles_deleted = DB::table('vehicles')
									->where('userId','=',$id)
									->where('deal_done','=','1')
									->get();

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

				return view('admin.seeMyAd',compact('user','my_ad_for_vehicles','my_ad_for_books','my_ad_for_electronics','electronics_data','books_data','vehicles_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','my_ad_for_electronics_deleted','my_ad_for_vehicles_deleted','my_ad_for_books_deleted'));
			}else{
				$user = DB::table('profile')
						->where('userId','=',$id)
						->first();

				$my_ad_for_electronics = DB::table('electronics')
											->where('deal_done','=','0')
											->where('userId','=',$id)
											->get();
				$my_ad_for_books = DB::table('books')
									->where('userId','=',$id)
									->where('deal_done','=','0')
									->get();

				$my_ad_for_vehicles = DB::table('vehicles')
									->where('userId','=',$id)
									->where('deal_done','=','0')
									->get();
				$my_ad_for_electronics_deleted = DB::table('electronics')
											->where('deal_done','=','1')
											->where('userId','=',$id)
											->get();
				$my_ad_for_books_deleted = DB::table('books')
									->where('userId','=',$id)
									->where('deal_done','=','1')
									->get();
				$my_ad_for_vehicles_deleted = DB::table('vehicles')
									->where('userId','=',$id)
									->where('deal_done','=','1')
									->get();

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

				return view('user.seeMyAd',compact('user','my_ad_for_vehicles','my_ad_for_books','my_ad_for_electronics','electronics_data','books_data','vehicles_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','my_ad_for_electronics_deleted','my_ad_for_vehicles_deleted','my_ad_for_books_deleted'));
			}
			
		}else{
			return redirect('/login');
		}
	}

	

}