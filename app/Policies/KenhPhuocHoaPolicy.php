<?php

namespace App\Policies;

use App\Models\KenhPhuocHoa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KenhPhuocHoaPolicy
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
     * @param  \App\Models\KenhPhuocHoa  $kenhPhuocHoa
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess('list_kenh_phuoc_hoa');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('create_kenh_phuoc_hoa');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhPhuocHoa  $kenhPhuocHoa
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('update_kenh_phuoc_hoa');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhPhuocHoa  $kenhPhuocHoa
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, KenhPhuocHoa $kenhPhuocHoa)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhPhuocHoa  $kenhPhuocHoa
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, KenhPhuocHoa $kenhPhuocHoa)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KenhPhuocHoa  $kenhPhuocHoa
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, KenhPhuocHoa $kenhPhuocHoa)
    {
        //
    }

    public function excel(User $user)
    {
        return $user->checkPermissionAccess('excel_kenh_phuoc_hoa');
    }
}
