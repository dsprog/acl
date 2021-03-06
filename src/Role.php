<?php

namespace ResultSystems\Acl;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Pega as permissões do papel
     *
     * @return Collection
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }

    /**
     * Pega os usuários que tem este papel
     *
     * @return Collection
     */
    public function users()
    {
        return $this->belongsToMany(config('acl.model'));
    }
}
