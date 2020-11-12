<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $contactIssues = DB::table('contact_issues')->get();
        $contactDepartment = ContactForm::all();
        return view('admin.contact.form.index', compact('contactDepartment', 'contactIssues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        $contact_department = new ContactForm();

        $contact_department->department_name = $request->department_title;
        $contact_department->department_email = $request->department_email;

        $contact_department->save();
        return redirect()->back();
    }

    public function store_issue(Request $request)
    {

        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        DB::table('contact_issues')->insert([
            'contact_issues' => $request->issue_title
        ]);
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        DB::table('contact_forms')->where('id', $id)->delete();
        return redirect()->route('admin.contactform.index');
        
    }


    public function issue_destroy($id)
    {
        if (! Gate::allows('editor_add_update')) {
            return abort(401);
        }

        DB::table('contact_issues')->where('id', $id)->delete();
        return redirect()->route('admin.contactform.index');
    }

    public function getDept()
    {
        $dept = ContactForm::all();
        $dept_email = ContactForm::all('department_email');
        return response()->json([
            'dept' => $dept,
            'dept_email' => $dept_email
        ]);
    }

    public function getIssue()
    {
        $issues = DB::table('contact_issues')->get();
        return response()->json([
            'issues' => $issues
        ]);
    }

    public function sentMail(Request $request)
    {
        $info = $request->input('issue');

        $receiver_email = $request->input('depart');

        $department_name = DB::table('contact_forms')->where('department_email', $receiver_email)->get()[0]->department_name;
        $issues = DB::table('contact_issues')->where('id', $info)->get();

        $sender_name = $request->input('name');
        $sender_email = $request->input('email');
        
        $subject = $request->input('subject');
        $issue_name = $issues[0]->contact_issues;
        $query = $request->input('msg');

        Mail::send('admin.contact.mail', array(
            'name' => $sender_name,
            'email' => $receiver_email,
            'issue' => $issue_name,
            'subject' => $subject,
            'user_query' => $query,
        ), function($message) use ($sender_email, $receiver_email, $subject, $department_name){
            $message->from($sender_email);
            $message->to($receiver_email, $department_name)->subject($subject);
        });

        return response()->json([
            'success' => 'Mail Sent Successfully'
        ]);

    }
}
