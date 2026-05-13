<?php

namespace App\Filament\Resources\Patients\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
class PatientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('patient_no')
                ->label('Patient No.')
                ->searchable(),
                TextColumn::make('first_name')
                ->label('First Name')
                ->searchable(),
                TextColumn::make('middle_name')
                ->label('Middle Name')
                ->searchable(),
                TextColumn::make('last_name')
                ->label('Last Name')
                ->searchable(),
                TextColumn::make('suffix')
                ->label('Suffix')
                ->searchable(),
                TextColumn::make('sex')
                ->label('Sex')
                ->searchable(),
                TextColumn::make('date_of_birth')
                ->label('Date of Birth')
                ->date()
                ->searchable(),
                TextColumn::make('Religion')
                ->label('Religion')
                ->searchable(),
                TextColumn::make('nationality')
                ->label('Nationality')
                ->searchable(),
                TextColumn::make('civil_status')
                ->label('Civil Status')
                ->searchable(),
                TextColumn::make('educational_attainment')
                ->label('Educational Attainment')
                ->searchable(),
                TextColumn::make('occupation')
                ->label('Occupation')
                ->searchable(),
                TextColumn::make('phic_number')
                ->label('PHIC Number')
                ->searchable(),
                TextColumn::make('mother_maiden_name')
                ->label("Mother's Maiden Name")
                ->searchable(),
                TextColumn::make('father_name')
                ->label("Father's Name")
                ->searchable(),
                TextColumn::make('address')
                ->label('Address')
                ->searchable(),
                TextColumn::make('contact_no')
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
