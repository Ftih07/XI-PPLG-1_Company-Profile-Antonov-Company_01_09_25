<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChiefDesignerResource\Pages;
use App\Filament\Resources\ChiefDesignerResource\RelationManagers;
use App\Models\ChiefDesigner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChiefDesignerResource extends Resource
{
    protected static ?string $model = ChiefDesigner::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('Name')
                ->maxLength(255),
            Forms\Components\TextInput::make('period')
                ->required()
                ->label('Period'),
            Forms\Components\FileUpload::make('image')
                ->label('Image')
                ->directory('chief_designers')
                ->required(),
            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->required()
                ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            Tables\Columns\TextColumn::make('name')
                ->label('Name')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('period')
                ->label('Period'),
            Tables\Columns\ImageColumn::make('image')
                ->label('Image'),
            Tables\Columns\TextColumn::make('description')
                ->label('Description')
                ->limit(50), 
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListChiefDesigners::route('/'),
            'create' => Pages\CreateChiefDesigner::route('/create'),
            'edit' => Pages\EditChiefDesigner::route('/{record}/edit'),
        ];
    }
}
