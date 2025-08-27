<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ShutterPhotos;
use App\Models\PhotosCategory;
use App\Models\Shutter;
class PhotoUploadComponent extends Component
{  use WithFileUploads;

    public $shutterId;
    public $categoryId;
    public $photos = [];
    public $shutter;
    public function submit()
    {
        $this->validate([
            'photos.*' => 'image|max:2024', // 2MB Max
        ]);

        foreach ($this->photos as $photo) {
            // Store in storage/app/photos (not public)
            $path = $photo->store('photos', 'public'); // stores in storage/app/public/photos
            // dd($path);
            ShutterPhotos::create([
                'shutter_id' => $this->shutterId,
                'category_id' => $this->categoryId,
                'image_url' => $path,
            ]);
        }

        session()->flash('message', 'Photos successfully uploaded.');

        $this->reset(['photos']);
    }

    public function render()
    {
        $categories = PhotosCategory::all();
        $this->shutter=Shutter::where("id",$this->shutterId)->first();
        return view('livewire.admin.photo-upload-component' ,compact('categories'))->layout("layouts.admin");
    }
}
