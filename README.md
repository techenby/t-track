# T-Track

A [NativePHP mobile](https://nativephp.com/docs/mobile/1/getting-started/environment-setup) app for tracking changes in my voice and body from HRT. Weekly I'll log a picture and a voice recording, so I have a log of changes over time. I'm sure an app like this already exists, though it's a great excuse to play with NativePHP.

**PHP:** 8.4  
**Laravel:** 12  
**Node:** 22  
**Asset Compiler:** Vite  
**Database:** sqlite  
**Frontend:** [Livewire v3](https://livewire.laravel.com/docs/quickstart)  
**Testing:** [Pest v4](https://pestphp.com/docs/installation)  
**Notable Packages:**
- [NativePHP](https://nativephp.com/docs/mobile/1/getting-started/environment-setup)
- [Flux](https://fluxui.dev/docs/installation)

## Getting Started

1. Clone Repo
2. Set PHP version to 8.4
3. `composer config http-basic.composer.fluxui.dev {licence holder} {license key}`
4. `composer install`
5. `npm install`
6. `cp .env.example .env`
7. `php artisan key:generate`
8. Link the directory to Valet or Herd

## CI/CD

- Required repository secrets (set in GitHub Actions secrets):
    - `FLUX_USERNAME`: Flux account email
    - `FLUX_LICENSE_KEY`: Get from Flux dashboard
