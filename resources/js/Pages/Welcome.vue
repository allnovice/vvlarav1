<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>


<template>
    <Head title="My Awesome App" />
    
    <div class="flex min-h-screen flex-col items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">
                Hello from Vue, Inertia, and Laravel!
            </h1>
            <p class="text-gray-600 dark:text-gray-400">
                Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
            </p>
        </div>
    </div>
</template>
