<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Paper
 *
 * @package App
 * @property string $title
 * @property string $type
 * @property string $duration
 * @property string $name
 * @property string $email
 * @property string $attribute
 * @property string $status
*/
class Paper extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['title', 'type', 'duration', 'name', 'email', 'attribute', 'status'];
    protected $hidden = [];
    protected $appends = ['uploaded_documents', 'documents_link',];
    protected $with = ['media'];
    
    public function getUploadedDocumentsAttribute()
    {
        return $this->getMedia('documents')->keyBy('id');
    }

    /**
     * @return string
     */
    public function getDocumentsLinkAttribute()
    {
        $documents = $this->getMedia('documents');
        if (! count($documents)) {
            return '';
        }
        $html = [];
        foreach ($documents as $file) {
            $html[] = '<a href="' . $file->getUrl() . '" target="_blank">' . $file->file_name . '</a>';
        }

        return implode('<br/>', $html);
    }
    
    public function art()
    {
        return $this->belongsToMany(Art::class, 'art_paper')->withTrashed();
    }
    
    public function assign()
    {
        return $this->belongsToMany(User::class, 'paper_user');
    }
    
}
