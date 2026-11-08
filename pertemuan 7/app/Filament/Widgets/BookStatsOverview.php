<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('All registered books in system')
                ->descriptionIcon('heroicon-m-book-open')
                ->color('primary'),
            Stat::make('Total Authors', Author::count())
                ->description('Registered authors')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            Stat::make('Books Available', Book::where('status', 'available')->count())
                ->description(Book::where('status', 'borrowed')->count() . ' books borrowed')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('info'),
        ];
    }
}