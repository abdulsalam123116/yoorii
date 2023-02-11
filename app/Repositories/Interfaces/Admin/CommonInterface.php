<?php

namespace App\Repositories\Interfaces\Admin;

interface CommonInterface {

    public function delete($table, $id);

    public function statusChange($request);
    public function acceptVisaChange($request);
    public function acceptCODChange($request);
}
