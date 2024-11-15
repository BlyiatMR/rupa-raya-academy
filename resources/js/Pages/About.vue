<script setup>
import Navbar from '@/Components/Navbar.vue';
import Videos from '@/Components/Videos.vue';
import WhyChooseMe from '@/Components/WhyChooseMe.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';

</script>
<style scoped>
</style>
<template>
    <Head title="Welcome" />
    <div class="font-['Urbanist'] relative overflow-x-hidden bg-[#0F0F0F]">

        <Navbar></Navbar>

        <section>
            <div class="max-w-[1440px] relative  xl:mx-auto sm:pt-40 pt-20 pb-20 mx-5 z-0">

                <div class="absolute -top-52 -left-52 blur-[200px] opacity-20 -z-10 w-[40rem] h-[40rem] bg-blue-500 rounded-full"></div>
                <div class="absolute -top-52 -right-52 blur-[200px] opacity-20 -z-10 w-[35rem] h-[35rem] bg-yellow-500 rounded-full"></div>
                
                <div class="z-50 py-10">
                    <h3 class="font-semibold text-center text-xl text-blue-500">Tentang Kami</h3>
                    <h1 class="mx-auto z-50 text-center leading-tight tracking-wide text-2xl font-extrabold my-5 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent sm:text-5xl">.   .   .Rupa Raya Academy.   .   .</h1>
                    <p class="max-w-4xl mx-auto z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm">Tempat Kursus Offline & Online yang menawarkan pengebangan skill di Berbagai Bidang. Mulai dari bidang 3D Arsitektur Desain, 3D Modelling, Bahasa Asing, Web Developer dan masih banyak lagi.</p>
                    <Videos></Videos>
                </div>
            </div>
        </section>

        <WhyChooseMe></WhyChooseMe>
        
        <CtaHome></CtaHome>

        <Footer></Footer>

    </div>
</template>