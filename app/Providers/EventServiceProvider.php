<?php

namespace App\Providers;

use App\Models\Dictates;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;


use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {

        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {

            $student = Student::where('user_id', Auth::user()->id)->first();
            if ($student != null) {
                $event->menu->add([
                    'text' => 'Notas',
                    'url' => '/student/' . $student->user_id,
                    'icon' => 'far fa-fw fa-file',
                ]);
            }
        });
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text' => 'Horario',
                'url' => '/schedule',
                'icon' => 'fa fa-pen-alt',
            ]);
        });
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text' => 'Administrativo',
                'url' => '/secretary/teachers',
                'icon' => 'fa fa-users',
            ]);
        });
        
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text' => 'Estudiantes',
                'url' => '/secretary/students',
                'icon' => 'fa fa-book',
            ]);
        });
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            $teacher = Teacher::where('user_id', Auth::user()->id)->first();
            if ($teacher != null) {
                $subjects = Dictates::join('subjects', 'subjects.id', 'dictates.subject_id')->where('teacher_id', $teacher->id)->get();;
                $arrayMenu = array('text' => '', 'url' => '', 'icon' => '');
                foreach ($subjects as $subject) {

                    $arrayMenu[] = array(
                        'text' => $subject->namesub,
                        'url' => '/teacher/' . $subject->id,
                        'icon' => 'fas fa-regular fa-book'
                    );
                }

                $event->menu->add([
                    'text' => 'Materias',
                    'url' => '/teachers',
                    'icon' => 'fas fa-th',
                    'submenu' => $arrayMenu,
                ]);
            }
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
