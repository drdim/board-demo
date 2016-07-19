<?php

namespace App\Http\Controllers;

use App\Bulletin;
use \Auth;
use \File;
use \Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class BulletinController
 * @package App\Http\Controllers
 */
class BulletinController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getMyBulletin()
    {
        $id = Auth::user()->id;
        return view('bulletin/my', ['bulletinList' => Bulletin::where('user_id', $id)->get()->take(10)]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('bulletin/list', ['bulletinList' => Bulletin::where('status','=','1')->get()]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {
        return view('bulletin/view', ['bulletin' => Bulletin::find($id)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('bulletin/edit', ['bulletin' => Bulletin::find($id), 'state' => 'save']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('bulletin/create', ['state' => 'create']);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function save(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $bulletin = new Bulletin($data);
        if ($request->file('image')) {
            $imageName = md5($bulletin->id . '.' . $request->file('image')->getClientOriginalExtension());
            $path = base_path() . '/public/upload/images/'. $imageName;
            Image::make($request->file('image')->getRealPath())
                ->resize(140, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path);
            $bulletin->fill(['image' => '/upload/images/' . $imageName]);
        }
        $bulletin->save();

        return redirect('/')->with('message', trans('main.saved'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $id = $request->id;
        $bulletin = Bulletin::find($id);
        if(!empty($bulletin)){
            $oldFile = base_path() . $bulletin->image;
            $bulletin->fill($data);
            if ($request->file('image')) {
                $imageName = md5($bulletin->id . '.' . $request->file('image')->getClientOriginalExtension());
                $path = base_path() . '/public/upload/images/'. $imageName;
                Image::make($request->file('image')->getRealPath())
                    ->resize(140, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save($path);
                // todo check before save old
                if(File::exists($oldFile)){
                    File::delete($oldFile);
                }
                $bulletin->fill(['image' => '/upload/images/' . $imageName]);
            }
            $bulletin->update();
        }

        return redirect('/')->with('message', trans('main.updated'));
    }
    /**
     * //todo csrf validator
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function close($id)
    {
        $bulletin = Bulletin::find($id);
        if ($bulletin->delete()) {
            return redirect('/')->with('message', trans('main.deleted'));
        } else {
            return redirect('/')->with('message', trans('main.not_deleted'));
        }
    }

    public function publish($id){
        if($id){
            $bulletin = Bulletin::find($id);
            $bulletin->status = 1;
            if($bulletin->save()){
                return redirect('/')->with('message', trans('main.published'));
            }
        }
    }

}
