<?php

namespace App\Policies;

use App\Models\KenhTay;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KenhTayPolicy
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
     * @param  \App\Models\KenhTay  $kenhTay
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess('list_kenh_tay');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('create_kenh_tay');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhTay  $kenhTay
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('update_kenh_tay');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhTay  $kenhTay
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, KenhTay $kenhTay)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhTay  $kenhTay
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, KenhTay $kenhTay)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhTay  $kenhTay
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, KenhTay $kenhTay)
    {
        //
    }

    public function excel(User $user)
    {
        return $user->checkPermissionAccess('excel_kenh_tay');
    }
}
