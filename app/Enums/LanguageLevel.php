<?php

    namespace App\Enums;

    use App\Enums\Concerns\Labelable;

    enum LanguageLevel : string implements Labelable
    {

        case A1 = 'A1';
        case A2 = 'A2';
        case B1 = 'B1';
        case B2 = 'B2';
        case C1 = 'C1';
        case C2 = 'C2';
        case Native = 'native';

        public function label(): string
        {
            return match ($this) {
                self::Native => __('Native'),
                default => __($this->value),
            };
        }
    }
