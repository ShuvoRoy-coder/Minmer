<script setup lang="ts">
import { computed } from 'vue'
import { Head, Link, usePage } from '@inertiajs/vue3';
import Navbar from '@/components/ui/nav/Navbar.vue';

const props = defineProps<{
    id: String
}>();

const productMap: Record<string, { name: string; image: string }> = {
    '1': { name: 'QR Fiscal Electrónico', image: '/images/products/pantalla1-assistant.png' },
    '2': { name: 'QR Fiscal Físico', image: '/images/products/pantalla2.png' },
    '3': { name: 'Precinto Fiscal', image: '/images/products/pantalla3.png' },
}

const product = computed(() => productMap[props.id] || {
    name: 'Producto Desconocido',
    image: '/images/products/default.png',
});

const steps = [
    'Alta',
    'Entrega y descarga de folios',
    'Legal',
    'Impresión y Recolección',
    'Ficha Técnica',
    'Gestión y Pegado',
    'Requisitos',
    'Pago',
    'Solicitud',
    'Retroalimentación',
]
</script>

<template>

    <Head title="Product">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="w-full relative">
        <Navbar />
        <div class="h-[calc(100dvh-86px)] overflow-y-auto px-5 md:px-10 pt-5 md:pt-10">

            <!-- Steps List -->
            <div class="w-full relative z-30">
                <div
                    class="relative z-30 grid grid-cols-1 max-w-[700px] w-full min-[450px]:grid-cols-2 gap-4 pb-5 md:pb-16">
                    <section v-for="(step, index) in steps" :key="index" class="relative min-h-[130px] max-w-[300px] 
                         overflow-hidden flex items-center justify-center">

                        <div class="max-w-[260px] text-center p-2 sm:p-4 relative z-10 w-full
                             text-white font-semibold text-lg sm:text-2xl">
                            {{ step }}
                        </div>

                        <img src="/images/products/product-step-bg.png" alt="img"
                            class="absolute top-0 left-0 w-full h-full">

                    </section>
                </div>
            </div>

            <!-- Image -->
            <div
                class="flex items-center justify-center absolute bottom-0 right-5 md:right-10 xl:items-end xl:justify-end">
                <img :src="product.image" alt="Product Image" class="max-w-[430px] w-full" />
            </div>

            <footer class="text-center w-full px-5 md:px-10 py-5 text-base sm:text-lg drop-shadow-xl text-black">
                Aviso de privacidad | Todos los derechos reservados
            </footer>

        </div>

    </div>

</template>
