import './bootstrap'

import {Livewire} from '../../vendor/livewire/livewire/dist/livewire.esm';

import './alpine/current-magic'

import.meta.glob([
    '../fonts/**',
    '../patterns/**',
    '../favicon/**',
    '../images/**',
])

Livewire.start()
