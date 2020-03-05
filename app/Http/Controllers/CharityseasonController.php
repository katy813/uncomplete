<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Charityseason;
use Validator,Redirect,Response,File;
use PDF;
use Auth;

class CharityseasonController extends Controller
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
                                    $data['charityseasons'] = Charityseason::orderBy('id','desc')->paginate(10);
                                    return view('pages.charity-seasons-dashboard',$data);
               }

               }
                                    $data['charityseasons'] = Charityseason::orderBy('id','desc')->paginate(10);
                                     return view('pages.charityseason',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('charityseasons.create');
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
                'seasonName'=> 'required',
                'description'=> 'required',
                'duration'=> 'required',
                'unitname'=> 'required',
                'unitvalue'=> 'required',
                'numofunits'=> 'required',
                 ]);

                  if ( $request->file('file')) {
                        $imagefile = date('YmdHis') . "." . $request->file('file')->extension();
                        $request->file('file')->move(public_path('image'), $imagefile);
                  }

                  $request->merge(['seasonphoto' =>  $imagefile]);
                  $season = Charityseason::create($request->all());
                        return Redirect::to('pages.charity-seasons-dashboard')
                       ->with('success','Greate! Season created successfully.');
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
        $data['charityseason_info'] = Charityseason::where($where)->first();
        return view('charityseasons.edit', $data);
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
                'seasonName'=> 'required',
                        'description'=> 'required',
                        'duration'=> 'required',
                        'unitname'=> 'required',
                        'unitvalue'=> 'required',
                        'numofunits'=> 'required',
                        'seasonphoto'=> 'required',
                        ]);

                        $update = ['seasonName' => $request->seasonName, 'description' => $request->description, 'duration' => $request->duration,'unitname' => $request->unitname,'unitvalue' => $request->unitvalue,'numofunits' => $request->numofunits,'seasonphoto' => $request->seasonphoto];
                        Charityseason::where('id',$id)->update($update);

                        return Redirect::to('pages.charity-seasons-dashboard')
                       ->with('success','Great! Season updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Charityseason::where('id',$id)->delete();

        return Redirect::to('pages.charity-seasons-dashboard')->with('success','season deleted successfully');
    }

     public function viewseasondetails($id)
                {
                  $data['charityseason'] = Charityseason::find($id);
                  return view('pages.seasondetails',$data);
                }
}
