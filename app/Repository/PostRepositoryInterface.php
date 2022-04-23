<?php
namespace App\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface PostRepositoryInterface
{
   public function all(): Collection;
   public function latest(): Builder;
   public function load($relations): Model;
}
