<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menu = [
            [
                'title' => 'Dashboard',
                'route' => 'dashboard',
            ],
            [
                'title' => 'Users',
                'route' => 'users.index',
            ],
            [
                'title' => 'Instructors',
                'route' => 'instructors.index',
            ],
            [
                'title' => 'Respondents',
                'route' => 'respondents.index',
            ],
            [
                'title' => 'Podcasts',
                'route' => 'podcasts.index',
            ],
            [
                'title' => 'Thanksgivings',
                'route' => 'thanksgivings.index',
            ],
            [
                'title' => 'Meditations',
                'route' => 'meditations.index',
            ],
            [
                'title' => 'Yoga',
                'route' => 'yoga.index',
            ],
            [
                'title' => 'Smart nutrition',
                'route' => 'smart-nutrition.index',
            ],
            [
                'title' => 'Setting goals',
                'route' => 'setting-goals.index',
            ],
            [
                'title' => 'Feel good exercises',
                'route' => 'feel-good-exercises.index',
            ],
            [
                'title' => 'Mind digital detox',
                'route' => 'mind-digital-detox.index',
            ],
            [
                'title' => 'Charisma social skills',
                'route' => 'charisma-social-skills.index',
            ],
        ];

        foreach ($menu as &$menu_item) {
            $menu_item['title'] = __($menu_item['title']);
            $menu_item['highlight'] = Route::currentRouteName() == $menu_item['route'];
            $menu_item['route'] = route($menu_item['route']);
        }
        return view('components.admin-layout', compact('menu'));
    }
}
