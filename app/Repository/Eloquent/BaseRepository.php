<?php   

namespace App\Repository\Eloquent;   

use App\Repository\EloquentRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements EloquentRepositoryInterface 
{     
    /**      
     * @var Model      
     */     
     protected $model;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }
 
    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }
 
    /**
    * @param $id
    * @return Model
    */
    // public function find($id): ?Model
    public function find($id): ?Collection
    {
        return $this->model->find($id);
    }

    /**
    * @param $relations
    * @return Model
    */
    public function load($relations): Model
    {
        return $this->model->load($relations);
    }
}