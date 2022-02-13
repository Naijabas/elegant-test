<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Wp_User;
use App\Models\Wp_Usermeta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function index()
    {
        return view('customer.index');
    }


    public function store(Request $request)
    {
        //Validating the input data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'budget' => ['required', 'max:255'],
            'message' => ['required', 'max:255']
        ]);


        //Storing the data
        $custommer = Customer::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'budget' => $request->budget,
            'message' => $request->message,
        ]);

        return back()->with('status', 'customer-created');
    }


    public function customers()
    {
        //Fetch latest customers
        $customers = Customer::query()->latest()->get();
        return view('customer.allcustomers', compact('customers'));
    }


    public function show($id)
    {

        //Show customer of the id
        $customer = Customer::findOrFail($id);
        return view('customer.each', compact('customer'));
    }


    /**
     * Migrating to Wordpress
     *
     * Return Json response..
     */
    public function migrateToWp($id)
    {


        //Pick the customer detail
        $data = Customer::findOrFail($id);


        //Check if the customer is not empty i.e if there is that particular custumer
        $user = Wp_User::where('user_email', $data->email)->first();


        if ($user !== null){


        //If failed, return error response
        //Note, we are using custom response code
        return response()->json(['code'=>400, 'message'=>'User Already Migrated', 'data' => $user], 200);
    }
            //If the custommer can't be found, create the wordpress user record
            $user_data = [
                'user_login' => str_replace(' ', '', $data->name),
                'user_nicename' => str_replace(' ', '', $data->name),
                'display_name' => str_replace(' ', '', $data->name),
                'user_email' => $data->email,
                'user_pass' => bcrypt(str_replace(' ', '', $data->name)),
                'user_status' => 0,
                'user_registered' => Carbon::now()
            ];

            $user = Wp_User::firstOrNew($user_data);
            $user->save();


            //Create the metadata needed for the user
            $meta = Wp_Usermeta::create([
                'user_id' => $user->id,
                'meta_key' => "Laravel",
                'meta_value' => true,
            ]);
            $meta = Wp_Usermeta::create([
                'user_id' => $user->id,
                'meta_key' => "nickname",
                'meta_value' => $user_data['user_login']
            ]);
            $meta = Wp_Usermeta::create([
                'user_id' => $user->id,
                'meta_key' => "wp_capabilities",
                'meta_value' => 'a:1:{s:10:"subscriber";b:1;}'
            ]);
            $meta = Wp_Usermeta::create([
                'user_id' => $user->id,
                'meta_key' => "laravel_id",
                'meta_value' => $data->id
            ]);

            //Migrated successfully, return successful response
            return response()->json(['code'=>200, 'message'=>'User Migrated successfully', 'data' => $user], 200);
        }

}
