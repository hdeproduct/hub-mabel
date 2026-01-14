<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DataVisit;
use Illuminate\Auth\Access\HandlesAuthorization;

class DataVisitPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DataVisit');
    }

    public function view(AuthUser $authUser, DataVisit $dataVisit): bool
    {
        return $authUser->can('View:DataVisit');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DataVisit');
    }

    public function update(AuthUser $authUser, DataVisit $dataVisit): bool
    {
        return $authUser->can('Update:DataVisit');
    }

    public function delete(AuthUser $authUser, DataVisit $dataVisit): bool
    {
        return $authUser->can('Delete:DataVisit');
    }

    public function restore(AuthUser $authUser, DataVisit $dataVisit): bool
    {
        return $authUser->can('Restore:DataVisit');
    }

    public function forceDelete(AuthUser $authUser, DataVisit $dataVisit): bool
    {
        return $authUser->can('ForceDelete:DataVisit');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DataVisit');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DataVisit');
    }

    public function replicate(AuthUser $authUser, DataVisit $dataVisit): bool
    {
        return $authUser->can('Replicate:DataVisit');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DataVisit');
    }

}