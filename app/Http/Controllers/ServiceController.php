<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recharge;
use App\Models\User;
use App\Models\Sheba;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use Image;
use Config;

class ServiceController extends Controller
{
    public function Service()
    {
        $categories = Category::all();
       // return view('user.ifram');
        return view('user.service', compact('categories'));
    }



    public function ServiceDetail($id)
    {


        //         $categories = Category::with('shebas')->where('id', $id)->paginate(10); // Pagination with 10 items per page

        // if ($categories->count() > 0) {
//     $categories = $categories->first();
//     if ($categories->category_style == '1') {
//         return view('user.service_card_view', compact('categories'));
//     } else if ($categories->category_style == '2') {
//         return view('user.service_list_view', compact('categories'));
//     } else if ($categories->category_style == '3') {
//         echo "front View";
//     }
// } else {
//     echo "Not found";


        // }




        $categories = Category::with('shebas')->where('id', $id)->first();


        if ($categories) {
            $shebas = Sheba::where('category_id', $categories->id)->paginate(10);
            if ($categories->category_style == '1') {
                // return response()->json($shebas);
                return view('user.service_card_view', compact('categories', 'shebas'));

            } else if ($categories->category_style == '2') {

                return view('user.service_list_view', compact('categories', 'shebas'));
            } else if ($categories->category_style == '3') {
                return view('user.service_list_view_3', compact('categories', 'shebas'));
            } else if ($categories->category_style == '4') {
                $category_name = "bangla";
                if( request()->has('cat') ) {
                    $category_name = request()->query('cat');
                }
                $shebas = Sheba::where('category_id', $categories->id)->where('cat_name',$category_name)->paginate(10);
                return view('user.service_front', compact('categories', 'shebas','category_name','id'));
            }

        } else {
            echo "Not found";
        }


        return view('user.service_detal', compact('categories'));
        //  return response()->json($categories);
    }
    public function ServiceHistory()
    {

        $userId = Auth::id();
        $histories = History::where('user_id', $userId)->get();
        // return response()->json($histories);
        return view('user.service-history', compact('histories'));
    }


    public function ServiceDeposit()
    {

        $userId = Auth::id();
        $recahrges = Recharge::where('user_id', $userId)->get();
        //return response()->json($recahrges);
        return view('user.service_deposit', compact('recahrges'));



    }

    public function Create()
    {
        return view('user.create');
    }

