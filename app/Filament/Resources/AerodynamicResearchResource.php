<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AerodynamicResearchResource\Pages;
use App\Filament\Resources\AerodynamicResearchResource\RelationManagers;
use App\Models\AerodynamicResearch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AerodynamicResearchResource extends Resource
{
    protected static ?string $model = AerodynamicResearch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('heading')
                    ->label('Heading')
                    ->nullable(),
                Forms\Components\TextInput::make('subheading')
                    ->label('Subheading')
                    ->nullable(),
                Forms\Components\TextInput::make('description')
                    ->label('Description')
                    ->nullable(),
                Forms\Components\FileUpload::make('img')
                    ->label('Image')
                    ->required()
                    ->image(),
                Forms\Components\TextInput::make('section')
                    ->label('Section')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('heading')->limit(50),
                Tables\Columns\TextColumn::make('subheading')->limit(50),
                Tables\Columns\ImageColumn::make('img'),
                Tables\Columns\TextColumn::make('description')->limit(100),
                Tables\Columns\TextColumn::make('section'),
            ])
            ->filters([
                // Filters based on section, for example
                Tables\Filters\SelectFilter::make('section')
                    ->options([
                        1 => 'sec-01',
                        2 => 'sec-02',
                        3 => 'sec-03',
                        4 => 'sec-04',
                        5 => 'sec-05',
                        6 => 'sec-06',
                        // add more as needed
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAerodynamicResearch::route('/'),
            'create' => Pages\CreateAerodynamicResearch::route('/create'),
            'edit' => Pages\EditAerodynamicResearch::route('/{record}/edit'),
        ];
    }
}
