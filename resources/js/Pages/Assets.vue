<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import ModeToggle from '@/Components/ModeToggle.vue';
import { Button } from '@/Components/ui/button';
import { Menu } from '@lucide/vue';
import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@/Components/ui/table';

const assets = ref([
  { id: 'AST-001', name: 'MacBook Pro 16"', category: 'Hardware', status: 'Assigned', location: 'HQ - Room 302' },
  { id: 'AST-002', name: 'Dell UltraSharp 27"', category: 'Monitors', status: 'Available', location: 'Stockroom A' },
  { id: 'AST-003', name: 'Logitech MX Master 3S', category: 'Peripherals', status: 'Available', location: 'Stockroom A' },
  { id: 'AST-004', name: 'iPhone 15 Pro', category: 'Mobile', status: 'In Repair', location: 'External Service' },
]);
</script>

<template>
  <Head title="Asset Management" />

  <div class="min-h-screen bg-background text-foreground flex flex-col">
    
    <header class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <div class="flex h-14 items-center justify-between px-6 max-w-[1400px] mx-auto">
        
        <div class="flex items-center gap-4">
          <Button variant="ghost" size="icon" class="md:hidden">
            <Menu class="h-5 w-5" />
          </Button>
          <div class="font-bold text-lg tracking-tight hidden md:block">
            Asset<span class="text-neutral-500">Master</span>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <a href="https://github.com" target="_blank" rel="noreferrer">
            <Button variant="ghost" size="icon" class="h-9 w-9">
              <a href="https://github.com" target="_blank" rel="noreferrer">
  <Button variant="ghost" size="icon" class="h-9 w-9">
    <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
      <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.0.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
    </svg>
  </Button>
</a>

            </Button>
          </a>

          <ModeToggle />

          <Button size="sm" class="h-9 px-4 font-medium">
            + New Asset
          </Button>
        </div>

      </div>
    </header>

    <div class="flex-1 max-w-[1400px] mx-auto w-full md:grid md:grid-cols-[220px_1fr] lg:grid-cols-[240px_1fr]">
      
      <aside class="fixed top-14 z-30 hidden h-[calc(100vh-3.5rem)] w-full shrink-0 overflow-y-auto border-r md:sticky md:block p-6 space-y-4 text-sm text-muted-foreground">
        <div class="font-semibold text-foreground mb-4">Navigation</div>
        <div class="hover:text-foreground cursor-pointer font-medium text-primary">📦 Assets List</div>
        <div class="hover:text-foreground cursor-pointer">🏢 Locations</div>
        <div class="hover:text-foreground cursor-pointer">👥 Assignments</div>
        <div class="hover:text-foreground cursor-pointer">⚙️ System Settings</div>
      </aside>

      <main class="relative py-6 px-6 md:py-8 space-y-6">
        <div>
          <h1 class="text-2xl font-bold tracking-tight">Active Inventory</h1>
          <p class="text-sm text-muted-foreground mt-0.5">Manage and update deployed assets across your workforce.</p>
        </div>

        <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
          <Table>
            <TableHeader>
              <TableRow>
                <TableHead class="w-[120px]">Asset ID</TableHead>
                <TableHead>Asset Name</TableHead>
                <TableHead>Category</TableHead>
                <TableHead>Location</TableHead>
                <TableHead class="text-right">Status</TableHead>
              </TableRow>
            </TableHeader>
            <TableBody>
              <TableRow v-for="asset in assets" :key="asset.id">
                <TableCell class="font-medium">{{ asset.id }}</TableCell>
                <TableCell class="font-semibold">{{ asset.name }}</TableCell>
                <TableCell>{{ asset.category }}</TableCell>
                <TableCell class="text-muted-foreground">{{ asset.location }}</TableCell>
                <TableCell class="text-right">
                  <span :class="[
                    'inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold',
                    asset.status === 'Available' ? 'bg-green-100 dark:bg-green-950 text-green-800 dark:text-green-300' :
                    asset.status === 'Assigned' ? 'bg-blue-100 dark:bg-blue-950 text-blue-800 dark:text-blue-300' : 'bg-amber-100 dark:bg-amber-950 text-amber-800 dark:text-amber-300'
                  ]">
                    {{ asset.status }}
                  </span>
                </TableCell>
              </TableRow>
            </TableBody>
          </Table>
        </div>
      </main>

    </div>
  </div>
</template>