    public function Store(Request $request)
    {
        $recharge = new Recharge();
        $recharge->user_id = Auth::id();
        $recharge->amount_total = $request->amount_total;
        $recharge->amount_bonus = $request->amount_bonus;
        $recharge->trnsaction = $request->trnsaction;
        $recharge->status = 0;
        $recharge->type = 'ব্যাংক এশিয়া';




        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get image extension
                $extension = $image_tmp->getClientOriginalExtension();
                $imageName = rand(111, 999) . '.' . $extension;
                $imagePath = 'admin/images/recharge/' . $imageName;
                // Upload the imaage
                Image::make($image_tmp)->save($imagePath);
                $recharge->image = $imageName;
            } else {
                $recharge->image = "";
            }
        }

        $recharge->save();
        User::where('id', Auth::id())->increment('balance', $request->amount_total);
        //    $user = User::findOrFail(Auth::id());
        //    $user->increment('balance', $request->amount_total);
        if ($recharge) {
            $notification = array(
                'messege' => 'Recharge Update  Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }



    public function DawnloadFile(Request $request)
    {

        // Get the current authenticated user
        $user = $request->user();

        // Check if the user's available balance is sufficient
        $requiredBalance = 100; // Adjust the required balance according to your needs
        if ($user->available_balance < $requiredBalance) {
            return redirect()->back()->with('error', 'Insufficient balance to download the PDF.');
        }

        // Generate the PDF content
        $pdf = PDF::loadView('pdf.download');

        // Return the PDF download response
        return $pdf->download('downloaded.pdf');



        // return response()->download(public_path('admin/pdf/sheba_file/'.$file));
        // $balance = Auth::user()->balance;
        // $user_id = Auth::id();
        // if ($balance >= $request->sheba_price) {
        //     $order = new History();
        //     $order->user_id = $request->user_id;
        //     $order->sheba_id = $request->sheba_id;

        //     return response()->json($order);
        // }
        //     $sheba=Sheba::find($id);
        //    return response()->download(public_path('admin/pdf/sheba_file/'.$id));
    }

    public function bn2en($number)
    {
        $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

        return str_replace($bn, $en, $number);
    }

    public function DawnloadDOne($id)
    {





        $balance = Auth::user()->balance;
        $sheba = Sheba::where('id', $id)->first();

        if ($balance >= $this->bn2en($sheba->sheba_price)) {



            $order = new History();
            $order->sheba_id = $sheba->id;
            $order->sheba_price = $this->bn2en($sheba->sheba_price);
            $order->user_id = Auth::user()->id;
            $order->save();
            // User::where('id', $user_id)->decrement('balance', $request->sheba_price);

            User::where('id', Auth::id())->decrement('balance', $this->bn2en($sheba->sheba_price));


            // $file = 'example.pdf';
            if(empty($sheba->file)){
                $pdfPath = $sheba->language;
            }else{
                $pdfPath = url('admin/pdf/sheba_file/' . $sheba->file);
            }
           
            return response()->json([
                "message" => 'File Downloaded!',
                "status" => true,
                "file_path" => $pdfPath
            ]);



        } else {
            $notification = [
                'message' => 'Insufficient balance, please recharge!',
                'alert-type' => 'error'
            ];
            return response()->json([
                "message" => 'Insufficient balance, please recharge!',
                "status" => false,
                "file_path" => ''
            ]);
            //return back();
        }




    }



    public function createPayment(Request $request)
    {
        $post = json_encode($_POST);

        $ch = curl_init('https://cpp.bka.sh/customer-portal-middleware/create-payment');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_ENCODING, "");


        $data = curl_exec($ch);
        return $data;
    }

    public function executePayment(Request $request)
    {

        $invoice_id = mt_rand(1000000000, 9999999999);
        $invoice_id = base64_encode($invoice_id);



        $recharge = new Recharge();
        $recharge->user_id = Auth::id();
        $recharge->amount_total = $request->amount;
        $recharge->amount_bonus = $request->amount;
        $recharge->trnsaction = $invoice_id;
        $recharge->status = 3;
        $recharge->type = 'Bkash';
        $recharge->save();


        User::where('id', Auth::id())->increment('balance', $request->amount);


        return true;
    }


    public function PaymentVerify($invoice_id)
    {
        $invoice_ids = Recharge::where('trnsaction', $invoice_id)->get();

        if (count($invoice_ids) != 0) {
            $notification = array(
                'messege' => 'Payment not added. Something is wrong contract admin',
                'alert-type' => 'error'
            );
            return Redirect(route('dashboard.deposit'))->with($notification);
        }

        $jsonData1_get_r = array(
            'invoice_id' => $invoice_id
        );

        $jsonDataEncoded_get = json_encode($jsonData1_get_r);
        $ch_get = curl_init("https://pay." . Config::get('app.payment_domain') . "/api/verify-payment");
        curl_setopt($ch_get, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch_get, CURLOPT_POSTFIELDS, $jsonDataEncoded_get);
        curl_setopt($ch_get, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch_get,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                "RT-UDDOKTAPAY-API-KEY:" . Config::get('app.payment_token')
            )

        );

        $response = curl_exec($ch_get);
        curl_close($ch_get);

        $data = json_decode($response);



        if ($data->status == 'COMPLETED') {


            $recharge = new Recharge();
            $recharge->user_id = Auth::id();
            $recharge->amount_total = $data->amount;
            $recharge->amount_bonus = $data->amount;
            $recharge->trnsaction = $invoice_id;
            $recharge->status = 3;
            $recharge->type = 'online_payment';
            $recharge->save();


            User::where('id', Auth::id())->increment('balance', $data->amount);

            $notification = array(
                'messege' => 'Tk Successfully Added',
                'alert-type' => 'success'
            );
            return Redirect(route('dashboard.deposit'))->with($notification);




        } else {
            $notification = array(
                'messege' => 'Payment not added. Something is wrong contract admin',
                'alert-type' => 'error'
            );
            return Redirect(route('dashboard.deposit'))->with($notification);
        }




    }


    public function PaymentVerifyWebhook(Request $request)
    {

        if ($request->header('RT-UDDOKTAPAY-API-KEY') == Config::get('app.payment_token')) {
            $data = json_decode($request->getContent());



            if ($data->status == 'COMPLETED') {

                $user = User::find($data->metadata->id);

                $user->wallet_amount = number_format($user->wallet_amount + $data->amount);

                $user->save();

                return true;

            }
        }


    }
}