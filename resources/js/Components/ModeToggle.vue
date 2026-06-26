<script setup>
import { useColorMode } from '@vueuse/core';
import { Sun, Moon, Monitor } from '@lucide/vue';
import { Button } from '@/Components/ui/button';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu';

// useColorMode automatically handles updating the HTML document class and local storage
const mode = useColorMode();
</script>

<template>
  <DropdownMenu>
    <DropdownMenuTrigger as-child>
      <Button variant="outline" size="icon" class="h-9 w-9 rounded-md">
        <Sun v-if="mode === 'light'" class="h-4 w-4 text-neutral-700" />
        <Moon v-else-if="mode === 'dark'" class="h-4 w-4 text-neutral-300" />
        <Monitor v-else class="h-4 w-4" />
        <span class="sr-only">Toggle theme</span>
      </Button>
    </DropdownMenuTrigger>
    <DropdownMenuContent align="end">
      <DropdownMenuItem @click="mode = 'light'">Light</DropdownMenuItem>
      <DropdownMenuItem @click="mode = 'dark'">Dark</DropdownMenuItem>
      <DropdownMenuItem @click="mode = 'auto'">System</DropdownMenuItem>
    </DropdownMenuContent>
  </DropdownMenu>
</template>
