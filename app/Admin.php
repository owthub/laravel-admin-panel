<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable {

    protected $table = "tbl_admins";

}
