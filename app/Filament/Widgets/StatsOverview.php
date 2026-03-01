<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Faculty;
use App\Models\Load;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Department;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $userCount = User::count();
        $facultyCount = Faculty::count();
        $teachingLoadCount = Load::count();
        $sectionCount = Section::count();
        $subjectCount = Subject::count();
        $departmentCount = Department::count();

        return [
            // First column - 2 stats (span 3 columns each = 6 total)
            Stat::make('Total Users', number_format($userCount))
                ->icon('heroicon-o-users')
                ->color('primary')
                ->chart([1, 2, 3, 4, 5, 6, 7])
                ->description('Registered system users')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
                                
            Stat::make('Faculty Members', number_format($facultyCount))
                ->icon('heroicon-o-academic-cap')
                ->color('primary')
                ->chart([1, 2, 3, 4, 5, 6, 7])
                ->description('Active faculty members')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),

                Stat::make('Teaching Loads', number_format($teachingLoadCount))
                ->icon('heroicon-o-clipboard-document-list')
                ->color('primary')
                ->chart([1, 2, 3, 4, 5, 6, 7])
                ->description('Total teaching assignments')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
                
            Stat::make('Sections', number_format($sectionCount))
                ->icon('heroicon-o-squares-plus')
                ->color('primary')
                ->chart([1, 2, 3, 4, 5, 6, 7])
                ->description('Class sections available')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
                
            Stat::make('Subjects', number_format($subjectCount))
                ->icon('heroicon-o-book-open')
                ->color('primary')
                ->chart([1, 2, 3, 4, 5, 6, 7])
                ->description('Course subjects offered')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
                
            Stat::make('Departments', number_format($departmentCount))
                ->icon('heroicon-o-building-office')
                ->color('primary')
                ->chart([1, 2, 3, 4, 5, 6, 7])
                ->description('Academic departments')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}