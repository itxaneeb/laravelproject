<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models;
use App\Models\AddProduct;
use App\Models\BuyProduct;
use App\Models\levellist;
use App\Models\Package;
use App\Models\packageslist;
use App\Models\WithdrawRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function home()  
        {
            return view('home');
        }

    public function index()  
    {
        return view('index');
    }

   public function link()
   {
    return view('links');
   }

   public function packages()
   {
    return view('links');
   }
   
   public function product()
   {

    $user = AddProduct::where('levelid',Auth()->user()->level_id)->where('packageid', Auth()->user()->package_id)->get();
    // dd($user);
    return view('products',['user'=>$user]);
   }

   public function profile()
   {

    $user = User::find(auth()->user()->id);
    // dd($user);
    return view('profile',['user'=>$user]);
   }
   
   public function task()
   {
    return view('tasks');
   }

   public function verification()
   {
    return view('verification');
   }

   public function wallet()
   {

    $user = User::find(auth()->user()->id);
    return view('wallet',['user'=>$user]);
   }

   public function withdraw()
   {
    return view('withdraw');
   }

   public function withdrawHistroy()
   {
    $userId = auth()->id();

    $withdrawals = WithdrawRequest::where('user_id', $userId)->get();
    return view('withdrawHistory', ['withdrawals' => $withdrawals]);

    }

    public function levellist()
   {
    return view('levellist');

    }

    public function admin()
    { 
        //   dd('here');
        return view('contentwrapper');
    }

    public function datastore(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'trx_id' => 'required',
            'sendernumber' => 'required',
        ]);
        
        $user = user::find(auth()->user()->id);
        $user->package_id = $request->package_id;
        $user->trx_id = $request->trx_id;
        $user->sendernumber = $request->sendernumber;

        $user->save();

        return redirect()->route('home');

    }

    public function usertable()
    {
        
        $users = user::where('status','approved')->where('role','user')->get();

        return view('usertable',['users'=> $users]);
    }

    public function newuser()
    {
        
        return view('newuser');
        
        

    }

    public function newuserrr(Request $request)
    {
        // dd($request);
        $user = user::find($request->user_id);
        $user->status = "approved";
        $user->save();

        print_r(json_encode('approved'));
    }


