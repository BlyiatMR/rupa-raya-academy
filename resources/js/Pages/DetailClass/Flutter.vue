<script setup>
// Import Global
import Navbar from '@/Components/Navbar.vue';
import EffectClass from '@/Components/EffectClass.vue';
import NavClass from '@/Components/NavClass.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';
import { ref } from 'vue';

// Import Component
import Header from '@/Components/FlutterComponent/Header.vue';
import SectionExplanation from '@/Components/FlutterComponent/SectionExplanation.vue';
import SectionMentor from '@/Components/FlutterComponent/SectionMentor.vue';
import SectionAtmosphere from '@/Components/FlutterComponent/SectionAtmosphere.vue';
import SectionTimetable from '@/Components/FlutterComponent/SectionTimetable.vue';
import SectionLearning from '@/Components/FlutterComponent/SectionLearning.vue';
import FurtherInformation from '@/Components/FlutterComponent/FurtherInformation.vue';

const activeSection = ref('penjelasan');
</script>

<style>
.scale-150 {
    --tw-scale-x: 2.5;
    --tw-scale-y: 2.5;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) 
                rotate(var(--tw-rotate)) 
                skewX(var(--tw-skew-x)) 
                skewY(var(--tw-skew-y)) 
                scaleX(var(--tw-scale-x)) 
                scaleY(var(--tw-scale-y));
}
</style>

<template>
    <Head title="Welcome" />

    <div class="relative overflow-x-hidden bg-gradient-to-br from-[#0F0F0F] to-[#0D1B2A] z-50">
        
        <!-- Navbar -->
        <Navbar />

        <!-- Main -->
        <section>
            <div class="relative max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 pb-20 mx-5">
                
                <!-- Effect -->
                <EffectClass />

                <!-- Header -->
                <Header />

                <div class="flex flex-wrap gap-5 justify-center mt-10 sm:mx-5 mx-0">
                    <div class="relative overflow-hidden w-[56rem] border border-gray-600 bg-gray-600 bg-opacity-5 backdrop-blur-3xl shadow-2xl rounded-lg py-7 px-8 z-50 h-fit">
                        
                        <!-- Nav Class -->
                        <NavClass :activeSection="activeSection" @update:activeSection="activeSection = $event"/>

                        <!-- Component Section -->
                        <SectionExplanation v-if="activeSection === 'penjelasan'" />
                        <SectionMentor v-if="activeSection === 'mentor'" />
                        <SectionAtmosphere v-if="activeSection === 'suasana'" />
                        <SectionTimetable v-if="activeSection === 'jadwal'" />
                        <SectionLearning v-if="activeSection === 'materi'" />
                    </div>

                    <!-- Informasi tambahan di bagian samping -->
                    <FurtherInformation />

                </div>
            </div>
        </section>

        <!-- Call-to-action -->
        <CtaHome />

        <!-- Footer -->
        <Footer />
    </div>
</template>
