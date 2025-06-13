<script setup lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import NavLink from './NavLink.vue';

const isOpen = ref(false);

const toggleMenu = () => {
    isOpen.value = !isOpen.value;
};
</script>

<template>
    <header class="bg-black text-white sticky top-0 left-0 z-[999]">
        <nav class="flex items-center justify-between px-5 py-5
                md:px-10 lg:text-sm xl:gap-16 xl:text-lg lg:divide-x-2 lg:divide-white">
            <!-- Logo & Title -->
            <div class="flex items-center
                gap-5 pr-5 xl:gap-16 xl:pr-16">
                <Link :href="route('home')" class="max-w-[160px] w-full inline-block">
                <img src="/logos/white-logo.png" alt="logo" class="w-full" />
                </Link>
                <Link :href="route('home')" class="inline-block uppercase whitespace-nowrap">
                    PORTAL DE GESTIÓN
                </Link>
            </div>

            <!-- Hamburger Toggle -->
            <button @click="toggleMenu" class="lg:hidden focus:outline-none z-[1000]" aria-label="Toggle menu">
                <svg v-if="!isOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-1 lg:gap-5 xl:gap-16">
                <NavLink :href="route('dashboard')" label="Dashboard" />
                <NavLink :href="route('home')" label="Operaciones" />
                <NavLink :href="route('home')" label="Productos" />
                <NavLink :href="route('home')" label="Correos" />
                <NavLink :href="route('logout')" label="Cerrar Sesión" />
            </div>
        </nav>

        <!-- Mobile Menu -->
        <transition name="fade-slide">
            <div v-if="isOpen" class="lg:hidden flex flex-col gap-5 px-5 py-4 bg-black text-white 
                absolute top-full left-0 w-full min-h-screen">
                <NavLink :href="route('dashboard')" label="Dashboard" />
                <NavLink :href="route('home')" label="Operaciones" />
                <NavLink :href="route('home')" label="Productos" />
                <NavLink :href="route('home')" label="Correos" />
                <NavLink :href="route('logout')" label="Cerrar Sesión" />
            </div>
        </transition>
    </header>
</template>

<style scoped>
.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: all 0.3s ease;
}

.fade-slide-enter-from {
    opacity: 0;
    transform: translateY(-10px);
}

.fade-slide-enter-to {
    opacity: 1;
    transform: translateY(0);
}

.fade-slide-leave-from {
    opacity: 1;
    transform: translateY(0);
}

.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(-10px);
}
</style>
