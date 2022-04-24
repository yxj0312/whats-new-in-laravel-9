<?php

namespace App\Repository\Eloquent;

use App\Models\Post;
use App\Repository\PostRepositoryInterface;
use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function with($relations): Builder
    {
        return $this->model->with($relations);
    }

    public function latest(): Builder
    {
        return $this->model->with('user:id,name')->latest();
    }
}
