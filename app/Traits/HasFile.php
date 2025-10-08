<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait HasFile
{
    public function upload_file(Request $request, $column, $folder): ?string
    {
        if ($request->hasFile($column)) {
            $file = $request->file($column);
            $filename = time() . '_' . $file->getClientOriginalName();
            return $file->storeAs($folder, $filename, 'public');
        }
        return null;
    }

    public function update_file(Request $request, Model $model, $column, $folder): ?string
    {
        if ($request->hasFile($column)) {
            if ($model->$column) {
                Storage::disk('public')->delete($model->$column);
            }
            $thumbnail = $request->file($column);
        } else {
            $thumbnail = $model->$column;
        }

        return $thumbnail;
    }

    public function delete_file(Model $model, $column): void
    {
        if ($model->$column) {
            Storage::disk('public')->delete($model->$column);
        }
    }
}
