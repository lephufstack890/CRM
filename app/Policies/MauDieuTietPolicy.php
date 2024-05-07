<?php

namespace App\Policies;

use App\Models\MauDieuTiet;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MauDieuTietPolicy
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
     * @param  \App\Models\MauDieuTiet  $mauDieuTiet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess('list_mau_dieu_tiet');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('create_mau_dieu_tiet');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MauDieuTiet  $mauDieuTiet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('update_mau_dieu_tiet');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MauDieuTiet  $mauDieuTiet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, MauDieuTiet $mauDieuTiet)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MauDieuTiet  $mauDieuTiet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, MauDieuTiet $mauDieuTiet)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MauDieuTiet  $mauDieuTiet
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, MauDieuTiet $mauDieuTiet)
    {
        //
    }

    public function excel(User $user)
    {
        return $user->checkPermissionAccess('excel_mau_dieu_tiet');
    }
}
