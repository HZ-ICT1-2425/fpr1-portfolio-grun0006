<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\alert;

class FAQController extends controller
{
    public function createfaqpost(Request $request)
    {
        if ($request->post('question') != null and $request->post('answer') != null) {
            DB::table('faq')->insert(['question' => $request->post('question'), 'answer' => $request->post('answer')]);
            return redirect('faq');
        } else {
            return redirect('createfaq');
        }
    }

    public function editfaqpost(Request $request)
    {
        if ($request->post('question') != null and $request->post('answer') != null) {
            DB::table('faq')->where('id', $request->post('id'))->update(['question' => $request->post('question'), 'answer' => $request->post('answer')]);
            return redirect('faq');
        } else {
            return redirect('editfaq');
        }
    }

    public function deletefaqpost(Request $request)
    {
        if ($request->post('question') != null and $request->post('answer') != null) {
            DB::table('faq')->where('id', $request->post('id'))->delete();
            return redirect('faq');
        } else {
            return redirect('deletefaq');
        }
    }
}
