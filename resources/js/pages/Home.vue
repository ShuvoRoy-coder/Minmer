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
                <ProductLink href="home" frontImage="/images/products/pantalla1.png"
                    backImage="/images/products/pantalla1Hv.png" frontText1="Qr Fascal" frontText2="Electronico"
                    backText1="Solicatar >" backText2="QR Electronico" />
            </div>
            <div class="w-full h-[calc(100dvh-86px)] overflow-hidden">
                <ProductLink href="home" frontImage="/images/products/pantalla2.png"
                    backImage="/images/products/pantalla1Hv.png" frontText1="Qr Fascal" frontText2="Electronico"
                    backText1="Solicatar >" backText2="QR Electronico" />
            </div>
            <div class="w-full h-[calc(100dvh-86px)] overflow-hidden">
                <ProductLink href="home" frontImage="/images/products/pantalla3.png"
                    backImage="/images/products/pantalla3Hv.png" frontText1="Qr Fascal" frontText2="Electronico"
                    backText1="Solicatar >" backText2="QR Electronico" />
            </div>
        </section>

    </div>
</template>
