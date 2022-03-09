<?php

namespace App\Http\Controllers;


use App\Models\Account;

use Illuminate\Http\Request;

class AccountController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Account'] = Account::orderBy('id','asc')->paginate(5);
        return view('account.index', $data);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, Account $account)
    {
            $account = new account;
            $account->first_name = $request->first_name;
            $account->last_name = $request->last_name;
            $account->email = $request->email;
            $account->phone_no = $request->phone_no;
            $account->dob = $request->dob;
            $account->address = $request->address;
            $account->hobby = $request->hobby;
            $account->gender = $request->gender;
            $account->country = $request->country;
            $account->save();
            return redirect()->route('account.index')->with('Bravo!','Data of the account has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */

    public function show(Account $account)
    {
        $account = account::find($account->id);
        return view('account.show', compact('account'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $account = $account::find($account->id);
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->dob = $request->dob;
        $account->gender = $request->gender;
        $account->phone_no = $request->phone_no;
        $account->email = $request->email;
        $account->hobby = $request->hobby;
        $account->address = $request->address;
        $account->country = $request->country;
        $account->save();
        return redirect()->route('account.index')->with('Bravo','People data has been updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $post = $account::find($account->id);

        $post->delete();
        return redirect()->route('account.index');
    }


}
