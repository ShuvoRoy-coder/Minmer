<script setup lang="ts">
import Navbar from '@/components/ui/nav/Navbar.vue';
import ProductLink from '@/components/ui/products/ProductLink.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
const page = usePage();
</script>

<template>

    <Head title="Home">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="w-full">

        <Navbar/>

        <section class="w-full grid grid-cols-1 gap-5 px-5
            sm:grid-cols-2 sm:px-0 
            lg:grid-cols-3 
            lg:gap-8">
            <div class="w-full h-[calc(100dvh-86px)] overflow-hidden">
                <ProductLink 
                    :href="route('products.show', 1)" 
                    frontImage="/images/products/pantalla1Hv.png"
                    backImage="/images/products/pantalla1.png" 
                    frontText1="Qr Fiscal" frontText2="Electrónico"
                    backText1="Solicitar &#9654;" backText2="QR Electrónico" />
            </div>
            <div class="w-full h-[calc(100dvh-86px)] overflow-hidden">
                <ProductLink 
                    :href="route('products.show', 2)" 
                    frontImage="/images/products/pantalla2Hv.png"
                    backImage="/images/products/pantalla2.png" 
                    frontText1="Qr Fiscal" frontText2="Físico"
                    backText1="Solicitar &#9654;" backText2="QR Fisico" />
            </div>
            <div class="w-full h-[calc(100dvh-86px)] overflow-hidden">
                <ProductLink 
                    :href="route('products.show', 3)" 
                    frontImage="/images/products/pantalla3Hv.png"
                    backImage="/images/products/pantalla3.png" 
                    frontText1="Precinto" frontText2="Fiscal"
                    backText1="Solicitar &#9654;" backText2="Precinto" />
            </div>
        </section>

    </div>
</template>
