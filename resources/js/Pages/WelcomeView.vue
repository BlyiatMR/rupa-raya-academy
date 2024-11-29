<script setup>
import Navbar from '@/Components/Navbar.vue';
import HeroSection from '@/components/HeroSection.vue';
import ClassNew from '@/Components/ClassNew.vue';
import WhyChooseMe from '@/Components/WhyChooseMe.vue';
import Testimonial from '@/Components/Testimonial.vue';
import Qna from '@/Components/Qna.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';
import { useDark, useToggle } from "@vueuse/core";
import { Head, Link } from '@inertiajs/vue3';

const isDark = useDark()
const toggleDark = useToggle(isDark)

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
<style scoped>

</style>
<template>
    <Head title="Rupa Raya Academy" />
    <div class="relative overflow-x-hidden z-50">

        <div class="absolute max-sm:hidden -top-52 -left-52 blur-[200px] dark:opacity-20 opacity-30 -z-10 w-[40rem] h-[40rem] bg-blue-500 rounded-full"></div>
        <div class="absolute max-sm:hidden -top-52 -right-52 blur-[200px] dark:opacity-20 opacity-30 -z-10 w-[35rem] h-[35rem] bg-yellow-500 rounded-full"></div>

        <Navbar />

        <HeroSection />

        <WhyChooseMe class="py-10"/>
        
        <ClassNew />

        <Testimonial />

        <Qna />

        <CtaHome />

        <Footer />

    </div>
</template>
<style>
html.dark {
    color-scheme: dark;
}
body {
    @apply bg-gradient-to-br dark:from-[#0F0F0F] dark:to-[#0D1B2A] bg-gray-100;
}
</style>