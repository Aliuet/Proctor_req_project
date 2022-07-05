<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    
    public function registration()
    {
        return view('registration');
        # code...
    }
    public function contractorDashboard()
    {
        return view('contractor.contractor_dashboard');
        # code...
    }
    public function agencyDashboard()
    {
        return view('agency.agency_dashboard');
        # code...
    }
    public function orderPlaced()
    {
        return view('contractor.order_placed');
    }
    public function agencyDemandView()
    {
        return view('agency.demand_view');
    }
    public function contrProfile()
    {
        return view('contractor.contr_profile');
    }
     public function contProfileList()
    {
        return view('contractor.contr_profile_list');
    }
    
    public function agenciesProfile()
    {
        return view('contractor.agencies_profile');
    }
    public function orderPlace()
    {
        return view('contractor.order_place');
    }
    public function ordersHistory()
    {
        return view('contractor.orders_history');
    }
    public function addInterviewer()
    {
        
        return view('contractor.add_interviewer');

    }
    public function listInterviewer()
    {
        Alert::success('added successfully','welcome to your interviewer');
        return view('contractor.list_interviewer');
    }
    public function agencyProfile()
    {
        return view('agency.agency_profile');
    }
    public function agencyProfileList()
    {
        return view('agency.agency_profile_list');
    }



    public function manageOrders()
    {
        return view('agency.manage_orders');
    }
    public function ordersHistoryAgency()
    {
        return view('agency.orders_history_agency');
    }
    public function candidateSubmission()
    {

        return view('agency.candidate_submission');
    }
    public function allCandidatesAgency()
    {
        Alert::success("You are successfully login!");
        return view('agency.all_candidates_agency');
    }    
    public function selectedCandidates()
    {
        return view('agency.selected_candidates');
    }
    public function selectedCandidateSubmission()
    {
        return view('agency.selected_candidate_submission');
    }
    public function interviewerDashboard()
    {
        return view('interviewer.interviewer_dashboard');
    }
    public function interviewerProfile()
    {
        return view('interviewer.interviewer_profile');
    }
    public function scheduleCandidates()
    {
        return view('interviewer.schedule_candidates');
    }
    public function scheduleSubmission()
    {
        return view('interviewer.schedule_submission');
    }
    public function selectionForm()
    {
        return view('interviewer.selection_form');
    }
    public function testForm()
    {
        return view('interviewer.test_form');
    }
    public function candidateList()
    {
        return view('interviewer.candidate_list');
    }
    // public function sweetalert(Request $req){
    //     alert()->success('your data submitted successfully')->persistent('close')-?autoclose(3500);
    //     return back();
    // }    
}
