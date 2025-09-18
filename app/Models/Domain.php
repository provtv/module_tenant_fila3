<?php

declare(strict_types=1);

namespace Modules\Tenant\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Tenant\Actions\Domains\GetDomainsArrayAction;
use Sushi\Sushi;

/**
<<<<<<< HEAD
=======
 * 
 *
>>>>>>> c6db7044 (.)
 * @property int|null $id
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereName($value)
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Modules\Tenant\Database\Factories\DomainFactory factory($count = null, $state = [])
 * @mixin IdeHelperDomain
=======
 * @property-read \Modules\Broker\Models\Profile|null $creator
 * @property-read \Modules\Broker\Models\Profile|null $updater
 * @method static \Modules\Tenant\Database\Factories\DomainFactory factory($count = null, $state = [])
>>>>>>> c6db7044 (.)
 * @mixin \Eloquent
 */
class Domain extends BaseModel
{
    use Sushi;

    /**
     * Model Rows.
     *
     * @return array
     */
<<<<<<< HEAD
    public function getRows(): void {
=======
    public function getRows()
    {
>>>>>>> c6db7044 (.)
        $products = app(GetDomainsArrayAction::class)->execute();

        return $products;
    }
}
