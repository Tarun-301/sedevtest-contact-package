<!-- <php -->

<!-- namespace Sedevtest\Contact;

use App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $pkgNamespace = 'Sedevtest\Contact\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
       
            Route::middleware('web')
                ->namespace($this->pkgNamespace)
                ->group(base_path('contact','/routes/web.php'));
        });
    }
} -->