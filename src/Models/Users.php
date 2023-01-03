<?php

namespace Conquer\Auth\Models;

use Conquer\Auth\Models\Traits\Authorization;

class Users extends BaseModel
{
    use Authorization;

    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Authorize to Force user do activation
    public static function authorizeForForcingActivationAccount(): bool
    {
        return true;
    }

    // Authorize to Registration new member
    public static function authorizeForRegistrationingMember(): bool
    {
        return true;
    }

    // Authorize to Forgot & Reset Password
    public static function authorizeForCreatingNewPassword(): bool
    {
        return true;
    }
}
