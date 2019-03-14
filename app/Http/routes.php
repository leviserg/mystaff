<?php
    Route::controller('/admin', 'AdminController', [
        'anyData'  => 'admin.getdata',
        'getIndex' => 'admin',
    ]);