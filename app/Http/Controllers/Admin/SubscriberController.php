<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscriber;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $subscribers = Subscriber::paginate(15);
        return view('admin.subscriber.index')->with('subscribers', $subscribers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscriber::destroy($id);
        return redirect('beheer/abonnee');
    }
}