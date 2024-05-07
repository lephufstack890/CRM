<?php

namespace App\Policies;

use App\Models\KenhDong;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KenhDongPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhDong  $kenhDong
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess('list_kenh_dong');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('create_kenh_dong');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhDong  $kenhDong
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('update_kenh_dong');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhDong  $kenhDong
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, KenhDong $kenhDong)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhDong  $kenhDong
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, KenhDong $kenhDong)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhDong  $kenhDong
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, KenhDong $kenhDong)
    {
        //
    }

    public function excel(User $user)
    {
        return $user->checkPermissionAccess('excel_kenh_dong');
    }
}
