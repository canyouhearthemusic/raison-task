<?php

namespace App\Services;

use App\Models\Purchase;
use App\Models\Store;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PurchaseService
{
    public function create(array $attributes)
    {
        DB::transaction(function() use ($attributes) {
            $storeId = Store::query()
                ->firstOrCreate(['name' => $attributes['store_name']])
                ->getAttribute('id');

            if(empty($attributes['thumbnail'])) {
                $thumbnailPath = null;
            } else {
                $thumbnailPath = $this->handleThumbnail($attributes['thumbnail']);
            }

            Purchase::query()->create([
                'store_id' => $storeId,
                'purchase_amount' => $attributes['purchase_amount'],
                'currency_id' => $attributes['currency_id'],
                'thumbnail' => $thumbnailPath
            ]);
        });
    }

    private function handleThumbnail(UploadedFile $thumbnail)
    {
        if($this->isImage($thumbnail)) {
            return $this->storeImage($thumbnail);
        } elseif ($this->isPdf($thumbnail)) {
            return $this->storePdf($thumbnail);
        }

        return new \Exception('Unsupported file format');
    }

    private function isImage(UploadedFile $thumbnail): bool
    {
        return in_array($thumbnail->getMimeType(), ['image/jpeg', 'image/png']);
    }

    private function isPdf(UploadedFile $thumbnail): bool
    {
        return $thumbnail->getMimeType() == 'application/pdf';
    }

    private function storeImage(UploadedFile $image)
    {
        return $image->store('images', 'public');
    }

    private function storePdf(UploadedFile $pdf)
    {
        $path = Storage::disk('s3')->put('pdfs', $pdf);

        return Storage::disk('s3')->url($path);
    }
}
