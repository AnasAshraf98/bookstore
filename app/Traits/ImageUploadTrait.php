<?php 

namespace App\Traits;

/**
 * 
 */
trait ImageUploadTrait
{
    protected $imagePath="app/public/images/covers";
    protected $imageHeight=600;
    protected $imagewidth=600;

    public function uploadImage($image){
        $imageName=$this->imageName($image);

        \Image::make($image)->resize($this->imagewidth, $this->imageHeight)->save(storage_path($this->imagePath.'/'.$imageName));

        return "images/covers/" . $imageName;
    }

    public function imageName($image)
    {
        return time().'-'.$image->getClientOriginalName();
    }

    
}
