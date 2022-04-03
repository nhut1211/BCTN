<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    public $timestamps = false;	//set time to false (created_at, updated_at)
    protected $filltable = [
        'ho_ten', 'nam_sinh', 'dia_chi', 'so_dien_thoai', 'e_mail'	//các cột trong bảng Brand
    ];
    protected $primaryKey = 'id_hopdong';	//khóa chính
    protected $table = 'tbl_hopdong';		//tên bảng
}
