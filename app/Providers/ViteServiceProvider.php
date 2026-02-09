<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;

class ViteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('vite', function ($expression) {
            return "<?php echo \App\Providers\ViteServiceProvider::generateTags($expression); ?>";
        });
    }

    public static function generateTags($entrypoints)
    {
        $entrypoints = is_array($entrypoints) ? $entrypoints : [$entrypoints];
        $devServerUrl = 'http://localhost:5173';

        if (static::isDevServerRunning($devServerUrl)) {
            return static::devTags($entrypoints, $devServerUrl);
        }

        return static::productionTags($entrypoints);
    }

    private static function isDevServerRunning($devServerUrl)
    {
        $hotFile = public_path('hot');

        return file_exists($hotFile);
    }

    private static function devTags($entrypoints, $devServerUrl)
    {
        $tags = '<script type="module" src="' . $devServerUrl . '/@vite/client"></script>' . PHP_EOL;

        foreach ($entrypoints as $entry) {
            $tags .= '<script type="module" src="' . $devServerUrl . '/' . $entry . '"></script>' . PHP_EOL;
        }

        return new HtmlString($tags);
    }

    private static function productionTags($entrypoints)
    {
        $manifestPath = public_path('build/manifest.json');

        if (!file_exists($manifestPath)) {
            return new HtmlString('<!-- Vite manifest not found. Run npm run build -->');
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);
        $tags = '';

        foreach ($entrypoints as $entry) {
            if (!isset($manifest[$entry])) {
                continue;
            }

            $chunk = $manifest[$entry];

            if (isset($chunk['css'])) {
                foreach ($chunk['css'] as $css) {
                    $tags .= '<link rel="stylesheet" href="/build/' . $css . '">' . PHP_EOL;
                }
            }

            if (isset($chunk['file'])) {
                $ext = pathinfo($chunk['file'], PATHINFO_EXTENSION);
                if ($ext === 'js') {
                    $tags .= '<script type="module" src="/build/' . $chunk['file'] . '"></script>' . PHP_EOL;
                } elseif ($ext === 'css') {
                    $tags .= '<link rel="stylesheet" href="/build/' . $chunk['file'] . '">' . PHP_EOL;
                }
            }
        }

        return new HtmlString($tags);
    }
}
