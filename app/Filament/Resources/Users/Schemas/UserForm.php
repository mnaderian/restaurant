<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Enums\UserRole;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام و نام خانوادگی')
                    ->required(),
                Select::make('role')
                    ->label('نقش')
                    ->required()
                    ->enum(UserRole::class)
                    ->options(UserRole::class)
                    ->afterStateUpdated(function ($state, $record) {
                        if ($record) {
                            $record->role = $state;
                            $record->save();
                        }
                    }),
                TextInput::make('mobile')
                    ->label('شماره تلفن')
                    ->required(),
                TextInput::make('email')
                    ->label('ایمیل')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->jalali()
                    ->label('تاریخ تأیید ایمیل'),
                TextInput::make('password')
                    ->label('رمز عبور')
                    ->password()
                    ->required(fn (string $context): bool => $context === 'create')
                    ->revealable()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state)),
            ]);
    }
}
