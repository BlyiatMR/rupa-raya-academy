<script setup>
import Navbar from '@/Components/Navbar.vue';
import HeroSection from '@/components/HeroSection.vue';
import Videos from '@/Components/Videos.vue';
import ClassNew from '@/Components/ClassNew.vue';
import WhyChooseMe from '@/Components/WhyChooseMe.vue';
import Testimonial from '@/Components/Testimonial.vue';
import Qna from '@/Components/Qna.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';
import { Head, Link } from '@inertiajs/vue3';

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
    <Head title="Welcome" />
    <div class="font-['Urbanist'] relative overflow-x-hidden bg-[#0F0F0F] z-50">

        <div class="absolute -top-72 -left-72 blur-[80px] opacity-10 w-[50rem] h-[50rem] bg-blue-500 rounded-full -z-50"></div>

        <Navbar></Navbar>

        <HeroSection></HeroSection>

        <!-- <Videos></Videos> -->

        <WhyChooseMe></WhyChooseMe>
        
        <ClassNew></ClassNew>

        <Testimonial></Testimonial>

        <Qna></Qna>

        <CtaHome></CtaHome>

        <Footer></Footer>
        
    </div>
</template>
