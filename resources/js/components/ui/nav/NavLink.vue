<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

interface NavLinkProps {
    href: string;
    label: string;
}

defineProps<NavLinkProps>();
</script>

<template>
    <Link :href="href" class="inline-block transition-all duration-300 relative
      after:bg-white after:h-0.5 after:w-0 hover:after:w-full
      after:absolute after:bottom-0 after:left-0 after:transition-all after:duration-300">
    {{ label }}
    </Link>
</template>