public function addlevel()
{
    return view('addlevel');
}

    public function addlevell(Request $request)
    {
        
        $user =  new levellist();
        $user->Name = $request->Name;
        $user->firstperson = $request->firstperson;
        $user->secondperson = $request->secondperson;
        $user->thirdperson = $request->thirdperson;
        $user->totalmember = $request->totalmember;
        $user->withdrawlimit = $request->withdrawlimit;
        
        $user->save();

        return redirect()->route('levellist')->with('success', 'Added  successfully.');;
       

        }
   
        public function editlevellist($id)
        {
       
            $user = levellist::find($id);
        //    dd($data);
            return view('editlevellist',compact('user'));
            
        }

        public function updatelevellist(Request $request)
        {
            // dd('here');
            $data = levellist::find($request->id);
            $data->Name = $request->Name;
            $data->firstperson = $request->firstperson;
            $data->secondperson = $request->secondperson;
            $data->thirdperson = $request->thirdperson;
            $data->totalmember = $request->totalmember;
            $data->withdrawlimit = $request->withdrawlimit;
            $data->save();

            return redirect()->route('levellist')->with('success', 'Level has been updated successfully.');;
        }
        
        public function rejected()
        { 
            $users = user::where('status','rejected')->where('role','user')->where('trx_id','!=',NULL)->get();
            return view('rejected',['users'=>$users]);
        }

        public function Packageslist()
        {
            $users = Package::all();
            return view('Packageslist',['users'=>$users]);
        }

        public function addpackages()
        {
            
            return view('addpackages');
        }

        public function addpackageslist(Request $request)
        {
            $user = new Package();
            $user->Name = $request->Name;
            $user->price = $request->price;
            $user->waiting_description = $request->waiting_description;

            $user->save();

            return redirect()->route('Packageslist')->with('success', 'Added successfully.');;
        }

        public function invite($id)
        {

            // dd('here');
            $decrypted = Crypt::decrypt($id);
            $user = user::find($decrypted);

            return view('auth.register',compact('user'));

        }

        public function editpackageslist($id)
        {

            // dd('here');
            $user = Package::find($id);

            return view('editpackageslist',['user'=>$user]);
        }

        public function updateeditpackageslist(Request $request)
        {
           $user = Package::find($request->id);

           $user->Name = $request->Name;
           $user->price = $request->price;
           $user->waiting_description = $request->waiting_description;
           $user->save();

           return redirect()->route('Packageslist')->with('success', ' package has been updated successfully.');;
        }


        public function withdrawrequest()
        {
            $user = WithdrawRequest::all();
            return view('withdrawrequest',compact('user'));
        }

        public function withdrawreq(Request $request)
        {
            
            $withdrawreqq = new WithdrawRequest();
            $withdrawreqq->user_id = auth()->user()->id;
            $withdrawreqq->Amount = $request->Amount;
            $withdrawreqq->accountname = $request->accountname;
            $withdrawreqq->accountnumber = $request->accountnumber;
            
            // dd($withdrawreqq);
            $withdrawreqq->save();
            // dd($request);
           return redirect('/wallet');
         
        }

        public function editusertable($id)
        {
            $users = user::find($id);
// dd($users);
            return view('editusertable',['users'=> $users]);
        }

        public function updateusertable(Request $request)
        {
            $users = User::find($request->id);

            $users->f_name = $request->f_name;
            $users->l_name = $request->l_name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->address = $request->address;
            $users->sendernumber = $request->sendernumber;
            $users->package_id = $request->package_id;
            $users->trx_id = $request->trx_id;

            $users->save();

            return redirect()->route('usertable');

        }


        public function addproduct()
        {
            $users = AddProduct::all();
            return view('addproduct',['users'=>$users]);
        }

        public function addprodutss(Request $request)
        {

          $product = new AddProduct();
               
          $product->image = $this->addImg($request->image);
          $product->price = $request->price;
          $product->reward = $request->reward;
          $product->packageid = $request->packageid;
          $product->levelid = $request->levelid;

          $product->save();

          return redirect()->route('addproduct');
        }        
        
        public function addmoreproducts()
        {
            $packages = Package::all();
            $levels = levellist::all();
            return view('addmoreproducts',['packages'=>$packages , 'levels'=>$levels]);

        }

        public function addImg($image)
    {

        $extension = $image->getClientOriginalExtension();
        $filename = rand(1, 5000) . time() . '.' . $extension;
        $image->move(public_path('assets/uploads/products'), $filename);
        $path = '/assets/uploads/products/' . $filename;
        return $path;
    }

    public function deleteaddproduct($id)
    {

        $product = AddProduct::find($id);

         unlink(public_path($product->image));
            $product->delete();
            return redirect()->back()->with('success', 'Product has been deleted successfully.');;
    }

    public function editaddproduct($id)
    {
        $packages = Package::all();
        $levels = levellist::all();
        $user = AddProduct::find($id);
        return view('editaddproduct',['user'=>$user , 'packages'=>$packages , 'levels'=>$levels]);
    }
          
    public function updateaddproduct(Request $request , $id)
    {

        $data = AddProduct::find($id);
        if ($request->hasFile('image')) { 
            if ($data->image) { 
                unlink(public_path($data->image));
            }
            $data->update(['image' => $this->addImg($request->image)]);
        }
        
        $data->price = $request->price;
        $data->reward = $request->reward;
        $data->packageid = $request->packageid;
        $data->levelid = $request->levelid;

        $data->save();

        return redirect()->route('addproduct')->with('success', 'Product has been updated successfully.');

    }

    public function buyproduct(Request $request)
    {
        $user = BuyProduct::where('user_id', Auth()->user()->id)->where('product_id',$request->product_id)->where('created_at',Carbon::today())->get();
        if($user){
            print_r(json_encode(false));
        }
        else{           
            $reward = user::find(auth()->user()->id);
            $getreward =  AddProduct::find($request->product_id);
            $reward->user_blance += $getreward->reward;
            $reward->save();

            $newuser = new BuyProduct();
            $newuser->user_id = auth()->user()->id;
            $newuser->product_id = $request->product_id;
            $newuser->save();
         }
        
    }

    public function links()
    {
        return view('adminlinkpage');
    }
}