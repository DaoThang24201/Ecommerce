<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\User\UserServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->all();

        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->get('password') != $request->get('password_confirmation')) {
            return back()->with('notification','ERROR: Confirm password does not match');
        } else {
            $data = $request->all();
            $data['password'] = $request->get('password');

            //Upload anh
            if ($request->hasFile('image')) {
                $data['avatar'] = Common::uploadFile($request->file('image'), 'dashboard/assets/images/avatars');
            }

            $user = $this->userService->create($data);

            return redirect(route('admin.user.show', $user));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',[
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();

        //Mật khẩu
        if ($request->get('password') != null) {
            if ($request->get('password') != $request->get('password_confirmation')) {
                return back()->with('notification', 'ERROR: Confirm password does not match');
            }
            $data['password'] = $request->get('password');
        } else {
            unset($data['password']);
        }

        //File ảnh
        if ($request->hasFile('image')) {
            //THêm file mới
            $data['avatar'] = Common::uploadFile($request->file('image'), 'dashboard/assets/images/avatars');

            //Xóa file cũ
            $file_name_old = $request->get('image_old');
            if ($file_name_old = $request->get('image_old')) {
                unlink('dashboard/assets/images/avatars/' . $file_name_old);
            }
        }

        //Update
        $this->userService->update($data, $user->id);

        return redirect(route('admin.user.show', $user));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userService->delete($user->id);

        //Xóa file ảnh
        $file_name = $user->avatar;
        if ($file_name != '') {
            unlink('dashboard/assets/images/avatars/' . $file_name);
        }

        return redirect(route('admin.user.index'));
    }
}
