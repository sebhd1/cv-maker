<?php

    namespace App\Models\Concerns;

    use Illuminate\Database\Eloquent\Builder;

    trait WithDuration
    {
        public function initializeWithDuration(): void
        {
            $this->mergeFillable([
                'start_date',
                'end_date',
            ]);

            $this->mergeCasts([
                'start_date' => 'date:Y-m-d',
                'end_date' => 'date:Y-m-d',
            ]);
        }

        public function scopeSorted(Builder $query): Builder {
            return $query->orderBy('end_date', 'DESC')
                ->orderBy('start_date', 'DESC');
        }
    }
