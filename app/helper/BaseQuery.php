<?php

namespace App\Traits;

namespace App\Helper;

trait BaseQuery
{

    public function get_all($modal)
    {
        return $modal->all();
    }


    public  function add($modal, $data)
    {
        return $modal->create($data);
    }


    public function get_by_column($modal, $column, $value)
    {
        return $modal->where($column, $value)->get();
    }

    // public function update_record($modal, $column, $id)
    // {
    //     return $modal->where($column, $id)->update($data);
    // }

    public function get_single_record($modal, $column, $value)
    {
        return $modal->where($column, $value)->first();
    }

    public function delete($modal, $id)
    {
        return $modal->findOrFail($id)->Delete();
    }

    public function greeting()
    {
        echo "hello sir";
    }
}
