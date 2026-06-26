# AGENTS.md

Compact reference for AI agents working on this repo. Only high-signal, non-obvious facts.

## Project

30-day Laravel 11 learning journey following the official Laracasts course.
**Current progress: day 25 of 30.**
Domain: job board app (`Job` model backed by `job_listing` table).

## Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve          # http://localhost:8000
npm run dev                # Vite + Tailwind (run in separate terminal)
```

## Commands

```bash
php artisan make:model Foo -mfc   # model + migration + factory + controller
php artisan make:controller FooController --resource
php artisan make:policy FooPolicy --model=Foo
php artisan make:job FooJob
php artisan make:mail FooMail --markdown=emails.foo
php artisan migrate:fresh --seed
php artisan queue:work            # process queued jobs
php artisan tinker
php vendor/bin/phpunit            # or: php artisan test
```

## What's implemented (days 1–25)

- **Routing & Blade:** `Route::view`, `Route::resource`, named routes, Blade components, layouts, slots, props — `resources/views/`
- **Models & Eloquent:** `Job`, `Employer`, `Post`, `Comment`, `Tag` models; `job_listing` table (note: model is `Job` but table is `job_listing`, not `jobs` — non-default name); eager loading, lazy loading prevention, many-to-many (`job_tag` pivot), `belongsTo`/`hasMany`/`belongsToMany`
- **Factories & Seeders:** `JobFactory`, `EmployerFactory`, `UserFactory` (first_name/last_name, not name); `JobSeeder`, `DatabaseSeeder`
- **Controllers:** `JobController` (full CRUD), `RegisteredUserController`, `SessionController`
- **Auth:** manual register/login/logout (no Breeze/Jetstream); `auth` middleware on store/edit/update/delete
- **Authorization:** `JobPolicy` with `edit` method; `can('edit', 'job')` on routes; Gates
- **Form validation:** `$request->validate([...])` in controllers
- **Mail:** `JobPostedMail` Mailable with Markdown template — sent on job creation
- **Queues:** `TranslateJob` queued job; mail dispatched asynchronously via queue (day 25)

## Architecture notes

- `Job` model: `protected $table = 'job_listing'` — always use this model for the job board, never assume table name is `jobs`
- `User` model: uses `first_name` and `last_name` columns, not `name`
- Views in `resources/views/`; Blade components in `resources/views/components/`
- No API routes — web only
- Tailwind CSS via Vite (`npm run dev` required for styles to compile)
- Queue driver configured in `.env` (`QUEUE_CONNECTION`) — use `database` or `sync` locally

## Conventions

- Follow Laravel 11 conventions (no `app/Http/Kernel.php` — middleware registered in `bootstrap/app.php`)
- Route model binding preferred over manual `Job::find($id)`
- Policies over inline `Gate::define` for model-level authorization
- Mailable classes in `app/Mail/`, queue jobs in `app/Jobs/`
- Commits follow `feat(day-N):` / `fix(day-N):` / `refactor(day-N):` convention
