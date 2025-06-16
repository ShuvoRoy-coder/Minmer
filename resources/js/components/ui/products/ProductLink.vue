<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

defineProps<{
    href: string;
    frontImage?: string;
    backImage?: string;
    frontText1?: string;
    frontText2?: string;
    backText1?: string;
    backText2?: string;
}>();
</script>



<template>
    <Link :href="href" class="group [perspective:1000px] w-full h-full block">
    <div
        class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">

        <!-- Front Side -->
        <div class="absolute inset-0 backface-hidden">
            <img v-if="frontImage" :src="frontImage" alt="Front Image" class="w-full h-full object-cover" />
            <div v-if="frontText1 || frontText2"
                class="absolute bottom-0 left-0 w-full p-8 flex flex-col items-end gap-1 text-3xl text-black">
                <div class="flex flex-col">
                    <span v-if="frontText1">{{ frontText1 }}</span>
                    <span v-if="frontText2">{{ frontText2 }}</span>
                </div>
            </div>
        </div>

        <!-- Back Side -->
        <div class="absolute inset-0 [transform:rotateY(180deg)] backface-hidden">
            <img v-if="backImage" :src="backImage" alt="Back Image" class="w-full h-full object-cover" />
            <div v-if="backText1 || backText2"
                class="absolute bottom-0 left-0 w-full p-8 flex flex-col items-end gap-1 text-3xl text-black">
                <div class="flex flex-col">
                    <span v-if="backText1">{{ backText1 }}</span>
                    <span v-if="backText2">{{ backText2 }}</span>
                </div>
            </div>
        </div>

    </div>
    </Link>
</template>



<style scoped>
.backface-hidden {
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
}
</style>
