<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use PDF;
use Validator,Redirect,Response,File;
use Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           if (Auth::guard()->user() != null){
           if(Auth::guard()->user()->role_id == 1){
                                $data['items'] = Item::orderBy('id','desc')->paginate(10);
                                return view('pages.items-dashboard',$data);
           }

           }
                                $data['items'] = Item::where('status','=','available')->orderBy('id','desc')->paginate(10);
                                 return view('pages.welcome',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('items.createitem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
                    'name'=>'required',
                    'description'=>'required',
                    'state'=>'required',
                    'price'=>'required',
                    'charityfee'=>'required',
                    'category'=> 'required',
                ]);

             if ( $request->file('file')) {
                         $imagename = date('YmdHis') . "." . $request->file('file')->extension();
                        $request->file('file')->move(public_path('image'), $imagename);
                     }

                  $request->merge(['itemimage' =>  $imagename]);
                  $request->merge(['seller_id' =>  Auth::user()->id]);
                  $item = Item::create($request->all());

                return Redirect::to('profile')
               ->with('success','Greate! item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
               $where = array('id' => $id);
               $data['item_info'] = Item::where($where)->first();

               return view('items.edititem', $data);

    }

public function editstatus($id)
        {
          $item=Item::find($id);
          $item->update(['status' => 'available']);
          return redirect()->back();
        }

        public function denystatus($id)
                {
                  $item=Item::find($id);
                  $item->update(['status' => 'denied']);
                  return redirect()->back();
                }

        public function soldstatus($id)
                {
                  $item=Item::find($id);
                  $item->update(['status' => 'sold']);
                  return redirect()->back();
                }
        public function reservestatus($id)
                {
                  $item=Item::find($id);
                  $item->update(['status' => 'reserved']);
                  return redirect()->back();
                }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                    'name'=>'required',
                                        'description'=>'required',
                                        'state'=>'required',
                                        'price'=>'required',
                                        'charityfee'=>'required',
                                        'status'=>'required',
                                        'category'=> 'required',
                ]);

          $update = ['name' => $request->name, 'description' => $request->description,'state' => $request->state,'price' => $request->price,'charityfee' => $request->charityfee,'status' => $request->status,'category' => $request->category,'itemphoto' => $request->itemphoto];
          Item::where('id',$id)->update($update);

                return Redirect::to('profile')
               ->with('success','Great! item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::where('id',$id)->delete();

                return Redirect::to('profile')->with('success','Item deleted successfully');
    }

    public function viewdetails($id)
            {

              $data['item'] = Item::find($id);
              return view('pages.itemdetails',$data);
            }

    public function viewstate()
           {
            $data['items'] = Item::where([['status','=','available'],['state','=','new']] )->orderBy('id','desc')->paginate(10);
            return view('pages.Categories',$data);
           }


}
