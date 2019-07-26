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

/**
 * 
 */
class AdminController extends Controller
{
	
	function index(Request $req)
	{
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = DB::table('profile')
				->where('userId','=',$id)
				->first();

			//dd($user);

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

			$total_users = Users::where('type','=','User')->count('type');
			$total_admin = Users::where('type','=','Admin')->count('type');
			//dd($total_users);

		$deal_done_elec_january = Electronics::where('deal_done','=','1')->whereMonth('updated_at','01')->get()->count();
		$deal_done_elec_february = Electronics::where('deal_done','=','1')->whereMonth('updated_at','02')->get()->count();
		$deal_done_elec_march = Electronics::where('deal_done','=','1')->whereMonth('updated_at','03')->get()->count();
		$deal_done_elec_april = Electronics::where('deal_done','=','1')->whereMonth('updated_at','04')->get()->count();
		$deal_done_elec_may = Electronics::where('deal_done','=','1')->whereMonth('updated_at','05')->get()->count();
		$deal_done_elec_june = Electronics::where('deal_done','=','1')->whereMonth('updated_at','06')->get()->count();
		$deal_done_elec_july = Electronics::where('deal_done','=','1')->whereMonth('updated_at','07')->get()->count();
		$deal_done_elec_august = Electronics::where('deal_done','=','1')->whereMonth('updated_at','08')->get()->count();
		$deal_done_elec_september = Electronics::where('deal_done','=','1')->whereMonth('updated_at','09')->get()->count();
		$deal_done_elec_october = Electronics::where('deal_done','=','1')->whereMonth('updated_at','10')->get()->count();
		$deal_done_elec_november = Electronics::where('deal_done','=','1')->whereMonth('updated_at','11')->get()->count();
		$deal_done_elec_december = Electronics::where('deal_done','=','1')->whereMonth('updated_at','12')->get()->count();

		$deal_done_vehi_january =  Vehicles::where('deal_done','=','1')->whereMonth('updated_at','01')->get()->count();
		$deal_done_vehi_february = Vehicles::where('deal_done','=','1')->whereMonth('updated_at','02')->get()->count();
		$deal_done_vehi_march =    Vehicles::where('deal_done','=','1')->whereMonth('updated_at','03')->get()->count();
		$deal_done_vehi_april =    Vehicles::where('deal_done','=','1')->whereMonth('updated_at','04')->get()->count();
		$deal_done_vehi_may =      Vehicles::where('deal_done','=','1')->whereMonth('updated_at','05')->get()->count();
		$deal_done_vehi_june =     Vehicles::where('deal_done','=','1')->whereMonth('updated_at','06')->get()->count();
		$deal_done_vehi_july =     Vehicles::where('deal_done','=','1')->whereMonth('updated_at','07')->get()->count();
		$deal_done_vehi_august =   Vehicles::where('deal_done','=','1')->whereMonth('updated_at','08')->get()->count();
		$deal_done_vehi_september= Vehicles::where('deal_done','=','1')->whereMonth('updated_at','09')->get()->count();
		$deal_done_vehi_october =  Vehicles::where('deal_done','=','1')->whereMonth('updated_at','10')->get()->count();
		$deal_done_vehi_november = Vehicles::where('deal_done','=','1')->whereMonth('updated_at','11')->get()->count();
		$deal_done_vehi_december = Vehicles::where('deal_done','=','1')->whereMonth('updated_at','12')->get()->count();

		$deal_done_books_january =  Books::where('deal_done','=','1')->whereMonth('updated_at','01')->get()->count();
		$deal_done_books_february = Books::where('deal_done','=','1')->whereMonth('updated_at','02')->get()->count();
		$deal_done_books_march =    Books::where('deal_done','=','1')->whereMonth('updated_at','03')->get()->count();
		$deal_done_books_april =    Books::where('deal_done','=','1')->whereMonth('updated_at','04')->get()->count();
		$deal_done_books_may =      Books::where('deal_done','=','1')->whereMonth('updated_at','05')->get()->count();
		$deal_done_books_june =     Books::where('deal_done','=','1')->whereMonth('updated_at','06')->get()->count();
		$deal_done_books_july =     Books::where('deal_done','=','1')->whereMonth('updated_at','07')->get()->count();
		$deal_done_books_august =   Books::where('deal_done','=','1')->whereMonth('updated_at','08')->get()->count();
		$deal_done_books_september= Books::where('deal_done','=','1')->whereMonth('updated_at','09')->get()->count();
		$deal_done_books_october =  Books::where('deal_done','=','1')->whereMonth('updated_at','10')->get()->count();
		$deal_done_books_november = Books::where('deal_done','=','1')->whereMonth('updated_at','11')->get()->count();
		$deal_done_books_december = Books::where('deal_done','=','1')->whereMonth('updated_at','12')->get()->count();

		$deal_done_fur_january =  Furniture::where('deal_done','=','1')->whereMonth('updated_at','01')->get()->count();
		$deal_done_fur_february = Furniture::where('deal_done','=','1')->whereMonth('updated_at','02')->get()->count();
		$deal_done_fur_march =    Furniture::where('deal_done','=','1')->whereMonth('updated_at','03')->get()->count();
		$deal_done_fur_april =    Furniture::where('deal_done','=','1')->whereMonth('updated_at','04')->get()->count();
		$deal_done_fur_may =      Furniture::where('deal_done','=','1')->whereMonth('updated_at','05')->get()->count();
		$deal_done_fur_june =     Furniture::where('deal_done','=','1')->whereMonth('updated_at','06')->get()->count();
		$deal_done_fur_july =     Furniture::where('deal_done','=','1')->whereMonth('updated_at','07')->get()->count();
		$deal_done_fur_august =   Furniture::where('deal_done','=','1')->whereMonth('updated_at','08')->get()->count();
		$deal_done_fur_september= Furniture::where('deal_done','=','1')->whereMonth('updated_at','09')->get()->count();
		$deal_done_fur_october =  Furniture::where('deal_done','=','1')->whereMonth('updated_at','10')->get()->count();
		$deal_done_fur_november = Furniture::where('deal_done','=','1')->whereMonth('updated_at','11')->get()->count();
		$deal_done_fur_december = Furniture::where('deal_done','=','1')->whereMonth('updated_at','12')->get()->count();

		$deal_done_january = $deal_done_elec_january+$deal_done_fur_january+$deal_done_books_january+$deal_done_vehi_january;
		$deal_done_february = $deal_done_elec_february+$deal_done_fur_february+$deal_done_books_february+$deal_done_vehi_february;
		$deal_done_march = $deal_done_elec_march+$deal_done_fur_march+$deal_done_books_march+$deal_done_vehi_march;
		$deal_done_april = $deal_done_elec_april+$deal_done_fur_april+$deal_done_books_april+$deal_done_vehi_april;
		$deal_done_may = $deal_done_elec_may+$deal_done_fur_may+$deal_done_books_may+$deal_done_vehi_may;
		$deal_done_june = $deal_done_elec_june+$deal_done_fur_june+$deal_done_books_june+$deal_done_vehi_june;
		$deal_done_july = $deal_done_elec_july+$deal_done_fur_july+$deal_done_books_july+$deal_done_vehi_july;
		$deal_done_august = $deal_done_elec_august+$deal_done_fur_august+$deal_done_books_august+$deal_done_vehi_august;
		$deal_done_september = $deal_done_elec_september+$deal_done_fur_september+$deal_done_books_september+$deal_done_vehi_september;
		$deal_done_october = $deal_done_elec_october+$deal_done_fur_october+$deal_done_books_october+$deal_done_vehi_october;
		$deal_done_november = $deal_done_elec_november+$deal_done_fur_november+$deal_done_books_november+$deal_done_vehi_november;
		$deal_done_december = $deal_done_elec_december+$deal_done_fur_december+$deal_done_books_december+$deal_done_vehi_december;




			//dd($deal_done_count_august);
			
    		return View('admin.index',compact('user','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','total_users','total_admin','deal_done_august','deal_done_january','deal_done_february','deal_done_march','deal_done_april','deal_done_may','deal_done_june','deal_done_july','deal_done_september','deal_done_october','deal_done_november','deal_done_december'));
		}else{
			return redirect('/login');
		}
	}

	public function users_list(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = Profile::where('userId','=',$id)->first();

			$users_list = Profile::where('userId','!=',$id)->paginate(4);
			//dd($users_list);

			return view('admin.all_user',compact('user','users_list'));
		}else{
			return redirect('/login');
		}
	}

	public function users_profile($userId,Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = Profile::where('userId','=',$id)->first();
			//dd($userId);
			$clicked_user_data = Profile::where('userId','=',$userId)->get();
			$ad_electronics = Electronics::where('userId','=',$userId)->get();
			$ad_vehicles = Vehicles::where('userId','=',$userId)->get();
			$ad_books = Books::where('userId','=',$userId)->get();
			//dd($ad_books);
			return view('admin.users_profile',compact('user','clicked_user_data','ad_electronics','ad_vehicles','ad_books'))->with('userId',$userId);

		}else{
			return redirect('/login');
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
								->paginate(2);

			$books_data  = DB::table('books')
							->where('deal_done','=','0')
							->paginate(2);

			$vehicles_data = DB::table('vehicles')->where('deal_done','=','0')->paginate(2);
			$furniture_data = DB::table('furniture')->where('deal_done','=','0')->paginate(2);


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
			// return $max_page;
			
    		return View('admin.allAds',compact('user','electronics_data','books_data','vehicles_data','furniture_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad','max_page'));
		}else{
			return redirect('/login');
		}

	}

	public function postad_type(Request $req){
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


			
    		return View('admin.selectType',compact('user','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad'));

            // return view('admin.selectType', compact('user'));

        }
        else{
            return redirect('/login');
        }
	}

	public function delete_ad($product_id,Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$pid = $product_id;
			//dd($pid);
			$table_name = $req->table_name;

			// dd($table_name);
			$user_id = DB::table($table_name)
							->where('pid','=',$pid)
							->first();
			// dd($user_id);
			$store_notification = new Notification();
			$store_notification->ad_id = $pid;
			$store_notification->table_name = $table_name;
			$store_notification->user_id = $user_id->userId;
			$store_notification->deleted_by = $id;
			$store_notification->save();

			$data_update = DB::table($table_name)
							->where('pid','=',$pid)
							->delete();


    		return redirect()->route('Admin.withLoggedAdView');
		}else{
			return redirect('/login');
		}
	}

	public function notification(Request $req){
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

            	//dd($total_notification);

            return view('admin.notification',compact('user','e_noti','v_noti','b_noti','count_enoti','count_vnoti','count_bnoti','total_notification','electronics_data','books_data','vehicles_data','locationwise','locationwise_ctg','locationwise_syl','locationwise_rng','locationwise_raj','locationwise_bar','locationwise_jes','locationwise_khu','total_electronics','total_furniture','total_books','total_vehicles','total_locationwise','total_ad'));

        }

        else{
            return redirect('/login');
        }
	}
}