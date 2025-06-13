<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Link } from '@inertiajs/vue3';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="h-screen overflow-hidden flex flex-col md:flex-row w-full">
        
        <div class="hidden sticky md:block w-full md:w-[60%] h-full bg-black col-span-3 overflow-hidden">

            <img src="/images/auth/hero.webp" alt="hero" class="w-full h-full object-cover object-right">

            <div class="text-black absolute top-[10%] left-1/2 -translate-x-1/2 z-20">
                <p class="text-5xl whitespace-nowrap">
                    PORTAL DE GESTIÓN
                </p>
                <p class="text-4xl">
                    Código fiscal físico y
                </p>
                <p class="text-4xl">
                    electrónico
                </p>
            </div>


            <div class="absolute z-10 bottom-0 w-[80%]">
                <img src="/images/auth/bottle.webp" alt="bottle" class="w-full">
            </div>

        </div>

        <div class="overflow-x-hidden w-full md:w-[40%] bg-white h-full
        text-black p-10 relative">
            
            <div class="absolute right-0 bottom-0 translate-x-[25%] w-[350px] z-0">
                <img src="/images/auth/illustration.png" alt="illustration" class="w-full">
            </div>

            <div class="relative z-10 space-y-10 max-w-[300px] w-full mx-auto">
                <div class="flex flex-col items-center">
                    <Link :href="route('home')" class="w-[160px]">
                        <img src="/logos/logo.png" alt="logo" class="w-full">
                    </Link>
                </div>
                <slot />
                <div class="divide-y-1 divide-[#737373] text-xs text-[#737373] bg-white md:bg-transparent">
                    <p class="py-3 text-center px-2">© MINMER Global, Todos los derechos reservados</p>
                    <p class="py-3 text-center px-2">Polica de privacidad | Términos y condiciones </p>
                </div>

            </div>

        </div>
    </div>
    <div class="block md:hidden fixed z-0 left-0 -bottom-2 w-[40dvh]">
        <img src="/images/auth/bottle.webp" alt="bottle" class="w-full">
    </div>
</template>
