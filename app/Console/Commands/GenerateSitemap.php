<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates and saves the sitemap';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        SitemapGenerator::create(route('home'))
            ->hasCrawled(function (Url $url) {
                if($url->path() == '/') return null;

                $url->setChangeFrequency('weekly');
                $this->output->writeln("Found " . config('app.url') . $url->path());
                return $url;
            })
            ->writeToFile(resource_path('sitemap.xml'));
    }
}
