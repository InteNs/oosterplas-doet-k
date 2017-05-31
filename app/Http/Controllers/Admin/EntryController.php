<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Entry;
use App\Http\Requests\StoreActivity;
use App\Activity;
use App\Http\Controllers\Controller;
use DateTime;
use PhpParser\Node\Expr\Array_;
use Session;
use Illuminate\Support\Facades\Input;
use Request;

class EntryController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Entry::destroy($id);
        return redirect('/beheer/activiteit');
    }
}
