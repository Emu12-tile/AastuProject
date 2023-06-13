<?php

namespace App\Http\Controllers;

use App\Models\HR;

use App\Models\Secondhr;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class FormPositionController extends Controller
{
    public function index()
    {

 

        // $hrs = HR::join('forms', 'forms.id', '=', 'h_r_s.form_id')
        // ->join('positions', 'positions.id', '=', 'forms.position_id')
        // ->where('positions.position_type_id', 2)
        // ->select('h_r_s.*', 'positions.job_category_id',  DB::raw("'choice 1st' as choice"))
        // ->union(
        //     Secondhr::join('forms', 'forms.id', '=', 'secondhrs.form_id')
        //         ->join('choice2s', 'choice2s.id', '=', 'forms.choice2_id')
        //         ->where('choice2s.position_type_id', 2)
        //         ->select('secondhrs.*', 'choice2s.jobcat2_id',  DB::raw("'choice 2st' as choice"))
        // )
        // ->orderBy('job_category_id')
        // ->get();

        $hrs = HR::join('forms', 'forms.id', '=', 'h_r_s.form_id')
            ->join('positions', 'positions.id', '=', 'forms.position_id')
            ->join('job_categories', 'job_categories.id', '=', 'positions.job_category_id')
            ->where('positions.position_type_id', 2)
            ->select(
                'h_r_s.*',
                'job_categories.job_category as category',
                'positions.position as position_name',
                'positions.job_category_id',
                DB::raw("'1ኛ ምርጫ' as choice")
            )
            ->union(
                Secondhr::join('forms', 'forms.id', '=', 'secondhrs.form_id')
                    ->join('choice2s', 'choice2s.id', '=', 'forms.choice2_id')
                    ->join('jobcat2s', 'jobcat2s.id', '=', 'choice2s.jobcat2_id')
                    ->where('choice2s.position_type_id', 2)
                    ->select(
                        'secondhrs.*',
                        'jobcat2s.job_category as category',
                        'choice2s.position as position_name',
                        'choice2s.jobcat2_id',
                        DB::raw("'2ኛ ምርጫ' as choice")
                    )
            )
            ->orderBy('job_category_id')
            ->get();

    
    // dd($hrs);
        // ->with('i', (request()->input('page', 1) - 1) * 5)
        // return view('hr.table', compact('forms'))->with('i', (request()->input('page', 1) - 1) * 10);
        return view('formexcel.index', compact('hrs'));
    }

}