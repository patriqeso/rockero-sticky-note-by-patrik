<?php

namespace App\Policies;

use App\Models\Sticky;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StickyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sticky $sticky): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sticky $sticky): bool
    {
        return $this->allowActionCurrentUser($user, $sticky);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sticky $sticky): bool
    {
        return $this->allowActionCurrentUser($user, $sticky);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Sticky $sticky): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Sticky $sticky): bool
    {
        return  false;
    }

    private function allowActionCurrentUser(User $user, Sticky $sticky): bool
    {
        return $sticky->user()->is($user);
    }
}
