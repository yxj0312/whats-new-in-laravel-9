<?php
namespace App\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

interface PostRepositoryInterface
{
   public function all(): Collection;
   public function latest(): Builder;
}
