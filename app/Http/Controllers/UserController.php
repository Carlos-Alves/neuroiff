<?php

namespace Neuroiff\Http\Controllers;

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use Auth;
use Knp\Snappy\Pdf;
use Neuroiff\User;
use Neuroiff\Http\Requests\RegisterUserRequest;
use Neuroiff\Http\Requests\UpdateProfileUserRequest;

class UserController extends Controller
{

    /**
     * @var User
     */
    private $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function register(){
        return view('neuroiff.user.register');
    }

    public function profile(){
        $title = 'Meu Perfil';
        return view('neuroiff.user.profile', compact('title'));
    }

    public function profileUpdate(UpdateProfileUserRequest $request){
        $dataForm = $request->all();

        $user = $this->user->find(auth()->user()->id);

        //alterar senha caso queira
        if ($dataForm['password'] != '')
            $dataForm['password'] = bcrypt($dataForm['password']);
        else
            unset($dataForm['password']);

        //alterar imagem de perfil
        if ($request->hasFile('image')){
            $image = $request->file('image');

            if ($user->image != null)
                $nameImage = $user->image;
            else
                $nameImage = uniqid(date('YmdHis')).'.'.$image->getClientOriginalExtension();

            $dataForm['image'] = $nameImage;

            $upload = $image->storeAs('users', $nameImage);
            if (!$upload)
                return redirect()->back()->with(['errors' => 'Falha ao Upload!']);
        }

        $update = $user->update($dataForm);

        if ($update)
            return redirect()->back()->with(['success' => 'Perfil atualizado com sucesso!']);
        else
            return redirect()->back()->with(['errors' => 'Falha ao editar!']);
    }

    public function registring(RegisterUserRequest $request){
        $dataForm = $request->all();

        $password = $dataForm['password'];

        $dataForm['password'] = bcrypt($dataForm['password']);

        if ($request->hasFile('image')){
            $image = $request->file('image');

            $nameImage = uniqid(date('YmdHis')).'.'.$image->getClientOriginalExtension();

            $dataForm['image'] = $nameImage;

            $upload = $image->storeAs('users', $nameImage);
            if (!$upload)
                return redirect()->back()->with(['errors' => 'Falha ao Upload!']);
        }

        $insert = $this->user->create($dataForm);

        if ($insert){
            if (Auth::attempt(['email' => $insert->email, 'password' => $password]))
                return redirect()->route('profile');
            else
                return redirect('/login');
        }else{
            return redirect()->back()->with(['errors' => 'Falha ao cadastrar!']);
        }

    }

}
