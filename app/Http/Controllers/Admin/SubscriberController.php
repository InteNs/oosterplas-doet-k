<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Response;

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

    public function export()
    {
        $subscribers = Subscriber::all();
        $fileText = '';

        foreach ($subscribers as $subscriber) {
            $fileText .= $subscriber->email . ' ';
        }

        $file = "mails.txt";
        $headers = [
            'Content-type' => 'text/plain',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $file)
        ];
        return Response::make($fileText, 200, $headers);
    }
}
